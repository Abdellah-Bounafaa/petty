@include('partials._header')


<div class="wrap">
    <x-hero />

    <div class="hero-wrap js-fullheight" style="background-image: url('images/home.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-11 ftco-animate text-center">
                    <h1 class="mb-4" style="-webkit-text-stroke: 2px #d3bd8c">Highest Quality Care For Pets You'll Love
                    </h1>
                    <div class="search-field">
                        <form action="{{ route('search_donation') }}" method="get">
                            <input type="text" class="input-search" id="" name="donation_title"
                                placeholder="Search...">
                            <input type="submit" class="search-btn" value="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-dog-eating"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Donations</h3>
                            <p>Users can make donations to support pets in need by contributing items such as pet food,
                                pet supplies, medicines, and even pet houses, to help improve the well-being of pets and
                                support pet owners facing financial challenges.</p>
                            <a href="{{ route('donations') }}"
                                class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services active text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-blind"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Blogs</h3>
                            <p>Users can access informative and engaging blog posts about various topics related to
                                pets, including pet care, training, adoption, health, and other relevant pet-related
                                news and stories and also users could make requests.</p>
                            <a href="{{ route('blogs') }}"
                                class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-5 d-flex mt-4 mb-4">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url(images/ab1.png); max-width: 100%;">
                    </div>
                </div>
                <div class="col-md-7 pl-md-5 py-md-5">
                    <div class="heading-section pt-md-5">
                        <h2 class="mb-4">Explore the services</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 services-2 w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-stethoscope"></span></div>
                            <div class="text pl-3">
                                <h4>Free pets</h4>
                                <p> Find loving homes for pets in need of new families.</p>
                            </div>
                        </div>
                        <div class="col-md-6 services-2 w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"> <span
                                    class="flaticon-grooming"></span>
                            </div>
                            <div class="text pl-3">
                                <h4>Pets Care</h4>
                                <p>Comprehensive care products for pets.</p>
                            </div>
                        </div>
                        <div class="col-md-6 services-2 w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"> <span
                                    class="flaticon-dog-eating"></span></div>
                            <div class="text pl-3">
                                <h4>Pets Food</h4>
                                <p>Nutritious meals for pets in need.</p>
                            </div>
                        </div>
                        <div class="col-md-6 services-2 w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-veterinarian"></span></div>
                            <div class="text pl-3">
                                <h4>Community</h4>
                                <p>Connect, learn, and share with our pet-loving community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="50">0</strong>
                        </div>
                        <div class="text">
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="8500">0</strong>
                        </div>
                        <div class="text">
                            <span>Professionals</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="20">0</strong>
                        </div>
                        <div class="text">
                            <span>Products</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="50">0</strong>
                        </div>
                        <div class="text">
                            <span>Pets Hosted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section testimony-section" style="background-image: url('images/dogs.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Last Donations</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($donations as $donation)
                    <div class="col-md-4 ftco-animate">
                        <div class="work mb-4 img d-flex align-items-end"
                            style="background-image: url('{{ url('uploads/donations/' . $donation->donation_picture) }}');">
                            <a href="{{ url('uploads/donations/' . $donation->donation_picture) }}"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                            <div class="desc w-100 px-4">
                                <div class="text w-100 mb-3">
                                    <span class="text-secondary">{{ $donation->type }}</span>
                                    <h2><a href="{{ route('donation-detail', $donation->id) }}"
                                            class="text-dark">{{ $donation->donation_title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Latest news from our blog</h2>
                </div>
            </div>
            <div class="row d-flex">

                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-lg-4 d-flex ftco-animate justify-content-center">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-detail', $blog->id) }}" class="block-20 rounded"
                                style="background-image: url('{{ url('uploads/blogs/' . $blog->blog_picture) }}');">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><a
                                            href="{{ route('blog-detail', $blog->id) }}">{{ date('M d, Y', strtotime($blog->updated_at ? $blog->updated_at : $blog->created_at)) }}</a>
                                    </div>
                                    <div><a
                                            href="{{ route('blog-detail', $blog->id) }}">{{ $blog->user->first_name . ' ' . $blog->user->last_name }}</a>
                                    </div>
                                </div>
                                <h3 class="heading"><a
                                        href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                    {{-- <h2 class="mb-4">Free Consultation</h2>
                    <form action="#" class="appointment">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Select services</option>
                                                <option value="">Cat Sitting</option>
                                                <option value="">Dog Walk</option>
                                                <option value="">Pet Spa</option>
                                                <option value="">Pet Grooming</option>
                                                <option value="">Pet Daycare</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Vehicle number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date"
                                            placeholder="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input type="text" class="form-control appointment_time"
                                            placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form> --}}
                    <x-contact-form />
                </div>
            </div>
        </div>
    </section>
    @include('partials._footer')
