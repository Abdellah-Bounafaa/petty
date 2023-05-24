@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Register" />

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Welcome to Petty! 👋
                                        Please sign-up to start the adventure</h3>
                                    <form method="POST" id="registerForm" name="registerForm" action="/users"
                                        class="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="firstname">First Name</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="firstname" placeholder="First Name"
                                                        value="{{ old('first_name') }}">
                                                    @error('first_name')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="lastname">Last Name</label>
                                                    <input type="text" class="form-control" name="last_name"
                                                        id="lastname" placeholder="Last Name"
                                                        value="{{ old('last_name') }}">
                                                    @error('last_name')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="PhoneNumber">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone_number"
                                                        id="PhoneNumber" placeholder="Phone Number"
                                                        value="{{ old('phone_number') }}">
                                                    @error('phone_number')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="Country">Country</label>
                                                    <input type="text" class="form-control" name="country"
                                                        id="Country" placeholder="Country"
                                                        value="{{ old('country') }}">
                                                    @error('country')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="Country">City</label>
                                                    <input type="text" class="form-control" name="city"
                                                        id="city" placeholder="City" value="{{ old('city') }}">
                                                    @error('city')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{ old('email') }}" id="email-input"
                                                        placeholder="Email">
                                                    @error('email')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="password">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        value="{{ old('password') }}" id="password-input"
                                                        placeholder="Password">
                                                    @error('password')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="cpassword">Confirm Password</label>
                                                    <input type="password" class="form-control"
                                                        name="password_confirmation"
                                                        value="{{ old('password_confirmation') }}"
                                                        id="cpassword-input" placeholder="Password">
                                                    @error('password_confirmation')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Submit" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // const form = document.querySelector('#registerForm');
        // const emailInput = document.querySelector('#email-input');
        // const passwordInput = document.querySelector('#password-input');
        // const cpasswordInput = document.querySelector('#cpassword-input');
        // const Country = document.querySelector('#Country')
        // const firstname = document.querySelector('#firstname')
        // const lastname = document.querySelector('#lastname')
        // const PhoneNumber = document.querySelector('#PhoneNumber')
        // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]{8,}$/;
        // const phoneNumberRegex = /^(?:\+212|0)([5-7]\d{8})$/;
        // let countryRegex = /^[a-zA-Z\s]+$/;
        // let fstNameRegex = countryRegex;
        // let lastNameRegex = countryRegex;
        // const emailError = document.querySelector('#email-error');
        // const passwordError = document.querySelector('#password-error');
        // const cpasswordError = document.querySelector('#cpassword-error');
        // const firstnameError = document.querySelector('#firstname-error');
        // const lastnameError = document.querySelector('#lastname-error');
        // const phonenumberError = document.querySelector('#phonenumber-error');
        // const countryError = document.querySelector('#country-error');

        // form.addEventListener('submit', validateLogin);

        // function validateLogin(event) {
        //     event.preventDefault();
        //     emailError.innerHTML = '';
        //     passwordError.innerHTML = '';
        //     cpasswordError.innerHTML = '';
        //     countryError.innerHTML = '';
        //     firstnameError.innerHTML = '';
        //     lastnameError.innerHTML = '';
        //     phonenumberError.innerHTML = '';

        //     if (!emailInput.value.trim()) {
        //         emailError.innerHTML = "Email field is required";
        //         return;
        //     }
        //     if (!passwordInput.value.trim()) {
        //         passwordError.innerHTML = "Password field is required";
        //         return;
        //     }
        //     if (!cpasswordInput.value.trim()) {
        //         cpasswordError.innerHTML = "Confirmation Password field is required";
        //         return;
        //     }
        //     if (!Country.value.trim()) {
        //         CountryError.innerHTML = "Country field is required";
        //         return;
        //     }
        //     if (!firstname.value.trim()) {
        //         firstnameError.innerHTML = "First name field is required";
        //         return;
        //     }
        //     if (!lastname.value.trim()) {
        //         lastnameError.innerHTML = "Last name field is required";
        //         return;
        //     }
        //     if (!PhoneNumber.value.trim()) {
        //         phonenumberError.innerHTML = "Phone Number field is required";
        //         return;
        //     }
        //     if (!emailRegex.test(emailInput.value)) {
        //         emailError.innerHTML = "Please enter a valid email"
        //         return;
        //     }

        //     if (!passwordRegex.test(passwordInput.value)) {
        //         passwordError.innerHTML =
        //             'Please enter a password that is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number';
        //         return;
        //     }
        //     if (passwordInput != cpasswordInput) {
        //         passwordError.innerHTML =
        //             'Passwords are not match';
        //         return;
        //     }
        //     if (!countryRegex.test(Country.value)) {
        //         countryError.innerHTML = "Please enter a valid country name"
        //         return;
        //     }
        //     if (!fstNameRegex.test(firstname.value)) {
        //         firstnameError.innerHTML = "Please enter a valid name"
        //         return;
        //     }
        //     if (!lastNameRegex.test(lastname.value)) {
        //         lastnameError.innerHTML = "Please enter a valid name"
        //         return;
        //     }
        //     if (!phoneNumberRegex.test(PhoneNumber.value)) {
        //         phonenumberError.innerHTML = "Please enter a valid name"
        //         return;
        //     }

        //     form.submit();
        // }
        // const form = document.querySelector('#registerForm');
        // const emailInput = document.querySelector('#email-input');
        // const passwordInput = document.querySelector('#password-input');
        // const cpasswordInput = document.querySelector('#cpassword-input');
        // const Country = document.querySelector('#Country');
        // const firstname = document.querySelector('#firstname');
        // const lastname = document.querySelector('#lastname');
        // const PhoneNumber = document.querySelector('#PhoneNumber');
        // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]{8,}$/;
        // const phoneNumberRegex = /^(?:\+212|0)([5-7]\d{8})$/;
        // let countryRegex = /^[a-zA-Z\s]+$/;
        // let fstNameRegex = countryRegex;
        // let lastNameRegex = countryRegex;
        // const emailError = document.querySelector('#email-error');
        // const passwordError = document.querySelector('#password-error');
        // const cpasswordError = document.querySelector('#cpassword-error');
        // const firstnameError = document.querySelector('#firstname-error');
        // const lastnameError = document.querySelector('#lastname-error');
        // const phonenumberError = document.querySelector('#phonenumber-error');
        // const countryError = document.querySelector('#country-error');
        // form.addEventListener('submit', validateLogin);

        // function validateLogin(event) {
        //     event.preventDefault();
        //     emailError.innerHTML = '';
        //     passwordError.innerHTML = '';
        //     cpasswordError.innerHTML = '';
        //     countryError.innerHTML = '';
        //     firstnameError.innerHTML = '';
        //     lastnameError.innerHTML = '';
        //     phonenumberError.innerHTML = '';

        //     let hasError = false;

        //     if (!emailInput.value.trim()) {
        //         displayError(emailInput, emailError, "Email field is required");
        //         hasError = true;
        //     }
        //     if (!passwordInput.value.trim()) {
        //         displayError(passwordInput, passwordError, "Password field is required");
        //         hasError = true;
        //     }
        //     if (!cpasswordInput.value.trim()) {
        //         displayError(cpasswordInput, cpasswordError, "Confirmation Password field is required");
        //         hasError = true;
        //     }
        //     if (!Country.value.trim()) {
        //         displayError(Country, countryError, "Country field is required");
        //         hasError = true;
        //     }
        //     if (!firstname.value.trim()) {
        //         displayError(firstname, firstnameError, "First name field is required");
        //         hasError = true;
        //     }
        //     if (!lastname.value.trim()) {
        //         displayError(lastname, lastnameError, "Last name field is required");
        //         hasError = true;
        //     }
        //     if (!PhoneNumber.value.trim()) {
        //         displayError(PhoneNumber, phonenumberError, "Phone Number field is required");
        //         hasError = true;
        //     }
        //     if (!emailRegex.test(emailInput.value)) {
        //         displayError(emailInput, emailError, "Please enter a valid email");
        //         hasError = true;
        //     }

        //     if (!passwordRegex.test(passwordInput.value)) {
        //         displayError(passwordInput, passwordError,
        //             'Please enter a password that is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number'
        //         );
        //         hasError = true;
        //     }
        //     if (passwordInput.value !== cpasswordInput.value) {
        //         displayError(cpasswordInput, cpasswordError, 'Passwords do not match');
        //         hasError = true;
        //     }
        //     if (!countryRegex.test(Country.value)) {
        //         displayError(Country, countryError, "Please enter a valid country name");
        //         hasError = true;
        //     }
        //     if (!fstNameRegex.test(firstname.value)) {
        //         displayError(firstname, firstnameError, "Please enter a valid first name");
        //         return;
        //     }
        //     if (!lastNameRegex.test(lastname.value)) {
        //         displayError(lastname, lastnameError, "Please enter a valid last name");
        //         return;
        //     }
        //     if (!phoneNumberRegex.test(PhoneNumber.value)) {
        //         displayError(PhoneNumber, phonenumberError, "Please enter a valid phone number");
        //         return;
        //     }

        //     form.submit();
        // }

        // function displayError(input, errorSpan, errorMessage) {
        //     input.classList.add('is-invalid');
        //     errorSpan.textContent = errorMessage;
        // }
    </script>
    @include('partials._footer')
