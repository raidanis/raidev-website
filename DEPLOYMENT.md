# GitHub & Railway Deployment Guide for RAIdev

## Step 1: Create a GitHub Repository

1. Go to [github.com/new](https://github.com/new)
2. Repository name: `raidev-website` (or your preferred name)
3. Description: `Professional portfolio website for Raid Anis Kerkatou - Quantum AI & Cybersecurity Researcher`
4. Make it **Public** (required for free GitHub Pages/deployment)
5. Click **Create repository**

## Step 2: Configure Git Locally

Open PowerShell and run:
```powershell
cd D:\RAIdev

# Configure Git with your details
git config --global user.name "Raid Anis Kerkatou"
git config --global user.email "your-email@example.com"

# Initialize repository (only if not already done)
git init

# Add all files
git add .

# Create first commit
git commit -m "Initial commit: RAIdev portfolio website with Laravel 10, Blade templates, and custom styling"

# Add GitHub as remote (replace 'raidanis' with your username)
git remote add origin https://github.com/raidanis/raidev-website.git

# Push to GitHub (will ask for token)
git branch -M main
git push -u origin main
```

When prompted for authentication:
- **Username**: raidanis
- **Password**: Use a GitHub Personal Access Token (see instructions below)

### Get GitHub Personal Access Token:
1. Go to GitHub → Settings → Developer settings → Personal access tokens → Tokens (classic)
2. Click **Generate new token**
3. Name it: `RAIdev Deployment`
4. Select scopes: `repo`, `read:repo_hook`
5. Click **Generate token**
6. **Copy and save** the token (you'll use it for the git push command above)
7. When Git prompts for password, paste this token

## Step 3: Deploy to Railway

1. Go to [railway.app](https://railway.app)
2. Click **Create New Project** → **Deploy from GitHub repo**
3. Select your GitHub account → Find `raidev-website` repository
4. Click **Deploy**

Railway will automatically:
- Detect your Laravel application
- Install dependencies (`composer install`)
- Set up PHP runtime
- Build and deploy the app

### Configure Environment Variables in Railway:
1. In your Railway project, go to **Variables**
2. Add these variables:
   ```
   APP_KEY=base64:96fODKS4G1bkukzTZ0tP3CPwBLY3WgWLprwbu4JKp88=
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://YOUR_RAILWAY_URL.railway.app
   DB_CONNECTION=sqlite
   ```
3. Replace `YOUR_RAILWAY_URL` with the actual URL Railway provides

## Step 4: Access Your Live Website

Once deployed, Railway gives you a public URL like:
```
https://raidev-website-production.railway.app
```

Your website is now **LIVE AND ONLINE**! 🚀

## Future Updates

To update your website:
1. Make changes locally
2. Run:
```powershell
cd D:\RAIdev
git add .
git commit -m "Your update message"
git push origin main
```
3. Railway automatically redeploys within seconds

## Troubleshooting

If deployment fails:
1. Check Railway **Deployments** tab for error logs
2. Ensure `composer.json` and `public/index.php` exist
3. Verify environment variables are set correctly
4. Check that `.env` is in `.gitignore` (it is by default)

## Custom Domain (Optional)

1. Buy a domain (Namecheap, Google Domains, etc.)
2. In Railway project settings → **Domains**
3. Add your custom domain
4. Update DNS records per Railway's instructions
5. Your website will be accessible at your custom domain!

---

**Questions?** Refer to:
- [Railway Docs](https://docs.railway.app)
- [GitHub Docs](https://docs.github.com)
