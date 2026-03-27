# RAIdev Website - Complete Documentation

## 📌 Overview

RAIdev is a professional, modern website built with **Laravel** and **Blade templating** that showcases your work as a Quantum AI Researcher and Cybersecurity Engineer.

### Key Features
- ✅ 8 professional pages
- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Dark theme with neon accents
- ✅ Smooth animations & transitions
- ✅ SEO-friendly Blade templates
- ✅ Contact form integration
- ✅ Social media links
- ✅ Tech stack showcase
- ✅ Blog articles section
- ✅ Portfolio gallery
- ✅ Publication listings

---

## 🎨 Design System

### Color Palette
```
Primary (Cyan):     #00d4ff
Secondary (Purple): #8a2be2
Accent (Pink):      #ff006e
Dark Background:    #0a0e27
Dark Surface:       #16213e
Dark Card:          #1e3a5f
Text Primary:       #ffffff
Text Secondary:     #b0b0b0
Success:            #00ff88
Error:              #ff4444
```

### Typography
- **Headings**: Orbitron, Poppins (tech-forward)
- **Body**: Inter, Roboto (modern, readable)
- **Font Weights**: 400, 500, 600, 700, 800, 900

### Responsive Breakpoints
```
Desktop:  1200px and up
Tablet:   768px - 1199px
Mobile:   Below 768px
```

---

## 📄 Pages Documentation

### 1. Home Page (`/`)
**Purpose**: Landing page with hero section

**Sections**:
- Hero section with animated quantum visualization
- Quick highlights (publications, models, datasets, conferences)
- Featured research (3 featured projects)
- Tech stack showcase (4 categories)
- Call-to-action section

**Key Elements**:
- Animated stars background
- Gradient text headings
- Quantum qubit animation
- Responsive button layout

**To Edit**:
```
resources/views/home.blade.php
```

### 2. About Page (`/about`)
**Purpose**: Personal biography and skills

**Sections**:
- Personal journey (3 career phases)
- Research philosophy
- Research interests (4 areas)
- Skills matrix with progress bars

**Key Elements**:
- Journey timeline cards
- Philosophy points
- Animated skill progress bars
- Responsive 2-column layout

**To Edit**:
```
resources/views/about.blade.php
```

### 3. Research Page (`/research`)
**Purpose**: Publications, projects, and ongoing work

**Tabs**:
1. **Publications**: 3+ peer-reviewed papers with:
   - Title, abstract, authors
   - Dataset info, results
   - Download links (PDF, DOI, GitHub)

2. **Projects**: 6 research projects with:
   - Project status badges
   - Technologies used
   - Project duration

3. **Ongoing Work**: Future research with:
   - Progress bars
   - Expected completion dates
   - Collaboration CTA

**To Edit**:
```
resources/views/research.blade.php
```

### 4. Portfolio Page (`/portfolio`)
**Purpose**: Engineering projects showcase

**Categories**:
1. **Quantum ML** (3 projects)
   - QNN Classifier
   - QSVM Pipeline
   - QCNN DDoS Detector

2. **Computer Vision** (3 projects)
   - FloodNet Segmentation
   - YOLO Damage Detection
   - Image Classification

3. **Web Development** (3 projects)
   - School Management System
   - AI Model Dashboard
   - Research Lab Website

**Features**:
- Filter buttons
- Project cards with hover effects
- Technology tags
- Project links

**To Edit**:
```
resources/views/portfolio.blade.php
```

### 5. Blog Page (`/blog`)
**Purpose**: Articles and insights

**Features**:
- 6+ blog articles
- Article metadata (date, category, read time)
- Article excerpts
- Hashtags
- Newsletter signup form

**Categories**:
- Quantum ML
- Cybersecurity
- ML Fundamentals
- Tutorials
- Research

**To Edit**:
```
resources/views/blog.blade.php
```

### 6. Teaching Page (`/teaching`)
**Purpose**: Courses and educational content

**Courses**:
1. Advanced Algorithms (C++)
   - 12 weeks, Advanced level
   - Slides, code, exercises

2. Linux Basics
   - 8 weeks, Beginner level
   - Videos, VMs, exercises

3. AI Fundamentals
   - 10 weeks, Beginner level
   - Notebooks, projects, exams

**Features**:
- Teaching philosophy section
- Course cards with resources
- Access buttons

**To Edit**:
```
resources/views/teaching.blade.php
```

### 7. CV Page (`/cv`)
**Purpose**: Complete resume and credentials

**Sections**:
- **Education**: PhD, M.Sc, B.Sc
- **Experience**: Current research, internships, TA
- **Publications**: 3+ selected papers
- **Skills**: 
  - Programming languages
  - ML frameworks
  - Quantum computing tools
  - Web development
  - DevOps tools
- **Certifications & Awards**
- **Conferences & Presentations**
- **Languages**

**Features**:
- Two-column layout
- Download PDF button
- Print-friendly view
- Progress bars
- Skill tags

**To Edit**:
```
resources/views/cv.blade.php
```

### 8. Contact Page (`/contact`)
**Purpose**: Contact form and connection methods

**Sections**:
- Contact form with fields:
  - Name, email, subject
  - Message, topic dropdown
- Contact methods:
  - Email, LinkedIn
  - GitHub, Google Scholar
- Availability section
- Interest areas
- Resource cards linking to other pages

**Features**:
- Form validation
- Hover effects
- Social icons
- CTA buttons

**To Edit**:
```
resources/views/contact.blade.php
```

---

## 🛠️ Customization Guide

### Update Your Information

#### Hero Section (Home)
```blade
<!-- In resources/views/home.blade.php -->
<h1 class="hero-title">
    Your Name<br>Here
</h1>
<p class="hero-subtitle">Your Title Here</p>
```

#### About Section
```blade
<!-- In resources/views/about.blade.php -->
<p>Your bio text here...</p>
<div class="journey-point">
    <h4>Your Phase Title</h4>
    <p>Your description here</p>
</div>
```

#### Publications
```blade
<!-- In resources/views/research.blade.php -->
<div class="publication-card">
    <h3>Your Paper Title</h3>
    <p class="pub-abstract"><strong>Abstract:</strong> Your abstract here</p>
    <!-- Update links, authors, results -->
</div>
```

#### Portfolio Projects
```blade
<!-- In resources/views/portfolio.blade.php -->
<div class="portfolio-item quantum">
    <h3>Your Project Title</h3>
    <p>Your description</p>
    <div class="portfolio-tech">
        <span>Technology 1</span>
        <span>Technology 2</span>
    </div>
</div>
```

#### Blog Posts
```blade
<!-- In resources/views/blog.blade.php -->
<article class="blog-card">
    <h2><a href="#">Your Article Title</a></h2>
    <div class="blog-meta">
        <span class="blog-date">Date</span>
        <span class="blog-category">Category</span>
    </div>
    <p class="blog-excerpt">Your excerpt here...</p>
</article>
```

### Modify Colors

Edit `/resources/css/style.css`:
```css
:root {
    --primary-color: #00d4ff;      /* Change this */
    --secondary-color: #8a2be2;    /* Change this */
    --accent-color: #ff006e;       /* Change this */
    --dark-bg: #0a0e27;            /* Change this */
    /* ... other colors ... */
}
```

### Add New Pages

1. Create new Blade file:
```bash
echo "" > resources/views/newpage.blade.php
```

2. Create route in `routes/web.php`:
```php
Route::get('/newpage', function () {
    return view('newpage');
})->name('newpage');
```

3. Add navigation link in `resources/views/layouts/app.blade.php`:
```blade
<li><a href="/newpage" class="nav-link">New Page</a></li>
```

### Add Blog Post

1. Edit `resources/views/blog.blade.php`
2. Add new article card to `.blog-grid`:
```blade
<article class="blog-card">
    <div class="blog-header">
        <h2><a href="#">Your Title</a></h2>
        <div class="blog-meta">
            <span class="blog-date">{{ date('F j, Y') }}</span>
            <span class="blog-category">Category</span>
            <span class="blog-readtime">X min read</span>
        </div>
    </div>
    <p class="blog-excerpt">Your excerpt...</p>
    <div class="blog-tags">
        <span>#tag1</span>
        <span>#tag2</span>
    </div>
    <a href="#" class="read-more">Read Full Article →</a>
</article>
```

---

## 🚀 Development Workflow

### Start Development Server
```bash
php artisan serve
```
Runs at: `http://localhost:8000`

### File Structure
```
RAIdev/
├── app/                     # PHP Classes (models, controllers)
├── routes/
│   └── web.php             # URL routes
├── resources/
│   ├── views/              # HTML templates (Blade)
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   └── ... (other pages)
│   ├── css/
│   │   └── style.css       # Main CSS
│   └── js/
│       └── main.js         # JavaScript
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── index.php           # Entry point
├── config/
│   └── app.php             # Config
└── composer.json           # Dependencies
```

### Common Tasks

#### Add a new publication
Edit: `resources/views/research.blade.php`
```blade
<div class="publication-card">
    <!-- Copy from existing card and update -->
</div>
```

#### Update skills
Edit: `resources/views/about.blade.php`
In `.skill-bar` elements, change the `style="width: 95%"` to your percentage.

#### Change color scheme
Edit: `resources/css/style.css`
Update the `:root` color variables at the top.

#### Add social link
Edit: `resources/views/layouts/app.blade.php` (footer)
```blade
<a href="https://yoursite.com" title="Your Site">
    <i class="fas fa-icon"></i>
</a>
```

---

## 📱 Responsive Design

The website is fully responsive across all devices:

### Desktop (1200px+)
- Full navigation menu
- 2-3 column layouts
- Full-size hero section

### Tablet (768px - 1199px)
- Hamburger menu (collapsed)
- 2 column layouts
- Adjusted padding/margins

### Mobile (<768px)
- Hamburger menu
- 1 column layouts
- Optimized touch targets
- Smaller fonts

---

## 🔗 External Links & Resources

### Font Awesome Icons
- Reference: https://fontawesome.com/icons
- Used for social links, badges, etc.

### Google Fonts
- Poppins: https://fonts.google.com/specimen/Poppins
- Orbitron: https://fonts.google.com/specimen/Orbitron
- Inter: https://fonts.google.com/specimen/Inter

### Useful Links to Update
```html
<a href="https://linkedin.com/in/YOUR-PROFILE">LinkedIn</a>
<a href="https://github.com/YOUR-GITHUB">GitHub</a>
<a href="https://scholar.google.com/citations?user=YOUR-ID">Google Scholar</a>
<a href="mailto:your-email@example.com">Email</a>
```

---

## 🎯 SEO Optimization

### Meta Tags
Located in `resources/views/layouts/app.blade.php`:
```html
<title>@yield('title') - RAIdev</title>
<meta name="description" content="Your description">
```

### Update for Each Page
1. Set meaningful page titles
2. Add descriptive meta descriptions
3. Use semantic HTML structure
4. Optimize image alt text

### Sitemap
Auto-generated at `/sitemap.xml`
```
GET /sitemap.xml
```

---

## 📧 Contact Form Setup

### Email Configuration
Edit `.env`:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=your-email@gmail.com
```

### Contact Form Handler
Location: `routes/web.php`
```php
Route::post('/contact', function (Request $request) {
    // Validate, send email, store to database
});
```

---

## 🔐 Security Notes

1. **Environment Variables**
   - Never commit `.env` file
   - Use `.env.example` for template
   - Keep sensitive keys secure

2. **CSRF Protection**
   - All forms include `@csrf`
   - Blade automatically adds token

3. **Input Validation**
   - Contact form validates all inputs
   - Server-side validation in place

---

## 🚀 Deployment

### Pre-deployment Checklist
- [ ] Update `.env` for production
- [ ] Set `APP_DEBUG=false`
- [ ] Update `APP_URL`
- [ ] Configure database
- [ ] Set up email service
- [ ] Generate optimized cache
- [ ] Update social media links

### Production Build
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
composer install --optimize-autoloader --no-dev
```

### Hosting Platforms
- Laravel Forge (easiest)
- DigitalOcean App Platform
- Heroku
- AWS Lightsail
- Shared hosting with PHP 8.1+

---

## 🆘 Troubleshooting

### Pages not loading
```bash
# Clear all cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

### Styles not updating
- Hard refresh browser: `Ctrl+Shift+Delete` (Windows) or `Cmd+Shift+Delete` (Mac)
- Clear browser cache

### Contact form not working
- Check `.env` email configuration
- Test with Laravel Tinker:
  ```bash
  php artisan tinker
  ```

### 404 errors
- Check route definitions in `routes/web.php`
- Ensure view file exists in `resources/views/`
- Verify file names match exactly

---

## 📞 Support & Contact

For issues or questions:
- 📧 Email: raid@raidev.com
- 💼 LinkedIn: linkedin.com/in/raid-anis-kerkatou
- 💻 GitHub: github.com/raidanis

---

## 📄 License

MIT License - Free to use and modify for your personal website.

**Built with Laravel & Quantum Passion** ⚛️💙

---

## 🎓 Learning Resources

- Laravel Docs: https://laravel.com/docs
- Blade Templating: https://laravel.com/docs/blade
- CSS Grid: https://css-tricks.com/snippets/css/complete-guide-grid/
- Responsive Design: https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design

---

**Last Updated**: March 2026  
**Version**: 1.0.0
