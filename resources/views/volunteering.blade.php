@extends('layouts.homepage')

@section('title', 'Volunteering - Tridah')

@section('content')
<!-- Hero Section -->
<section class="hero-section volunteering-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title">Join Our Mission</h1>
                    <p class="hero-subtitle">
                        Help us build free, open, and accessible digital tools that empower individuals and communities worldwide.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Volunteering Section -->
<section id="about-volunteering" class="section about-volunteering-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="feature-card interactive-card">
                    <h2 class="fw-bold mb-4">About Tridah</h2>
                    <p class="volunteering-text mb-4">
                        Tridah is a nonprofit organization dedicated to creating free, open, and accessible digital tools that simplify work, enhance creativity, and improve everyday life. Our mission is to empower individuals and communities through technology that serves the public good — without ads, paywalls, or data tracking.
                    </p>
                    <p class="volunteering-text">
                        We're currently forming our founding board of directors and are seeking passionate individuals who want to help shape the foundation of a mission-driven organization focused on open-source and educational technology.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Opportunities Section -->
<section id="opportunities" class="section opportunities-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Volunteer Opportunities</h2>
            <p class="section-subtitle">Help us build the foundation of a mission-driven nonprofit organization</p>
        </div>
        
        <div class="row g-4">
            <!-- Grant Writer -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon writing-icon">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">Grant Writer</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-teal">Writing Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>5-10 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Help secure funding for our mission through grant writing.</strong> Research funding opportunities, write compelling grant proposals, and help Tridah access resources to expand our impact. Perfect for someone with writing skills and passion for nonprofit sustainability.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Grant Writing & Research
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#grantWriterDetails" aria-expanded="false" aria-controls="grantWriterDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="grantWriterDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Help Tridah secure funding through grant writing and research to support our mission of creating free, accessible digital tools.</p>
                            <ul class="detail-list">
                                <li>Research and identify relevant grant opportunities</li>
                                <li>Write compelling grant proposals and applications</li>
                                <li>Collaborate with board members to gather necessary information</li>
                                <li>Track application deadlines and requirements</li>
                                <li>Maintain relationships with potential funders</li>
                                <li>Help develop funding strategies and budgets</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p>We welcome individuals with strong writing skills and a passion for nonprofit sustainability.</p>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Writing:</strong> Excellent written communication and persuasive writing skills</li>
                                <li><strong>Research:</strong> Ability to research and identify relevant funding opportunities</li>
                                <li><strong>Organization:</strong> Strong attention to detail and deadline management</li>
                                <li><strong>Collaboration:</strong> Ability to work with team members to gather information</li>
                            </ul>
                            <p><strong>Nice to have:</strong></p>
                            <ul class="detail-list">
                                <li>Previous grant writing experience</li>
                                <li>Knowledge of nonprofit funding landscape</li>
                                <li>Experience with foundation and government grants</li>
                                <li>Understanding of nonprofit budgeting and financial planning</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>5-10 hours per month, with flexibility around grant deadlines and application cycles.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Help secure funding for meaningful technology projects</li>
                                <li>Develop grant writing skills and experience</li>
                                <li>Contribute to nonprofit sustainability</li>
                                <li>Make technology more accessible to everyone</li>
                                <li>Work with a mission-driven team</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Developer Volunteer -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon technical-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">Developer Volunteer</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-blue">Technical Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>5-15 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Help us build free, open-source digital tools.</strong> Contribute to our GitHub repositories using Laravel, Bootstrap, and MySQL. Perfect for developers who want to use their skills to create accessible technology for everyone.
                    </p>
                    <div class="role-focus">
                        <strong>Stack:</strong> Laravel, Bootstrap, MySQL
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#developerDetails" aria-expanded="false" aria-controls="developerDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="developerDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Contribute to our open-source projects and help build free, accessible digital tools that empower individuals and communities worldwide.</p>
                            <ul class="detail-list">
                                <li>Developing new features and tools using our tech stack</li>
                                <li>Fixing bugs and improving existing functionality</li>
                                <li>Writing clean, maintainable code following best practices</li>
                                <li>Contributing to our GitHub repositories</li>
                                <li>Collaborating with other developers and community members</li>
                                <li>Testing and debugging applications</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p>We welcome developers of all skill levels who share our mission of creating free, ethical technology.</p>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Laravel:</strong> PHP framework for web applications</li>
                                <li><strong>Bootstrap:</strong> Front-end framework for responsive design</li>
                                <li><strong>MySQL:</strong> Database design and query optimization</li>
                                <li><strong>Git/GitHub:</strong> Version control and collaboration</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>5-15 hours per month, flexible scheduling. You can contribute as much or as little as your schedule allows.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Contribute to meaningful open-source projects</li>
                                <li>Build your portfolio with real-world applications</li>
                                <li>Work with a diverse, mission-driven team</li>
                                <li>Learn and grow as a developer</li>
                                <li>Make technology more accessible to everyone</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project Manager -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon management-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">Project Manager</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-amber">Management Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>8-12 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Help coordinate projects and ensure smooth operations.</strong> Manage timelines, coordinate between teams, and ensure projects stay on track. Perfect for someone with organizational skills and experience managing technical projects.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Project Coordination
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#projectManagerDetails" aria-expanded="false" aria-controls="projectManagerDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="projectManagerDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Coordinate projects and ensure smooth operations across Tridah's development and community initiatives.</p>
                            <ul class="detail-list">
                                <li>Manage project timelines and milestones</li>
                                <li>Coordinate between developers, writers, and community managers</li>
                                <li>Track progress and identify potential roadblocks</li>
                                <li>Facilitate team meetings and communication</li>
                                <li>Create and maintain project documentation</li>
                                <li>Ensure deliverables meet quality standards</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Organization:</strong> Strong project planning and time management skills</li>
                                <li><strong>Communication:</strong> Excellent written and verbal communication</li>
                                <li><strong>Leadership:</strong> Ability to coordinate and motivate team members</li>
                                <li><strong>Problem-solving:</strong> Ability to identify and resolve project issues</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>8-12 hours per month, with flexibility around project deadlines and team needs.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Lead meaningful technology projects</li>
                                <li>Develop project management skills</li>
                                <li>Work with diverse, talented teams</li>
                                <li>Contribute to nonprofit success</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- GitHub Maintainer -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon technical-icon">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">GitHub Maintainer</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-blue">Technical Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>6-10 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Maintain and organize our GitHub repositories.</strong> Review pull requests, manage issues, ensure code quality, and help contributors. Perfect for experienced developers who want to guide open-source development.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Repository Management
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#githubMaintainerDetails" aria-expanded="false" aria-controls="githubMaintainerDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="githubMaintainerDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Maintain and organize Tridah's GitHub repositories to ensure high-quality open-source development.</p>
                            <ul class="detail-list">
                                <li>Review and merge pull requests</li>
                                <li>Manage issues and bug reports</li>
                                <li>Ensure code quality and standards</li>
                                <li>Help onboard new contributors</li>
                                <li>Maintain repository documentation</li>
                                <li>Coordinate with development team</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Git/GitHub:</strong> Advanced knowledge of version control and GitHub workflows</li>
                                <li><strong>Code Review:</strong> Ability to review code for quality and security</li>
                                <li><strong>Communication:</strong> Clear feedback and guidance for contributors</li>
                                <li><strong>Technical Skills:</strong> Strong understanding of our tech stack (Laravel, Bootstrap, MySQL)</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>6-10 hours per month, with flexibility around release cycles and contributor activity.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Guide open-source development</li>
                                <li>Mentor new contributors</li>
                                <li>Ensure code quality and security</li>
                                <li>Build a strong developer community</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Technical Writer -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon writing-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">Technical Writer</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-teal">Writing Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>5-8 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Create clear, accessible documentation for our tools and projects.</strong> Write user guides, API documentation, and help content. Perfect for someone with technical writing skills and passion for making technology accessible.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Documentation
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#technicalWriterDetails" aria-expanded="false" aria-controls="technicalWriterDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="technicalWriterDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Create clear, accessible documentation to help users understand and use Tridah's tools effectively.</p>
                            <ul class="detail-list">
                                <li>Write user guides and tutorials</li>
                                <li>Create API documentation</li>
                                <li>Develop help content and FAQs</li>
                                <li>Maintain documentation accuracy</li>
                                <li>Collaborate with developers on technical content</li>
                                <li>Ensure documentation is accessible and user-friendly</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Writing:</strong> Clear, concise technical writing abilities</li>
                                <li><strong>Technical Understanding:</strong> Ability to understand and explain technical concepts</li>
                                <li><strong>Organization:</strong> Strong attention to detail and information architecture</li>
                                <li><strong>User Focus:</strong> Ability to write for diverse user skill levels</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>5-8 hours per month, with flexibility around project releases and documentation needs.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Make technology more accessible through clear documentation</li>
                                <li>Develop technical writing skills</li>
                                <li>Help users succeed with our tools</li>
                                <li>Contribute to open-source documentation</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Social Media Manager -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon marketing-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">Social Media Manager</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-amber">Marketing Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>6-10 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Manage our social media presence and grow our community.</strong> Create engaging content, manage social platforms, and help spread awareness of our mission. Perfect for someone with social media experience and passion for technology advocacy.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Social Media
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#socialMediaManagerDetails" aria-expanded="false" aria-controls="socialMediaManagerDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="socialMediaManagerDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Manage Tridah's social media presence to grow our community and spread awareness of our mission.</p>
                            <ul class="detail-list">
                                <li>Create engaging social media content</li>
                                <li>Manage multiple social platforms</li>
                                <li>Engage with followers and community</li>
                                <li>Develop content calendar and strategy</li>
                                <li>Monitor social media analytics</li>
                                <li>Collaborate with team on campaigns</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Social Media:</strong> Experience managing social media platforms</li>
                                <li><strong>Content Creation:</strong> Ability to create engaging posts and graphics</li>
                                <li><strong>Communication:</strong> Strong written communication skills</li>
                                <li><strong>Strategy:</strong> Understanding of social media best practices</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>6-10 hours per month, with flexibility around campaigns and community events.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Grow a mission-driven community</li>
                                <li>Develop social media skills</li>
                                <li>Advocate for free, ethical technology</li>
                                <li>Connect with like-minded individuals</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Discord/Community Manager -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon community-icon">
                            <i class="fab fa-discord"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">Discord/Community Manager</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-teal">Community Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>8-12 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Foster a welcoming community on Discord and other platforms.</strong> Moderate discussions, organize events, and help build connections between community members. Perfect for someone with community management experience and passion for technology.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Community Building
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#communityManagerDetails" aria-expanded="false" aria-controls="communityManagerDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="communityManagerDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Foster a welcoming, engaged community on Discord and other platforms to support Tridah's mission.</p>
                            <ul class="detail-list">
                                <li>Moderate Discord server and discussions</li>
                                <li>Organize community events and activities</li>
                                <li>Welcome new members and help them get started</li>
                                <li>Facilitate discussions and answer questions</li>
                                <li>Develop community guidelines and policies</li>
                                <li>Collaborate with other team members</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Community Management:</strong> Experience managing online communities</li>
                                <li><strong>Communication:</strong> Excellent interpersonal and written communication</li>
                                <li><strong>Moderation:</strong> Ability to handle conflicts and maintain positive environment</li>
                                <li><strong>Organization:</strong> Skills in planning events and activities</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>8-12 hours per month, with flexibility around community events and member needs.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Build a supportive technology community</li>
                                <li>Develop community management skills</li>
                                <li>Connect people around shared values</li>
                                <li>Help newcomers discover free technology</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- System Administrator -->
            <div class="col-lg-6">
                <div class="volunteer-role-card">
                    <div class="role-header">
                        <div class="role-icon technical-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="role-info">
                            <h3 class="role-title">System Administrator</h3>
                            <div class="role-meta">
                                <span class="role-type badge bg-brand-blue">Technical Role</span>
                                <span class="role-time"><i class="fas fa-clock me-1"></i>6-12 hours/month</span>
                                <span class="role-location"><i class="fas fa-globe me-1"></i>Remote</span>
                            </div>
                        </div>
                    </div>
                    <p class="role-summary">
                        <strong>Maintain and optimize our server infrastructure and organizational tools.</strong> Manage VPS on Contabo (Ubuntu), HestiaCP control panel, and organizational services. Perfect for someone with sysadmin experience and passion for reliable, scalable infrastructure.
                    </p>
                    <div class="role-focus">
                        <strong>Focus:</strong> Infrastructure & Systems
                    </div>
                    <button class="btn btn-outline-teal w-100 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#sysadminDetails" aria-expanded="false" aria-controls="sysadminDetails">
                        Expand Details <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    <div class="collapse mt-3" id="sysadminDetails">
                        <div class="role-details">
                            <h5 class="detail-section-title">What You'll Do</h5>
                            <p>Maintain and optimize Tridah's server infrastructure and organizational systems to ensure reliable, secure operations.</p>
                            <ul class="detail-list">
                                <li>Manage VPS on Contabo running Ubuntu</li>
                                <li>Maintain HestiaCP control panel configuration</li>
                                <li>Monitor server performance and security</li>
                                <li>Deploy and maintain Laravel applications</li>
                                <li>Configure and optimize database servers (MySQL)</li>
                                <li>Manage backups and disaster recovery</li>
                                <li>Handle organizational services (Google Workspace, Squarespace)</li>
                                <li>Troubleshoot technical issues and outages</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Who We're Looking For</h5>
                            <p><strong>Required skills:</strong></p>
                            <ul class="detail-list">
                                <li><strong>Linux/Ubuntu:</strong> Strong command-line and server administration skills</li>
                                <li><strong>VPS Management:</strong> Experience managing virtual private servers</li>
                                <li><strong>Control Panels:</strong> Experience with HestiaCP or similar hosting control panels</li>
                                <li><strong>Web Servers:</strong> Knowledge of Nginx/Apache and server configurations</li>
                                <li><strong>Laravel:</strong> Understanding of PHP frameworks and deployment</li>
                                <li><strong>MySQL:</strong> Database administration and optimization</li>
                            </ul>
                            
                            <h5 class="detail-section-title">Time Commitment</h5>
                            <p>6-12 hours per month, with flexibility around deployments and maintenance windows. Some availability for urgent issues is appreciated.</p>
                            
                            <h5 class="detail-section-title">Why Join Us</h5>
                            <ul class="detail-list">
                                <li>Maintain critical infrastructure for a growing nonprofit</li>
                                <li>Work with modern technology stack (Laravel, Ubuntu, HestiaCP)</li>
                                <li>Develop system administration skills in production environment</li>
                                <li>Ensure reliable access to free technology for everyone</li>
                                <li>Contribute to infrastructure decisions and improvements</li>
                            </ul>
                            
                            <a href="{{ url('/contact') }}" class="btn btn-success w-100 mt-3">
                                <i class="fas fa-paper-plane me-2"></i>
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section id="values" class="section values-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Values</h2>
            <p class="section-subtitle">Principles that guide everything we do</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="value-card-small text-center">
                    <div class="value-icon-small">
                        <i class="fas fa-universal-access"></i>
                    </div>
                    <h5 class="fw-bold mt-3">Accessibility</h5>
                    <p class="mb-0">Everyone deserves access to high-quality digital tools.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="value-card-small text-center">
                    <div class="value-icon-small">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h5 class="fw-bold mt-3">Transparency</h5>
                    <p class="mb-0">All projects are open-source and publicly documented.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="value-card-small text-center">
                    <div class="value-icon-small">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 class="fw-bold mt-3">Ethics</h5>
                    <p class="mb-0">No ads, no tracking, no data mining.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="value-card-small text-center">
                    <div class="value-icon-small">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 class="fw-bold mt-3">Community</h5>
                    <p class="mb-0">Collaboration and co-creation with global users.</p>
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
                        <i class="fas fa-heart"></i>
                    </div>
                    <h2 class="fw-bold mb-3">Ready to Make a Difference?</h2>
                    <p class="cta-text mb-4">
                        Join our mission to create free, ethical, and accessible technology for everyone.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="{{ url('/contact') }}" class="btn btn-lg btn-success">
                            <i class="fas fa-users me-2"></i>
                            Get Involved
                        </a>
                        <a href="https://www.zeffy.com/embed/donation-form/help-us-to-create-online-tools?modal=true" target="_blank" class="btn btn-lg btn-outline-teal">
                            <i class="fas fa-heart me-2"></i>
                            Support Our Mission
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Volunteering Hero */
.volunteering-hero {
    min-height: 50vh;
    padding: 6rem 0 3rem;
}

/* About Volunteering Section */
.about-volunteering-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.volunteering-text {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    font-size: 1.1rem;
}

/* Opportunities Section */
.opportunities-section {
    background: linear-gradient(135deg, #141420 0%, #1e1e28 100%);
}

.volunteer-role-card {
    background-color: #2a2a3a;
    border-radius: 1.25rem;
    padding: 2rem;
    height: 100%;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.05);
    position: relative;
    overflow: hidden;
}

.volunteer-role-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(49, 216, 178, 0.1) 0%, rgba(32, 78, 126, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 0;
    pointer-events: none;
}

.volunteer-role-card:hover::before {
    opacity: 1;
}

.volunteer-role-card:hover {
    transform: translateY(-5px);
    border-color: #31d8b2;
    box-shadow: 0 12px 32px rgba(49, 216, 178, 0.15);
}

.role-header {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 2;
}

.volunteer-role-card button {
    position: relative;
    z-index: 10;
    cursor: pointer;
}

/* Ensure Bootstrap collapse works properly */
.volunteer-role-card .collapse:not(.show) {
    display: none;
}

.volunteer-role-card .collapse.show {
    display: block;
}

.volunteer-role-card .collapsing {
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}

.volunteer-role-card .collapse {
    position: relative;
    z-index: 2;
}

.role-icon {
    width: 80px;
    height: 80px;
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.writing-icon {
    background: linear-gradient(135deg, #31d8b2 0%, #204e7e 100%);
}

.technical-icon {
    background: linear-gradient(135deg, #204e7e 0%, #31d8b2 100%);
}

.management-icon {
    background: linear-gradient(135deg, #ffa91e 0%, #204e7e 100%);
}

.marketing-icon {
    background: linear-gradient(135deg, #31d8b2 0%, #ffa91e 100%);
}

.community-icon {
    background: linear-gradient(135deg, #ffa91e 0%, #31d8b2 100%);
}

.volunteer-role-card:hover .role-icon {
    transform: scale(1.1) rotate(5deg);
}

.role-info {
    flex: 1;
}

.role-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
    color: white;
}

.role-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    align-items: center;
    font-size: 0.875rem;
}

.role-time,
.role-location {
    color: rgba(255, 255, 255, 0.7);
}

.role-summary {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    margin-bottom: 1rem;
    position: relative;
    z-index: 2;
}

.role-focus {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
    position: relative;
    z-index: 2;
}

.volunteer-role-card button {
    position: relative;
    z-index: 10 !important;
    pointer-events: auto !important;
}

.volunteer-role-card button[data-bs-toggle="collapse"] i.fa-chevron-down {
    transition: transform 0.3s ease;
}

.volunteer-role-card button[data-bs-toggle="collapse"][aria-expanded="true"] i.fa-chevron-down {
    transform: rotate(180deg);
}

.role-details {
    position: relative;
    z-index: 1;
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-section-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-top: 1.5rem;
    margin-bottom: 1rem;
    color: white;
}

.detail-section-title:first-child {
    margin-top: 0;
}

.detail-list {
    list-style: none;
    padding: 0;
    margin-bottom: 1rem;
}

.detail-list li {
    color: rgba(255, 255, 255, 0.8);
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
    line-height: 1.6;
}

.detail-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #31d8b2;
    font-weight: bold;
    font-size: 1.25rem;
}

.role-details p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    margin-bottom: 1rem;
}

/* Values Section */
.values-section {
    background: linear-gradient(135deg, #1e1e28 0%, #141420 100%);
}

.value-card-small {
    background-color: #2a2a3a;
    border-radius: 1rem;
    padding: 2rem;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.05);
    height: 100%;
}

.value-card-small:hover {
    transform: translateY(-5px);
    border-color: #31d8b2;
}

.value-icon-small {
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
}

.value-card-small h5 {
    color: white;
}

.value-card-small p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.95rem;
}

/* Light Theme */
[data-theme="light"] .about-volunteering-section,
[data-theme="light"] .opportunities-section,
[data-theme="light"] .values-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

[data-theme="light"] .volunteering-text,
[data-theme="light"] .role-details p {
    color: rgba(30, 30, 40, 0.9);
}

[data-theme="light"] .volunteer-role-card,
[data-theme="light"] .value-card-small {
    background-color: #ffffff;
    border-color: rgba(0, 0, 0, 0.05);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

[data-theme="light"] .role-title,
[data-theme="light"] .detail-section-title,
[data-theme="light"] .value-card-small h5 {
    color: #1e1e28;
}

[data-theme="light"] .role-summary,
[data-theme="light"] .role-focus,
[data-theme="light"] .detail-list li,
[data-theme="light"] .value-card-small p {
    color: rgba(30, 30, 40, 0.8);
}

[data-theme="light"] .role-time,
[data-theme="light"] .role-location {
    color: rgba(30, 30, 40, 0.6);
}

[data-theme="light"] .role-details {
    border-top-color: rgba(0, 0, 0, 0.1);
}

/* Responsive */
@media (max-width: 768px) {
    .volunteering-hero {
        min-height: 40vh;
        padding: 4rem 0 2rem;
    }
    
    .role-header {
        flex-direction: column;
        text-align: center;
    }
    
    .role-icon {
        margin: 0 auto;
    }
    
    .volunteer-role-card {
        margin-bottom: 1.5rem;
    }
}
</style>

@push('scripts')
<script>
// Ensure Bootstrap collapse works - manual initialization if needed
(function() {
    function initCollapse() {
        const collapseButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');
        
        collapseButtons.forEach(button => {
            const targetId = button.getAttribute('data-bs-target');
            if (!targetId) return;
            
            const targetElement = document.querySelector(targetId);
            const icon = button.querySelector('i.fa-chevron-down');
            
            if (!targetElement) return;
            
            // Function to update button text and icon
            function updateButtonState(isExpanded) {
                button.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
                
                // Update button text - find the text node
                const textNodes = Array.from(button.childNodes).filter(node => node.nodeType === Node.TEXT_NODE);
                if (textNodes.length > 0) {
                    // Update existing text node
                    textNodes[0].textContent = isExpanded ? 'Collapse Details ' : 'Expand Details ';
                } else {
                    // If no text node exists, create one before the icon
                    const textNode = document.createTextNode(isExpanded ? 'Collapse Details ' : 'Expand Details ');
                    if (icon && icon.parentNode) {
                        icon.parentNode.insertBefore(textNode, icon);
                    } else {
                        button.appendChild(textNode);
                    }
                }
                
                // Update icon rotation
                if (icon) {
                    icon.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            }
            
            // Handle Bootstrap collapse events
            targetElement.addEventListener('shown.bs.collapse', function () {
                updateButtonState(true);
            });
            
            targetElement.addEventListener('hidden.bs.collapse', function () {
                updateButtonState(false);
            });
            
            // Check initial state
            if (targetElement.classList.contains('show')) {
                updateButtonState(true);
            }
        });
    }
    
    // Wait for Bootstrap to load
    function waitForBootstrap() {
        if (typeof bootstrap !== 'undefined' || document.querySelector('script[src*="bootstrap"]')) {
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initCollapse);
            } else {
                initCollapse();
            }
        } else {
            setTimeout(waitForBootstrap, 50);
        }
    }
    
    waitForBootstrap();
})();
</script>
@endpush
@endsection

