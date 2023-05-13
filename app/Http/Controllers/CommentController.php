<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $post_id)
    {
        $request->validate([
            "content" => "required"
        ]);
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->post_id = $post_id;
        $comment->save();
        return back()->with('success', 'Comment created successfully');
    }
    public function update(Request $request)
    {
        $comment = Comment::findOrFail($request->id);
        $comment->content = $request->content;
        $comment->save();
        return back()->with('success', 'Comment updated successfully');
    }
    public function destroy(string $id)
    {
        $comment = Comment::find($id); // Replace CommentModel with the correct model name for your comments
        if ($comment) {
            $comment->reply()->delete();

            $comment->delete();
        }
        return back()->with('success', 'Comment deleted successfully');
    }
}