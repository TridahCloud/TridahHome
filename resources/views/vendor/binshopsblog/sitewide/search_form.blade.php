<div class="blog-search-card card border-0 p-3 p-md-4 mx-auto mb-5" style="max-width: 680px;">
    <div class="card-body">
        <form method="get" action="{{ route('binshopsblog.search') }}" class="row g-3 align-items-center justify-content-center">
            <div class="col-12 col-md-8">
                <label for="blogSearchInput" class="form-label text-uppercase small text-muted mb-2">
                    Search the Tridah blog
                </label>
                <input type="text"
                       id="blogSearchInput"
                       name="s"
                       placeholder="What would you like to learn about?"
                       class="form-control form-control-lg"
                       value="{{ request('s') }}">
            </div>
            <div class="col-12 col-md-auto">
                <button type="submit" class="btn btn-success btn-lg px-4 w-100">
                    <i class="fas fa-search me-2"></i>Search
                </button>
            </div>
        </form>
    </div>
</div>