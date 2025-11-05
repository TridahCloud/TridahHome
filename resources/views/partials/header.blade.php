<header class="dashboard-header">
    <div class="header-content container-fluid">
        <!-- Search Bar -->
        <div class="header-search flex-grow-1">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-0 text-muted">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-0 bg-transparent text-white" placeholder="Search...">
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="header-actions d-flex align-items-center gap-3">
            <!-- Status -->
            <span class="badge bg-success d-flex align-items-center gap-1">
                <span class="status-dot"></span>
                <span class="d-none d-md-inline">Online</span>
            </span>
            
            <!-- Notifications -->
            <button class="btn btn-link text-white position-relative p-0" title="Notifications">
                <i class="fas fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
            </button>
            
            <!-- Help -->
            <button class="btn btn-link text-white p-0" title="Help">
                <i class="fas fa-question-circle"></i>
            </button>
            
            <!-- User Profile -->
            <div class="dropdown">
                <button class="btn btn-link text-white text-decoration-none dropdown-toggle d-flex align-items-center gap-2 p-0" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle"></i>
                    <span class="d-none d-md-inline">User</span>
                    <i class="fas fa-chevron-down small"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                </ul>
            </div>
            
            <!-- Theme Toggle -->
            <button class="btn btn-link text-white p-0 theme-toggle" id="themeToggle" title="Toggle Theme">
                <i class="fas fa-moon"></i>
            </button>
        </div>
    </div>
</header>
