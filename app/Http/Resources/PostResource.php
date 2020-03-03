<?php

namespace App\Http\Resources;

use App\Models\Post;

/**
 * @mixin Post
 */
class PostResource extends BaseResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->title,
            'title' => $this->title,
            'username' => $this->user->name,
            'content' => $this->content,
            'comments' => CommentResource::collection($this->comments),
        ];
        
        return $data;
    }
}