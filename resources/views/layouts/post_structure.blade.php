<div class="row gx-5">
    <div class="p-3 border border-5 border-info bg-opacity-25 bg-info ">
        <div class="row">
            <div class="col-md-6">
                <div class="text-left">

                </div>
            </div>
            <div class="col-md-4">
                <div class="text-right">

                </div>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <span>Имя автора: {{ $blogPost->user->first_name }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $blogPost->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{{ $blogPost->content }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Likes: {{ $blogPost->likes }}</p>
            </div>
            <div class="col-md-4">
                <div class="text-right">

                </div>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <span>Категория: {{ $blogPost->blog_category->name }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="text-left">
                    <button type="button" class="btn btn-info">
                        <a href="{{ route('blog_posts.show', $blogPost) }}>">Информация</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                        <a href="{{ route('blog_posts.edit', $blogPost) }}>">Изменить</a>
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="{{ route('blog_posts.destroy', $blogPost) }}>">Удалить</a>
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-right">

                </div>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <span>
                        @foreach($blogPost->blog_tags as $blogTag)
                            {{ "#" . $blogTag->name }}
                        @endforeach
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
