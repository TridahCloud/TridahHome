# Quick Start - Docker Setup

## Step-by-Step Instructions

### 1. Make sure Docker Desktop is running
   - Open Docker Desktop on Windows
   - Wait for it to fully start (whale icon in system tray)

### 2. Open PowerShell or Command Prompt
   - Navigate to the project directory:
     ```powershell
     cd C:\Users\phelp\OneDrive\Documents\Github\TridahHome
     ```

### 3. Run the setup script (Windows)
   Simply double-click `docker-start.bat` OR run:
   ```powershell
   .\docker-start.bat
   ```

   **OR** run these commands manually:

   ```powershell
   # Build and start containers
   docker-compose up -d --build

   # Install dependencies
   docker-compose exec app composer install

   # Generate application key
   docker-compose exec app php artisan key:generate

   # Run migrations
   docker-compose exec app php artisan migrate
   ```

### 4. Access your application
   Open your browser and go to: **http://localhost:8000**

## What gets created?

Docker will create 2 containers:
- **tridah-home-app** - PHP-FPM container running Laravel
- **tridah-home-nginx** - Nginx web server

Both containers are connected on a private network and accessible via `http://localhost:8000`

## Common Commands

### Start containers
```powershell
docker-compose up -d
```

### Stop containers
```powershell
docker-compose down
```

### View logs
```powershell
docker-compose logs -f
```

### Run Artisan commands
```powershell
docker-compose exec app php artisan [command]
```

### Access container shell
```powershell
docker-compose exec app bash
```

## Troubleshooting

### Port 8000 already in use?
Edit `docker-compose.yml` and change:
```yaml
ports:
  - "8001:80"  # Use port 8001 instead
```

### Containers won't start?
Check if Docker Desktop is running and check logs:
```powershell
docker-compose logs
```

### Permission issues?
Fix storage permissions:
```powershell
docker-compose exec app chmod -R 775 storage bootstrap/cache
```

