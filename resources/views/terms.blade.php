@extends('layouts.homepage')

@section('title', 'Terms of Service - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section terms-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">Terms of Service</h1>
                    <p class="hero-subtitle">
                        Please read these terms carefully before using our services. By using Tridah services, you agree to these terms.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Terms of Service Content -->
<section class="section terms-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="legal-content">
                    <p class="last-updated">Last Updated: {{ date('F j, Y') }}</p>
                    
                    <h2 class="section-title">Acceptance of Terms</h2>
                    <p>
                        By accessing or using Tridah's website, services, or software (collectively, the "Services"), you agree to be bound by these Terms of Service ("Terms"). If you do not agree to these Terms, please do not use our Services.
                    </p>
                    
                    <h2 class="section-title">Description of Services</h2>
                    <p>
                        Tridah is a 501(c)(3) non-profit organization providing free, open-source digital tools and services. Our primary platform, TridahDrive, offers organizational tools including drive management, invoicing, project management, and related services.
                    </p>
                    
                    <h2 class="section-title">Use of Services</h2>
                    <p>
                        You agree to use our Services only for lawful purposes and in accordance with these Terms. You agree not to:
                    </p>
                    <ul>
                        <li>Use the Services in any way that violates applicable laws or regulations</li>
                        <li>Infringe upon the rights of others</li>
                        <li>Transmit any harmful code, viruses, or malicious software</li>
                        <li>Attempt to gain unauthorized access to our systems or user accounts</li>
                        <li>Use the Services to spam, harass, or harm others</li>
                        <li>Interfere with or disrupt the Services or servers</li>
                        <li>Use automated systems to access the Services without permission</li>
                    </ul>
                    
                    <h2 class="section-title">Open Source Software</h2>
                    <p>
                        Many of our Services are provided as open-source software. Our open-source projects are typically licensed under permissive open-source licenses (such as MIT, Apache 2.0, or similar). You are free to:
                    </p>
                    <ul>
                        <li>Use, modify, and distribute our open-source code</li>
                        <li>Contribute to our projects</li>
                        <li>Fork and create derivative works</li>
                    </ul>
                    <p>
                        Specific licensing terms for each project can be found in the respective project repositories on GitHub.
                    </p>
                    
                    <h2 class="section-title">Account Responsibility</h2>
                    <p>
                        If you create an account with our Services:
                    </p>
                    <ul>
                        <li>You are responsible for maintaining the confidentiality of your account credentials</li>
                        <li>You are responsible for all activities that occur under your account</li>
                        <li>You must notify us immediately of any unauthorized use of your account</li>
                        <li>You must be at least 13 years old to create an account</li>
                    </ul>
                    
                    <h2 class="section-title">Content and Intellectual Property</h2>
                    <p>
                        <strong>Your Content:</strong> You retain ownership of any content you create, upload, or store using our Services. By using our Services, you grant us a limited license to use, store, and process your content as necessary to provide the Services.
                    </p>
                    <p>
                        <strong>Our Content:</strong> All content, features, and functionality of our Services are owned by Tridah or our licensors and are protected by copyright, trademark, and other intellectual property laws.
                    </p>
                    
                    <h2 class="section-title">Service Availability</h2>
                    <p>
                        We strive to provide reliable services, but we do not guarantee that our Services will be uninterrupted, secure, or error-free. We reserve the right to:
                    </p>
                    <ul>
                        <li>Modify or discontinue Services at any time</li>
                        <li>Perform maintenance that may temporarily interrupt services</li>
                        <li>Limit access to Services to prevent abuse</li>
                    </ul>
                    
                    <h2 class="section-title">Limitation of Liability</h2>
                    <p>
                        As a non-profit organization providing free services, our liability is limited. To the maximum extent permitted by law:
                    </p>
                    <ul>
                        <li>Our Services are provided "as is" without warranties of any kind</li>
                        <li>We are not liable for any indirect, incidental, or consequential damages</li>
                        <li>Our total liability shall not exceed the amount you paid us (which is typically $0 for free services)</li>
                    </ul>
                    
                    <h2 class="section-title">Indemnification</h2>
                    <p>
                        You agree to indemnify and hold harmless Tridah, its officers, directors, employees, and volunteers from any claims, damages, losses, or expenses arising from your use of the Services or violation of these Terms.
                    </p>
                    
                    <h2 class="section-title">Termination</h2>
                    <p>
                        We may terminate or suspend your access to our Services at any time, with or without cause or notice, for any reason including violation of these Terms. Upon termination, your right to use the Services will immediately cease.
                    </p>
                    
                    <h2 class="section-title">Governing Law</h2>
                    <p>
                        These Terms shall be governed by and construed in accordance with the laws of the United States, without regard to its conflict of law provisions. Any disputes arising from these Terms or the Services shall be resolved in the appropriate courts.
                    </p>
                    
                    <h2 class="section-title">Changes to Terms</h2>
                    <p>
                        We reserve the right to modify these Terms at any time. We will notify users of material changes by posting the updated Terms on this page and updating the "Last Updated" date. Your continued use of the Services after changes become effective constitutes acceptance of the modified Terms.
                    </p>
                    
                    <h2 class="section-title">Severability</h2>
                    <p>
                        If any provision of these Terms is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary, and the remaining provisions shall remain in full effect.
                    </p>
                    
                    <h2 class="section-title">Contact Us</h2>
                    <p>
                        If you have questions about these Terms of Service, please contact us through <a href="{{ url('/contact') }}">our contact page</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.terms-hero {
    min-height: 50vh;
    padding: 6rem 0 3rem;
}

.terms-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
    padding: 4rem 0;
}

.legal-content {
    background-color: #2a2a3a;
    border-radius: 1.25rem;
    padding: 3rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
}

.legal-content h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: white;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
}

.legal-content h2:first-of-type {
    margin-top: 0;
}

.legal-content p {
    margin-bottom: 1.5rem;
    font-size: 1.05rem;
}

.legal-content ul {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.legal-content li {
    margin-bottom: 0.75rem;
    line-height: 1.7;
}

.legal-content a {
    color: #31d8b2;
    text-decoration: none;
    transition: color 0.3s ease;
}

.legal-content a:hover {
    color: #ffa91e;
    text-decoration: underline;
}

.last-updated {
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.9rem;
    font-style: italic;
    margin-bottom: 2rem;
}

[data-theme="light"] .terms-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

[data-theme="light"] .legal-content {
    background-color: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.05);
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .legal-content h2 {
    color: #1e1e28;
}

[data-theme="light"] .legal-content a {
    color: #204e7e;
}

[data-theme="light"] .legal-content a:hover {
    color: #31d8b2;
}

[data-theme="light"] .last-updated {
    color: rgba(30, 30, 40, 0.6);
}

@media (max-width: 768px) {
    .terms-hero {
        min-height: 40vh;
        padding: 4rem 0 2rem;
    }
    
    .legal-content {
        padding: 2rem;
    }
    
    .legal-content h2 {
        font-size: 1.5rem;
    }
}
</style>
@endsection

