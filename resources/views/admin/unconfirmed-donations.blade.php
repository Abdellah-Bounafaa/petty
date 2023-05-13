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
    <!-- Include Noty CSS file via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />

    <!-- Include Noty JS file via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
</head>

<body>

    <div class="wrap">
        <x-hero />
        @if ($unconfirmed_donation->count() > 0)
            <x-flash-message />
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="unconfirmed-header p-3 d-flex flex-row justify-content-between align-items-center">
                                <p class="card-title">Unconfirmed Donations Table</p>
                                <div class="unconfirmed-btns">
                                    <a href="{{ route('dash', 1) }}" class="btn btn-secondary">Back</a>
                                    <a href="{{ route('add-donation') }}" class="btn btn-success">Add New Donation</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="example" class="display expandable-table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>User</th>
                                                    <th>Donation Title</th>
                                                    <th>Category</th>
                                                    <th>Confirm</th>
                                                    <th>Display</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($unconfirmed_donation as $donation)
                                                    <tr>
                                                        <td>{{ $donation->id }}</td>
                                                        <td>{{ $donation->user->first_name . ' ' . $donation->user->last_name }}
                                                        </td>
                                                        <td>{{ $donation->donation_title }}</td>
                                                        <td>{{ $donation->type }}</td>
                                                        <td>
                                                            <form
                                                                action="{{ route('confirm_donation', $donation->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('put')
                                                                <input type="submit"
                                                                    class="btn btn-inverse-info btn-fw" value="Confirm">
                                                            </form>
                                                        </td>
                                                        <td><a href="{{ route('donation-detail', $donation->id) }}"
                                                                class="btn btn-inverse-success btn-fw">Display</a>
                                                        </td>
                                                        <td>
                                                            <form
                                                                action="{{ route('destroy_donation', $donation->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="submit"
                                                                    class="btn btn-inverse-danger btn-fw"
                                                                    value="Delete">
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
@else
    <div class="no-donations">
        <h2>No Unconfirmed Donation Yet</h2>
        <a href="{{ route('dash', 1) }}" class="btn btn-secondary">Back</a>
    </div>


    @endif

    @include('partials._admin_footer')
