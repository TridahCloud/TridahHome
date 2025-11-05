# Tridah Framework Template

A modern, comprehensive Laravel framework template for building standardized applications within the Tridah nonprofit organization.

## Overview

This template provides everything needed to build modern applications with:

- **Laravel 12.x** - Latest Laravel framework
- **Dashboard Layout** - Sleek, dark-themed dashboard with sidebar navigation
- **Homepage Layout** - Modern landing page template
- **Dark/Light Theme Toggle** - Seamless theme switching
- **Bootstrap 5.3.x** - Latest Bootstrap via CDN (no build process)
- **Font Awesome** - Professional, non-cartoon icons
- **Zero Build Process** - Start coding immediately
- **Fully Responsive** - Perfect on all devices
- **Modular Architecture** - Easy to maintain and extend

## 🌐 Live Preview

**See it in action:** [triframe.tridah.cloud](https://triframe.tridah.cloud)

Experience the template live with:
- 🏠 **[Homepage](https://triframe.tridah.cloud)** - Modern landing page with dark/light theme toggle
- 🖥️ **[Dashboard](https://triframe.tridah.cloud/dashboard)** - Sleek dashboard interface with interactive components
- 🎨 **Interactive elements** - Toast notifications, theme switching, and smooth animations

## Requirements

- PHP >= 8.2
- Composer
- (No Node.js required - using CDN for all frontend assets)

**OR** use Docker (recommended for local development):
- Docker Desktop (or Docker Engine + Docker Compose)

## Quick Start

### Option 1: Docker (Recommended)

The easiest way to get started is using Docker:

**Windows:**
```bash
docker-start.bat
```

**Mac/Linux:**
```bash
docker-compose up -d --build
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```

Then open your browser to `http://localhost:8000`

For detailed Docker instructions, see [DOCKER.md](DOCKER.md)

### Option 2: Local PHP

1. **Clone or download this template**

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure your environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run migrations:**
   ```bash
   php artisan migrate
   ```

5. **Start the development server:**
   ```bash
   php -S 127.0.0.1:8000 -t public
   ```
   
   Or use the helper script (Windows):
   ```bash
   start-server.bat
   ```

## Available Templates

### 🖥️ Dashboard Layout
Use for authenticated application pages:
```blade
@extends('layouts.dashboard')
```

**Features:**
- Fixed sidebar navigation
- Top header with search and user profile
- Month summary at bottom
- Perfect for admin dashboards, analytics, etc.

### 🏠 Homepage Layout  
Use for landing and marketing pages:
```blade
@extends('layouts.homepage')
```

**Features:**
- Hero sections with CTAs
- Feature showcases
- About sections
- Footer with links

## Available Commands

- `php -S 127.0.0.1:8000 -t public` - Start development server
- `start-server.bat` - Quick start (Windows batch file)
- `php artisan migrate` - Run database migrations
- `php artisan key:generate` - Generate application key
- `php artisan storage:link` - Create storage symlink
- `php artisan tinker` - Open Laravel REPL

## Project Structure

```
app/                    # Laravel application
├── Http/Controllers/    # Application controllers
├── Models/              # Eloquent models
└── Providers/          # Service providers

resources/views/
├── layouts/             # Main layout templates
│   ├── dashboard.blade.php
│   └── homepage.blade.php
├── partials/            # Reusable components
│   ├── sidebar.blade.php
│   ├── header.blade.php
│   ├── navbar.blade.php
│   └── footer.blade.php
├── dashboard/          # Dashboard views
│   └── index.blade.php
└── home.blade.php      # Homepage view

public/
├── css/
│   ├── dashboard.css    # Dashboard styles
│   └── homepage.css     # Homepage styles
├── js/
│   └── theme-toggle.js  # Theme switching
└── images/             # Static images (logos, etc.)

database/               # Migrations, factories, seeders
routes/                  # Route definitions
tests/                   # Feature and unit tests
```

## Customization

### Branding
- Replace `public/images/tridah icon.png` with your logo
- Update brand colors in CSS files:
  - Teal: `#31d8b2`
  - Blue: `#204e7e`
  - Amber: `#ffa91e`

### Extending
This template serves as a foundation for:
- Authentication systems
- CRUD operations
- API endpoints
- Custom components
- Third-party integrations
- Any Laravel application needs

## Documentation

### Live Demo
- **Official Live Site:** [triframe.tridah.cloud](https://triframe.tridah.cloud)

### External Resources
- **Tridah Website:** [tridah.cloud](https://tridah.cloud)
- **Laravel Docs:** [laravel.com/docs](https://laravel.com/docs)
- **Bootstrap 5.3:** [getbootstrap.com](https://getbootstrap.com/docs/5.3/)
- **Font Awesome:** [fontawesome.com](https://fontawesome.com)

## License

This project is licensed under the MIT license.