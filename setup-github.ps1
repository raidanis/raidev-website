#!/usr/bin/env pwsh

# RAIdev GitHub & Railway Setup Script (PowerShell)

Write-Host "`n============================================" -ForegroundColor Cyan
Write-Host "RAIdev GitHub Setup Script" -ForegroundColor Cyan
Write-Host "============================================`n" -ForegroundColor Cyan

# Check if Git is installed
try {
    git --version | Out-Null
    Write-Host "✓ Git found" -ForegroundColor Green
    git --version
} catch {
    Write-Host "ERROR: Git is not installed!" -ForegroundColor Red
    Write-Host "Please install from: https://git-scm.com/download/win" -ForegroundColor Yellow
    exit 1
}

# Navigate to project
Set-Location D:\RAIdev
Write-Host "`n✓ Working directory: $(Get-Location)" -ForegroundColor Green

# Configure Git
Write-Host "`nConfiguring Git..." -ForegroundColor Cyan
git config --global user.name "Raid Anis Kerkatou"
git config --global user.email "contact@raidanis.com"
Write-Host "✓ Git configured" -ForegroundColor Green

# Initialize repository
if (-not (Test-Path .git)) {
    Write-Host "`nInitializing Git repository..." -ForegroundColor Cyan
    git init
    git branch -M main
    Write-Host "✓ Repository initialized" -ForegroundColor Green
}

# Stage files
Write-Host "`nStaging files..." -ForegroundColor Cyan
git add .
Write-Host "✓ Files staged" -ForegroundColor Green

# Commit
Write-Host "`nCreating commit..." -ForegroundColor Cyan
git commit -m "Initial commit: RAIdev portfolio website with Laravel 10, Blade templates, and custom styling"
Write-Host "✓ Committed" -ForegroundColor Green

# Add remote
Write-Host "`nAdding GitHub remote..." -ForegroundColor Cyan
git remote remove origin 2>$null
git remote add origin https://github.com/raidanis/raidev-website.git
Write-Host "✓ GitHub remote added" -ForegroundColor Green

# Display instructions
Write-Host "`n============================================" -ForegroundColor Cyan
Write-Host "NEXT STEPS:" -ForegroundColor Cyan
Write-Host "============================================`n" -ForegroundColor Cyan

Write-Host "1. " -NoNewline -ForegroundColor Cyan
Write-Host "Push to GitHub by running:" -ForegroundColor White
Write-Host "   git push -u origin main`n" -ForegroundColor Yellow

Write-Host "2. " -NoNewline -ForegroundColor Cyan
Write-Host "When prompted for credentials:" -ForegroundColor White
Write-Host "   Username: raidanis"
Write-Host "   Password: (paste your GitHub Personal Access Token)`n" -ForegroundColor Yellow

Write-Host "3. " -NoNewline -ForegroundColor Cyan
Write-Host "Get your GitHub Personal Access Token:" -ForegroundColor White
Write-Host "   - Go to: https://github.com/settings/tokens" -ForegroundColor Yellow
Write-Host "   - Click 'Generate new token (classic)'" -ForegroundColor Yellow
Write-Host "   - Name: 'RAIdev Deployment'" -ForegroundColor Yellow
Write-Host "   - Select scope: 'repo'" -ForegroundColor Yellow
Write-Host "   - Generate & copy the token`n" -ForegroundColor Yellow

Write-Host "4. " -NoNewline -ForegroundColor Cyan
Write-Host "Deploy to Railway (free hosting):" -ForegroundColor White
Write-Host "   - Go to: https://railway.app/" -ForegroundColor Yellow
Write-Host "   - Create New Project → GitHub repo" -ForegroundColor Yellow
Write-Host "   - Select: raidev-website" -ForegroundColor Yellow
Write-Host "   - Click Deploy" -ForegroundColor Yellow
Write-Host "   - Your website will be LIVE in minutes!`n" -ForegroundColor Yellow

Write-Host "============================================" -ForegroundColor Cyan
Write-Host "Questions? See DEPLOYMENT.md for details" -ForegroundColor Cyan
Write-Host "============================================" -ForegroundColor Cyan

Read-Host -Prompt "`nPress Enter to finish"
