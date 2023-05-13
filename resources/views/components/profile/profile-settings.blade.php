<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
    <div class="profile-setting">
        <form id="settings-Form" method="POST" action="/profile/{{ auth()->user()->id }}">
            @csrf
            @method('PUT')
            <ul class="profile-edit-list profile-row">
                <li class="weight-500 ">
                    <h4 class="text-blue h5 mb-20">Edit Your Personal
                        Setting</h4>
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control form-control-lg" value="{{ auth()->user()->first_name }}"
                            id="firstname" name="first_name" type="text">
                        @error('first_name')
                            <span class="text-12 text-danger">{{ $message }}</span>
                        @enderror


                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input id="lastname" value="{{ auth()->user()->last_name }}" name="last_name"
                            class="form-control form-control-lg" type="text">
                        @error('last_name')
                            <span class="text-12 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="{{ auth()->user()->email }}" class="form-control form-control-lg"
                            id="email-input" type="text">

                        @error('email')
                            <span class="text-12 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input id="PhoneNumber" value="{{ auth()->user()->phone_number }}" name="phone_number"
                            class="form-control form-control-lg" type="text">
                        @error('phone_number')
                            <span class="text-12 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input id="Country" name="country" value="{{ auth()->user()->country }}"
                            class="form-control form-control-lg" type="text">
                        @error('country')
                            <span class="text-12 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control">{{ auth()->user()->bio }}</textarea>
                        @error('bio')
                            <span class="text-12 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" class="btn btn-primary" value="Save & Update">
                </li>
            </ul>
        </form>
    </div>
</div>
