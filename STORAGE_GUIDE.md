# File Storage Guide

This guide explains where to store different types of files in your Laravel application.

## Image Storage Locations

### 1. **Static Images (Design Assets)** ✅ USE THIS FOR FRONTEND IMAGES
**Location:** `public/images/`

**When to use:**
- Logos, icons, banners
- Static graphics that don't change
- Design assets part of your templates
- Images referenced directly in your HTML

**How to reference in Blade templates:**
```blade
<img src="{{ asset('images/logo.png') }}" alt="Logo">
<!-- Or simply -->
<img src="/images/logo.png" alt="Logo">
```

**Example structure:**
```
public/
  images/
    logo.png
    icons/
      home.svg
      user.svg
    banners/
      hero.jpg
```

---

### 2. **User-Uploaded Images** 
**Location:** `storage/app/public/`

**When to use:**
- Profile pictures
- User-submitted photos
- Uploaded documents
- Dynamic content that users add

**How it works:**
- Files are stored in `storage/app/public/`
- A symbolic link (`public/storage`) points to this directory
- This keeps uploaded files out of public access but makes them accessible via URLs

**How to use in code:**
```php
// Store an uploaded file
$path = $request->file('image')->store('images', 'public');

// Access in blade
<img src="{{ asset('storage/' . $path) }}" alt="Image">
// Example: /storage/images/user-123.jpg
```

---

### 3. **Private Storage** (Not Web-Accessible)
**Location:** `storage/app/private/`

**When to use:**
- Files that should NOT be publicly accessible
- Sensitive documents
- Temporary files

**Access via code only** - cannot be accessed via URL.

---

## Recommended Structure

```
your-project/
├── public/
│   ├── images/          ← Static images for frontend
│   │   ├── logo.png
│   │   ├── icons/
│   │   └── banners/
│   ├── css/             ← Compiled CSS (if using build tools)
│   ├── js/              ← Compiled JS (if using build tools)
│   └── storage/          ← Symbolic link to storage/app/public
│
├── storage/
│   ├── app/
│   │   ├── public/      ← User-uploaded public files
│   │   │   └── images/  ← Uploaded images
│   │   └── private/     ← Private files (not accessible via URL)
│   ├── logs/            ← Application logs
│   └── framework/       ← Framework files
│
└── resources/
    ├── images/          ← Source images (for your build process)
    ├── css/             ← Source CSS files
    └── js/              ← Source JS files
```

---

## Quick Commands

### For Static Images
```bash
# Copy images to public/images/
cp my-logo.png public/images/
```

### For User Uploads
```php
// In your controller
$path = $request->file('photo')->store('images', 'public');
// Stores in: storage/app/public/images/
// Accessible at: /storage/images/{filename}
```

### Create Storage Link (already done)
```bash
php artisan storage:link
```

---

## Best Practices

1. **Static assets** → `public/images/`
   - Fast, directly accessible
   - No Laravel overhead
   - Perfect for logos, icons, backgrounds

2. **User uploads** → `storage/app/public/`
   - Secure file storage
   - Version control friendly (not in git)
   - Use Laravel's storage system

3. **Never store sensitive files in `public/`**
   - Use `storage/app/private/` instead

4. **Use `asset()` helper for URLs**
   - Automatically adds app URL
   - Works in different environments

---

## Adding Images to Your Template

### Method 1: Static Image (Recommended for frontend)
```blade
<!-- In your Blade template -->
<img src="{{ asset('images/logo.png') }}" alt="Company Logo">
```

### Method 2: User-Uploaded Image
```blade
<!-- For images stored via Laravel's storage system -->
<img src="{{ asset('storage/' . $user->avatar_path) }}" alt="User Avatar">
```

### Method 3: Direct Path (Simple static)
```blade
<!-- For images in public/images -->
<img src="/images/hero.jpg" alt="Hero Image">
```

---

## Tips

- **Organization**: Create subdirectories in `public/images/` for different types (e.g., `logos/`, `icons/`, `banners/`)
- **Optimization**: Compress images before adding them
- **Naming**: Use descriptive, lowercase filenames with hyphens (e.g., `company-logo.png`)
- **Dimensions**: Store images at the size they'll be displayed for better performance
