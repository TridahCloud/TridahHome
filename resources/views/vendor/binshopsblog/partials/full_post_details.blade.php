<div class="d-flex justify-content-between align-items-start mb-4 gap-3 flex-wrap">
    <div>
        <h1 class="display-5 mb-2">{{$post->title}}</h1>
        @if(!empty($post->subtitle))
            <p class="lead mb-3 text-muted">{{$post->subtitle}}</p>
        @endif
    </div>
    @if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
        <a href="{{$post->edit_url()}}" class="btn btn-outline-light btn-sm">
            <i class="fas fa-pen me-2"></i>Edit Post
        </a>
    @endif
</div>

<div class="blog-meta mb-4">
    <span><i class="fas fa-calendar me-2"></i>{{ optional($post->posted_at)->format('M d, Y') }}</span>
    @if(optional($post->author)->name)
        <span><i class="fas fa-user me-2"></i>{{ $post->author->name }}</span>
    @endif
    <span><i class="fas fa-clock me-2"></i>{{ optional($post->posted_at)->diffForHumans() }}</span>
</div>

@php $heroImage = $post->image_tag("large", false, 'img-fluid rounded-4 w-100'); @endphp
@if(!empty($heroImage))
    <div class="blog-card-thumbnail rounded-4 overflow-hidden mb-4">
        {!! $heroImage !!}
    </div>
@endif

<div class="blog-post-content">
    {!! $post->post_body_output() !!}
</div>

@includeWhen($post->categories,"binshopsblog::partials.categories",['post'=>$post])
