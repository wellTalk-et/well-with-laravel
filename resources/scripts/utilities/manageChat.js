
const rootUrl = 'http://localhost:8000';

const formElem = document.querySelector('.form-send-btn');
const token = formElem.querySelector("input[name='_token']").value;
let consultationId = document.getElementById('data-user-id').dataset.consultationId;
let uid = document.getElementById('data-user-id').dataset.userId;
let chatContainer = document.querySelector('.js-chats')
formElem.addEventListener('submit', (e) => {
    e.preventDefault();
    sendMessageRequest();
});

const sendMessageRequest = async ()=>{
    const message = document.querySelector('.input-message');

    await fetch(`${rootUrl}/session/${consultationId}/chat-messages`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({
            'user_id': uid,
            'consultation_id': consultationId,
            'message': message.value
        })
    })
    .then(response => {
        if (!response.ok) {
            console.error(`Network response was not ok: ${response.status} - ${response.statusText}`);
            throw new Error('Network response was not ok: ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });

    message.value = '';

}




window.Echo.private(`receive_messages.${consultationId}`)
    .listen('MessageSent', async (e) => {
        console.log('New message received:', e.message);
    //    await recieveNewMessage();
    // update the the message ui;
    updateChat(e.message);

});





const recieveNewMessage = async()=>{
    fetch(`${rootUrl}/session/${consultationId}/chat-messages`, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Something happened: ' + response.statusText);
        }
        console.log('there is respone')
        return response.json(); 
    })
    .then(data => {
        console.log('Someone sent: ', data);  
        manageRemoteUserLeft(data.user.id);

    })
    .catch(error => {
        console.log('Error!! ', error); 
    });
    // const lastChatUi = document.querySelector('.js-chats')
    // lastChatUi.document.querySelector('img').src = lastChatUi.dataset.imageUrl;
}


const updateChat = async (message)=>{

    const chatLeft = `
                     <div class="single-chat left">
                        <div class="user-images">
                          <div class="user-image">
                             <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                          </div>
                        </div>
                      <div class="message-container">
                          <p class="message">${message.message}</p>
                      </div>
                    </div>
                    `
    
    const chatRight = `
                    <div class="single-chat right" data-image-url="{{ Vite::asset('storage/app/public/users/' . Auth::user()->profile_picture) }}">
                        <div class="message-container left">
                        <p class="message">${message.message}</p>
                        </div>
    
                        <div class="user-images">
                        <div class="user-image">
                             <img path="resources/assets/users/provider-1.jpg" alt="member picture">
                        </div>
                        </div>
                    </div>
    `

    let chatUi = chatLeft; 

    if(uid == message.user_id){
        chatUi = chatRight;
    }

    chatContainer.insertAdjacentHTML('beforeend', chatUi);
    

}