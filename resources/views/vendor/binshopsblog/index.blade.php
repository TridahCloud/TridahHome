@extends('layouts.blog')

@section('title', $title ?? 'Tridah Blog')

@section('content')
    <div class="blog-header text-center mb-5">
        <span class="blog-badge">
            <i class="fas fa-pen-nib me-2"></i>Tridah Blog
        </span>
        <h1 class="blog-title display-5 mt-3">{{ $title ?? 'Stories & Updates' }}</h1>
        <p class="blog-subtitle">
            Stories, release notes, and reflections from the team building ethical, accessible technology at Tridah.
        </p>
    </div>

    <div class="row g-5 mt-0 mt-lg-4">
        <div class="col-lg-8">
            @if(isset($BinshopsBlog_category) && $BinshopsBlog_category)
                <div class="blog-alert mb-4">
                    <strong>{{ $BinshopsBlog_category->category_name }}</strong>
                    @if($BinshopsBlog_category->category_description)
                        <div class="mt-2">{{ $BinshopsBlog_category->category_description }}</div>
                    @endif
                </div>
            @endif

            <div class="row g-4">
                @forelse($posts as $post)
                    @include('binshopsblog::partials.index_loop', ['post' => $post])
                @empty
                    <div class="col-12">
                        <div class="blog-alert">
                            No stories have been published yet. Check back soon!
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $posts->appends([])->links() }}
            </div>
        </div>

        <aside class="col-lg-4 blog-sidebar">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">
                        <i class="fas fa-layer-group me-2 brand-teal"></i>Categories
                    </h5>
                    <ul class="list-unstyled blog-category-list">
                        @forelse($categories as $category)
                            <li>
                                <a class="blog-category-link" href="{{ $category->url() }}">
                                    <span>{{ $category->category_name }}</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                        @empty
                            <li class="text-muted small">Categories coming soon.</li>
                        @endforelse
                    </ul>
                </div>
            </div>

            @php
                $recentPosts = \BinshopsBlog\Models\BinshopsBlogPost::orderBy('posted_at','desc')->limit(5)->get();
            @endphp
            @if($recentPosts->count())
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">
                            <i class="fas fa-clock me-2 brand-teal"></i>Recent Posts
                        </h5>
                        <ul class="list-unstyled blog-recent-list">
                            @foreach($recentPosts as $recent)
                                <li>
                                    <a class="blog-recent-link" href="{{ $recent->url() }}">
                                        {{ $recent->title }}
                                    </a>
                                    <div class="small text-muted">
                                        {{ optional($recent->posted_at)->format('M d, Y') }}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </aside>
    </div>
@endsection
