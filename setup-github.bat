@echo off
REM RAIdev GitHub & Railway Setup Script

echo.
echo ============================================
echo RAIdev GitHub Setup Script
echo ============================================
echo.

REM Check if Git is installed
where git >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: Git is not installed or not in PATH
    echo Please install Git from https://git-scm.com/download/win
    echo Then run this script again
    exit /b 1
)

echo ✓ Git found
git --version

REM Navigate to project directory
cd /d D:\RAIdev

REM Configure Git
echo.
echo Configuring Git...
git config --global user.name "Raid Anis Kerkatou"
git config --global user.email "contact@raidanis.com"
echo ✓ Git configured

REM Initialize repository if needed
if not exist .git (
    echo.
    echo Initializing Git repository...
    git init
    git branch -M main
    echo ✓ Repository initialized
)

REM Add and commit
echo.
echo Staging files...
git add .
echo ✓ Files staged

REM Check if there are changes to commit
git diff --cached --quiet
if %ERRORLEVEL% NEQ 0 (
    echo Committing changes...
    git commit -m "Initial commit: RAIdev portfolio website with Laravel 10, Blade templates, and custom styling"
    echo ✓ Committed
) else (
    echo (No new changes to commit)
)

REM Add remote
echo.
echo Adding GitHub remote...
git remote remove origin 2>nul
git remote add origin https://github.com/raidanis/raidev-website.git
echo ✓ GitHub remote added

REM Display next steps
echo.
echo ============================================
echo NEXT STEPS:
echo ============================================
echo.
echo 1. Push to GitHub by running:
echo    git push -u origin main
echo.
echo 2. When prompted, use your GitHub token:
echo    Username: raidanis
echo    Password: (your GitHub Personal Access Token)
echo.
echo 3. Get GitHub Personal Access Token:
echo    - Go to github.com → Settings
echo    - Developer settings → Personal access tokens
echo    - Create new token with 'repo' scope
echo.
echo 4. Deploy to Railway:
echo    - Go to railway.app
echo    - Connect your GitHub account
echo    - Select raidev-website repository
echo    - Click Deploy
echo.
echo ============================================

pause
