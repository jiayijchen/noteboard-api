<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Default Resources return value
        // return parent::toArray($request);

        return [
            'id' => (string)$this->id,
            'type' => 'note',
            'attributes' => [
                'title' => $this->title,
                'content' => $this->content,
                'public' => (string)$this->public,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
