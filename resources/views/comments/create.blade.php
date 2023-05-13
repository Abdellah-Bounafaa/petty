   <div class="comment-form-wrap pt-5">
       <h3 class="mb-5">Leave a comment</h3>
       <form action="{{ route('add-comment', $blog->id) }}" method="post" class="p-5 bg-light">
           @csrf
           <div class="form-group">
               <label for="message">Comment</label>
               <textarea name="content" id="Comment" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea>
               @error('content')
                   <p style="font-size: 14px;color:red;">{{ $message }}</p>
               @enderror
           </div>
           <div class="form-group">
               <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
           </div>

       </form>
   </div>
