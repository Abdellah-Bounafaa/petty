@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Blog" />

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded"
                                style="background-image: url('{{ url('uploads/blogs' . '/' . $blog->blog_picture) }}');">
                            </a> <a href="{{ route('blog-detail', $blog->id) }}">
                                <div class="text p-4">

                                    <div class="meta mb-2">
                                        <div><span
                                                href="#">{{ date('M d, Y', strtotime($blog->crepted_at)) }}</span>
                                        </div>
                                        <div><span
                                                href="#">{{ $blog->user->first_name . ' ' . $blog->user->last_name }}</span>
                                        </div>
                                        {{--   <div><span href="#" class="meta-chat"><span class="fa fa-comment"></span>
                                                {{ $blog->comment()->count() +$blog->comment()->reply()->count() }}</span>
                                        </div> --}}
                                    </div>
                                    <h3 class="heading"><a
                                            href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a></h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
        {{ $blogs->links('pagination.paginate') }}
    </section>
    @include('partials._footer')
