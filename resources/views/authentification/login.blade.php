@include('partials._header')

<div class="wrap">

    <x-hero />
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('images/login-page-img.png') }}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To Pet sitting</h2>
                        </div>
                        <form method="POST" action="/users/authenticate">
                            @csrf
                            <div class="input-group custom">
                                <input type="text" name="email" id="email-input" value="{{ old('email') }}"
                                    class="form-control form-control-lg" placeholder="Email">
                                {{-- <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div> --}}
                                @error('email')
                                    <span class="text-danger text-12">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group custom">
                                <input type="password" name="password" id="password-input" value="{{ old('password') }}"
                                    class="form-control form-control-lg" placeholder="**********">
                                {{-- <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div> --}}
                                @error('password')
                                    <span class="text-danger text-12">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password"><a href="{{ route('reset-password') }}">Forgot
                                            Password</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block"
                                            href="{{ route('register') }}">Register
                                            To Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    const form = document.querySelector('#login-form');
    const emailInput = document.querySelector('#email-input');
    const passwordInput = document.querySelector('#password-input');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]{8,}$/;
    const emailError = document.querySelector('#email-error');
    const passwordError = document.querySelector('#password-error');

    form.addEventListener('submit', validateLogin);

    function validateLogin(event) {
        event.preventDefault();
        emailError.innerHTML = '';
        passwordError.innerHTML = '';
        let hasError = false;

        if (!emailInput.value.trim()) {
            displayError(emailInput, emailError, "Email field is required");
            hasError = true;

        }
        if (!passwordInput.value.trim()) {
            displayError(passwordInput, passwordError, "Password field is required");
            hasError = true;
        }

        if (!emailRegex.test(emailInput.value)) {
            displayError(emailInput, emailError, "Please enter a valid email");
            hasError = true;
        }

        if (!passwordRegex.test(passwordInput.value)) {
            displayError(passwordInput, passwordError,
                'Please enter a password that is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number'
            );
            hasError = true;
        }
        if (!hasError) {
            form.submit();
        }
    }

    function displayError(input, errorSpan, errorMessage) {
        input.classList.add('is-invalid');
        errorSpan.textContent = errorMessage;
    }
</script> --}}
@include('partials._footer')
