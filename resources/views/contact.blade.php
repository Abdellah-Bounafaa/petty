@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="About Us" />
    <section class="ftco-section testimony-section" style="background-image: url('images/contactUs.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="col-md-7 heading-section text-center ftco-animate">Contact Form</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span><span class="fw-bold"> 198 West 21th Street, Suite 721
                                                New York NY 10016</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <span class="fw-bold">+ 1235 2355 98</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a style="color:black;font-weight: bold"
                                                href="mailto:info@yoursite.com">info@yoursite.com</a>
                                        </p>
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
</section>
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/abf.png);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                <x-contact-form />
            </div>
        </div>
    </div>
</section>

@include('partials._footer')
