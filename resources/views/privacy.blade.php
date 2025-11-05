@extends('layouts.homepage')

@section('title', 'Privacy Policy - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section privacy-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">Privacy Policy</h1>
                    <p class="hero-subtitle">
                        Your privacy is fundamental to our mission. We are committed to protecting your data and being transparent about how we handle information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="section privacy-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="legal-content">
                    <p class="last-updated">Last Updated: {{ date('F j, Y') }}</p>
                    
                    <h2 class="section-title">Our Commitment to Privacy</h2>
                    <p>
                        Tridah is committed to protecting your privacy. As a 501(c)(3) non-profit organization, we believe that privacy is a fundamental right. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our services and visit our website.
                    </p>
                    
                    <h2 class="section-title">Information We Do Not Collect</h2>
                    <p>
                        Unlike many organizations, we take a minimalist approach to data collection:
                    </p>
                    <ul>
                        <li><strong>No Tracking:</strong> We do not use tracking cookies, analytics services, or third-party tracking tools.</li>
                        <li><strong>No Advertising:</strong> We do not display advertisements on our website or in our applications.</li>
                        <li><strong>No Data Mining:</strong> We do not collect, sell, or share your personal data with third parties.</li>
                        <li><strong>No Social Media Tracking:</strong> We do not integrate social media tracking pixels or analytics.</li>
                    </ul>
                    
                    <h2 class="section-title">Information We May Collect</h2>
                    <p>
                        When you interact with our services, we may collect minimal information necessary for functionality:
                    </p>
                    <ul>
                        <li><strong>Contact Information:</strong> If you contact us through our contact form, we may collect your name, email address, and message content to respond to your inquiries.</li>
                        <li><strong>Technical Information:</strong> Our web server may automatically collect basic technical information such as IP addresses, browser type, and access times for security and maintenance purposes.</li>
                        <li><strong>Service Usage:</strong> If you use TridahDrive or other services, we may collect information necessary to provide those services, which is stored securely and used only for service delivery.</li>
                    </ul>
                    
                    <h2 class="section-title">How We Use Information</h2>
                    <p>
                        Any information we collect is used solely for:
                    </p>
                    <ul>
                        <li>Responding to your inquiries and providing support</li>
                        <li>Delivering and improving our services</li>
                        <li>Ensuring security and preventing abuse</li>
                        <li>Complying with legal obligations</li>
                    </ul>
                    
                    <h2 class="section-title">Data Security</h2>
                    <p>
                        We implement appropriate technical and organizational measures to protect your information. However, no method of transmission over the Internet is 100% secure. While we strive to protect your data, we cannot guarantee absolute security.
                    </p>
                    
                    <h2 class="section-title">Open Source Transparency</h2>
                    <p>
                        As an open-source organization, our code is publicly available. This transparency allows you to verify our privacy practices. You can review our source code on GitHub to see exactly how we handle data.
                    </p>
                    
                    <h2 class="section-title">Third-Party Services</h2>
                    <p>
                        Our website may contain links to third-party services (such as GitHub, donation platforms, etc.). We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.
                    </p>
                    
                    <h2 class="section-title">Your Rights</h2>
                    <p>
                        You have the right to:
                    </p>
                    <ul>
                        <li>Request access to your personal information</li>
                        <li>Request correction of inaccurate information</li>
                        <li>Request deletion of your information</li>
                        <li>Opt-out of any communications</li>
                    </ul>
                    <p>
                        To exercise these rights, please contact us at <a href="{{ url('/contact') }}">our contact page</a>.
                    </p>
                    
                    <h2 class="section-title">Children's Privacy</h2>
                    <p>
                        Our services are not directed to individuals under the age of 13. We do not knowingly collect personal information from children. If you are a parent or guardian and believe your child has provided us with personal information, please contact us.
                    </p>
                    
                    <h2 class="section-title">Changes to This Policy</h2>
                    <p>
                        We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date.
                    </p>
                    
                    <h2 class="section-title">Contact Us</h2>
                    <p>
                        If you have questions about this Privacy Policy or our privacy practices, please contact us through <a href="{{ url('/contact') }}">our contact page</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.privacy-hero {
    min-height: 50vh;
    padding: 6rem 0 3rem;
}

.privacy-section {
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

[data-theme="light"] .privacy-section {
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
    .privacy-hero {
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

