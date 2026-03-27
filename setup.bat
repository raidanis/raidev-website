@REM RAIdev Laravel Development Setup Script
@REM This script sets up the development environment

@echo off
echo ============================================
echo RAIdev Website - Setup Script
echo ============================================
echo.

REM Check if composer is installed
where composer >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo [!] Composer not found. Please install Composer first.
    echo Download from: https://getcomposer.org/download/
    pause
    exit /b 1
)

echo [*] Installing PHP dependencies...
call composer install

if %ERRORLEVEL% NEQ 0 (
    echo [!] Composer install failed!
    pause
    exit /b 1
)

echo [*] Creating .env file...
if not exist .env (
    copy .env.example .env
    echo [+] .env created
) else (
    echo [*] .env already exists
)

echo [*] Generating application key...
php artisan key:generate

echo [*] Clearing cache...
php artisan config:clear
php artisan cache:clear

echo.
echo ============================================
echo Setup Complete!
echo ============================================
echo.
echo To start development server, run:
echo   php artisan serve
echo.
echo Website will be available at: http://localhost:8000
echo.
pause
