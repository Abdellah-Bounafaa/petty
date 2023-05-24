{{-- @include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page='Product details' />
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="product-wrap">
                <div class="product-detail-wrap mb-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="product-slider slider-arrow">
                                <div class="product-slide">
                                    <img src="{{ url('uploads/donations/' . $donation_object->donation_picture) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="product-detail-desc pd-20 card-box height-100-p">
                                <div class="donation-header">
                                    <div> <a href="/profile/{{ $donation_object->user->id }}"> <b class="mb-20 pt-20">
                                                {{ $donation_object->user->first_name . ' ' . $donation_object->user->last_name }}
                                            </b></a>
                                        <span class="donation_created_at">
                                            {{ $donation_object->updated_at->diffForHumans() }}</span>
                                    </div>
                                    @auth


                                        @if ($donation_object->user_id == auth()->user()->id)
                                            <div class="dropdown-dots">
                                                <div class="dots">
                                                    <div class="dot"></div>
                                                    <div class="dot"></div>
                                                    <div class="dot"></div>
                                                </div>
                                                <ul class="dropdown-menu-dots">
                                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        type="button"><a
                                                            href="{{ route('update-donation', $donation_object->id) }}"
                                                            style="color:black">Update</a>
                                                    </li>
                                                    <li>
                                                        <script>
                                                            function showDeleteConfirmation(event) {
                                                                event.preventDefault(); // Prevent form submission

                                                                Swal.fire({
                                                                    title: 'Delete Confirmation',
                                                                    text: 'Are you sure you want to delete this donation?',
                                                                    // icon: 'warning',
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: '#d33',
                                                                    cancelButtonColor: '#3085d6',
                                                                    confirmButtonText: 'Yes, delete it!',
                                                                }).then((result) => {
                                                                    if (result.isConfirmed) {
                                                                        // Submit the form to perform the deletion
                                                                        document.getElementById('deleteDonationForm').action =
                                                                            '{{ route('destroy-donation', $donation_object->id) }}';
                                                                        document.getElementById('deleteDonationForm').submit();
                                                                    }
                                                                });
                                                            }
                                                        </script>
                                                        <form id="deleteDonationForm" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="button" class="delete-donation" value="Delete"
                                                                onclick="showDeleteConfirmation(event)">
                                                        </form>

                                                    </li>

                                                </ul>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                                <h3 class="mb-20 pt-20">{{ $donation_object->donation_title }}</h3>

                                <p>{{ $donation_object->description }}</p>
                                 <div class="row">
                                    <div class="col-md-6 col-6 pt-2">
                                        <a href="#" class="btn btn-outline-primary btn-block ">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mb-20">Recent Donations</h4>
                <div class="product-list">
                    <ul class="row">
                        <x-donations.recent-donations :recent_donations="$recent_donations" />
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    let dropdownMenu = document.querySelector('.dropdown-menu-dots');

    document.querySelector('.dots').addEventListener('click', function() {
        dropdownMenu.style.display = 'block';
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown-dots') && event.target !== dropdownMenu) {
            dropdownMenu.style.display = 'none';
        }
    });

    document.querySelector('.dots').addEventListener('dblclick', function() {
        dropdownMenu.style.display = 'none';
    });
</script>
@include('partials._footer') --}}
@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Donation" />

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="donation-header p-2 mb-2 d-flex justify-content-between align-items-center">
                        <div class="header-infos d-flex justify-content-between align-items-center gap-4">
                            <img style="width:70px;border-radius:50%;border:4px solid #28a745"
                                src="{{ asset('uploads/avatars') . '/' . ($donation_object->user->avatar ? $donation_object->user->avatar : 'default.jpeg') }}"
                                alt="">
                            <div>
                                <span
                                    class="d-block text-black font-weight-bold fs-5">{{ $donation_object->user->first_name . ' ' . $donation_object->user->last_name }}
                                </span>
                                <span>{{ $donation_object->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div>
                            @auth
                                @if ($donation_object->user_id == auth()->user()->id)
                                    <div class="dropdown-dots">
                                        <div class="dots">
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                        </div>
                                        <ul class="dropdown-menu-dots">
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><a
                                                    href="{{ route('update-donation', $donation_object->id) }}"
                                                    style="color:black">Update</a>
                                            </li>
                                            <li>
                                                <script>
                                                    function showDeleteConfirmation(event) {
                                                        event.preventDefault(); // Prevent form submission

                                                        Swal.fire({
                                                            title: 'Delete Confirmation',
                                                            text: 'Are you sure you want to delete this donation?',
                                                            // icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#d33',
                                                            cancelButtonColor: '#3085d6',
                                                            confirmButtonText: 'Yes, delete it!',
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // Submit the form to perform the deletion
                                                                document.getElementById('deleteDonationForm').action =
                                                                    '{{ route('destroy-donation', $donation_object->id) }}';
                                                                document.getElementById('deleteDonationForm').submit();
                                                            }
                                                        });
                                                    }
                                                </script>
                                                <form id="deleteDonationForm" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="button" class="delete-donation" value="Delete"
                                                        onclick="showDeleteConfirmation(event)">
                                                </form>

                                            </li>

                                        </ul>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                    <p>
                        <img src="{{ url('uploads/donations/' . $donation_object->donation_picture) }}" alt=""
                            class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{ $donation_object->donation_title }}</h2>
                    <p>{{ $donation_object->description }}</p>
                    @if ($followed_orders !== null && $followed_orders->count() > 0)
                        <div class="row">
                            <div class="col-md-6 col-6 pt-2">
                                <form action="{{ route('delete-order', $followed_orders->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-outline-primary btn-block " value="Unfollow">
                                </form>
                            </div>
                        </div>
                    @elseif ($followed_orders == 0)
                        @if ($donation_object->user_id == auth()->user()->id)
                            <div class="row">
                                <div class="col-md-6 col-6 pt-2">
                                    <a href="{{ route('add-order', $donation_object->id) }}"
                                        class="btn btn-outline-primary btn-block ">Follow</a>
                                </div>
                            </div>
                        @endif
                    @endif

                </div>
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            @if (auth()->check())
                                <a href="{{ route('add-donation') }}" class="btn btn-success">Add New Donation</a>
                            @else
                                <div class="text-center">
                                    <p><b>Sign Up</b>
                                    <p> And Share Something With Others</p>
                                    </p>
                                    <a href="{{ route('add-donation') }}" class="btn btn-success">Add New Donation</a>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">

                        <h3>Recent Donations</h3>
                        @foreach ($recent_donations as $donation)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('uploads/donations') . '/' . $donation->donation_picture }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ '/blogs/single-blog/' . $donation->id }}">{{ $donation->donation_title }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a><span
                                                    class="icon-calendar"></span>{{ date('M d, Y', strtotime($donation->created_at)) }}</a>
                                        </div>
                                        <div><span><span class="icon-person"></span>
                                                {{ $donation->user->first_name . ' ' . $donation->user->last_name }}</span>
                                        </div>
                                        <div><span class="icon-chat"></span> </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@include('partials._footer')
