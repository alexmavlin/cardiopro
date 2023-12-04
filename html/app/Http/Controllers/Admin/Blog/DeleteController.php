<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    private $blog;

    public function __invoke(Blog $blog)
    {
        $this->blog = $blog;

        if ($this->deleteBlog())
        {
            return redirect()->route('admin.blog.index')->with(['success' => 'Blog post has been deleted successfully.']);
        }
        
    }

    public function deleteBlog():bool
    {
        if ($this->blog)
        {
            
            $this->deleteImg();

            $result = $this->blog->delete();
        } else {

            $result = false;

        }

        return $result;
    }

    private function deleteImg():void
    {
        if ($this->blog->img_src)
        {
            $imgSrc = public_path('images/blog/') . $this->blog->img_src;
            if (file_exists($imgSrc)){
                unlink($imgSrc);
            }
        }
    }
}
