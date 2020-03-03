<?php

namespace App\Http\Resources;

use App\Models\Comment;

/**
 * @mixin Comment
 */
class CommentResource extends BaseResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'post_id' => $this->post_id,
            'text' => $this->text,
        ];
        
        return $data;
    }
}