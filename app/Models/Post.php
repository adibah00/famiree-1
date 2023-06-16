<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Post::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Post::class, 'parent_id');
    }
}
