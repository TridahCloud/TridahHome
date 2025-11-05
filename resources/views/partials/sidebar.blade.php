<aside class="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="{{ url('/dashboard') }}" class="d-flex align-items-center text-decoration-none">
            <img src="{{ asset('images/tridah icon.png') }}" alt="Tridah" height="32" class="me-2">
            <span class="logo-text text-white fw-bold">Tridah</span>
        </a>
    </div>
    
    <!-- Navigation -->
    <nav class="sidebar-nav">
        <div class="nav-section">
            <p class="nav-section-title text-muted text-uppercase small mb-3">Main</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link active">
                        <i class="fas fa-chart-bar me-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/projects') }}" class="nav-link">
                        <i class="fas fa-folder-open me-2"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/tasks') }}" class="nav-link">
                        <i class="fas fa-tasks me-2"></i>
                        <span>Tasks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/team') }}" class="nav-link">
                        <i class="fas fa-users me-2"></i>
                        <span>Team</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section mt-4">
            <p class="nav-section-title text-muted text-uppercase small mb-3">Analytics</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/reports') }}" class="nav-link">
                        <i class="fas fa-file-alt me-2"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/analytics') }}" class="nav-link">
                        <i class="fas fa-chart-line me-2"></i>
                        <span>Analytics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/insights') }}" class="nav-link">
                        <i class="fas fa-lightbulb me-2"></i>
                        <span>Insights</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section mt-4">
            <p class="nav-section-title text-muted text-uppercase small mb-3">Settings</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/settings') }}" class="nav-link">
                        <i class="fas fa-cog me-2"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/help') }}" class="nav-link">
                        <i class="fas fa-question-circle me-2"></i>
                        <span>Help & Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Footer -->
    <div class="sidebar-footer mt-auto">
        <div class="nav-section">
            <div class="text-center mb-2">
                <small class="text-muted">Powered by Tridah</small>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <a href="https://tridah.cloud" target="_blank" class="btn btn-sm btn-outline-light">
                    <i class="fas fa-globe"></i>
                </a>
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-light">
                    <i class="fas fa-home"></i>
                </a>
            </div>
        </div>
    </div>
</aside>
