@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Donation" />

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Donate Now, let's draw a smile! </h3>

                                    @php
                                        if (isset($donation_object)) {
                                            $action = '/update-donation' . '/' . $donation_object->id;
                                        } else {
                                            $action = '/add-donation';
                                        }
                                    @endphp

                                    <form method="POST" id="donationForm" name="donationForm"
                                        action="{{ $action }}" class="contactForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="donation_title">Donation Title</label>
                                                    <input type="text" class="form-control" name="donation_title"
                                                        id="donation_title" placeholder="Donation Title"
                                                        value="{{ old('donation_title', $donation_object->donation_title ?? null) }}">
                                                    @error('donation_title')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="pic_url">Picture</label>
                                                    <div class="file-upload">
                                                        <label for="file">Choose file</label>
                                                        <input type="file" id="donation_picture"
                                                            value="{{ old('donation_picture', $donation_object->donation_picture ?? null) }}"
                                                            name="donation_picture">
                                                    </div>

                                                    @error('donation_picture')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-sm-4 col-form-label label">Type</label>
                                                    <div class="col-sm-8 d-flex  align-items-center">
                                                        <div
                                                            class="custom-control custom-radio custom-control-inline pb-0">
                                                            <input type="radio" id="Animal" name="type"
                                                                value="animal"
                                                                {{ old('type') == 'animal' ? 'checked' : '' }}
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="Animal">Animal</label>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-radio custom-control-inline pb-0">
                                                            <input type="radio" id="Material" name="type"
                                                                class="custom-control-input" value="material"
                                                                {{ old('type') == 'material' ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                for="Material">Material</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('type')
                                                    <span class="text-12 text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="donation_title">Tags</label>
                                                    <input type="text" class="form-control" name="tags"
                                                        id="donation_title" placeholder="Donation Tags"
                                                        value="{{ old('tags', $donation_object->tags ?? null) }}">
                                                    @error('tags')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="description">Description</label>
                                                    <textarea name="description" class="form-control" id="description" cols="30" rows="4"
                                                        placeholder="Donation Description"> {{ old('description', $donation_object->description ?? null) }}</textarea>
                                                    @error('description')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Submit" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img"
                                    style="background-image: url('{{ url('images/img.jpg') }}');">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials._footer')
