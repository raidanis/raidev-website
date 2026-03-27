#!/bin/bash

# RAIdev Laravel Development Setup Script
# This script sets up the development environment

echo "============================================"
echo "RAIdev Website - Setup Script"
echo "============================================"
echo ""

# Check if composer is installed
if ! command -v composer &> /dev/null; then
    echo "[!] Composer not found. Please install Composer first."
    echo "Download from: https://getcomposer.org/download/"
    exit 1
fi

echo "[*] Installing PHP dependencies..."
composer install

if [ $? -ne 0 ]; then
    echo "[!] Composer install failed!"
    exit 1
fi

echo "[*] Creating .env file..."
if [ ! -f .env ]; then
    cp .env.example .env
    echo "[+] .env created"
else
    echo "[*] .env already exists"
fi

echo "[*] Generating application key..."
php artisan key:generate

echo "[*] Clearing cache..."
php artisan config:clear
php artisan cache:clear

echo ""
echo "============================================"
echo "Setup Complete!"
echo "============================================"
echo ""
echo "To start development server, run:"
echo "  php artisan serve"
echo ""
echo "Website will be available at: http://localhost:8000"
echo ""
