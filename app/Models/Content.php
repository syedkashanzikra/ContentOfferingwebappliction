<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['title', 'description', 'creator_id', 'post_picture', 'post_video'];

    // Relationship to User
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
