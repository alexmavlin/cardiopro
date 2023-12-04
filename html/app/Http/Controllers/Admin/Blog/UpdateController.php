<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\UpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    private $blog;
    private $validated_data;

    public function __invoke(Blog $blog, UpdateRequest $updateRequest)
    {
        $this->blog = $blog;
        $this->validated_data = $updateRequest->validated();
        
        // dd($this->updatePost());
        $this->updatePost();
        return redirect()->route('admin.blog.index');
    }

    private function updatePost(): bool
    {
        $result = $this->blog->update($this->buildUpdateData());
        return $result;
    }

    private function buildUpdateData(): array
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
            'img_src' => $this->updateImg(),
        ];
        return $this->unsetEqualData($response_data);
    }

    private function unsetEqualData($array): array
    {
        foreach ($array as $key => $value)
        {
            if ($value == $this->blog[$key])
            {
                unset($array[$key]);
            }
        }
        return $array;
    }

    private function slugify($string): string
    {
        return Str::slug($string);
    }

    private function updateImg(): string
    {
        if (isset($this->validated_data['img_src']))
        {
            $this->deletePreviousImg();

            $imgName = $this->setImgName();
            $result = $this->validated_data['img_src']->move(public_path('images/blog'), $imgName);
            return $imgName;
        }

        return $this->blog->img_src;
    }

    private function deletePreviousImg(): void
    {
        if ($this->blog->img_src)
        {
            $prevImgSrc = public_path('images/blog/') . $this->blog->img_src;
            // dd($prevImgSrc);
            if (file_exists($prevImgSrc))
            {
                unlink($prevImgSrc);
            }
        }
    }

    private function setImgName(): string
    {
        $original_name = $this->validated_data['img_src']->getClientOriginalName();
        $unique_id = time();

        return $unique_id . '_' . $original_name;
    }

}
