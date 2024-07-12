<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class creator_tables extends Model
{
    use HasFactory;

    protected $table = 'creator_tables'; // Ensure this is the correct table name
    protected $fillable = ['creator_name', 'creator_email', 'social_links', 'description', 'avatar','password'];
}
