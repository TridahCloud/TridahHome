@extends('layouts.homepage')

@section('title', 'Open Source - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section open-source-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">Open Source</h1>
                    <p class="hero-subtitle">
                        Transparency, collaboration, and freedom. All our code is open source, allowing you to verify, contribute, and build upon our work.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Source Philosophy Section -->
<section class="section philosophy-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="feature-card interactive-card">
                    <div class="text-center mb-5">
                        <div class="section-icon-large mb-4">
                            <i class="fab fa-github"></i>
                        </div>
                        <h2 class="section-title">Why Open Source?</h2>
                    </div>
                    
                    <p class="lead text-center mb-5">
                        Open source is fundamental to our mission. We believe that transparency, collaboration, and freedom are essential for creating ethical technology that serves everyone.
                    </p>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <div class="philosophy-point">
                                <div class="philosophy-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h4>Transparency</h4>
                                <p>Anyone can review our code to verify security, privacy practices, and functionality. No hidden backdoors, no secret tracking.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="philosophy-point">
                                <div class="philosophy-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4>Collaboration</h4>
                                <p>Community contributions make our tools better. Together, we can build solutions that truly serve everyone's needs.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="philosophy-point">
                                <div class="philosophy-icon">
                                    <i class="fas fa-lock-open"></i>
                                </div>
                                <h4>Freedom</h4>
                                <p>Use, modify, and distribute our code freely. No vendor lock-in, no proprietary restrictions.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="philosophy-point">
                                <div class="philosophy-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4>Security</h4>
                                <p>Open source code is more secure because vulnerabilities are found and fixed by the community faster.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Projects Section -->
<section class="section projects-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Open Source Projects</h2>
            <p class="section-subtitle">Explore our repositories and contribute to the mission</p>
        </div>
        
        <div class="row g-4">
            <!-- TridahDrive -->
            <div class="col-lg-6">
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">TridahDrive</h3>
                            <p class="project-description">
                                Our all-in-one organizational platform with drive management, invoicing, project boards, and more.
                            </p>
                        </div>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/TridahCloud/TridahDrive" target="_blank" class="btn btn-outline-teal">
                            <i class="fab fa-github me-2"></i>
                            View on GitHub
                        </a>
                        <a href="https://drive.tridah.cloud" target="_blank" class="btn btn-success">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- TridahHome -->
            <div class="col-lg-6">
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">TridahHome</h3>
                            <p class="project-description">
                                The official website for Tridah, built with Laravel and Bootstrap. This is the site you're currently viewing!
                            </p>
                        </div>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/TridahCloud/TridahHome" target="_blank" class="btn btn-outline-teal">
                            <i class="fab fa-github me-2"></i>
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contributing Section -->
<section class="section contributing-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="feature-card interactive-card">
                    <div class="text-center mb-5">
                        <h2 class="section-title">How to Contribute</h2>
                        <p class="section-subtitle">Your contributions help make technology more accessible for everyone</p>
                    </div>
                    
                    <div class="contributing-steps">
                        <div class="contributing-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Fork the Repository</h4>
                                <p>Start by forking the repository you want to contribute to on GitHub.</p>
                            </div>
                        </div>
                        
                        <div class="contributing-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Create a Branch</h4>
                                <p>Create a new branch for your feature or bug fix. Use descriptive names like <code>feature/new-feature</code> or <code>fix/bug-description</code>.</p>
                            </div>
                        </div>
                        
                        <div class="contributing-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Make Your Changes</h4>
                                <p>Write clean, well-documented code that follows our coding standards. Test your changes thoroughly.</p>
                            </div>
                        </div>
                        
                        <div class="contributing-step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Submit a Pull Request</h4>
                                <p>Push your changes and create a pull request. Describe your changes clearly and reference any related issues.</p>
                            </div>
                        </div>
                        
                        <div class="contributing-step">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Code Review</h4>
                                <p>Our team will review your contribution. We may ask for changes or have questions. This is normal and helps ensure code quality!</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-5">
                        <a href="https://github.com/TridahCloud" target="_blank" class="btn btn-lg btn-success">
                            <i class="fab fa-github me-2"></i>
                            Explore Our Repositories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Licensing Section -->
<section class="section licensing-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="feature-card interactive-card">
                    <h2 class="section-title text-center mb-4">Licensing</h2>
                    
                    <p class="lead text-center mb-5">
                        Our projects use permissive open-source licenses that allow you to use, modify, and distribute our code freely.
                    </p>
                    
                    <div class="license-info">
                        <h4>Common Licenses</h4>
                        <ul>
                            <li><strong>MIT License:</strong> Simple, permissive license allowing commercial and private use</li>
                            <li><strong>Apache 2.0:</strong> Permissive license with patent protection</li>
                            <li><strong>GPL v3:</strong> Copyleft license ensuring derivatives remain open source</li>
                        </ul>
                        
                        <p class="mt-4">
                            Each repository specifies its license in the LICENSE file. Always check the specific license for each project before using it.
                        </p>
                        
                        <div class="license-note mt-4">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Note:</strong> While our code is open source, our trademarks and branding remain protected. Please respect our trademark usage guidelines when creating derivative works.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="cta-card">
                    <div class="cta-icon mb-4">
                        <i class="fab fa-github"></i>
                    </div>
                    <h2 class="fw-bold mb-3">Ready to Contribute?</h2>
                    <p class="cta-text mb-4">
                        Join our community of developers, designers, and contributors building free, accessible technology for everyone.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="https://github.com/TridahCloud" target="_blank" class="btn btn-lg btn-success">
                            <i class="fab fa-github me-2"></i>
                            View All Repositories
                        </a>
                        <a href="{{ url('/volunteering') }}" class="btn btn-lg btn-outline-teal">
                            <i class="fas fa-users me-2"></i>
                            Volunteer With Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.open-source-hero {
    min-height: 50vh;
    padding: 6rem 0 3rem;
}

.philosophy-section,
.projects-section,
.contributing-section,
.licensing-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
    padding: 4rem 0;
}

.section-icon-large {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    font-size: 3rem;
    color: white;
}

.philosophy-point {
    text-align: center;
    padding: 1.5rem;
}

.philosophy-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: white;
}

.philosophy-point h4 {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1rem;
}

.philosophy-point p {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
}

.project-card {
    background-color: #2a2a3a;
    border-radius: 1.25rem;
    padding: 2rem;
    height: 100%;
    border: 2px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.project-card:hover {
    transform: translateY(-5px);
    border-color: #31d8b2;
    box-shadow: 0 12px 32px rgba(49, 216, 178, 0.15);
}

.project-header {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.project-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    flex-shrink: 0;
}

.project-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: white;
    margin-bottom: 0.75rem;
}

.project-description {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
    margin: 0;
}

.project-links {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.contributing-steps {
    max-width: 800px;
    margin: 0 auto;
}

.contributing-step {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 2rem;
    align-items: flex-start;
}

.step-number {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
}

.step-content h4 {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 0.5rem;
}

.step-content p {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
    margin: 0;
}

.step-content code {
    background: rgba(49, 216, 178, 0.2);
    padding: 0.2rem 0.5rem;
    border-radius: 0.25rem;
    font-family: 'Courier New', monospace;
    color: #31d8b2;
}

.license-info {
    max-width: 800px;
    margin: 0 auto;
}

.license-info h4 {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1rem;
}

.license-info ul {
    list-style: none;
    padding: 0;
    margin-bottom: 1.5rem;
}

.license-info li {
    color: rgba(255, 255, 255, 0.8);
    padding: 0.75rem 0;
    padding-left: 1.5rem;
    position: relative;
    line-height: 1.7;
}

.license-info li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #31d8b2;
    font-weight: bold;
    font-size: 1.25rem;
}

.license-note {
    background: rgba(49, 216, 178, 0.1);
    border-left: 4px solid #31d8b2;
    padding: 1rem 1.5rem;
    border-radius: 0.5rem;
    color: rgba(255, 255, 255, 0.9);
}

[data-theme="light"] .philosophy-section,
[data-theme="light"] .projects-section,
[data-theme="light"] .contributing-section,
[data-theme="light"] .licensing-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

[data-theme="light"] .philosophy-point h4,
[data-theme="light"] .project-title,
[data-theme="light"] .step-content h4,
[data-theme="light"] .license-info h4 {
    color: #1e1e28;
}

[data-theme="light"] .philosophy-point p,
[data-theme="light"] .project-description,
[data-theme="light"] .step-content p,
[data-theme="light"] .license-info p,
[data-theme="light"] .license-info li {
    color: rgba(30, 30, 40, 0.8);
}

[data-theme="light"] .project-card {
    background-color: #ffffff;
    border-color: rgba(0, 0, 0, 0.05);
}

[data-theme="light"] .license-note {
    background: rgba(49, 216, 178, 0.05);
    border-left-color: #204e7e;
    color: rgba(30, 30, 40, 0.9);
}

@media (max-width: 768px) {
    .open-source-hero {
        min-height: 40vh;
        padding: 4rem 0 2rem;
    }
    
    .project-header {
        flex-direction: column;
        text-align: center;
    }
    
    .project-icon {
        margin: 0 auto;
    }
    
    .project-links {
        justify-content: center;
    }
    
    .contributing-step {
        flex-direction: column;
        text-align: center;
    }
    
    .step-number {
        margin: 0 auto;
    }
}
</style>
@endsection

