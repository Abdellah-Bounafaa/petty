<?php

namespace App\Http\Controllers;

use App\Models\CommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentReplyController extends Controller
{
    public function store(Request $request, $comment_id)
    {
        $request->validate([
            "content" => "required"
        ]);
        $comment_reply = new CommentReply();
        $comment_reply->content = $request->content;
        $comment_reply->comment_id = $comment_id;
        $comment_reply->user_id = Auth::id();
        $comment_reply->save();
        return back();
    }
    public function update(Request $request, $id)
    {
        $comment_reply = CommentReply::find($id);
        $comment_reply->content = $request->content;
        $comment_reply->save();
        return back();
    }
    public function destroy($id)
    {
        $reply = CommentReply::findOrFail($id);
        if ($reply) {
            $reply->delete();
        }
        return back()->with('success', "Comment deleted successfully");
    }
}
