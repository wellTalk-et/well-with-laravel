<x-layout>

    <!-- heading seciton-->
     <div class="main-value-props-container" id="main-value-props-container">

        <div class="right-side-sm">
            <img src="./static/assets/users/provider-vc-christina.png" class="right-side-img-sm" alt="doctor sitting on the couch" >
            <button class="btn outlined sm border-white js-navigate-to-login">Get started</button>
        </div>

        <div class="left-side container">
            <h1 class="heading">Talk to Professionals, Anytime, Anywhere </h1>
            <p class="description">WellTalk online service Providing instant access to mentorship, medical consultations, and personalized support just made for you</p>
           <div class="getting-started-container">
            <button class="primary btn-xl js-navigate-to-login">Get Started</button>
            <p>Secure SSL</p>
           </div>
        </div> <!-- end left side-->

        <div class="right-side container">
            <x-image-carousel-container class="carousel-1 js-carousel-1" />
            <x-image-carousel-container class="carousel-2 js-carousel-2" />
        </div>

     </div> <!-- end main value props-->
    
     <!-- About section / description-->
     <div class="description container">
        <div class="left description">
            <h2 class="heading">One Platform for everything you need.</h2>
        </div>

        <div class="right description"><!-- right section-->
            <div class="folder">
                <div class="search-for heading">Search for</div>
                <div class="search-bar">
                    <span class="leading search-btn">
                  </span> Search
                </div>
                <div class="chips container">
                    <x-chip>Psychatrist</x-chip>
                    <x-chip>Medical Results</x-chip>
                    <x-chip>Therapy</x-chip>
                    <x-chip> Home care nurse</x-chip>
                    <x-chip>Doctor</x-chip>
                    <x-chip>Dentist</x-chip>
                    <x-chip>Relationships</x-chip>
                </div>
            </div>
        </div><!-- end right section-->
        
     </div>
     <!-- End about section / description-->
      <div class="partners testimonial container"> <!-- partners testimonial-->
        <div class="partner-carousel partner-carousel-one">
            <x-partner logo="MCM" name="korean Hospital"/>
            <x-partner logo="Wudassie" name="diagnostic Center"/>
            <x-partner logo="Tikur Anbessa" name="Specialized Hospital"/>
            <x-partner logo="Dr. Emebet" name="Higher Specialized Dental Clinic"/>
            <x-partner logo="Sitota" name="Center for Mental Health Care"/>      
            <x-partner logo="MCM" name="korean Hospital"/>
            <x-partner logo="Wudassie" name="diagnostic Center"/>
            <x-partner logo="Tikur Anbessa" name="Specialized Hospital"/>
            <x-partner logo="Dr. Emebet" name="Higher Specialized Dental Clinic"/>
            <x-partner logo="Sitota" name="Center for Mental Health Care"/>            
        </div>
       <!-- <div class="partner-carousel partner-carousel-two">
            <x-partner logo="Tikur Anbessa" name="Specialized Hospital" />
            <x-partner logo="Dr. Emebet" name="Higher Specialized Dental Clinic" />
            <x-partner logo="Sitota" name="Center for Mental Health Care" />  
            <x-partner logo="MCM" name="korean Hospital" />
            <x-partner logo="Wudassie" name="diagnostic Center" />
            <x-partner logo="MCM" name="korean Hospital" />
       </div> -->
      </div> <!-- End partners testimonial-->

      <div class="getting-started-section js-getting-started"> <!-- Getting started-->
            <div class="getting-started-section-lg"> <!-- Desktop getting started -->
                <h2 class="getting-started-header">How to get started?</h2>
                <div class="getting started container">
                     <div class="step-cards">
                        <div class="single step-guide first js-step-guide" id="first-step-lg" data-item="first">
                            <div class="step">1</div>
                            <div class="instruction">
                                <p class="title">Match with your Mentor </p>
                                <p class="description">we provided some questions
                                     to filter out the best mentor for you it will take
                                      you less than 10 minutes. You can skip this process 
                                      and choose your mentor by yourself too.</p>
                            </div>
                        </div><!-- end single step guide-->
                        <div class="single step-guide second js-step-guide" id="second-step-lg" data-item="second">
                            <div class="step">2</div>
                            <div class="instruction">
                                <p class="title">Start your session </p>
                                <p class="description">Communicate with your mentor through
                                     live video session,  messages, or both. 
                                     Your security is our #1 priority for us.</p>
                            </div>
                        </div><!-- end single step guide-->
                        <div class="single step-guide third js-step-guide" id="third-step-lg" data-item="third">
                            <div class="step">3</div>
                            <div class="instruction">
                                <p class="title">Develop Consistent Habits  </p>
                                <p class="description">Use our habit tracking feature to maintain
                                     healthy habits. Regular monitoring helps you improve
                                      continuously and provides accurate information for 
                                      your next session with your mentor.</p>
                            </div>
                        </div><!-- end single step guide-->
                        <div class="single step-guide fourth js-step-guide" id="fourth-step-lg" data-item="fourth" >
                            <div class="step">4</div>
                            <div class="instruction">
                                <p class="title">You can switch your mentor anytime  </p>
                                <p class="description">We make sure to provide a good mentor for you. 
                                    but If you think the mentor is not a good fit for 
                                    you, it is easy to select a new mentor with no additional 
                                    cost.</p>
                            </div>
                        </div><!-- end single step guide-->
                    </div><!-- End step-cards -->
        
                    <div class="phone-container js-lg-phone-container">

                        <x-image path='resources/assets/other-image-assets/match-with-mentor.png' alt="matching with the provider image" class="first right-section phone screen phone-enabled" />
                        <x-image path='resources/assets/other-image-assets/start-your-session.png' alt="two people chatting over video" class="second right-section phone screen" />
                        <x-image path='resources/assets/other-image-assets/track-your-habits.png'  alt="person taking while walking" class="third right-section phone screen" />
                        <x-image path='resources/assets/other-image-assets/change-your-mentor-screen.png' alt="habit tracking screenshot section" class="fourth right-section phone screen" />
                        
                        
                    </div>
                </div>
            </div> <!-- End Desktop getting started -->
            <div class="getting-started-section-sm js-getting-started-sm"> <!-- Mobile Getting started -->
                    <div class="all-getting-started js-all-getting-started">
                        <div class="getting-started first" id="getting-started-first">
                            <div class="phone-container">
                            <x-image class="first phone screen right-section" path="resources/assets/other-image-assets/match-with-mentor.png" alt="" />
                            </div>
                            <div class="single step-guide">
                                <div class="step">1</div>
                                <div class="instruction">
                                    <p class="title">Match with your Mentor</p>
                                    <p class="description">we provided some questions to filter out the best mentor for you it will take you less than 10 minutes. You can skip this process and choose your mentor by yourself too.</p>
                                </div>
                            </div><!-- end single step guide-->
                        </div>
                         <div class="getting-started second" id="getting-started-second">
                            <div class="phone-container">
                                 <x-image path="resources/assets/other-image-assets/start-your-session.png" class="second right-section phone screen" alt="matching with the provider image" /> 
                            </div>
                        <div class="step-cards">
                            <div class="single step-guide">
                                <div class="step">2</div>
                                <div class="instruction">
                                    <p class="title">Start your session  </p>
                                    <p class="description">Communicate with your mentor through live video session, messages, or both. Your security is our #1 priority for us.</p>
                                </div>
                            </div><!-- end single step guide-->
                        </div>
                        </div>
                        <div class="getting-started third" id="getting-started-third">
                            <div class="phone-container">
                                <x-image class="first phone screen right-section" path="resources/assets/other-image-assets/track-your-habits.png" alt="" />
                                <!-- <img src="./static/assets/users/match-with-mentor.png" class="second right-section phone screen" alt="matching with the provider image"> -->
                            </div>
                          <div class="step-cards">
                              <div class="single step-guide">
                                <div class="step">3</div>
                                <div class="instruction">
                                    <p class="title">Develop Consistent Habits</p>
                                    <p class="description">Use our habit tracking feature to maintain healthy habits. Regular monitoring helps you improve continuously and provides accurate information for your next session with your mentor.</p>
                                </div>
                            </div><!-- end single step guide-->
                          </div>
                        </div>
                        <div class="getting-started fourth" id="getting-started-fourth">
                            <div class="phone-container">
                                <x-image class="first phone screen right-section" path="resources/assets/other-image-assets/change-your-mentor-screen.png" alt="" />
                                <!-- <img src="./static/assets/users/match-with-mentor.png" class="second right-section phone screen" alt="matching with the provider image"> -->
                            </div>
                          <div class="step-cards">
                              <div class="single step-guide">
                                <div class="step">4</div>
                                <div class="instruction">
                                    <p class="title">You can switch your mentor anytime</p>
                                    <p class="description">We make sure to provide a good mentor for you. but If you think the mentor is not a good fit for you, it is easy to select a new mentor with no additional cost.</p>
                                </div>
                            </div><!-- end single step guide-->
                          </div>
                        </div>
                    </div>
                    <!-- add more getting started containers -->
                <div class="carousel-container js-getting-started-carousel">
                     <a href="#getting-started-first" class="carousel one carousel-active js-carousel"></a>
                     <a href="#getting-started-second" class="carousel two js-carousel"></a>
                     <a href="#getting-started-third" class="carousel three js-carousel"></a>
                     <a href="#getting-started-fourth" class="carousel fourth js-carousel"></a>
                     <!-- <a href="#getting-started-fourth" class="carousel fourth js-carousel"></a> -->
                </div>
            </div> <!-- End Mobile Getting started-->
         
      </div> <!-- End Getting started-->
      
      <div class="why-full-section"> <!-- why section -->
      <div class="why-section-heading">Why WellTalk?</div>
        <div class="why-section js-why-section">
            <div class="why-descriptions container">
                <div class="single-why-description-container js-single-why-description" data-item="first">
                    <div class="single why-description">
                        <p class="description">Connect with your mentor anytime, anywhere</p>
                        </div>
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="second">
                    <div class="single why-description">
                        <p class="description">Message your mentor anytime</p>
                        </div>
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="third">
                    <div class="single why-description">
                      <p class="description">Easy appointment scheduling</p>
                    </div>
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="fourth">
                    <div class="single why-description">
                        <!-- chevron down -->
                        <p class="description">No more taxi waiting line and traffic lights</p>
                        </div> 
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="fifth">
                    <div class="single why-description">
                        <p class="description">No more waiting for your mentor</p>
                        </div>
                </div>
                <div class="single-why-description-container js.single-why-description" data-item="sixth">
                    <div class="single why-description">
                        <p class="description">Switch your mentor anytime</p>
                        </div>
                </div>
            </div>
            <!-- right section switched-->
            <div class="image-container">
                <x-image class="img reason-guide first reason-active" path="resources/assets/other-image-assets/person-sitting-on-couch.png" alt="" /> 
                <x-image class="img reason-guide second" path="resources/assets/other-image-assets/message-your-mentor.png" alt="" />
                <x-image class="img reason-guide third" path="resources/assets/other-image-assets/appointment.png" alt="" />
                <x-image class="img reason-guide fourth" path="resources/assets/other-image-assets/waiting-for-taxi.png" alt="" />
                <x-image class="img reason-guide fifth" path="resources/assets/other-image-assets/waiting-a-mentor.png" alt="" />
                <x-image class="img reason-guide sixth" path="resources/assets/other-image-assets/change-your-mentor.png" alt="" />
            </div>
        </div>
      </div> <!-- End why section -->

    <div class="achivements-section"> <!-- Achivements section-->
        <div class="left">
           <div class="heading">
                <p><x-image path="resources/assets/other-image-assets/messages-back-forth.svg" alt="" /> Video Calls</p>
                <p>Talk it out. Face-to-face.</p>
           </div>
           <div class="search container">
                <div class="search-bar-with-btn">
                    <input type="text" placeholder="Search By company,  skill or role">
                    <button class="btn primary btn-md">Find mentors</button>
                </div>
                <div class="suggested-keywords">
                    <x-keyword>Start up founders</x-keyword>
                    <x-keyword>Sales Person</x-keyword>
                    <x-keyword>Psychatrist</x-keyword>
                    <x-keyword>Doctor</x-keyword>
                    <x-keyword>Entrepreneur</x-keyword>
                    <x-keyword>Home care nurse</x-keyword>
                    <x-keyword>Leadership mentor</x-keyword>
                </div>
            </div>
            <div class="achivement stats">
                <div>
                    <p class="stat">1000+</p>
                    <p class="description">Available mentors</p>
                </div>
                <div>
                    <p class="stat">30,000+</p>
                    <p class="description">Sessions made</p>
                </div>
                <div>
                    <p class="stat">50+</p>
                    <p class="description">Countries served</p>
                </div>
               
            </div>
        </div> <!-- end left section-->
        <div class="right"> <!-- right section-->
            <div class="highlighted-providers highlighted-providers-one">
                <x-highlighted-provider class="highlighted provider" path='resources/assets/users/provider-featured.jpg' />
                <x-highlighted-provider class="highlighted provider" path='resources/assets/users/provider-featured.jpg' />
                <x-highlighted-provider class="highlighted provider" path='resources/assets/users/provider-featured.jpg' />
            </div>
            <div class="highlighted-providers highlighted-providers-two">
                <x-highlighted-provider class="highlighted provider" path='resources/assets/users/provider-featured.jpg' />
                <x-highlighted-provider class="highlighted provider" path='resources/assets/users/provider-featured.jpg' />
                <x-highlighted-provider class="highlighted provider" path='resources/assets/users/provider-featured.jpg' />
            </div>
        </div> <!-- end right section-->
    </div> <!-- End Achivements section-->

    <div class="faq-full-section"> <!-- FAQ section -->
        <div class="faq-section-heading">Any Questions?</div>
        <div class="faq-section-description">You asked, we listened. Find trust-worthy answered by us</div>
          <div class="faq-section">
              <div class="image-container">
                  <x-image class="img" path="resources/assets/other-image-assets/person-sitting-on-couch.svg" alt="" />
              </div>
             <div class="faq-container-with-pagination">
                <div class="faq-descriptions container">
                    <x-single-faq>
                        <x-slot:heading>
                        Connect with your mentor anytime, anywhere
                        </x-slot:heading>
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                    </x-single-faq>

                    <x-single-faq>
                        <x-slot:heading>
                        Message your mentor anytime
                        </x-slot:heading>
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                    </x-single-faq>

                    <x-single-faq>
                        <x-slot:heading>
                        Easy appointment scheduling
                        </x-slot:heading>
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                    </x-single-faq>

                    <x-single-faq>
                        <x-slot:heading>
                        No more taxi waiting line and traffic lights
                        </x-slot:heading>
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                    </x-single-faq>

                    <x-single-faq>
                        <x-slot:heading>
                        No more waiting for your mentor
                        </x-slot:heading>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                    </x-single-faq>
            </div>

                <!-- pagination -->
                <div class="pagination-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-left pagination">
                        <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                    <div class="pagination current-questions">1</div>
                    <div class="pagination">2</div>
                    <div class="pagination">3</div>
                    <div class="pagination">4</div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-right pagination">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                      

                </div>
               
             </div>
          </div>
        </div> <!-- FAQ section -->

        <footer class="footer container">
            <div class="branding">
                <h3>well</h3>
                <div class="social-accounts">
                    <span class="icon facebook"><a href="#"><x-image path="resources/assets/icons/facebook.svg" alt=""/></a></span>
                    <span class="icon x"><a href="#"><x-image path="resources/assets/icons/x.svg" alt=""/></a></span>
                    <span class="icon instagram"><a href="#"><x-image path="resources/assets/icons/instagram.svg" alt="" /></a></span>
                    <span class="icon linkedin"><a href="#"><x-image path="resources/assets/icons/linked-in.svg" alt="" /></a></span>
                </div>
            </div>
            <div class="contact-us">
                <h3>Contact us</h3>
                <div class="contact-section">
                    <p><a href="mailto:support@well.com">support@well.com</a></p>
                    <p><a href="tel:+1234567890">+251 111 328 765</a></p>
                </div>
            </div>
            <div class="subscribe">
                <h3>Subscribe</h3>
                <p>Enter your email to get notified about our solution</p>
                <div class="email-submit">
                    <input type="text" placeholder="email">
                    <button class="submit" role="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 arrow-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                          </svg>
                          
                    </button>
                </div>
            </div>
            <div class="footer-explore">
                <x-image class="footer-img" path="resources/assets/other-image-assets/footer-explore.png" alt="" />
                <p>Explore our success</p>
            </div>
            <a class="go-to-start-btn" href="#main-value-props-container">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 chevron-up">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                  </svg>
            </a>
            <div>
                <p class="current-year js-current-year"></p>
            </div>
        </footer>
</x-layout>
