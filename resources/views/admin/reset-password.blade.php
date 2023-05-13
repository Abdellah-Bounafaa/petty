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

<div class="wrap">
    <x-hero />
    <div class="container-fluid page-body-wrapper">
        <x-admin.sidebar />
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <x-flash-message />
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-8 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title text-success">Forgot Password</h4>
                                            <form class="forms-sample"
                                                action="{{ route('update-admin-password', auth()->user()->id) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <div class="form-group row">
                                                    <label for="exampleInputMobile"
                                                        class="col-sm-3 col-form-label">Current Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" value="{{ old('current_password') }}"
                                                            name="current_password" class="form-control"
                                                            id="exampleInputMobile" placeholder="Current Password">
                                                        @error('current_password')
                                                            <h6 class="text-danger">{{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputPassword2"
                                                        class="col-sm-3 col-form-label">New Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" value="{{ old('new_password') }}"
                                                            name="new_password" class="form-control"
                                                            id="exampleInputPassword2" placeholder="New Password">

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2"
                                                        class="col-sm-3 col-form-label">Repeat New Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password"
                                                            value="{{ old('new_password_confirmation') }}"
                                                            name="new_password_confirmation" class="form-control"
                                                            id="exampleInputConfirmPassword2"
                                                            placeholder="Repeat New Password">
                                                        @error('new_password')
                                                            <h6 class="text-danger">{{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-light">Cancel</button>
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
