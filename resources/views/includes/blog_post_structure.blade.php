<div class="row gx-5">
    <div class="p-3 border border-5 border-primary border-opacity-25 bg-opacity-25 bg-primary">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <div class="text-right">
                    <span>
                        Имя автора:
                        <br>
                        @if(isset($blogPost->user))
                            {{ $blogPost->user->first_name }}
                        @endif
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10">
                <h1>{{ $blogPost->title }}</h1>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <span>
                        Категория:
                        <br>
                        {{ $blogPost->blog_category->name }}
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10">
                <p>{{ $blogPost->content }}</p>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <span>Теги:</span>
                    <br>
                    <span>
                        @foreach($blogPost->blog_tags as $blogTag)
                            {{ "#" . $blogTag->name }}
                            <br>
                        @endforeach
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                @method('get')
                <a href="{{ route('blog_posts.show', $blogPost->id) }}" class="btn btn-primary w-100">Инфо</a>
            </div>
            @can('update', $blogPost)
                <div class="col-md-2">
                    <form action="{{ route('blog_posts.edit', $blogPost->id) }}" method="post">
                        @csrf
                        @method('get')
                        <input class="btn btn-success w-100" type="submit" value="Изменить" />
                    </form>
                </div>
            @else
                <div class="col-md-2"></div>
            @endcan
            @can('delete', $blogPost)
                <div class="col-md-2">
                    <form action="{{ route('blog_posts.destroy', $blogPost->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger w-100" type="submit" value="Удалить" />
                    </form>
                </div>
            @else
                <div class="col-md-2"></div>
            @endcan
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <p>Likes: {{ $blogPost->likes }}</p>
            </div>
        </div>
    </div>
</div>
<br>
