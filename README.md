# Tridah Home

The public homepage for **Tridah**, a 501(c)(3) nonprofit dedicated to creating free, open, and accessible digital tools.  
This Laravel application powers [tridah.cloud](https://tridah.cloud) and highlights our mission, blog, volunteer opportunities, and contact channels.  
It is fully open source—community members are welcome to explore, file issues, and contribute improvements.

---

## ✨ Key Features

- **Mission-driven homepage** with hero messaging, platform highlights, CTA sections, and testimonials.
- **Blog** powered by [binshops/laravel-blog](https://github.com/binshops/laravel-blog) to announce releases, updates, and stories.
- **Volunteer & Contact forms** with spam protection (Google reCAPTCHA v3) and automated email notifications.
- **Accessible design** using Bootstrap 5, dark/light theming, and responsive layouts tailored to Tridah’s brand.
- **Authentication** via Laravel Breeze for team logins and blog administration.
- **Docker-ready** environment plus Laravel Sail support for local development.

---

## 🧰 Tech Stack

- [Laravel 12](https://laravel.com) (PHP 8.2)
- [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze) (Blade + Tailwind auth scaffolding)
- [Vite](https://vitejs.dev/) for asset compilation
- [Bootstrap 5.3](https://getbootstrap.com) & [Font Awesome 6](https://fontawesome.com)
- [binshops/laravel-blog](https://github.com/binshops/laravel-blog) for blog management
- [Google reCAPTCHA v3](https://developers.google.com/recaptcha) for form protection

---

## 🚀 Getting Started

### Requirements

- PHP **8.2+**
- Composer
- Node.js **18+** (for Vite builds)
- SQLite (default) or MySQL/MariaDB
- Optional: Docker / Docker Compose (for Sail)

### 1. Clone & install dependencies

```bash
git clone https://github.com/TridahCloud/TridahHome.git
cd TridahHome

composer install
npm install
```

### 2. Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your local settings:

```ini
APP_ENV=local
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite   # or mysql
# DB_DATABASE, DB_USERNAME, DB_PASSWORD if using MySQL

# Blog admin seeding
BLOG_ADMIN_EMAIL=admin@example.com
BLOG_ADMIN_NAME="Site Admin"
BLOG_ADMIN_PASSWORD=changeme123

# Google reCAPTCHA v3
RECAPTCHA_SITE_KEY=xxxx
RECAPTCHA_SECRET_KEY=xxxx

# Mail delivery (Mailgun / SMTP / Resend / etc.)
MAIL_MAILER=log
```

### 3. Database setup

```bash
php artisan migrate --seed
```

Running the seeder will create (or update) the blog admin account described in your `.env`. Log in at `/login` with the same email and password.

### 4. Build assets & run the app

```bash
npm run build    # or npm run dev for hot reload
php artisan serve
```

Visit `http://localhost:8000` for the homepage, `http://localhost:8000/blog` for the public blog, and `http://localhost:8000/blog_admin` for the blog dashboard once authenticated.

---

## 🐳 Using Laravel Sail (Docker)

If you prefer containers:

```bash
composer require laravel/sail --dev
php artisan sail:install
./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail npm install
./vendor/bin/sail npm run build
```

The application will be available at `http://localhost`.

---

## 📁 Project Structure (Highlights)

```
app/
├── Http/Controllers/           # Site controllers (Contact, Auth, etc.)
├── Mail/                       # Contact form mailers
├── Models/User.php             # Includes blog admin helper

resources/views/
├── layouts/                    # homepage + dashboard + blog layouts
├── home.blade.php              # Main homepage content
├── contact.blade.php           # Contact form & FAQ
├── volunteering.blade.php      # Volunteer opportunities
└── vendor/binshopsblog/        # Overridden blog templates

routes/
├── web.php                     # Public + auth routes
└── auth.php                    # Breeze authentication routes

public/
├── css/homepage.css            # Main site styles
├── css/dashboard.css           # Dashboard styles
├── binshops-blog.css           # Published blog assets
└── blog_images/                # Blog uploads (gitignored)
```

---

## 🔧 Configuration Reference

| Setting | Description |
| --- | --- |
| `BLOG_ADMIN_*` | Used by the seeder to provision the initial blog admin. |
| `RECAPTCHA_*` | Enables Google reCAPTCHA v3 on the contact form. |
| `MAIL_*` | Configure outbound email (team notifications + auto replies). |
| `binshopsblog.php` | Package configuration (pagination, uploads, comments, etc.). |

After editing configuration, remember:

```bash
php artisan config:clear
php artisan cache:clear
```

---

## 🤝 Contributing

We welcome pull requests that improve design, accessibility, copywriting, or functionality. To get started:

1. Fork the repository.
2. Create a feature branch: `git checkout -b feature/my-improvement`.
3. Run tests / static analysis if applicable.
4. Submit a pull request with a clear description and screenshots (if UI changes).

Need inspiration? Check the [issue tracker](../../issues) or open an issue to discuss ideas.

---

## 📬 Contact

- **Website:** [tridah.cloud](https://tridah.cloud)
- **Email:** team@tridah.cloud
- **GitHub:** [@TridahCloud](https://github.com/TridahCloud)

---

## 📄 License

This project is open sourced under the [MIT License](LICENSE).  
Feel free to use, adapt, and contribute—credit is appreciated but not required.