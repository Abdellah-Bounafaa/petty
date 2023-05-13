<?php

namespace App\Traits;

use App\Models\Blog;

trait destroy
{
    public function destroy_blog($id)
    {
        $object = Blog::findOrFail($id);
        if ($object) {
            $object->delete();
        }
        return back();
    }
}
