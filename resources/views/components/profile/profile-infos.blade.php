    @props(['user_profile'])
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                        class="fa fa-pencil"></i></a>
                <img src="{{ asset('uploads/avatars') . '/' . ($user_profile->avatar ? $user_profile->avatar : 'default.jpeg') }}"
                    style="border-radius: 50%" alt="" class="image-previewer">



                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            {{-- <div class="modal-body pd-5">
                                <div class="img-container">
                                    <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                </div>
                            </div> --}}
                            <div class="modal-footer">
                                {{-- <form method="POST" action="{{ route('pic.crop', ['id' => auth()->user()->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') --}}
                                <!-- Your form fields here -->

                                <div class="form-group">
                                    <form action="{{ route('crop') }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <label for="profile_pic">Profile Picture:</label>
                                        <input type="file" name="avatar" id="avatar">
                                        <input type="submit" value="Update">
                                    </form>
                                    {{-- <input type="file" class="form-control" name="avatar" id="avatar"> --}}
                                </div>

                                {{-- <button type="submit" class="btn btn-primary">Update Profile</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           --}} </form>
                                {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center h5 mb-0">{{ $user_profile->first_name . ' ' . $user_profile->last_name }}</h5>
            <p class="text-center text-muted font-14">{{ $user_profile->bio }}</p>
            <div class="profile-info">
                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                <ul>
                    <li>
                        <span>Email Address:</span>
                        {{ $user_profile->email }}
                    </li>
                    <li>
                        <span>Phone Number:</span>
                        {{ $user_profile->phone_number }}
                    </li>
                    <li>
                        <span>Country:</span>
                        {{ $user_profile->country }}
                    </li>
                    <li>
                        <span>Member since:</span>
                        {{ $user_profile->created_at->diffForHumans() }}
                    </li>

                </ul>
            </div>


        </div>
    </div>
