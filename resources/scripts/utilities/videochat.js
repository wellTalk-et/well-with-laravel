import AgoraRTC from "agora-rtc-sdk-ng";
import { sendUserLeftMessage } from "./manageuser";


const APP_ID  =  import.meta.env.VITE_APP_ID;
const TOKEN  = import.meta.env.VITE_TOKEN;
const CHANNEL = import.meta.env.VITE_CHANNEL;


const localTracks = {
    videoTrack: null,
    audioTrack: null
}
const remoteUsers = {}
let client;


console.log("user id");
let uid = document.getElementById('data-user-id').dataset.userId;
console.log(uid);

let joinRoomInit = async ()=>{
    client = AgoraRTC.createClient({mode:'rtc', codec:'vp8'});
    await client.join(APP_ID, CHANNEL, TOKEN , uid);

    client.on('user-published', handleUserPublished);
    client.on('user-left', handleUserLeft);
    

    [localTracks.audioTrack, localTracks.videoTrack] = await AgoraRTC.createMicrophoneAndCameraTracks();


    let player = `
                <div class="client" id="user-${uid}">

                </div>`

        document.querySelector('.js-video-sessions').insertAdjacentHTML('beforeend', player);
        document.querySelector(`#user-${uid}`).addEventListener('click', expandVideo)
        localTracks.videoTrack.play(`user-${uid}`);
        await client.publish([localTracks.audioTrack, localTracks.videoTrack]);

}


let handleUserPublished = async (user, mediaType)=>{
    remoteUsers[user.uid] = user;

    await client.subscribe(user, mediaType);

    // handle duplicates, if it exists we didn't create one
    let player = document.getElementById(`user-${user.uid}`);
    if(!player){
        let player = `
        <div class="client" id="user-${user.uid}">

        </div>`

        document.querySelector('.js-video-sessions').insertAdjacentHTML('afterbegin', player);
        document.querySelector(`#user-${user.uid}`).addEventListener('click', expandVideo)

        // document.querySelector('.sm-card #mic-btn').addEventListener('click', toggleRemoteMic);
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
    const highlightedElem = document.querySelector('.js-highlighted-user');
    if(highlightedElem.children[0]){
        highlightedElem.classList.add('none');
        videoSessionElem.classList.remove('minimized');
    }
    document.getElementById(`user-${user.uid}`).remove();
}



let toggleCamera = async (e)=>{
    let button = e.currentTarget;
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

    if(highlightedElem.contains(document.getElementById(`user-${uid}`))){
        highlightedElem.classList.add('none');
        videoSessionElem.classList.remove('minimized');

    }
    // Remove the local user's video element
    document.getElementById(`user-${uid}`).remove();
    sendUserLeftMessage(uid);

    // the current user doesn't wont handle the user left so we will have the event to tell him
};

export const manageRemoteUserLeft = (userLeftId)=>{
    const highlightedElem = document.querySelector('.js-highlighted-user');
    const videoSessionElem = document.querySelector('.js-video-sessions');
    let clientElems = videoSessionElem.querySelectorAll('.client');
    const highlightedElemOverlay = document.querySelector('.highlighted-user-overlay');
    let userElem= document.getElementById(`user-${userLeftId}`)
    if(userElem){
        userElem.remove();
    }

}



document.querySelector('.user-controls  #camera-btn').addEventListener('click', toggleCamera);
document.querySelector('.user-controls #mic-btn').addEventListener('click', toggleMic);
document.querySelector('.user-controls #leave-btn').addEventListener('click', leaveStream);