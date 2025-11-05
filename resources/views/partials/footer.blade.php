<footer class="page-footer">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/tridah icon.png') }}" alt="Tridah" height="32" class="me-2">
                    <span class="fw-bold fs-5">Tridah</span>
                </div>
                <p class="mb-2">Empower. Create. Share.</p>
                <p class="text-muted mb-0">Free, open, and accessible digital tools for everyone.</p>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h6 class="mb-3">Platform</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://drive.tridah.cloud" target="_blank" class="text-muted text-decoration-none">🚀 TridahDrive <i class="fas fa-external-link-alt ms-1 small"></i></a></li>
                    <li class="mb-2"><a href="https://github.com/TridahCloud/TridahDrive" target="_blank" class="text-muted text-decoration-none">GitHub Repository <i class="fas fa-external-link-alt ms-1 small"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6 class="mb-3">Organization</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ url('/about') }}" class="text-muted text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="{{ url('/board') }}" class="text-muted text-decoration-none">Board of Directors</a></li>
                    <li class="mb-2"><a href="{{ url('/contact') }}" class="text-muted text-decoration-none">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center pt-3 border-top">
                    <p class="text-muted mb-2 mb-md-0 small">&copy; {{ date('Y') }} Tridah. A 501(c)(3) Non-Profit Organization. All rights reserved.</p>
                    <div class="footer-links-small">
                        <a href="{{ url('/privacy') }}" class="text-muted text-decoration-none small me-3">Privacy Policy</a>
                        <a href="{{ url('/terms') }}" class="text-muted text-decoration-none small me-3">Terms of Service</a>
                        <a href="{{ url('/open-source') }}" class="text-muted text-decoration-none small">Open Source</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <div class="footer-cta">
                    <h6 class="mb-2">Get Involved</h6>
                    <div class="d-flex gap-2 justify-content-center flex-wrap">
                        <a href="https://www.zeffy.com/embed/donation-form/help-us-to-create-online-tools?modal=true" target="_blank" class="btn btn-sm btn-success">Donate</a>
                        <a href="{{ url('/volunteering') }}" class="btn btn-sm btn-outline-teal">Volunteer</a>
                        <a href="{{ url('/contact') }}" class="btn btn-sm btn-outline-teal">Partner With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

