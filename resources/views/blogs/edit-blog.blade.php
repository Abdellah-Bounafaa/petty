@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Blog" />

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Share Your Idea And Requests Now, and be one of our Community
                                    </h3>

                                    @php
                                        if (isset($blog)) {
                                            $action = '/blogs/single-blogs/edit-blog' . '/' . $blog->id;
                                        } else {
                                            $action = '/blogs/add-blog';
                                        }
                                    @endphp

                                    <form method="POST" action="{{ $action }}" class="contactForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="title">Blog Title</label>
                                                    <input type="text" class="form-control" name="title"
                                                        id="title" placeholder="Blog Title"
                                                        value="{{ old('title', $blog->title ?? null) }}">
                                                    @error('title')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="blog_picture">Picture</label>
                                                    <div class="file-upload">
                                                        <label for="file">Choose file</label>
                                                        <input type="file" id="blog_picture"
                                                            value="{{ old('blog_picture', $blog->blog_picture ?? null) }}"
                                                            name="blog_picture">
                                                    </div>

                                                    @error('blog_picture')
                                                        <span class="text-12 text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="content">Body</label>
                                                    <textarea name="content" class="form-control" id="description" cols="30" rows="4" placeholder="Blog Content"> {{ old('content', $blog->content ?? null) }}</textarea>
                                                    @error('content')
                                                        <span class="text-12 text-danger">{!! $message !!}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="blog_tags">Tags</label>
                                                    <input type="text" placeholder="Blog tags(comma searated)"
                                                        class="form-control" id="blog_tags" name="blog_tags"
                                                        value="{{ old('blog_tags', $blog->blog_tags ?? null) }}" />
                                                    @error('blog_tags')
                                                        <span class="text-12 text-danger">{!! $message !!}</span>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

    @include('partials._footer')
