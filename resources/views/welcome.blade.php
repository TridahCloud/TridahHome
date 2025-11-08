@extends('layouts.homepage')

@section('title', 'Welcome')

@section('content')
    <section class="hero-section">
        <div class="container text-center py-5">
            <h1 class="hero-title">Welcome to {{ config('app.name') }}</h1>
            <p class="hero-subtitle mt-3">
                This placeholder page exists for authentication scaffolding. Visit the homepage to learn more about our mission.
            </p>
            <a class="btn btn-lg btn-success mt-4" href="{{ url('/') }}">
                Go to Dashboardpage
            </a>
        </div>
    </section>
@endsection

