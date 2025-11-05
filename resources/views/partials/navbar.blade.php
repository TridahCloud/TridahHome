<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/tridah icon.png') }}" alt="Tridah" height="32" class="me-2">
            <span class="fw-bold">Tridah</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/board') }}">Board</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://drive.tridah.cloud" target="_blank">
                        TridahDrive
                        <i class="fas fa-external-link-alt ms-1 small"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/volunteering') }}">Volunteering</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-link nav-link p-0 me-3 theme-toggle" id="themeToggle">
                        <i class="fas fa-moon"></i>
                    </button>
                </li>
                <li class="nav-item">
                    <a href="https://www.zeffy.com/embed/donation-form/help-us-to-create-online-tools?modal=true" target="_blank" class="btn btn-success">
                        Support Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

