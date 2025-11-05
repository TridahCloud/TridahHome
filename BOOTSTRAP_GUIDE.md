# Bootstrap 5.3.x Setup Guide

Bootstrap 5.3.3 has been successfully installed and configured in your Laravel application.

## What's Installed

- **Bootstrap CSS 5.3.3** - Latest version with all components and utilities
- **Bootstrap JavaScript** - Core interactive components (Dropdowns, Modals, Toasts)
- **Assets compiled** and ready to use

## File Structure

```
your-project/
├── resources/
│   ├── css/
│   │   └── app.css          ← Imports Bootstrap CSS
│   └── js/
│   │   ├── app.js           ← Main JS file
│   │   └── bootstrap.js     ← Axios + Bootstrap JS
│   └── views/
│       ├── layout.blade.php ← Main layout with Bootstrap navbar
│       ├── welcome.blade.php← Welcome page
│       └── example.blade.php← Example page with Bootstrap components
└── public/
    └── build/               ← Compiled assets
```

## Available Components

Bootstrap components available in your JavaScript:
- **Dropdowns** - `new Dropdown(element)`
- **Modals** - `new Modal(element)`
- **Toasts** - `new Toast(element)`
- Plus more available to import as needed

## How to Use

### 1. Using the Layout Template

Your project includes `resources/views/layout.blade.php` with a Bootstrap navbar:

```blade
@extends('layout')

@section('title', 'My Page Title')

@section('content')
<div class="container">
    <h1 class="display-4">Hello World!</h1>
    <button class="btn btn-primary">Click Me</button>
</div>
@endsection
```

### 2. Direct HTML Usage

In any Blade template:

```blade
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Card content goes here.</p>
                </div>
            </div>
        </div>
    </div>
</div>
```

### 3. Using Bootstrap JavaScript Components

#### Modal Example
```html
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open Modal
</button>

<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Modal body content
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
```

#### Dropdown Example
```html
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
</div>
```

#### Alert Dismissible
```html
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your message has been sent.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
```

## Common Bootstrap Classes

### Grid System
```html
<div class="container">      <!-- Fixed width container -->
<div class="container-fluid"> <!-- Full width container -->
<div class="row">            <!-- Row for columns -->
<div class="col-md-6">      <!-- Medium screen: 6/12 columns -->
```

### Typography
```html
<h1 class="display-1">Display 1</h1>
<p class="lead">Lead paragraph text</p>
<p class="text-muted">Muted text</p>
```

### Buttons
```html
<button class="btn btn-primary">Primary</button>
<button class="btn btn-outline-secondary">Outline</button>
<button class="btn btn-lg">Large Button</button>
```

### Cards
```html
<div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Body</div>
    <div class="card-footer">Footer</div>
</div>
```

### Forms
```html
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="name@example.com">
</div>
```

## View Examples

### Example Page
Visit `/example` to see Bootstrap components in action:
- Cards
- Buttons
- Forms
- Alerts
- Grid system

### Main Layout
The `resources/views/layout.blade.php` includes:
- Responsive navbar
- Container structure
- Footer
- Your logo integration

## Development Workflow

### Development Mode (Watch for changes)
```bash
npm run dev
```
This starts Vite in watch mode and rebuilds on file changes.

### Production Build
```bash
npm run build
```
Compiles and minifies assets for production.

## Customization

### Custom Colors
Add to `resources/css/app.css` after the Bootstrap import:

```css
/* Bootstrap 5.3.x */
@import 'bootstrap/dist/css/bootstrap.min.css';

/* Custom variables */
:root {
    --bs-primary: #your-color;
    --bs-secondary: #your-color;
}
```

### Custom SCSS (if you want to use Sass later)
```bash
npm install sass --save-dev
```

Then change `app.css` to `app.scss` and use:
```scss
@import 'bootstrap/scss/bootstrap';
```

## Including More Bootstrap Components

Edit `resources/js/bootstrap.js` to import additional components:

```javascript
import { Alert, Button, Carousel, Collapse, Offcanvas, Popover, ScrollSpy, Tab, Tooltip } from 'bootstrap';

// Make available globally
window.Alert = Alert;
window.Button = Button;
// ... etc
```

## Bootstrap Icons (Optional)

Install Bootstrap Icons:
```bash
npm install bootstrap-icons
```

Then uncomment in `resources/css/app.css`:
```css
@import 'bootstrap-icons/font/bootstrap-icons.css';
```

Usage:
```html
<i class="bi bi-house"></i>
```

## Resources

- [Bootstrap 5.3 Documentation](https://getbootstrap.com/docs/5.3/)
- [Bootstrap Icons](https://icons.getbootstrap.com/)
- [Laravel Vite Plugin](https://laravel.com/docs/vite)

## Quick Reference

- **Grid Breakpoints**: `sm`, `md`, `lg`, `xl`, `xxl`
- **Spacing Utilities**: `m-*`, `mt-*`, `mb-*`, `ms-*`, `me-*`, `p-*`
- **Display**: `d-none`, `d-block`, `d-flex`, `d-grid`
- **Text**: `text-center`, `text-primary`, `fw-bold`, `fst-italic`

