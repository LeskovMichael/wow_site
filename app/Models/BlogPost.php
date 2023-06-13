<?php

namespace App\Models;

use App\Models\Traits\Filtreable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filtreable;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'blog_category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }

    public function blog_tags()
    {
        return $this->belongsToMany(BlogTag::class,
            'blog_post_tag', 'blog_post_id', 'blog_tag_id');
    }
}
