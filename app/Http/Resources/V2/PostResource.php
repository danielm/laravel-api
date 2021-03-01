<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'created_at' => $this->created_at, 
            'title' => $this->title,
            'content' => $this->content,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email
            ]
        ];
    }
}
