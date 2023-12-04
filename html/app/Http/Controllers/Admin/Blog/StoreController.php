<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreRequest;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    private $validated_data;

    public function __invoke(StoreRequest $storeRequest)
    {
        $this->validated_data = $storeRequest->validated();

        // dd($this->storeBlogPost());
        $this->storeBlogPost();
        return redirect()->route('admin.blog.index')->with(['success' => 'Blog post successfully stored.']);
    }

    private function storeBlogPost()
    {
        $result = Blog::create($this->buildStoreData());

        return $result;
    }

    private function buildStoreData(): array
    {
        $response_data = [
            'url' => isset($this->validated_data['url']) ? $this->slugify($this->validated_data['url']) : '',
            'title' => isset($this->validated_data['title']) ? $this->validated_data['title'] : '',
            'meta_description' => isset($this->validated_data['meta_description']) ? $this->validated_data['meta_description'] : '',
            'meta_keywords' => isset($this->validated_data['meta_keywords']) ? $this->validated_data['meta_keywords'] : '',
            'date' => isset($this->validated_data['date']) ? $this->validated_data['date'] : '',
            'author' => isset($this->validated_data['author']) ? $this->validated_data['author'] : '',
            'breadcrumb' => isset($this->validated_data['breadcrumb']) ? $this->validated_data['breadcrumb'] : '',
            'h1' => isset($this->validated_data['h1']) ? $this->validated_data['h1'] : '',
            'h2' => isset($this->validated_data['h2']) ? $this->validated_data['h2'] : '',
            'p_content' => isset($this->validated_data['p_content']) ? $this->validated_data['p_content'] : '',
            'img_alt' => isset($this->validated_data['img_alt']) ? $this->validated_data['img_alt'] : '',
            'img_src' => $this->uploadImg(),
        ];
        for ($i = 1; $i <= 10; $i++)
        {
            if(isset($this->validated_data['h3_' . $i]))
            {
                $response_data['h3_' . $i] = $this->validated_data['h3_' . $i];
            }
            if (isset($this->validated_data['p_' . $i]))
            {
                $response_data['p_' . $i] = $this->validated_data['p_' . $i];
            }
        }
        return $response_data;
    }

    private function slugify($string): string
    {
        return Str::slug($string);
    }

    private function setImgName(): string
    {
        $original_name = $this->validated_data['img_src']->getClientOriginalName();
        $unique_id = time();

        return $unique_id . '_' . $original_name;
    }

    private function uploadImg(): string
    {
        if (isset($this->validated_data['img_src']))
        {
            $imgName = $this->setImgName();
            $result = $this->validated_data['img_src']->move(public_path('images/blog'), $imgName);
            return $imgName;
        }
        
        return '';
    }
}
