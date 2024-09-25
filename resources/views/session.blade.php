<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
            <title>Video call with Abel</title>

            @vite([
                    'resources/styles/global.css',
                    'resources/styles/nav.css',
                    'resources/styles/session.css'
                ])
</head>
<body class="video-page">
  <header class="video-header">
        <div class="left">
            <div class="back-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 chevron-left">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </div>
            <div class="heading">
                <p class="heading-header">Meeting with Jhon and Jenna</p>
                <p class="heading-text">Today you have 6 meetings planned</p>
            </div>
        </div>

      <div class="right">
          <div class="notification">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bell">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
                <span class="notification-count">3</span>
          </div>
          <div class="user-profile">
            <x-image path="resources/assets/users/provider-1.jpg" alt="your profile picture" class="profile-image" />
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 chevron-down">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                
          </div>
      </div>
  </header>
  <main>
        <section class="left-section">
            <div class="highlighted-user-overlay">
                <div class="chat-section"></div>
                <div class="minimized-users"></div>
            </div>
            <div class="highlighted-user js-highlighted-user none">
              
            </div>  
            <div class="video-sessions js-video-sessions flex justify-center align-center flex-wrap">
                <!-- <div class="client client-1">1</div>
                <div class="client client-1">2</div>
                <div class="client client-1">3</div>
                <div class="client client-1">4</div> -->
            </div>

         <div class="vc-bottom flex justify-between">
            <div class="next-meeting">
                <p class="up-next">Up Next</p>
                <div class="members">
                <div class="members-pic">
                    <x-image path="resources/assets/users/provider-1.jpg" alt="images" class="up-next-image" /> <x-image path="resources/assets/users/provider-1.jpg" alt="images" class="up-next-image" />
                </div>
                <p class="members-name">Abel & Jenna</p>
                </div>
                <div class="session-description">
                    <p class="session-type">Couple Meeting</p>
                    <p class="members-name">with Abel & Jenna</p>
                    <p class="date-time">10:30 Am January 30</p>
                </div>
            </div>
            <div class="notes">
                <p>Notes</p>
                <div class="dashed-line"></div>
                <div class="dashed-line"></div>
                <div class="dashed-line"></div>
                <div class="dashed-line"></div>
                <div class="dashed-line"></div>
                <div class="dashed-line"></div>
    
            </div>
         </div>

        </section>
                <section class="right-section">
            <div class="content-right chat">
                <div class="content-header">
                    <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                    </div>
                    <div class="content-description">
                        <p class="no-of-people">3 People</p>
                        <p class="type-of-chat">Meeting Chat</p>
                    </div>
                </div>
                <div class="chat-container js-chat-container">
                   <div class="chats">
                    <div class="single-chat left">
                        <div class="user-images">
                          <div class="user-image">
                              <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                          </div>
                        </div>
                      <div class="message-container">
                          <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                      </div>
                    </div>
                    <div class="single-chat right">
                        <div class="message-container left">
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                        </div>
    
                        <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        </div>
                    </div>
                    <div class="single-chat right">
                        <div class="message-container left">
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                        </div>
    
                        <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        </div>
                    </div>
                    <div class="single-chat right">
                        <div class="message-container left">
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                        </div>
    
                        <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        </div>
                    </div>
                    <div class="single-chat right">
                        <div class="message-container left">
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                        </div>
    
                        <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        </div>
                    </div>
                    <div class="single-chat right">
                        <div class="message-container left">
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                        </div>
    
                        <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                        </div>
                    </div>
                    <div class="single-chat left">
                    <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                    </div>
                    <div class="message-container">
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                    </div>
                    </div>
                    <div class="single-chat left">
                    <div class="user-images">
                        <div class="user-image">
                            <x-image path="resources/assets/users/provider-1.jpg" alt="member picture" />
                        </div>
                    </div>
                    <div class="message-container">
                    <div class="file-container">
                        <div class="file">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 file-upload-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        </div>
                    </div>
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc</p>
                    </div>
                    </div>
                </div>
                <div class="message-input">
                  <input type="text" class="input" name="message">
                  <button class="send-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 paper-plane send-icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
                  </button>
                </div>
      
              </div>
      
                
            </div>
        </section>
    
        <div class="user-controls">
            <div class="top">
                <div class="icon-container control active" id="mic-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z" />
                    </svg>
                </div>
            <div class="icon-container control active" id="camera-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
            </div>
            <div class="icon-container control">
                <x-image path="resources/assets/icons/record-icon.svg" alt="record icon" />
            </div>
            <div class="icon-container control" id="leave-btn">
                <x-image path="resources/assets/icons/phone-icon.svg" alt="hang up" />
            </div>
        </div>
        <div class="bottom">
            <div class="vc-figure">
                <x-image path="resources/assets/icons/voice-figure.svg" alt="voice figure" class="voice-figure" />
            </div>
            <div class="titles">
                <p class="session description">4/16 sessions with Dr.Abel <span class="session-timer">30:10</span></p>
                <p class="session title">How to live happy life more life easily. </p>
            </div>
            <div class="session-controls">
                <div class="control flex align-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 setting">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
                <div id="js-max-min" class="maximize-minimize-control flex align-center justify-center">
                    <x-image path="resources/assets/icons/maximize.svg" alt="maximize" class="maximize" />
                    <x-image path="resources/assets/icons/minimize.svg" alt="minimize" class="minimize none" />
                </div>
            </div>

        </div>
        </div>
       
</main>


    <script>
        const highlightedElem = document.querySelector('.js-highlighted-user');
        const videoSessionElem = document.querySelector('.js-video-sessions');
        let clientElems = videoSessionElem.querySelectorAll('.client');
        const highlightedElemOverlay = document.querySelector('.highlighted-user-overlay');


        clientElems.forEach(elem => {
            elem.addEventListener('click', (e) => {
                console.log('click')
                expandVideo(e);
            });
        });
        
        const switchFullScreen = (e)=>{
            const minimizedElems = document.querySelector('.minimized-users .js-video-sessions');
            let child = highlightedElem.children[0];
            if(child){
                minimizedElems.appendChild(child);
            }
            highlightedElem.appendChild(e.currentTarget);
        }


        let userIdInDisplayFrame = null;
        let isFullScreen = false;


        const expandVideo = (e) => {
            let child = highlightedElem.children[0];
            if (child) {
                videoSessionElem.appendChild(child);
            }
            highlightedElem.appendChild(e.currentTarget);
            videoSessionElem.classList.add('minimized');
            highlightedElem.classList.remove('none');
            updateMinimizedUsers();
        };

              
        const updateMinimizedUsers = () => {
            const minimizedUserSection = document.querySelector('.minimized-users');
            
            minimizedUserSection.innerHTML = '';

            const clientsClone = document.querySelector('.js-video-sessions').cloneNode(true);
            minimizedUserSection.appendChild(clientsClone);
        };

        const maxMinBtn = document.querySelector('#js-max-min'); 
        maxMinBtn.addEventListener('click', () => {
            clientElems = videoSessionElem.querySelectorAll('.client');
            maxMinBtn.classList.toggle('minimize');
            isFullScreen = !isFullScreen;

            if (!highlightedElem.children[0]) {
                videoSessionElem.querySelector('.client').click();
            }

            highlightedElem.classList.toggle('full-screen');
            document.querySelector('body').classList.toggle('body-height');

            if (isFullScreen) {
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
                highlightedElemOverlay.style.display = 'flex';

                const chats = document.querySelector('.js-chat-container');
                const chatSection = document.querySelector('.chat-section');
                const chatsClone = chats.cloneNode(true);
                chatSection.innerHTML = '';
                chatSection.appendChild(chatsClone);
                
                updateMinimizedUsers();

                const minimizedElems = document.querySelector('.minimized-users .js-video-sessions');
                const minimizedClientElems = minimizedElems.querySelectorAll('.client');
                minimizedClientElems.forEach(elem =>{
                    elem.addEventListener('click', (e)=>{
                        switchFullScreen(e)
                    })
                })

                
            } else {
                highlightedElemOverlay.style.display = 'none';
            }
        });


    </script>

@vite([
        'resources/scripts/utilities/videochat.js',
    ])
</body>
</html>