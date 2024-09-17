<x-layout>
        @vite([
        'resources/styles/login-register.css' ,
        ])

    <main>
        
            <form action="/register" method="POST" class="register-form" id="js-register-form">
                @csrf
                <input type="radio" name="role" value="mentor" id="radio-mentor" class="hidden" checked />
                <input type="radio" name="role" value="mentee" id="radio-mentee" class="hidden" />
               <!-- social auth -->
                <form action="" method="POST">
                    @csrf
                    <div class="register container">
                    <h2 class="register text">Sign up</h2>
                    <section class="first">
                        <div class="preference-container">
                            <div class="text">
                                <p class="mentee js-mentee">I need a mentor</p>
                                <p class="mentor js-mentor">I'm a mentor</p>
                            </div>
                            <div class="overlay">
                                <div class="first mentee-selected js-overlay"></div>
                            </div>
                        </div>
                        <div class="social-logins">
                            <button class="btn btn-lg google go-to-question-page"> <x-image path="resources/assets/icons/devicon_google.svg" alt=""/> Continue with Google</button>
                        <button class="btn btn-lg apple go-to-question-page"> <x-image path="resources/assets/icons/mdi_apple.svg" alt="" /> Continue with Apple</button>
                        </div>
                        <div class="divider">
                            <div></div>
                            <p>or</p>
                            <div></div>
                        </div>
                    </section> 
                </form> 

            <section class="middle">
               
                <x-forms.form-section class="input" name="first_name" id="js-fname" pattern="^[a-zA-Z]{3,}" title="Invalid name"  placeholder="John" :required="true">First Name </x-forms.form-section>

                <x-forms.form-section class="input" name="last_name" id="js-lname" pattern="^[a-zA-Z]{3,}" title="Invalid name" :required="true"  placeholder="Doe" value='abey asmare'>Last Name </x-forms.form-section>


                <x-forms.form-section type="email" class="input" name="email" id="js-email" title="Invalid Email" :required="true" placeholder="john@gmail.com"  autocomplete="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                >Email </x-forms.form-section>
    
                <div class="form-with-desc">
                    <label for="country">Country</label>
                    <select type="dropdown" name="country" class="input dropdown" id="js-country" title="Country has to be provided" required autocomplete="country">
                        <option value="ethiopia">Ethiopia</option>
                        <option value="usa">USA</option>
                    </select>
                    <span id="js-country-error" class="error"></span>
                </div>

                <div class="form-with-desc">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" placeholder="password" name="password" id="js-password" class="input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" required title="Password must be at least 8 characters with uppercase, lowercase, and special characters." autocomplete="current-password" />
                        <button class="show-password-btn">
                            <!-- eye slash button shown when the password is not shown -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 eye-slash hide">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                            <!-- eye button shown when the password will shown -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 eye">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                              
                        </button>
                        <span id="js-password-error" class="error"></span>
                    </div>
                </div>
                <div class="password strength container">
                    <p class="text strength"> password strength <span class="strength visual"><span class="key-strength js-key-strength"></span></span> <span class="strength-keyword js-strength-keyword">weak</span></p>
                    <p class="strength description">Must contain atleast </p>
                    <ul>
                        <li class="list-item js-list-item">8 characters</li>
                        <li class="list-item js-list-item">1 uppercase character</li>
                        <li class="list-item js-list-item">1 lowercase character</li>
                        <li class="list-item js-list-item">1 number</li>
                        <li class="list-item js-list-item">1 special character</li>
                    </ul>
                </div>
            </section>

            <section class="last">
                <div class="user-agreement">
                   <input type="checkbox" name="checkbox" class="primary checkbox" id="js-terms" required />
                    <p>Yes, I understand and agree to the <a href="#">WellTalk Terms of Service</a href="#">, 
                       including the <a href="#">User Agreement</a href="#"> and <a href="#">Privacy Policy.</a href="#">
                    </p>
                </div>
                @error('checkbox')
                <span id="error" class="error">{{ $message }}</span>
                @enderror
                <div class="login section">
                    <input type="submit" name="submit" value="Get me started" id="submit btn" class="input btn btn-lg primary " />
                    <p>Already have an account? <a href="/login">Log in</a></p>
                </div>

            </section>
        </form>
        </div> <!-- end register container-->
    </main>
    @vite([
        'resources/scripts/register.js'
        ])

</x-layout>
