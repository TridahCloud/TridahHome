<div class="col-12 col-md-6">
    <article class="blog-card h-100">
        @php $imageTag = $post->image_tag('medium', false, ''); @endphp
        @if(!empty($imageTag))
            <a href="{{ $post->url() }}" class="blog-card-thumbnail d-block">
                {!! $post->image_tag('medium', false, '') !!}
            </a>
        @endif

        <div class="blog-card-body">
            <div class="blog-meta">
                <span><i class="fas fa-calendar me-2"></i>{{ optional($post->posted_at)->format('M d, Y') }}</span>
                @if(optional($post->author)->name)
                    <span><i class="fas fa-user me-2"></i>{{ $post->author->name }}</span>
                @endif
            </div>

            <h3 class="blog-card-title">
                <a href="{{ $post->url() }}" class="stretched-link text-decoration-none">
                    {{ $post->title }}
                </a>
            </h3>

            @if(!empty($post->subtitle))
                <p class="blog-card-subtitle mb-1">{{ $post->subtitle }}</p>
            @endif

            <p class="blog-card-text">
                {{ \Illuminate\Support\Str::limit(strip_tags($post->post_body_output()), config('binshopsblog.show_full_text_at_list') ? 260 : 180) }}
            </p>

            @if($post->categories && $post->categories->count())
                <div class="d-flex flex-wrap gap-2 mt-2">
                    @foreach($post->categories as $category)
                        <a class="blog-tag" href="{{ $category->url() }}">
                            <i class="fas fa-hashtag"></i>{{ $category->category_name }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </article>
</div>