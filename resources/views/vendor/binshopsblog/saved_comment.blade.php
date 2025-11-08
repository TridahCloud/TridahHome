@extends('layouts.blog')

@section('title', 'Comment received')

@section('content')
    <div class="blog-alert text-center">
        <h3 class="h4 mb-3">
            <i class="fas fa-check-circle me-2"></i>Thanks! Your comment has been saved.
        </h3>
        @if(!config("binshopsblog.comments.auto_approve_comments",false))
            <p class="mb-4">
                Once a member of our team reviews it, your comment will appear on the post.
            </p>
        @endif
        <a href="{{ $blog_post->url() }}" class="btn btn-success">
            <i class="fas fa-arrow-left me-2"></i>Back to the story
        </a>
    </div>
@endsection