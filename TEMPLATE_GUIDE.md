# Framework Template Guide

This is your comprehensive guide to using the Tridah Framework Template for Laravel applications.

## 📋 Overview

This template provides **two main layouts** for building modern applications:

1. **Homepage Layout** - For landing pages and marketing sites
2. **Dashboard Layout** - For authenticated app dashboards

Both layouts feature:
- ✅ Dark theme (default) with light theme toggle
- ✅ Bootstrap 5.3.x for styling
- ✅ Font Awesome 6.5.1 for icons
- ✅ Fully responsive design
- ✅ Modular component architecture
- ✅ Zero build process (CDN-based)

## 🗂️ Directory Structure

```
resources/views/
├── layouts/
│   ├── dashboard.blade.php    # Dashboard layout
│   ├── homepage.blade.php      # Homepage layout
│   └── layout.blade.php         # Basic layout
├── partials/
│   ├── sidebar.blade.php        # Dashboard sidebar
│   ├── header.blade.php         # Dashboard header
│   ├── navbar.blade.php         # Homepage navbar
│   └── footer.blade.php         # Page footer
├── dashboard/
│   └── index.blade.php          # Example dashboard
├── home.blade.php               # Example homepage
└── example.blade.php            # Bootstrap examples

public/
├── css/
│   ├── dashboard.css          # Dashboard styles
│   └── homepage.css             # Homepage styles
└── js/
    └── theme-toggle.js          # Theme switching

images/
└── tridah icon.png             # Tridah logo
```

## 🎨 Using the Homepage Layout

### Creating a Homepage

```blade
@extends('layouts.homepage')

@section('title', 'About Us')

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Welcome</h1>
                <p class="lead">Your content here</p>
            </div>
        </div>
    </div>
</div>
@endsection
```

### Available Sections

The homepage layout includes:
- **Navbar** - Responsive navigation with logo
- **Footer** - Site footer with links
- **Theme Toggle** - Click moon/sun icon to switch themes

## 🖥️ Using the Dashboard Layout

### Creating a Dashboard Page

```blade
@extends('layouts.dashboard')

@section('title', 'My Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Dashboard Content</h1>
        </div>
    </div>
</div>
@endsection
```

### Dashboard Features

- **Sidebar Navigation** - Pre-configured with sections
- **Top Header** - Search, notifications, user profile
- **Theme Toggle** - Persistent theme switching
- **Responsive** - Mobile-friendly sidebar

## 🎯 Customization

### Adding Routes

Edit `routes/web.php`:

```php
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/your-page', function () {
    return view('your-view');
});
```

### Customizing the Sidebar

Edit `resources/views/partials/sidebar.blade.php`:

```blade
<li class="nav-item">
    <a href="{{ url('/your-route') }}" class="nav-link">
        <i class="fas fa-icon-name me-2"></i>
        <span>Your Link</span>
    </a>
</li>
```

### Creating Custom Components

Create reusable components in `resources/views/components/`:

**Example: Alert Component**

```blade
{{-- resources/views/components/alert.blade.php --}}
<div class="alert alert-{{ $type }}">
    {{ $message }}
</div>
```

Use it:

```blade
@component('components.alert', ['type' => 'success'])
    Your message here!
@endcomponent
```

## 📱 Theme System

### How Theme Toggle Works

The theme system uses data attributes:
- `data-theme="dark"` - Dark theme (default)
- `data-theme="light"` - Light theme

Theme preference is saved to localStorage and persists across pages.

### Customizing Theme Colors

Edit the CSS files to change colors:

**Dark Theme** (`public/css/dashboard.css`):
```css
.sidebar {
    background-color: #1e1e28;
}
```

**Light Theme**:
```css
[data-theme="light"] .sidebar {
    background-color: #ffffff;
}
```

## 🎨 Available Icons

All Font Awesome icons are available. Common ones used:

### Dashboard Icons
- `fa-chart-bar` - Dashboard
- `fa-exchange-alt` - Transactions  
- `fa-wallet` - Accounts
- `fa-tags` - Categories
- `fa-file-alt` - Reports
- `fa-cog` - Settings
- `fa-users` - Team

### UI Icons
- `fa-search` - Search
- `fa-bell` - Notifications
- `fa-question-circle` - Help
- `fa-user-circle` - Profile
- `fa-plus` - Add
- `fa-list` - View All

View all icons: https://fontawesome.com/icons

## 🎯 Bootstrap Components

All Bootstrap 5.3 components are available:

### Cards
```blade
<div class="card">
    <div class="card-body">
        Card content
    </div>
</div>
```

### Buttons
```blade
<button class="btn btn-primary">Primary</button>
<button class="btn btn-outline-success">Outline</button>
```

### Forms
```blade
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control">
</div>
```

### Grid System
```blade
<div class="container">
    <div class="row">
        <div class="col-md-6">Half width</div>
        <div class="col-md-6">Half width</div>
    </div>
</div>
```

## 🚀 Quick Start Examples

### Example 1: Simple Dashboard Card

```blade
<div class="dashboard-card">
    <div class="card-header">
        <h5 class="mb-0">Card Title</h5>
    </div>
    <div class="card-body">
        <p class="text-muted">Your content here</p>
    </div>
</div>
```

### Example 2: Navigation Link

```blade
<li class="nav-item">
    <a href="{{ url('/page') }}" class="nav-link">
        <i class="fas fa-rocket me-2"></i>
        <span>My Page</span>
    </a>
</li>
```

### Example 3: Page with Sections

```blade
@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h1>Page Title</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="dashboard-card">
                <!-- Content -->
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="dashboard-card">
                <!-- Content -->
            </div>
        </div>
    </div>
</div>
@endsection
```

## 📖 Best Practices

### 1. Keep Components Modular
```blade
@include('partials.sidebar')
```

### 2. Use Semantic HTML
```html
<section class="section">
    <article class="feature-card">
```

### 3. Maintain Dark Theme Standards
- Use cards with `.dashboard-card`
- Keep text readable with proper contrast
- Use icons for visual hierarchy

### 4. Responsive Design
Always test on mobile:
- Sidebar collapses on mobile
- Use Bootstrap breakpoints: `sm`, `md`, `lg`, `xl`

## 🔧 Troubleshooting

### Theme Not Switching?
Check browser console for JavaScript errors. Ensure `theme-toggle.js` is loaded.

### Sidebar Not Visible?
Ensure CSS files are loaded in layout:
```blade
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
```

### Icons Not Showing?
Verify Font Awesome CDN is loaded:
```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
```

## 📚 Resources

- [Bootstrap 5.3 Docs](https://getbootstrap.com/docs/5.3/)
- [Font Awesome Icons](https://fontawesome.com/icons)
- [Laravel Blade Docs](https://laravel.com/docs/blade)
- [Tridah Website](https://tridah.cloud)

## 🎯 Next Steps

1. **Customize Colors** - Update CSS variables in `dashboard.css` and `homepage.css`
2. **Add Authentication** - Install Laravel Breeze or Jetstream
3. **Create More Views** - Build out your application pages
4. **Add API Integration** - Connect to your backend services
5. **Deploy** - Push to production when ready

## 💡 Tips

- Use `.dashboard-card` for all content cards in dashboard
- Keep navigation consistent across pages
- Test theme toggle on all pages
- Use Font Awesome icons for consistency
- Follow Bootstrap documentation for components
- Keep colors consistent with your brand

