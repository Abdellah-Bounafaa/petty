<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
    <div class="profile-setting">
        <form id="settings-Form">
            <ul class="profile-edit-list profile-row">
                <li class="weight-500 ">
                    <h4 class="text-blue h5 mb-20">Edit Your Personal
                        Setting</h4>
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control form-control-lg"id="firstname" type="text">
                        <span id="firstname-error" class="text-12 text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input id="lastname" class="form-control form-control-lg" type="text">
                        <span class="text-12 text-danger" id="lastname-error"></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control form-control-lg" id="email-input" type="text">

                        <span class="text-12 text-danger" id="email-error"></span>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input id="PhoneNumber" class="form-control form-control-lg" type="text">
                        <span class="text-12 text-danger" id="phonenumber-error"></span>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input id="Country" class="form-control form-control-lg" type="text">
                        <span class="text-12 text-danger" id="country-error"></span>
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" class="btn btn-primary" value="Save & Update">
                </li>
            </ul>
        </form>
    </div>
</div>
<script>
    const form = document.querySelector('#settings-Form');
    const emailInput = document.querySelector('#email-input');
    const Country = document.querySelector('#Country');
    const firstname = document.querySelector('#firstname');
    const lastname = document.querySelector('#lastname');
    const PhoneNumber = document.querySelector('#PhoneNumber');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneNumberRegex = /^(?:\+212|0)([5-7]\d{8})$/;
    let countryRegex = /^[a-zA-Z\s]+$/;
    let fstNameRegex = countryRegex;
    let lastNameRegex = countryRegex;
    const emailError = document.querySelector('#email-error');
    const firstnameError = document.querySelector('#firstname-error');
    const lastnameError = document.querySelector('#lastname-error');
    const phonenumberError = document.querySelector('#phonenumber-error');
    const countryError = document.querySelector('#country-error');
    form.addEventListener('submit', validateLogin);

    function validateLogin(event) {
        event.preventDefault();
        emailError.innerHTML = '';
        countryError.innerHTML = '';
        firstnameError.innerHTML = '';
        lastnameError.innerHTML = '';
        phonenumberError.innerHTML = '';

        let hasError = false;

        if (!emailInput.value.trim()) {
            displayError(emailInput, emailError, "Email field is required");
            hasError = true;
        }
        if (!Country.value.trim()) {
            displayError(Country, countryError, "Country field is required");
            hasError = true;
        }
        if (!firstname.value.trim()) {
            displayError(firstname, firstnameError, "First name field is required");
            hasError = true;
        }
        if (!lastname.value.trim()) {
            displayError(lastname, lastnameError, "Last name field is required");
            hasError = true;
        }
        if (!PhoneNumber.value.trim()) {
            displayError(PhoneNumber, phonenumberError, "Phone Number field is required");
            hasError = true;
        }
        if (!emailRegex.test(emailInput.value)) {
            displayError(emailInput, emailError, "Please enter a valid email");
            hasError = true;
        }
        if (!countryRegex.test(Country.value)) {
            displayError(Country, countryError, "Please enter a valid country name");
            hasError = true;
        }
        if (!fstNameRegex.test(firstname.value)) {
            displayError(firstname, firstnameError, "Please enter a valid first name");
            return;
        }
        if (!lastNameRegex.test(lastname.value)) {
            displayError(lastname, lastnameError, "Please enter a valid last name");
            return;
        }
        if (!phoneNumberRegex.test(PhoneNumber.value)) {
            displayError(PhoneNumber, phonenumberError, "Please enter a valid phone number");
            return;
        }

        form.submit();
    }

    function displayError(input, errorSpan, errorMessage) {
        input.classList.add('is-invalid');
        errorSpan.textContent = errorMessage;
    }
</script>
