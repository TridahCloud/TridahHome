@extends('layouts.homepage')

@section('title', 'Contact - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section contact-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">Get in Touch</h1>
                    <p class="hero-subtitle">
                        We'd love to hear from you. Reach out with questions, ideas, or opportunities to collaborate.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact-form" class="section contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Send Us a Message</h2>
                </div>
                
                <div class="feature-card interactive-card contact-form-card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Please fix the following errors:</strong>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <form id="contactForm" method="POST" action="{{ route('contact.store') }}" class="position-relative" style="z-index: 10;">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="" selected>Select a subject...</option>
                                    <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                                    <option value="partnership" {{ old('subject') == 'partnership' ? 'selected' : '' }}>Partnership Opportunity</option>
                                    <option value="volunteer" {{ old('subject') == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
                                    <option value="donation" {{ old('subject') == 'donation' ? 'selected' : '' }}>Donation Question</option>
                                    <option value="support" {{ old('subject') == 'support' ? 'selected' : '' }}>Technical Support</option>
                                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-success btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact-info" class="section contact-info-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4 class="fw-bold mt-3 mb-2">Email</h4>
                    <a href="mailto:team@tridah.cloud" class="contact-link">team@tridah.cloud</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="fw-bold mt-3 mb-2">Location</h4>
                    <p class="mb-0">Operating globally via online infrastructure</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <h4 class="fw-bold mt-3 mb-2">Social Media</h4>
                    <a href="https://github.com/TridahCloud" target="_blank" class="contact-link">
                        GitHub
                        <i class="fas fa-external-link-alt ms-1 small"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="feature-card interactive-card text-center open-source-card">
                    <div class="contact-icon-large mb-3">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <h3 class="fw-bold mb-3">Open Source</h3>
                    <p class="mb-4">
                        All our projects are open-source. Visit our GitHub to explore, contribute, or report issues.
                    </p>
                    <a href="https://github.com/TridahCloud" target="_blank" class="btn btn-outline-teal">
                        <i class="fab fa-github me-2"></i>
                        Visit GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="section faq-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How is Tridah funded?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tridah is funded through voluntary donations, grants, mission-aligned sponsorships, and optional premium hosting services. All income supports our charitable mission.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How can I contribute?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can contribute code on GitHub, make a donation, volunteer your time, or help spread the word about our mission.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Are your tools really free?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! All Tridah tools are completely free and open-source. No hidden costs, no ads, no data mining. Just accessible technology for everyone.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can organizations partner with Tridah?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! We partner with schools, libraries, and other non-profits to expand access to technology. Contact us to discuss partnership opportunities.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact Hero */
.contact-hero {
    min-height: 50vh;
    padding: 6rem 0 3rem;
}

/* Contact Form Section */
.contact-form-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.contact-form-card {
    position: relative;
}

.contact-form-card form,
.contact-form-card .form-control,
.contact-form-card .form-select,
.contact-form-card button {
    position: relative;
    z-index: 10;
    pointer-events: auto;
}

.open-source-card * {
    position: relative;
    z-index: 10;
    pointer-events: auto;
}

.contact-form-section .form-label {
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.contact-form-section .form-control,
.contact-form-section .form-select {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: white;
    padding: 0.75rem 1rem;
}

.contact-form-section .form-control:focus,
.contact-form-section .form-select:focus {
    background-color: rgba(255, 255, 255, 0.08);
    border-color: #31d8b2;
    color: white;
    box-shadow: 0 0 0 0.2rem rgba(49, 216, 178, 0.25);
}

.contact-form-section .form-control::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.contact-form-section .form-select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
}

.contact-form-section option {
    background-color: #2a2a3a;
    color: white;
}

/* Contact Info Section */
.contact-info-section {
    background: linear-gradient(135deg, #141420 0%, #1e1e28 100%);
}

.contact-info-card {
    background-color: #2a2a3a;
    border-radius: 1rem;
    padding: 2rem;
    height: 100%;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.05);
}

.contact-info-card:hover {
    transform: translateY(-5px);
    border-color: #31d8b2;
    box-shadow: 0 12px 32px rgba(49, 216, 178, 0.15);
}

.contact-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    font-size: 1.75rem;
    color: white;
    transition: all 0.3s ease;
}

.contact-info-card:hover .contact-icon {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #204e7e 0%, #31d8b2 100%);
}

.contact-icon-large {
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

.contact-link {
    color: #31d8b2;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.contact-link:hover {
    color: #ffa91e;
    text-decoration: underline;
}

.contact-info-card h4 {
    color: white;
}

.contact-info-card p {
    color: rgba(255, 255, 255, 0.8);
}

/* FAQ Section */
.faq-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.accordion {
    --bs-accordion-bg: #2a2a3a;
    --bs-accordion-border-color: rgba(255, 255, 255, 0.1);
    --bs-accordion-active-color: #31d8b2;
    --bs-accordion-btn-focus-border-color: #31d8b2;
    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(49, 216, 178, 0.25);
}

.accordion-button {
    background-color: #2a2a3a;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 600;
}

.accordion-button:not(.collapsed) {
    background-color: rgba(49, 216, 178, 0.1);
    color: #31d8b2;
    box-shadow: none;
}

.accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2331d8b2'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.accordion-body {
    background-color: rgba(49, 216, 178, 0.05);
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
}

/* Light Theme */
[data-theme="light"] .contact-form-section,
[data-theme="light"] .contact-info-section,
[data-theme="light"] .faq-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

[data-theme="light"] .contact-form-section .form-label {
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .contact-form-section .form-control,
[data-theme="light"] .contact-form-section .form-select {
    background-color: #ffffff;
    border-color: rgba(0, 0, 0, 0.1);
    color: #1e1e28;
}

[data-theme="light"] .contact-form-section .form-control:focus,
[data-theme="light"] .contact-form-section .form-select:focus {
    background-color: #ffffff;
    border-color: #204e7e;
    color: #1e1e28;
}

[data-theme="light"] .contact-form-section .form-select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23303040' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
}

[data-theme="light"] .contact-info-card {
    background-color: #ffffff;
    border-color: rgba(0, 0, 0, 0.05);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

[data-theme="light"] .contact-info-card h4 {
    color: #1e1e28;
}

[data-theme="light"] .contact-info-card p {
    color: rgba(30, 30, 40, 0.8);
}

[data-theme="light"] .contact-link {
    color: #204e7e;
}

[data-theme="light"] .contact-link:hover {
    color: #31d8b2;
}

[data-theme="light"] .accordion {
    --bs-accordion-bg: #ffffff;
    --bs-accordion-border-color: rgba(0, 0, 0, 0.1);
}

[data-theme="light"] .accordion-button {
    background-color: #ffffff;
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .accordion-button:not(.collapsed) {
    background-color: rgba(49, 216, 178, 0.1);
    color: #204e7e;
}

[data-theme="light"] .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23303040'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

[data-theme="light"] .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23204e7e'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

[data-theme="light"] .accordion-body {
    background-color: rgba(49, 216, 178, 0.05);
    color: rgba(30, 30, 40, 0.9);
}

/* Responsive */
@media (max-width: 768px) {
    .contact-hero {
        min-height: 40vh;
        padding: 4rem 0 2rem;
    }
    
    .contact-info-card {
        margin-bottom: 1.5rem;
    }
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle contact form submission with loading state
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
            
            // Form will submit normally to the server
        });
    }
});
</script>
@endpush
@endsection

