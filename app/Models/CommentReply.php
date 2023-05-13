<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    use HasFactory;
    public $table = "comments_reply";
    public $primarykey = "id";
    public $incrementing = true;
    protected $fillable = [
        'comment_id',
        'content',
        "user_id"
    ];
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
