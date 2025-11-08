@extends('layouts.blog')

@section('title', $post->gen_seo_title())

@section('content')
    @if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

    @include("binshopsblog::partials.show_errors")

    <article class="blog-post-hero">
        @include("binshopsblog::partials.full_post_details")
    </article>

    @if(config("binshopsblog.comments.type_of_comments_to_show","built_in") !== 'disabled')
        <section class="blog-comments" id="maincommentscontainer">
            <h2 class="h4 mb-4" id="BinshopsBlogcomments">
                <i class="fas fa-comments me-2"></i>Comments
            </h2>
            @include("binshopsblog::partials.show_comments")
        </section>
    @endif
@endsection

@section('blog-custom-js')
    <script src="{{ asset('binshops-blog.js') }}"></script>
@endsection