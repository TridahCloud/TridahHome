@if($post->categories && $post->categories->count())
    <div class="d-flex flex-wrap gap-2 mt-3">
        @foreach($post->categories as $category)
            <a class="blog-tag" href="{{ $category->url() }}">
                <i class="fas fa-hashtag"></i>{{ $category->category_name }}
            </a>
        @endforeach
    </div>
@endif