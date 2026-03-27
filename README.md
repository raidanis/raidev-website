# RAIdev Website

**RAIdev** - Personal Brand & Research Portfolio

"Quantum AI Researcher & Cybersecurity Engineer specializing in Hybrid Quantum Machine Learning for Intrusion Detection Systems"

## 🚀 Quick Start

### Prerequisites
- PHP 8.1+
- Composer
- Node.js 18+
- MySQL 8.0+

### Installation

1. **Clone the repository**
   ```bash
   cd d:\RAIdev
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies** (optional for frontend compilation)
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

5. **Configure database** (optional)
   - Update `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` in `.env`
   - Run migrations: `php artisan migrate`

6. **Start development server**
   ```bash
   php artisan serve
   ```

   Website will be available at: `http://localhost:8000`

## 📁 Project Structure

```
RAIdev/
├── app/
│   ├── Http/Controllers/      # Controllers (future)
│   └── Models/                # Models (future)
├── routes/
│   └── web.php               # All routing
├── resources/
│   ├── views/                # All Blade templates
│   │   ├── layouts/          # Base layout
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── research.blade.php
│   │   ├── portfolio.blade.php
│   │   ├── blog.blade.php
│   │   ├── teaching.blade.php
│   │   ├── cv.blade.php
│   │   └── contact.blade.php
│   ├── css/
│   │   └── style.css         # Main styles
│   └── js/
│       └── main.js           # JavaScript
├── public/
│   ├── images/               # Images & media
│   ├── css/                  # Compiled CSS
│   └── js/                   # Compiled JS
└── database/
    └── migrations/           # Database migrations
```

## 🎨 Design System

### Colors
- **Primary**: `#00d4ff` (Cyan Blue)
- **Secondary**: `#8a2be2` (Purple)
- **Accent**: `#ff006e` (Pink)
- **Dark BG**: `#0a0e27`
- **Dark Card**: `#1e3a5f`

### Typography
- **Headings**: Orbitron / Poppins (tech feel)
- **Body**: Inter / Roboto (modern)

### Responsive Breakpoints
- Desktop: 1200px+
- Tablet: 768px - 1199px
- Mobile: < 768px

## 📄 Pages

| Page | Path | Content |
|------|------|---------|
| Home | `/` | Hero, highlights, featured work |
| About | `/about` | Bio, journey, skills matrix |
| Research | `/research` | Publications, projects, ongoing |
| Portfolio | `/portfolio` | Quantum ML, CV, Web Dev projects |
| Blog | `/blog` | Articles on QML, cybersecurity |
| Teaching | `/teaching` | Courses, lectures, resources |
| CV | `/cv` | Full resume & credentials |
| Contact | `/contact` | Contact form, social links |

## 🔧 Configuration

### Email Configuration (for contact form)
Update `.env` with your email service:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=ssl
```

### Database Setup (optional)
```bash
# Create MySQL database
CREATE DATABASE raidev CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

# Run migrations
php artisan migrate
```

## 🎯 Features

### ✅ Implemented
- Multi-page website (8 pages)
- Responsive design
- Dark mode with neon accents
- Professional styling
- Navigation & dropdowns
- Hero section with animation
- Skills showcase
- Publication listings
- Portfolio gallery
- Blog cards
- Contact form
- Social links
- Footer

### 🔜 Future Enhancements
- Blog comment system
- Image optimization
- SEO optimization
- Analytics integration
- Dynamic content from database
- PDF download for CV
- Interactive quantum circuit viewer
- Live demo embeddings
- Email notifications
- Admin dashboard

## 📝 Content Customization

### Update Personal Information
1. Edit view files in `resources/views/`
2. Replace placeholder content with your actual info
3. Update social links in footer

### Add Projects
1. Edit `/portfolio.blade.php`
2. Add new portfolio items to grid
3. Update project details

### Add Blog Posts
1. Edit `/blog.blade.php`
2. Add articles to blog grid
3. Create detailed post pages

## 🚀 Deployment

### Using Laravel Artisan
```bash
# Build for production
php artisan optimize:clear
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Hosting Options
- **Laravel Forge** (recommended)
- **DigitalOcean**
- **Heroku**
- **AWS Lightsail**
- **Shared Hosting** (with PHP 8.1+)

## 📱 Browser Support

- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile Browsers

## 📚 Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Blade Templating](https://laravel.com/docs/blade)
- [Laravel Routing](https://laravel.com/docs/routing)

## 📧 Contact & Support

- Email: raid@raidev.com
- LinkedIn: linkedin.com/in/raid-anis-kerkatou
- GitHub: github.com/raidanis

## 📄 License

MIT License - Feel free to use and modify as needed.

---

**Built with Laravel & Quantum Passion** ⚛️💙
