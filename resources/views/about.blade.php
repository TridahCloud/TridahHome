@extends('layouts.homepage')

@section('title', 'About - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section about-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">About Tridah</h1>
                    <p class="hero-subtitle">
                        A 501(c)(3) non-profit building the tools that empower others to build their dreams
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section id="story" class="section story-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Our Story</h2>
                </div>
                
                <div class="story-content">
                    <p class="lead story-intro">
                        Founded in 2024, Tridah was born from a simple belief: <strong class="brand-teal">technology should uplift—not restrict</strong>. We saw a world where powerful digital tools were locked behind paywalls, riddled with ads, or used to mine user data.
                    </p>
                    
                    <p class="story-text">
                        We decided to build something different. Tridah exists to create and maintain ethical, open-access software that helps people work smarter, live better, and create freely, without financial barriers or invasive data practices.
                    </p>
                    
                    <p class="story-text">
                        Operating globally via online infrastructure, we've built a movement around the idea that everyone—regardless of income, background, or location—deserves access to tools that make life easier.
                    </p>
                    
                    <div class="motto-card mt-4">
                        <div class="motto-content">
                            <h3 class="motto-title">Empower. Create. Share.</h3>
                            <p class="motto-text">Our motto embodies our mission to democratize technology and empower communities worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section id="mission-vision" class="section mission-vision-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="feature-card interactive-card">
                    <div class="section-icon mb-4">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2 class="fw-bold mb-4">Our Mission</h2>
                    <p class="mission-text">
                        To empower individuals and communities through free, open, and accessible digital tools that simplify work, enhance creativity, and improve everyday life. We believe <strong>technology should uplift—not restrict</strong>.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="feature-card interactive-card">
                    <div class="section-icon mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2 class="fw-bold mb-4">Our Vision</h2>
                    <p class="mission-text">
                        A world where everyone—regardless of income, background, or location—can access powerful, user-friendly digital tools that make life and creativity easier. An open digital ecosystem built on collaboration, transparency, and empowerment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section id="values" class="section values-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Core Values</h2>
            <p class="section-subtitle">The principles that guide every decision we make</p>
        </div>
        
        <div class="row g-4">
            <!-- Value 01 - Accessibility -->
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-number">01</div>
                    <div class="value-icon">
                        <i class="fas fa-universal-access"></i>
                    </div>
                    <h4 class="value-title">Accessibility</h4>
                    <p class="value-description">
                        Everyone deserves access to high-quality digital tools. We remove financial barriers and design for inclusivity.
                    </p>
                </div>
            </div>
            
            <!-- Value 02 - Transparency -->
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-number">02</div>
                    <div class="value-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4 class="value-title">Transparency</h4>
                    <p class="value-description">
                        All Tridah projects are open-source and publicly documented. We believe in radical transparency.
                    </p>
                </div>
            </div>
            
            <!-- Value 03 - Ethics -->
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-number">03</div>
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="value-title">Ethics</h4>
                    <p class="value-description">
                        No ads, no tracking, no data mining. Your privacy and trust are sacred to us.
                    </p>
                </div>
            </div>
            
            <!-- Value 04 - Community -->
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-number">04</div>
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="value-title">Community</h4>
                    <p class="value-description">
                        We believe in collaboration and co-creation with our global community of users and contributors.
                    </p>
                </div>
            </div>
            
            <!-- Value 05 - Creativity -->
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-number">05</div>
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="value-title">Creativity</h4>
                    <p class="value-description">
                        Innovation as a form of self-expression and service to humanity drives everything we build.
                    </p>
                </div>
            </div>
            
            <!-- Value 06 - Sustainability -->
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-number">06</div>
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="value-title">Sustainability</h4>
                    <p class="value-description">
                        We design for longevity and interoperability with open standards for lasting impact.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section id="how-we-work" class="section how-we-work-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">How We Work</h2>
        </div>
        
        <div class="row g-4">
            <!-- Open Source -->
            <div class="col-lg-3 col-md-6">
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-lock-open"></i>
                    </div>
                    <h4 class="work-title">Open Source</h4>
                    <p class="work-description">
                        All our code is publicly available on GitHub for transparency and community contribution.
                    </p>
                </div>
            </div>
            
            <!-- Community-Driven -->
            <div class="col-lg-3 col-md-6">
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="work-title">Community-Driven</h4>
                    <p class="work-description">
                        We listen to our users and build tools based on real needs and feedback.
                    </p>
                </div>
            </div>
            
            <!-- Donation-Funded -->
            <div class="col-lg-3 col-md-6">
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="work-title">Donation-Funded</h4>
                    <p class="work-description">
                        Supported by generous donations and grants, keeping our tools free for all.
                    </p>
                </div>
            </div>
            
            <!-- Global Impact -->
            <div class="col-lg-3 col-md-6">
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="work-title">Global Impact</h4>
                    <p class="work-description">
                        Operating worldwide through digital infrastructure, reaching users everywhere.
                    </p>
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
                    <h2 class="fw-bold mb-3">Want to Learn More?</h2>
                    <p class="cta-text mb-4">
                        Explore our solutions or join our community to be part of the movement.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="https://drive.tridah.cloud" target="_blank" class="btn btn-lg btn-success">
                            <i class="fas fa-th me-2"></i>
                            Explore TridahDrive
                        </a>
                        <a href="{{ url('/volunteering') }}" class="btn btn-lg btn-outline-teal">
                            <i class="fas fa-users me-2"></i>
                            Join Our Mission
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* About Hero */
.about-hero {
    min-height: 60vh;
    padding: 6rem 0 3rem;
}

/* Story Section */
.story-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.story-content {
    max-width: 800px;
    margin: 0 auto;
}

.story-intro {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1.5rem;
}

.story-text {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.8;
    margin-bottom: 1.5rem;
}

.motto-card {
    background: rgba(49, 216, 178, 0.1);
    border-left: 4px solid #31d8b2;
    border-radius: 0.75rem;
    padding: 2rem;
    text-align: center;
}

.motto-title {
    font-size: 2rem;
    font-weight: 700;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
}

.motto-text {
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
    font-size: 1.125rem;
}

/* Mission & Vision Section */
.mission-vision-section {
    background: linear-gradient(135deg, #141420 0%, #1e1e28 100%);
}

.section-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    color: white;
}

.mission-text {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    font-size: 1.1rem;
}

/* Values Section */
.values-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.value-card {
    background-color: #2a2a3a;
    border-radius: 1.25rem;
    padding: 2rem;
    height: 100%;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.05);
    position: relative;
    overflow: hidden;
}

.value-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(49, 216, 178, 0.1) 0%, rgba(32, 78, 126, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.value-card:hover::before {
    opacity: 1;
}

.value-card:hover {
    transform: translateY(-8px);
    border-color: #31d8b2;
    box-shadow: 0 16px 48px rgba(49, 216, 178, 0.2);
}

.value-number {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 4rem;
    font-weight: 700;
    color: rgba(49, 216, 178, 0.1);
    line-height: 1;
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    color: white;
    transition: all 0.3s ease;
    position: relative;
    z-index: 1;
}

.value-card:hover .value-icon {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #204e7e 0%, #31d8b2 100%);
}

.value-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: white;
    position: relative;
    z-index: 1;
}

.value-description {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.6;
    margin: 0;
    position: relative;
    z-index: 1;
}

/* How We Work Section */
.how-we-work-section {
    background: linear-gradient(135deg, #141420 0%, #1e1e28 100%);
}

.work-card {
    background-color: #2a2a3a;
    border-radius: 1rem;
    padding: 2rem;
    text-align: center;
    height: 100%;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.05);
}

.work-card:hover {
    transform: translateY(-8px);
    border-color: #31d8b2;
    box-shadow: 0 12px 32px rgba(49, 216, 178, 0.15);
}

.work-icon {
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
    transition: all 0.3s ease;
}

.work-card:hover .work-icon {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #204e7e 0%, #31d8b2 100%);
}

.work-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: white;
}

.work-description {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.6;
    margin: 0;
}

/* Light Theme */
[data-theme="light"] .story-section,
[data-theme="light"] .values-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

[data-theme="light"] .story-intro,
[data-theme="light"] .story-text {
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .motto-card {
    background: rgba(49, 216, 178, 0.05);
    border-left-color: #204e7e;
}

[data-theme="light"] .motto-text {
    color: rgba(30, 30, 40, 0.8);
}

[data-theme="light"] .mission-vision-section,
[data-theme="light"] .how-we-work-section {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
}

[data-theme="light"] .mission-text {
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .value-card,
[data-theme="light"] .work-card {
    background-color: #ffffff;
    border-color: rgba(0, 0, 0, 0.05);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

[data-theme="light"] .value-title,
[data-theme="light"] .work-title {
    color: #1e1e28;
}

[data-theme="light"] .value-description,
[data-theme="light"] .work-description {
    color: rgba(30, 30, 40, 0.7);
}

[data-theme="light"] .value-number {
    color: rgba(49, 216, 178, 0.1);
}

/* Responsive */
@media (max-width: 768px) {
    .about-hero {
        min-height: 50vh;
        padding: 4rem 0 2rem;
    }
    
    .story-intro {
        font-size: 1.125rem;
    }
    
    .story-text {
        font-size: 1rem;
    }
    
    .motto-title {
        font-size: 1.75rem;
    }
    
    .value-card,
    .work-card {
        margin-bottom: 1.5rem;
    }
}
</style>
@endsection

