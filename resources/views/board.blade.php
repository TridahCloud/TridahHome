@extends('layouts.homepage')

@section('title', 'Board of Directors - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section board-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">Board of Directors</h1>
                    <p class="hero-subtitle">
                        Meet the founding team leading Tridah's mission to create free, open, and accessible digital tools
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Board Members Section -->
<section id="board-members" class="section board-members-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Founding Board</h2>
            <p class="section-subtitle">Passionate leaders dedicated to empowering individuals and communities through technology</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Michael Phelps -->
            <div class="col-lg-4 col-md-6">
                <div class="board-member-card">
                    <div class="member-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3 class="member-name">Michael Phelps</h3>
                    <div class="member-roles">
                        <span class="role-badge role-founder">Founder</span>
                        <span class="role-badge role-chair">Chair</span>
                        <span class="role-badge role-president">President</span>
                    </div>
                    <p class="member-description">
                        As Founder, Chair, and President, Michael leads Tridah's vision of creating free, open, and accessible digital tools that empower individuals and communities worldwide.
                    </p>
                    <div class="member-contact">
                        <a href="mailto:mike@tridah.cloud" class="contact-link">
                            <i class="fas fa-envelope me-2"></i>
                            mike@tridah.cloud
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Maranda Riley -->
            <div class="col-lg-4 col-md-6">
                <div class="board-member-card">
                    <div class="member-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3 class="member-name">Maranda Riley</h3>
                    <div class="member-roles">
                        <span class="role-badge role-founder">Founder</span>
                        <span class="role-badge role-secretary">Secretary</span>
                    </div>
                    <p class="member-description">
                        As Founder and Secretary, Maranda ensures Tridah maintains transparency and proper governance while advancing our mission of accessible technology for all.
                    </p>
                    <div class="member-contact">
                        <a href="mailto:maranda@tridah.cloud" class="contact-link">
                            <i class="fas fa-envelope me-2"></i>
                            maranda@tridah.cloud
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Tay Tzeng -->
            <div class="col-lg-4 col-md-6">
                <div class="board-member-card">
                    <div class="member-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3 class="member-name">Tay Tzeng</h3>
                    <div class="member-roles">
                        <span class="role-badge role-founder">Founder</span>
                        <span class="role-badge role-treasurer">Treasurer</span>
                    </div>
                    <p class="member-description">
                        As Founder and Treasurer, Tay manages Tridah's financial resources to ensure sustainable growth and continued development of free digital tools.
                    </p>
                    <div class="member-contact">
                        <a href="mailto:taytzeng@tridah.cloud" class="contact-link">
                            <i class="fas fa-envelope me-2"></i>
                            taytzeng@tridah.cloud
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Commitment Section -->
<section id="commitment" class="section commitment-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="feature-card interactive-card">
                    <div class="text-center mb-4">
                        <div class="commitment-icon mb-3">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h2 class="fw-bold mb-4">Our Commitment</h2>
                    </div>
                    <p class="lead commitment-text mb-4">
                        As founding board members, we are committed to building Tridah as a transparent, mission-driven nonprofit organization. We believe that <strong class="brand-teal">technology should empower everyone</strong>, regardless of their background or financial circumstances.
                    </p>
                    <p class="commitment-text">
                        Our board ensures that Tridah remains true to its core values: <strong>accessibility, transparency, ethics, and community</strong>. We're dedicated to creating and maintaining free, open-source digital tools that serve the public good.
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
                        <i class="fas fa-comments"></i>
                    </div>
                    <h2 class="fw-bold mb-3">Get in Touch</h2>
                    <p class="cta-text mb-4">
                        Have questions about Tridah's governance or want to learn more about our mission?
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="{{ url('/contact') }}" class="btn btn-lg btn-success">
                            <i class="fas fa-envelope me-2"></i>
                            Contact the Board
                        </a>
                        <a href="{{ url('/volunteering') }}" class="btn btn-lg btn-outline-teal">
                            <i class="fas fa-rocket me-2"></i>
                            Join Our Mission
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Board Hero */
.board-hero {
    min-height: 50vh;
    padding: 6rem 0 3rem;
}

/* Board Members Section */
.board-members-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.board-member-card {
    background-color: #2a2a3a;
    border-radius: 1.5rem;
    padding: 2.5rem;
    height: 100%;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.05);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.board-member-card::before {
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

.board-member-card:hover::before {
    opacity: 1;
}

.board-member-card:hover {
    transform: translateY(-10px);
    border-color: #31d8b2;
    box-shadow: 0 16px 48px rgba(49, 216, 178, 0.2);
}

.member-icon {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 4rem;
    color: white;
    transition: all 0.3s ease;
    position: relative;
    z-index: 1;
}

.board-member-card:hover .member-icon {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #204e7e 0%, #31d8b2 100%);
}

.member-name {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: white;
    position: relative;
    z-index: 1;
}

.member-roles {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 1;
}

.role-badge {
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.role-founder {
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    color: white;
}

.role-chair {
    background: linear-gradient(135deg, #204e7e 0%, #31d8b2 100%);
    color: white;
}

.role-president {
    background: linear-gradient(135deg, #31d8b2 0%, #ffa91e 100%);
    color: white;
}

.role-secretary {
    background: linear-gradient(135deg, #ffa91e 0%, #204e7e 100%);
    color: white;
}

.role-treasurer {
    background: linear-gradient(135deg, #204e7e 0%, #ffa91e 100%);
    color: white;
}

.member-description {
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 1;
}

.member-contact {
    position: relative;
    z-index: 1;
}

.contact-link {
    color: #31d8b2;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
}

.contact-link:hover {
    color: #ffa91e;
    transform: translateX(5px);
}

/* Commitment Section */
.commitment-section {
    background: linear-gradient(135deg, #141420 0%, #1e1e28 100%);
}

.commitment-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    font-size: 2.5rem;
    color: white;
}

.commitment-text {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    font-size: 1.1rem;
}

/* Light Theme */
[data-theme="light"] .board-members-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

[data-theme="light"] .board-member-card {
    background-color: #ffffff;
    border-color: rgba(0, 0, 0, 0.05);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

[data-theme="light"] .member-name {
    color: #1e1e28;
}

[data-theme="light"] .member-description {
    color: rgba(30, 30, 40, 0.8);
}

[data-theme="light"] .commitment-section {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
}

[data-theme="light"] .commitment-text {
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .contact-link {
    color: #204e7e;
}

[data-theme="light"] .contact-link:hover {
    color: #31d8b2;
}

/* Responsive */
@media (max-width: 768px) {
    .board-hero {
        min-height: 40vh;
        padding: 4rem 0 2rem;
    }
    
    .member-icon {
        width: 100px;
        height: 100px;
        font-size: 3rem;
    }
    
    .member-name {
        font-size: 1.5rem;
    }
    
    .board-member-card {
        margin-bottom: 1.5rem;
    }
}
</style>
@endsection

