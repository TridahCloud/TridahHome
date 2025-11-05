@echo off
echo ========================================
echo Starting Tridah Home Docker Setup
echo ========================================
echo.

REM Check if .env exists
if not exist .env (
    echo Creating .env file from .env.example...
    if exist .env.example (
        copy .env.example .env
        echo .env file created successfully!
    ) else (
        echo ERROR: .env.example not found!
        pause
        exit /b 1
    )
    echo.
)

REM Build and start containers
echo Building and starting Docker containers...
docker-compose up -d --build

if %ERRORLEVEL% NEQ 0 (
    echo ERROR: Failed to start Docker containers!
    pause
    exit /b 1
)

echo.
echo Waiting for containers to be ready...
timeout /t 5 /nobreak >nul

echo.
echo Installing Composer dependencies...
docker-compose exec -T app composer install --no-interaction

if %ERRORLEVEL% NEQ 0 (
    echo WARNING: Composer install failed, but continuing...
)

echo.
echo Checking if APP_KEY is set...
docker-compose exec -T app php artisan key:generate --force

echo.
echo Running database migrations...
docker-compose exec -T app php artisan migrate --force

echo.
echo ========================================
echo Setup Complete!
echo ========================================
echo.
echo The application is now running at:
echo http://localhost:8000
echo.
echo To view logs, run: docker-compose logs -f
echo To stop containers, run: docker-compose down
echo.
pause

