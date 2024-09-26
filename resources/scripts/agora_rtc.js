import AgoraRTC from "agora-rtc-sdk-ng";

// token is expired

const APP_ID = "4084dd82c82d463a869af0a56383e0c5"
const TOKEN = '007eJxTYFiYr93X/9Taq8zTtWRLwAvlk/p/DFu03hRFSD9bNfvU9TYFBhMDC5OUFAujZAujFBMz40QLM8vENINEUzNjC+NUg2TTV1u/pjUEMjIwtZxgYIRCEJ+FoTw1J4eBAQB4VCCO'
const CHANNEL = 'well';


const localTracks = {
    videoTrack: null,
    audioTrack: null
}
const remoteUsers = {}
let client;


let uid = sessionStorage.getItem('uid');

if(!uid){
    uid = String(Math.floor(Math.random() * 10000));
    sessionStorage.setItem('uid', uid);
}



let joinRoomInit = async ()=>{
    client = AgoraRTC.createClient({mode:'rtc', codec:'vp8'});
    await client.join(APP_ID, CHANNEL, TOKEN , uid);

    client.on('user-published', handleUserPublished);
    client.on('user-left', ()=>{
        handleUserLeft();
    });
    client.on('ChannelMessage', ()=>{

    });
    // CHANNEL.on('ChannelMessage', (message, memberId) => {
    //     let parsedMessage = JSON.parse(message.text);
    //     (parsedMessage);
    
    //     // if (parsedMessage.type === 'user_left') {
    //     //     let userId = parsedMessage.uid;
    
    //     //     // Remove the UI element for the user who left
    //     //     let userContainer = document.getElementById(`user-container-${userId}`);
    //     //     if (userContainer) {
    //     //         userContainer.remove();
    //     //     }
    //     // }
    // });
    

    [localTracks.audioTrack, localTracks.videoTrack] = await AgoraRTC.createMicrophoneAndCameraTracks();


    let player = `
                <div class="img-lg-container" id="user-${uid}">
                                    <div class="user">
                                        <div class="user-name-start">A</div>
                                        <p>You</p>
                                    </div>
                                    
                                    <div class="recording">
                                        <image src="resources/assets/icons/recording-transparent.svg" class="record-icon-transparent" alt="record-icon" />
                                        <p>Recording in progress</p>
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 0 1 7.5 5.25h9a2.25 2.25 0 0 1 2.25 2.25v9a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-9Z" />
                                  </svg>
                            </div>
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                                  </svg>
                                  
                            </div>
                        </div>
                        <x-image path="resources/assets/users/provider-vc-christina.png" alt="video call large image" class="lg-img" />
                    </div>`

        document.querySelector('.video-session-lg').insertAdjacentHTML('beforeend', player);
        localTracks.videoTrack.play(`user-${uid}`);
        await client.publish([localTracks.audioTrack, localTracks.videoTrack]);

}


let handleUserPublished = async (user, mediaType)=>{
    remoteUsers[user.uid] = user;

    await client.subscribe(user, mediaType);

    // handle duplicates, if it exists we didn't create one
    let player = document.getElementById(`user-${user.uid}`);
    if(!player){
        player = `
                <div class="sm-card" id="user-container-${user.uid}">

                <div class="sm-image-container">
                    <div id="user-${user.uid}"></div>
                    
                    <div class="icon-container active" id="mic-btn" data-user-id="${user.uid}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z" />
                        </svg>
                    </div>
                    <div class="name">Jenna Doe</div>
                </div>

            </div>    `

        document.querySelector('.video-session-sm').insertAdjacentHTML('afterbegin', player);
        document.querySelector('.sm-card #mic-btn').addEventListener('click', toggleRemoteMic);


        // document.getElementById(`user-container-${user.user.uid}`).addEventListener('click', expandVideoFrame);
    }


    if(mediaType === 'video'){
        user.videoTrack.play(`user-${user.uid}`);
    }

    if(mediaType === 'audio'){
        user.audioTrack.play();
    }

}

joinRoomInit();



let handleUserLeft = (user)=>{
    delete remoteUsers[user.uid];
    document.getElementById(`user-container-${user.uid}`).remove();
}



let toggleCamera = async (e)=>{
    let button = e.currentTarget;
    // this section also works without async and await
    if(localTracks.videoTrack.muted){
        await localTracks.videoTrack.setMuted(false);
        button.classList.add('active')
    }else{
        await localTracks.videoTrack.setMuted(true);
        button.classList.remove('active')
    }

}
    
let toggleMic = async (e)=>{
    let button = e.currentTarget;
    // this section also works without async and await
    if(localTracks.audioTrack.muted){
        await localTracks.audioTrack.setMuted(false);
        button.classList.add('active')
    }else{
        await localTracks.audioTrack.setMuted(true);
        button.classList.remove('active')
    }
}

let toggleRemoteMic = async (e)=>{
    let button = e.currentTarget;
    let userId = button.dataset.userId;

    // check if the local user subscribed to remote user
    let remoteUser  = remoteUsers[userId];

    if(remoteUser && remoteUser.audioTrack ){
        await client.unsubscribe(userId, 'audio')
    }else{
        await client.subscribe(userId,'audio')
    }
    button.classList.toggle('active');  
    console.log('clicked')
}

let leaveStream = async (e) => {
    e.preventDefault()
    // Stop and close the local audio and video tracks
    localTracks.audioTrack.stop();
    localTracks.audioTrack.close();
    localTracks.videoTrack.stop();
    localTracks.videoTrack.close();

    // Unpublish the local tracks
    await client.unpublish([localTracks.audioTrack, localTracks.videoTrack]);

    // Remove the local user's video element
    document.getElementById(`user-${uid}`).remove();

    CHANNEL.sendMessage({
        text: JSON.stringify({
            type: 'user_left',
            uid: uid
        })
    });

};



document.querySelector('.user-controls  #camera-btn').addEventListener('click', toggleCamera);
document.querySelector('.user-controls #mic-btn').addEventListener('click', toggleMic);
document.querySelector('.user-controls #leave-btn').addEventListener('click', handleUserLeft);
document.querySelector('.sm-card #mic-btn').addEventListener('click', toggleRemoteMic);