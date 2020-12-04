<header class="container-flex space-between">
    @if ($post->category)
        <div class="post-category">
            <span class="category">
                <a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
            </span>
        </div>
    @endif
</header>
