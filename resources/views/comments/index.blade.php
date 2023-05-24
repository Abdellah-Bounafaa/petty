<div class="pt-5 mt-5">

    @if ($blog->comment->count() > 0)
        <h3 class="mb-5">{{ $totalComment }} Comments</h3>
        <ul class="comment-list">
            @foreach ($blog->comment as $comment)
                <li class="comment">
                    <div class="vcard bio">
                        <img src="{{ asset('uploads/avatars') . '/' . ($comment->user->avatar ? $comment->user->avatar : 'default.jpeg') }}"
                            alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</h3>
                        <div class="meta">{{ date('M d, Y', strtotime($comment->created_at)) }} at
                            {{ date('H:m:s', strtotime($comment->created_at)) }}</div>
                        <p>{{ $comment->content }}</p>
                        <div class="d-flex" style="gap: 5px">

                            @if (Auth::id() == $comment->user->id)
                                <div class="d-flex" style="gap: 5px">



                                    <p><a href="javascript::void()" onclick="showUpdate(this)" class="reply">Update</a>
                                    </p>
                                    <form action="{{ route('delete-comment', $comment->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input style="border: none;" class="reply" type="submit" value="Delete">
                                    </form>


                                </div>
                                <p><a href="javascript::void()" onclick="showReply(this)" class="reply">reply</a>
                                </p>
                            @endif
                            {{-- <p><a href="javascript::void()" onclick="showReply(this)" class="reply">Reply</a></p> --}}
                            {{-- <button onclick="showReply(this, 'reply')">Reply</button> --}}
                        </div>
                    </div>

                    <ul class="children">
                        @foreach ($comment->reply as $reply)
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('uploads/avatars') . '/' . ($reply->avatar ? $reply->avatar : 'default.jpeg') }}"
                                        alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{ $reply->user->first_name . ' ' . $reply->user->last_name }}
                                    </h3>
                                    <div class="meta">{{ date('M d, Y', strtotime($reply->created_at)) }} at
                                        {{ date('H:m:s', strtotime($reply->created_at)) }}</div>
                                    <p>{{ $reply->content }}</p>
                                    <div class="d-flex" style="gap: 5px">
                                        @if ($comment->reply->count() > 0)
                                            @if (Auth::id() == $reply->user->id)
                                                <div class="d-flex" style="gap: 5px">
                                                    <p><a href="javascript::void()" onclick="showUpdateReply(this)"
                                                            class="reply">Update</a>
                                                    </p>



                                                    <form action="{{ route('destroy-comment-reply', $reply->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <input style="border: none;" class="reply" type="submit"
                                                            value="Delete">
                                                    </form>

                                                </div>
                                            @endif
                                            <p><a href="javascript::void()"onclick="showReply(this)"
                                                    class="reply">Reply</a>
                                            </p>
                                    </div>
                                </div>
                                <div class="update-reply-field" style="display: none;margin-top:10px">
                                    <form action="{{ route('update-comment-reply', $reply->id) }}" method="post">
                                        @csrf
                                        <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="...">{{ old('content') }}</textarea>
                                        <input type="submit" value="Submit" class="btn btn-success mt-2">
                                        @error('content')
                                            <p style="font-size: 14px;color:red">{{ $message }}</p>
                                        @enderror
                                    </form>
                                </div>
                        @endif
                </li>
            @endforeach
        </ul>
        </li>
    @endforeach
    <div class="reply-field" style="display: none;margin-top:10px">
        <form method="post" action="{{ route('add-comment-reply', $comment->id) }}" data-button="">
            @csrf
            <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="...">{{ old('content') }}</textarea>
            <input type="submit" value="Submit" class="btn btn-success mt-2">
            @error('content')
                <p style="font-size: 14px;color:red">{{ $message }}</p>
            @enderror
        </form>
    </div>
    <div class="update-field" style="display: none;margin-top:10px">
        <form action="{{ route('update-comment', $comment->id) }}" method="post">
            @csrf
            <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="...">{{ old('content') }}</textarea>
            <input type="submit" value="Submit" class="btn btn-success mt-2">
            @error('content')
                <p style="font-size: 14px;color:red">{{ $message }}</p>
            @enderror
        </form>
    </div>

    </ul>
    <script>
        function showReply(e) {
            $('.update-reply-field').hide()
            $('.update-field').hide();
            $('.reply-field').insertAfter($(e));
            $('.reply-field').show();
        }

        function showUpdate(e) {
            $('.reply-field').hide();
            $('.update-field').insertAfter($(e));
            $('.update-field').show();
        }

        function showUpdateReply(e) {
            $('.reply-field').hide();
            $('.update-reply-field').insertAfter($(e));
            $('.update-reply-field').show();
        }
    </script>
    @endif

</div>



@include('comments.create', ['blog' => $blog])
