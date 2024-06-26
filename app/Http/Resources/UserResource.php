<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $email
 * @property mixed $email_verified_at
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $username
 * @property mixed $pinned_post_id
 * @property mixed $cover_path
 * @property mixed $avatar_path
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "email_verified_at" => $this->email_verified_at,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "username" => $this->username,
            'pinned_post_id' => $this->pinned_post_id,
            "cover_url" => $this->cover_path ? Storage::url($this->cover_path) : null,
            "avatar_url" => $this->avatar_path ? Storage::url($this->avatar_path) : '/img/default_avatar.webp',
        ];
    }
}
