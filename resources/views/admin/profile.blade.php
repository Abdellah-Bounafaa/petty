<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile/icon-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-steps/jquery.steps.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- ijaboCropTool css --}}
    <link rel="stylesheet" href="{{ asset('ijaboCropTool/ijaboCropTool.min.css') }}">

    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>

    <div class="wrap">
        <x-hero />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            {{-- <x-admin.theme-settings /> --}}
            {{-- <x-admin.settings-panel /> --}}
            <!-- partial:partials/_sidebar.html -->
            <x-admin.sidebar />
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <x-flash-message />
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="admin-pic d-flex  align-items-center ">
                                        <div><img class="admin-pic-previewer" name="avatar"
                                                src="{{ url('uploads/avatars/' . (auth()->user()->avatar ? auth()->user()->avatar : 'default.jpeg')) }}"
                                                width="110px" alt="">
                                        </div>
                                        <div class="admin-avatar-btns">
                                            <form action="{{ route('update-admin-avatar', auth()->user()->id) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <input type="submit" class="btn btn-success" value="UPLOAD PHOTO" />
                                            </form>
                                        </div>
                                        {{-- <a href="" class="btn btn-danger">RESET</a> --}}

                                    </div>
                                    <hr style="width: 80%">
                                    <form class="form-sample"
                                        action="{{ route('updateAdminProfile', auth()->user()->id) }}" method="post">
                                        @csrf
                                        <p class="card-description">
                                            Personal info
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">First Name</label>
                                                    <div class="col-sm-9">
                                                        <input name="first_name" type="text"
                                                            value="{{ old('first_name') ? old('first_name') : auth()->user()->first_name }}"
                                                            class="form-control" />
                                                        @error('first_name')
                                                            <div class="text-danger text-10">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                                    <div class="col-sm-9">
                                                        <input name="last_name" type="text"
                                                            value="{{ old('last_name') ? old('last_name') : auth()->user()->last_name }}"
                                                            class="form-control" />
                                                        @error('last_name')
                                                            <div class="text-danger text-10">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Country</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="country"
                                                            value="{{ old('country') ? old('country') : auth()->user()->country }}"
                                                            class="form-control" placeholder="" />
                                                        @error('country')
                                                            <div class="text-danger text-10">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">
                                                        Phone Number
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input name="phone_number" type="text"
                                                            value="{{ old('phone_number') ? old('phone_number') : auth()->user()->phone_number }}"
                                                            class="form-control" />
                                                        @error('country')
                                                            <div class="text-danger text-10">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input name="email" type="text"
                                                            value="{{ old('email') ? old('email') : auth()->user()->email }}"
                                                            class="form-control" />
                                                        @error('email')
                                                            <div class="text-danger text-10">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Bio</label>
                                                    <div class="col-sm-9">
                                                        <textarea name="bio" class="form-control"id="exampleTextarea1" rows="4">
                                                         {{ old('bio') ? old('bio') : auth()->user()->bio }} </textarea>
                                                        @error('bio')
                                                            <div class="text-danger text-10">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('partials._admin_footer')
