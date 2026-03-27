# 🚀 RAIdev Website - Quick Start Guide

Welcome to your professional RAIdev website! Here's everything you need to know to get started.

## ⚡ Quick Setup (5 minutes)

### Windows
```bash
cd d:\RAIdev
setup.bat
```

### macOS / Linux
```bash
cd /path/to/RAIdev
chmod +x setup.sh
./setup.sh
```

### Manual Setup
```bash
# 1. Install PHP dependencies
composer install

# 2. Create .env file
copy .env.example .env
# (or: cp .env.example .env on Mac/Linux)

# 3. Generate app key
php artisan key:generate

# 4. Start server
php artisan serve
```

**Then open**: http://localhost:8000

---

## 📁 What's Included

### ✅ 8 Complete Pages
- **Home** (`/`) - Landing page with hero section
- **About** (`/about`) - Bio, journey, skills
- **Research** (`/research`) - Publications, projects
- **Portfolio** (`/portfolio`) - 9 projects (QML, CV, Web)
- **Blog** (`/blog`) - 6 sample articles
- **Teaching** (`/teaching`) - 3 courses
- **CV** (`/cv`) - Full resume
- **Contact** (`/contact`) - Contact form + links

### ✅ Professional Design
- Dark theme with neon accents (cyan, purple, pink)
- Fully responsive (mobile, tablet, desktop)
- Smooth animations & transitions
- Modern, tech-forward aesthetic

### ✅ Features
- ✨ Animated hero section
- 📊 Skills with progress bars
- 🎨 Portfolio gallery with filters
- 📰 Blog articles with tags
- 📝 Contact form (ready for email integration)
- 🔗 Social media links
- 📱 Mobile-optimized

---

## 📝 Key Files You'll Edit

| File | What to Edit |
|------|------|
| `resources/views/home.blade.php` | Hero section, highlights |
| `resources/views/about.blade.php` | Bio, journey, skills |
| `resources/views/research.blade.php` | Publications, projects |
| `resources/views/portfolio.blade.php` | Portfolio projects |
| `resources/views/blog.blade.php` | Blog articles |
| `resources/views/cv.blade.php` | Resume content |
| `resources/css/style.css` | Colors, fonts, design |
| `resources/views/layouts/app.blade.php` | Navigation, footer |

---

## 🎨 Customize It

### Change Your Name
Edit `resources/views/home.blade.php`:
```html
<h1 class="hero-title">Your Name Here</h1>
```

### Update Your Title
```html
<p class="hero-subtitle">Your Title Here</p>
```

### Change Colors
Edit `resources/css/style.css` (first 20 lines):
```css
--primary-color: #00d4ff;    /* Change to your color */
--secondary-color: #8a2be2;  /* Change to your color */
```

### Update Social Links
Edit `resources/views/layouts/app.blade.php` (footer):
```html
<a href="https://linkedin.com/in/YOUR-USERNAME">LinkedIn</a>
<a href="https://github.com/YOUR-USERNAME">GitHub</a>
```

### Add Your Info
- Replace all "Raid Anis Kerkatou" with your name
- Replace all descriptions with your content
- Update publication titles, abstracts
- Add your projects to portfolio

---

## 🎯 Common Tasks

### Add a Blog Post
1. Go to `resources/views/blog.blade.php`
2. Copy a blog card section
3. Update title, date, category, excerpt
4. Done!

### Add a Portfolio Project
1. Go to `resources/views/portfolio.blade.php`
2. Add new `.portfolio-item` in the grid
3. Update title, description, technologies
4. Add to correct category filter

### Update Skills
1. Go to `resources/views/about.blade.php`
2. Find `.skill-bar` sections
3. Change `width: 95%` to your percentage
4. Update skill names

### Add a Publication
1. Go to `resources/views/research.blade.php`
2. Copy a `.publication-card`
3. Update all content
4. Add PDF/DOI/GitHub links

---

## 🔗 Important Links

- **Local Server**: http://localhost:8000
- **Sitemap**: http://localhost:8000/sitemap.xml
- **Laravel Docs**: https://laravel.com/docs
- **Font Awesome Icons**: https://fontawesome.com/icons
- **Google Fonts**: https://fonts.google.com

---

## 📊 Site Structure

```
RAIdev/
├── resources/views/          ← Edit HTML here
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── research.blade.php
│   ├── portfolio.blade.php
│   ├── blog.blade.php
│   ├── teaching.blade.php
│   ├── cv.blade.php
│   ├── contact.blade.php
│   └── layouts/
│       └── app.blade.php     ← Navigation & footer
├── resources/css/
│   └── style.css             ← Edit styles here
├── resources/js/
│   └── main.js               ← Edit scripts here
├── routes/
│   └── web.php               ← URL routing
├── public/
│   └── images/               ← Your images here
├── DOCUMENTATION.md          ← Full guide
└── README.md                 ← Project info
```

---

## 🛠️ Useful Commands

```bash
# Start development server
php artisan serve

# Clear all caches
php artisan cache:clear

# Generate app key
php artisan key:generate

# Check for errors
php artisan tinker

# Stop server
Ctrl + C
```

---

## 🎓 Next Steps

1. **Personalize Content**
   - [ ] Update name and title
   - [ ] Replace bio text
   - [ ] Add your publications
   - [ ] Add your projects
   - [ ] Update social links

2. **Customize Design**
   - [ ] Change color scheme if desired
   - [ ] Update profile image
   - [ ] Add your logo/favicon
   - [ ] Adjust fonts if needed

3. **Content**
   - [ ] Write blog articles
   - [ ] Add teaching materials
   - [ ] Upload project images
   - [ ] Create downloadable CV

4. **Launch**
   - [ ] Test all links
   - [ ] Check mobile responsiveness
   - [ ] Set up email (contact form)
   - [ ] Deploy to hosting

---

## 📧 Contact Form Setup

To enable contact form emails:

1. Edit `.env`:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=your-email@gmail.com
```

2. Get Gmail [app password](https://myaccount.google.com/apppasswords)

3. Test sending emails in contact form

---

## 🚀 Deploy to Web (Easy!)

### Using Laravel Forge (Recommended)
1. Sign up: https://forge.laravel.com
2. Connect your GitHub
3. Create new server
4. Deploy site automatically

### Other Hosting
- DigitalOcean App Platform
- Heroku
- AWS Lightsail
- Shared hosting (with PHP 8.1+)

---

## ❓ Need Help?

### Check These Files
- **Full Documentation**: `DOCUMENTATION.md`
- **Setup Issues**: `setup.bat` or `setup.sh`
- **Styling**: `resources/css/style.css`
- **Routes**: `routes/web.php`

### Common Issues

**Problem**: Pages show 404 error
```bash
php artisan config:clear
php artisan cache:clear
```

**Problem**: Styles not loading
- Hard refresh: `Ctrl+Shift+R` (Windows) or `Cmd+Shift+R` (Mac)

**Problem**: Form not working
- Check `.env` email configuration
- Ensure database is set up

---

## 💡 Pro Tips

✅ Use `Ctrl+Shift+P` (VS Code) to search files quickly
✅ Preview changes in real-time with `php artisan serve`
✅ Use Chrome DevTools (F12) to inspect elements
✅ Test mobile view with browser dev tools
✅ Keep backup of important content

---

## 🎉 You're All Set!

Your professional RAIdev website is ready to go. Start customizing and get it live!

**Built with Laravel & ⚛️ Quantum Passion**

---

**Questions?** See `DOCUMENTATION.md` for detailed information.

**Version**: 1.0.0  
**Last Updated**: March 2026
