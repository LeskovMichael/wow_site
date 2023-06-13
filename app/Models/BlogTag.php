<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogTag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function blog_posts()
    {
        return $this->belongsToMany(BlogPost::class,
            'blog_post_tags', 'blog_tag_id', 'blog_post_id');
    }
}
