@extends('layouts.blog')

@section('title', 'Search results')

@section('content')
    @php
        $matchingPosts = collect($search_results ?? [])
            ->filter(function ($result) {
                return isset($result->indexable) && $result->indexable instanceof \BinshopsBlog\Models\BinshopsBlogPost;
            })
            ->map(function ($result) {
                return $result->indexable;
            })
            ->values();
    @endphp

    <div class="blog-header text-center mb-5">
        <span class="blog-badge">
            <i class="fas fa-search me-2"></i>Blog Search
        </span>
        <h1 class="blog-title display-6 mt-3">Results for “{{ $query }}”</h1>
        <p class="blog-subtitle">
            {{ $matchingPosts->count() ? $matchingPosts->count().' result'.($matchingPosts->count() === 1 ? '' : 's').' found.' : 'We couldn’t find any posts matching that phrase.' }}
        </p>
    </div>

    <div class="row g-5 mt-0 mt-lg-4">
        <div class="col-lg-8">
            <div class="row g-4">
                @forelse($matchingPosts as $post)
                    @include('binshopsblog::partials.index_loop', ['post' => $post])
                @empty
                    <div class="col-12">
                        <div class="blog-alert">
                            Try another keyword or explore the recent stories from the Tridah team.
                        </div>
                    </div>
                @endforelse
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
        </aside>
    </div>
@endsection