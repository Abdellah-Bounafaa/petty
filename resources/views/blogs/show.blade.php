@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Blog" />

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="{{ asset('uploads/blogs') . '/' . $blog->blog_picture }}" alt=""
                            class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{ $blog->title }}</h2>
                    <p>{!! $blog->content !!}</p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        @php
                            $tags = explode(',', $blog->blog_tags);
                        @endphp
                        @if (count($tags) > 0)
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    @if (!empty(trim($tag)))
                                        <a href="#" class="tag-cloud-link">{{ $tag }}</a>
                                    @endif
                                @endforeach
                            </div>
                        @endif

                    </div>
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
                                    document.getElementById('deleteDonationForm').action = "{{ '/delete-blog' . '/' . $blog->id }}";
                                    document.getElementById('deleteDonationForm').submit();
                                }
                            });
                        }
                    </script>
                    @if (Auth::id() == $blog->user_id)
                        <div style="display: flex">
                            <a style="color: black;margin-right:5px"
                                href="{{ '/blogs/update-blog/' . $blog->id }}">Update</a>
                            <form id="deleteDonationForm">
                                @csrf
                                <input style="border: none;background: none;" onclick="showDeleteConfirmation(event)"
                                    type="submit" value="Delete">
                            </form>

                        </div>
                    @else
                        <div class="about-author d-flex p-4 bg-light">
                            <div class="bio mr-5">
                                <img src="{{ asset('uploads/avatars' . '/' . ($blog->user->avatar ? $blog->user->avatar : 'default.jpeg')) }}"
                                    alt="User avatar" class="img-fluid mb-4">
                            </div>
                            <div class="desc">
                                <h3>{{ $blog->user->first_name . ' ' . $blog->user->last_name }}</h3>
                                <p>{{ $blog->user->bio }}</p>
                            </div>
                        </div>
                    @endif
                    @php
                        $totalComment = isset($totalComment) ? $totalComment : 0;
                    @endphp
                    @include('comments.index', ['blog' => $blog, 'totalComment' => $totalComment])
                </div>
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            @if (auth()->check())
                                <a href="{{ route('create-blog') }}" class="btn btn-success">Add New Blog</a>
                            @else
                                <div class="text-center">
                                    <p><b>Sign Up</b>
                                    <p> And Share Something With Others</p>
                                    </p>
                                    <a href="{{ route('create-blog') }}" class="btn btn-success">Add New Blog</a>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">

                        <h3>Recent Blogs</h3>
                        @foreach ($random_blogs as $blog)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('uploads/blogs') . '/' . $blog->blog_picture }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ '/blogs/single-blog/' . $blog->id }}">{{ $blog->title }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a><span
                                                    class="icon-calendar"></span>{{ date('M d, Y', strtotime($blog->created_at)) }}</a>
                                        </div>
                                        <div><span><span class="icon-person"></span>
                                                {{ $blog->user->first_name . ' ' . $blog->user->last_name }}</span>
                                        </div>
                                        <div><span><span class="icon-chat"></span> 19</span></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>

                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Donations</h3>
                            @foreach ($random_donations as $donation)
                                <li><a href="{{ route('donation-detail', $donation->id) }}">{{ $donation->donation_title }}
                                        <span class="fa fa-chevron-right"></span></a></li>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@include('partials._footer')
