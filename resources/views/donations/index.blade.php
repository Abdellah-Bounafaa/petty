@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Donations" />


    <section class="ftco-section bg-light">
        <div class="donations-tabs">
            <ul>
                <li class="active" data-content=".all-donations">All</li>
                <li class="" data-content=".animal-donations">Animals</li>
                <li class=" " data-content=".material-donations">Materials</li>
            </ul>
        </div>
        <div class="donations-content">
            <div class="container all-donations">
                <div class="row">
                    @if ($donations->count() > 0)
                        @isset($donations)
                            @foreach ($donations as $donation)
                                <div class="col-md-6 col-lg-3 ftco-animate">
                                    <div class="staff">
                                        <div class="img-wrap d-flex align-items-stretch">

                                            <div class="img align-self-stretch"
                                                style="background-image:url({{ url('uploads/donations/' . $donation->donation_picture) }})">
                                            </div>
                                        </div>
                                        <a href="{{ route('donation-detail', $donation->id) }}">
                                            <div class="text pt-3 px-3 pb-4 text-center">
                                                <h3>{{ $donation->donation_title }}</h3>
                                                <div class="faded">
                                                    <p>
                                                    <p>{{ Str::limit($donation->description, 30) }}</p>
                                                    <span class="ftco-social text-center">
                                                        {{ $donation->user->country }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            {{ $donations->links('pagination.paginate') }}
                        @endisset
                    @else
                        <h1 style="text-align: center">No donetions yet</h1>
                    @endif

                </div>
            </div>
            <div class="container animal-donations">
                <div class="row">
                    @if ($animal_donations->count() > 0)
                        @isset($animal_donations)
                            @foreach ($animal_donations as $donation)
                                <div class="col-md-6 col-lg-3 ftco-animate">
                                    <div class="staff">
                                        <div class="img-wrap d-flex align-items-stretch">

                                            <div class="img align-self-stretch"
                                                style="background-image:url({{ url('uploads/donations/' . $donation->donation_picture) }})">
                                            </div>
                                        </div>
                                        <a href="{{ route('donation-detail', $donation->id) }}">
                                            <div class="text pt-3 px-3 pb-4 text-center">
                                                <h3>{{ $donation->donation_title }}</h3>
                                                <div class="faded">
                                                    <p>
                                                    <p>{{ Str::limit($donation->description, 30) }}</p>
                                                    <span class="ftco-social text-center">
                                                        {{ $donation->user->country }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            {{ $animal_donations->links('pagination.paginate') }}
                        @endisset
                    @else
                        <h1 style="text-align: center">No donations yet</h1>
                    @endif

                </div>
            </div>
            <div class="material-donations">
                <div class="row">
                    @if ($material_donations->count() > 0)
                        @isset($material_donations)
                            @foreach ($material_donations as $donation)
                                <div class="col-md-6 col-lg-3 ftco-animate">
                                    <div class="staff">
                                        <div class="img-wrap d-flex align-items-stretch">

                                            <div class="img align-self-stretch"
                                                style="background-image:url({{ url('uploads/donations/' . $donation->donation_picture) }})">
                                            </div>
                                        </div>
                                        <a href="{{ route('donation-detail', $donation->id) }}">
                                            <div class="text pt-3 px-3 pb-4 text-center">
                                                <h3>{{ $donation->donation_title }}</h3>
                                                <div class="faded">
                                                    <p>
                                                    <p>{{ Str::limit($donation->description, 30) }}</p>
                                                    <span class="ftco-social text-center">
                                                        {{ $donation->user->country }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            {{ $material_donations->links('pagination.paginate') }}
                        @endisset
                    @else
                        <h1 style="text-align: center">No donations yet</h1>
                    @endif

                </div>
            </div>
        </div>


</div>
</div>
</section>
<script>
    tabs = document.querySelectorAll('.donations-tabs ul li');
    contents = document.querySelectorAll('.donations-content > div');
    tabsArray = Array.from(tabs);
    contentsArray = Array.from(contents);
    tabsArray.forEach((li) => {
        li.addEventListener('click', (e) => {
            tabsArray.forEach((ele) => {
                ele.classList.remove('active');
            })
            e.currentTarget.classList.add('active');
            contentsArray.forEach((div) => {
                div.style.display = "none"
            })
            document.querySelector(e.currentTarget.dataset.content).style.display = "block"
            // console.log(document.querySelector(e.currentTarget.dataset.content));
        })
    });
</script>
@include('partials._footer')
