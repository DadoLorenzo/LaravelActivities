<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'post_id', 'user_id','parent_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
