const rootUrl = 'http://localhost:8000';

let consultationId = document.getElementById('data-user-id').dataset.consultationId;
export const sendUserLeftMessage = async (uid) => {
    const formElem = document.querySelector('.form-elem');
    const token = formElem.querySelector("input[name='_token']").value;



    // Prevent default form submission
    formElem.addEventListener('submit', (e) => {
        e.preventDefault(); // Prevents the form from submitting and refreshing the page
    });

    // Ensure you call this after setting up the listener
    fetch(`${rootUrl}/session/${consultationId}/user-left`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({
            'user_uid': uid,
            'consultation_id': consultationId,
            'message': 'user left the meeting'
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
};


window.Echo.private('user_left')
    .listen('UserLeft', async (e) => {
        await isUserLeft();
    });

const isUserLeft = async()=>{
    fetch(`${rootUrl}/session/${consultationId}/user-left`, {
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
        return response.json(); // Parse the JSON from the response
    })
    .then(data => {
        console.log('Someone sent: ', data);  // Log the received data
        // manageRemoteUserLeft
    })
    .catch(error => {
        console.log('Error!! ', error);  // Handle the error
    });
}