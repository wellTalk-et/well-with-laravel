<x-layout>
        @vite([
        'resources/styles/login-register.css' ,
        ])

<main>
        <div class="login container">
            <form action="/login" method="POST" class="login-form" id="js-login-form">
                @csrf
            <h2 class="login text">Log in</h2>
            <input type="text" placeholder="username or email" name="email_username" id="js-email-username" class="text input" 
            required pattern="^[a-zA-Z0-9._@]{4,}$" autocomplete="email" title="invalid username or email" value="{{old('email_username')}}">
            @error('email_username')
            <span id="js-username-error" class="error">{{ $message }}</span>
            @enderror
            
            <input type="password" placeholder="password" name="password" id="js-password" class="password input" required 
            pattern="^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\W_]).{8,}$" autocomplete="current-password" title="Password must be at least 8 characters with uppercase, lowercase, and special characters.">
            @error('password')
            <span id="js-password-error" class="error">{{ $message }}</span>
            @enderror

            <input type="submit" name="submit" value="Log in" id="submit btn js-submit" class="input btn btn-lg primary">
            <span class="forgot-password-span"><a href="#" class="forgot-password" id="js-forgot-password-error"></a></span>
            <div class="divider">
            </form>
                <div></div>
                <p>or</p>
                <div></div>
            </div>
            <button class="btn btn-lg google go-to-question-page"> <x-image path="resources/assets/icons/devicon_google.svg" alt="" /> Continue with Google</button>
            <button class="btn btn-lg apple go-to-question-page"> <x-image path="resources/assets/icons/mdi_apple.svg" alt="" /> Continue with Apple</button>
            <p class="dont-have-account">Don't have an account? <span class="sign-up"><a href="/register">Sign up</a></span></p>
        </div>
    </main>

</x-layout>
