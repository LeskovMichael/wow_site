<?php

namespace App\Http\Filters;



use Illuminate\Database\Eloquent\Builder;

class BlogPostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const CONTENT = 'content';
    public const BLOG_CATEGORY_ID = 'blog_category_id';

    public const USER_ID = 'user_id';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::CONTENT => [$this, 'content'],
            self::BLOG_CATEGORY_ID => [$this, 'blogCategoryId'],
            self::USER_ID => [$this, 'userId'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function content(Builder $builder, $value)
    {
        $builder->where('content', 'like', "%{$value}%");
    }

    public function blogCategoryId(Builder $builder, $value)
    {
        $res = $builder->where('blog_category_id', $value);
    }

    public function userId(Builder $builder, $value)
    {
        $res = $builder->where('user_id', $value);
    }
}
