@props(['admin', 'donation_count', 'unconfirmed_donation_count', 'users_count', 'slider_donations', 'slider_blogs'])
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{ $admin->first_name }}</h3>

                        <h6 class="font-weight-normal mb-0">To petty
                            <span class="text-primary">dashboard!</span>
                        </h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white " type="button">
                                    <i class="mdi mdi-calendar"></i>
                                    Today ( {{ date('d M Y') }})
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('admin/images/dashboard/people.svg') }}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Bangalore</h4>
                                    <h6 class="font-weight-normal">India</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Donations</p>
                                <p class="fs-30 mb-2">{{ $donation_count }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Number of users</p>
                                <p class="fs-30 mb-2">{{ $users_count }}</p>
                                {{-- <p>Unconformmed</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Donations</p>
                                <p class="fs-30 mb-2">{{ $unconfirmed_donation_count }}</p>
                                {{-- <p>2.00% (30 days)</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Number of Comments</p>
                                <p class="fs-30 mb-2">47033</p>
                                {{-- <p>0.22% (30 days)</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <p class="card-title mb-2">Your Last Donations</p>
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                    $donationChunks = $slider_donations->chunk(3); // Split donations into chunks of 3 for each carousel item
                                @endphp
                                @foreach ($donationChunks as $index => $donationChunk)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($donationChunk as $donation)
                                                <div class="col-md-4 d-flex">
                                                    <div class="donation-entry align-self-stretch col-lg-12">
                                                        <div href="blog-single.html" class="block-20 rounded"
                                                            style="background-image: url('{{ url('uploads/donations' . '/' . $donation->donation_picture) }}')">
                                                        </div>
                                                        <div class="text p-4 donation-admin-card" style="color:black">
                                                            <div class="meta mb-2 d-flex justify-content-between">
                                                                <div>
                                                                    {{ date('M ,d Y', strtotime($donation->created_at)) }}
                                                                </div>
                                                                {{-- <div><a href="#">Admin</a></div> --}}
                                                                <div>
                                                                    {{ $donation->type }}</div>
                                                            </div>
                                                            <h5 class="heading"> <a
                                                                    href="/donations/single-donation/{{ $donation->id }}">

                                                                    {{ $donation->donation_title }}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-4">

                        <a class="btn bg-gradient-warning">Count :
                            <span>{{ $slider_donations->count() }}</span>
                        </a>
                        <a href="{{ route('add-donation') }}" class="btn btn-success ml-4">Add New Donation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <p class="card-title mb-2">Your Last Blogs</p>
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                    $blogsChunks = $slider_blogs->chunk(3); // Split donations into chunks of 3 for each carousel item
                                @endphp
                                @foreach ($blogsChunks as $index => $blogsChunk)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($blogsChunk as $blog)
                                                <div class="col-md-4 d-flex">
                                                    <div class="donation-entry align-self-stretch col-lg-12">
                                                        <div href="blog-single.html" class="block-20 rounded"
                                                            style="background-image: url('{{ url('uploads/blogs' . '/' . $blog->blog_picture) }}')">
                                                        </div>
                                                        <div class="text p-4 donation-admin-card" style="color:black">
                                                            <div class="meta mb-2 d-flex justify-content-between">
                                                                <div>
                                                                    {{ date('M ,d Y', strtotime($blog->created_at)) }}
                                                                </div>
                                                                {{-- <div><a href="#">Admin</a></div> --}}
                                                                {{-- <div>
                                                                    {{ $blog->type }}</div> --}}
                                                            </div>
                                                            <h5 class="heading">
                                                                {{ $blog->title }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#detailedReports" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#detailedReports" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-4">

                        <a class="btn bg-gradient-warning">Count :
                            <span>{{ $slider_blogs->count() }}</span>
                        </a>
                        <a href="{{ route('create-blog') }}" class="btn btn-success ml-4">Add New Blog</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
