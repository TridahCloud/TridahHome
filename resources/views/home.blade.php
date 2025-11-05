@extends('layouts.homepage')

@section('title', 'Tridah - Technology Should Empower Everyone')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1 class="hero-title">Technology Should <span class="highlight-word">Empower Everyone</span></h1>
                    <p class="hero-subtitle">
                        Free, open, and accessible digital tools that simplify work, enhance creativity, and improve everyday life—without barriers. Discover TridahDrive, our all-in-one organizational platform.
                    </p>
                    <div class="hero-buttons">
                        <a href="#solutions" class="btn btn-lg btn-primary">
                            Learn More
                        </a>
                        <a href="https://drive.tridah.cloud" target="_blank" class="btn btn-lg btn-outline-light btn-outline-teal">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Explore TridahDrive
                        </a>
                    </div>
                    <div class="hero-stats mt-5">
                        <div class="row g-4">
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-number">100%</div>
                                    <div class="stat-label">Free & Open Source</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-number">0</div>
                                    <div class="stat-label">Ads or Tracking</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <div class="stat-number">∞</div>
                                    <div class="stat-label">Accessibility</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="logo-animation">
                    <img src="{{ asset('images/tridah icon.png') }}" alt="Tridah" class="img-fluid hero-logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section id="solutions" class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Platform</h2>
            <p class="section-subtitle">TridahDrive - Your all-in-one organizational platform with integrated business tools</p>
        </div>
        
        <!-- Main TridahDrive Card -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="solution-card featured-solution">
                    <div class="row align-items-center">
                        <div class="col-lg-2 text-center mb-4 mb-lg-0">
                            <div class="solution-icon drive-icon-large">
                                <i class="fas fa-cloud"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <h3 class="solution-title mb-3">🚀 TridahDrive</h3>
                            <p class="solution-description mb-4">
                                A comprehensive platform for managing drives, invoicing, bookkeeping, project management, and business operations. All your organizational tools in one integrated platform.
                            </p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="https://drive.tridah.cloud" target="_blank" class="btn btn-success">
                                    <i class="fas fa-external-link-alt me-2"></i>
                                    Visit TridahDrive
                                </a>
                                <a href="https://github.com/TridahCloud/TridahDrive" target="_blank" class="btn btn-outline-teal">
                                    <i class="fab fa-github me-2"></i>
                                    View on GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- TridahDrive Features -->
        <div class="row g-4">
            <!-- Drive Management -->
            <div class="col-lg-4 col-md-6">
                <div class="solution-card">
                    <div class="solution-icon work-icon">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <h4 class="solution-title-sm">Drive Management</h4>
                    <p class="solution-description">
                        Create personal or shared drives for your projects and teams with customizable settings and access control.
                    </p>
                    <ul class="solution-features">
                        <li>Personal & shared drives</li>
                        <li>Member management</li>
                        <li>Customizable colors & icons</li>
                    </ul>
                </div>
            </div>
            
            <!-- Invoicing System -->
            <div class="col-lg-4 col-md-6">
                <div class="solution-card">
                    <div class="solution-icon create-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h4 class="solution-title-sm">Invoicing System</h4>
                    <p class="solution-description">
                        Create professional invoices with client management, custom branding, and project tracking.
                    </p>
                    <ul class="solution-features">
                        <li>Customizable invoices</li>
                        <li>Client management</li>
                        <li>Project tracking</li>
                    </ul>
                </div>
            </div>
            
            <!-- Project Boards -->
            <div class="col-lg-4 col-md-6">
                <div class="solution-card">
                    <div class="solution-icon life-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h4 class="solution-title-sm">Project Boards</h4>
                    <p class="solution-description">
                        Project management tools to organize tasks, track progress, and collaborate with your team.
                    </p>
                    <ul class="solution-features">
                        <li>Task organization</li>
                        <li>Progress tracking</li>
                        <li>Team collaboration</li>
                    </ul>
                </div>
            </div>
            
            <!-- Book Keeping -->
            <div class="col-lg-4 col-md-6">
                <div class="solution-card">
                    <div class="solution-icon work-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4 class="solution-title-sm">Book Keeping</h4>
                    <p class="solution-description">
                        Integrated accounting tools that sync with your invoice system and track income and expenses.
                    </p>
                    <ul class="solution-features">
                        <li>Income & expense tracking</li>
                        <li>Financial reports</li>
                        <li>Receipt management</li>
                    </ul>
                </div>
            </div>
            
            <!-- Staff Management -->
            <div class="col-lg-4 col-md-6">
                <div class="solution-card">
                    <div class="solution-icon create-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="solution-title-sm">Staff & Volunteer Management</h4>
                    <p class="solution-description">
                        Comprehensive organizational management with role-based permissions and time tracking.
                    </p>
                    <ul class="solution-features">
                        <li>Team member profiles</li>
                        <li>Role & permissions</li>
                        <li>Time tracking</li>
                    </ul>
                </div>
            </div>
            
            <!-- More Tools -->
            <div class="col-lg-4 col-md-6">
                <div class="solution-card">
                    <div class="solution-icon life-icon">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                    <h4 class="solution-title-sm">More Tools</h4>
                    <p class="solution-description">
                        Document management, calendar, scheduling, CRM, and more tools as the platform evolves.
                    </p>
                    <ul class="solution-features">
                        <li>Document management</li>
                        <li>Calendar & scheduling</li>
                        <li>CRM tools</li>
                    </ul>
                    <span class="badge bg-brand-teal mt-2">In Development</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section id="mission" class="section mission-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="feature-card interactive-card">
                    <h2 class="fw-bold mb-4">Our Mission</h2>
                    <p class="lead mb-4 mission-text">
                        To empower individuals and communities through free, open, and accessible digital tools that simplify work, enhance creativity, and improve everyday life.
                    </p>
                    <div class="mission-points">
                        <div class="mission-point-item">
                            <div class="mission-point-icon">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Accessible</h5>
                                <p class="mb-0">Everyone deserves access to high-quality digital tools, regardless of income or background.</p>
                            </div>
                        </div>
                        <div class="mission-point-item">
                            <div class="mission-point-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Transparent</h5>
                                <p class="mb-0">All our projects are open-source and publicly documented for full transparency.</p>
                            </div>
                        </div>
                        <div class="mission-point-item">
                            <div class="mission-point-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Ethical</h5>
                                <p class="mb-0">No ads, no tracking, no data mining. Your privacy and trust are paramount.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-card interactive-card">
                    <h4 class="fw-bold mb-4 brand-teal">Values That Guide Us</h4>
                    <div class="values-grid">
                        <div class="value-item">
                            <i class="fas fa-universal-access"></i>
                            <span>Accessibility</span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-eye"></i>
                            <span>Transparency</span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Ethics</span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-users"></i>
                            <span>Community</span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-lightbulb"></i>
                            <span>Creativity</span>
                        </div>
                        <div class="value-item">
                            <i class="fas fa-leaf"></i>
                            <span>Sustainability</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section id="cta" class="section cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="cta-card">
                    <div class="cta-icon mb-4">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h2 class="fw-bold mb-3">Ready to Build Your Dreams?</h2>
                    <p class="cta-text mb-4">
                        Get started with TridahDrive, our all-in-one organizational platform, or join our community to contribute and support our mission.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="https://drive.tridah.cloud" target="_blank" class="btn btn-lg btn-success">
                            <i class="fas fa-rocket me-2"></i>
                            Get Started with TridahDrive
                        </a>
                        <a href="https://github.com/TridahCloud/TridahDrive" target="_blank" class="btn btn-lg btn-outline-teal">
                            <i class="fab fa-github me-2"></i>
                            Contribute on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.logo-animation {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}
</style>
@endsection
