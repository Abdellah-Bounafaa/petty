<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Donation;
use App\Models\CommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::where('status', 1)->paginate(16)->onEachSide(1);
        return view('blogs.index')->with('blogs', $blogs);
    }
    public function create(Request $request)
    {
        $id = $request->id;
        $blog = Blog::findOrFail($id);
        if ($blog) {
            return view('blogs.edit-blog')->with('blog', $blog);
        }
    }
    public function show(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        $random_blogs = Blog::inRandomOrder()->limit(5)->get();
        $random_donations = Donation::inRandomOrder()->limit(5)->get();
        $commentCount = $blog->comment->count();
        $replyCount = $blog->comment->flatMap(function ($comment) {
            return $comment->reply;
        })->count();
        $totalComment = ($replyCount + $commentCount);


        if ($blog && $blog->status == "1") {
            return view('blogs.show', ['blog' => $blog, "random_blogs" => $random_blogs, "random_donations" => $random_donations, "totalComment" => $totalComment]);
        } else  if (auth()->user()->user_type == "1" && $blog && $blog->status == "0") {
            return view('blogs.show')->with(['blog' => $blog, "random_blogs" => $random_blogs, "random_donations" => $random_donations]);
        } else {
            abort(404);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => "required",
            'blog_picture' =>
            'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //upload images to uploads/blogs
        $path = 'uploads/blogs/';
        if (!File::exists(public_path($path))) {
            File::makeDirectory(public_path($path), 0777, true);
        }
        $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.' . $request->file('blog_picture')->extension();
        $request->file('blog_picture')->move(public_path($path), $new_image_name);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->blog_tags = $request->blog_tags;
        $blog->blog_picture = $new_image_name;
        $blog->user_id = auth()->user()->id;
        $blog->status = auth()->user()->user_type == "1" ? "1" : 0;
        $blog->save();
        return redirect('/blogs')->with('success', 'Blog created and will be processed');
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => "required",
            'blog_picture' => 'required|image|mimes:png,jpg,jpeg,svg,gif'
        ]);
        //upload images to uploads/blogs
        $path = 'uploads/blogs/';
        if (!File::exists(public_path($path))) {
            File::makeDirectory(public_path($path), 0777, true);
        }
        $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.' . $request->file('blog_picture')->extension();
        $request->file('blog_picture')->move(public_path($path), $new_image_name);
        $id = $request->id;
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->blog_tags = $request->blog_tags;
        $blog->blog_picture = $new_image_name;
        $blog->status = auth()->user()->user_type == "1" ? "1" : 0;
        $blog->save();
        return redirect('/blogs')->with('success', 'Blog updated and will be processed');
    }
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        // $comment=Comment()
        if ($blog) {
            foreach ($blog->comment as $comment) {
                $comment->reply()->delete();
            }
            $blog->comment()->delete();
            $blog->delete();
        }
        return redirect('/blogs')->with('success', 'Blog deleted successfully');
    }
    public function search(Request $request)
    {
        $blogs = Blog::query()->where('title', "like", "%" . $request->title . "%")->get();
        if ($blogs) {
            return view('blogs.index')->with('blogs', $blogs);
        }
    }
}
