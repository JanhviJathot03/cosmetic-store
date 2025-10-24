# 🌸 Glam Beauty - Premium Cosmetic Store Website

A modern, responsive website for Mumbai's premier cosmetic and beauty store. This project showcases a complete web solution for a beauty business offering professional makeup services, skincare treatments, and premium cosmetic products.

## ✨ Features

### 🎨 Frontend Features
- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **Modern UI/UX**: Clean, elegant design with smooth animations
- **Interactive Elements**: AOS (Animate On Scroll) animations
- **Service Showcase**: Detailed presentation of beauty services
- **Customer Testimonials**: Social proof and reviews section
- **Contact & Inquiry Forms**: Easy customer communication
- **Professional Gallery**: High-quality beauty and cosmetic imagery

### 🛠️ Backend Features
- **PHP-based Architecture**: Server-side functionality
- **Database Integration**: MySQL database for data management
- **Admin Panel**: Content management system
- **Form Handling**: Contact and inquiry form processing
- **SEO Optimized**: Search engine friendly structure

### 📱 Pages Included
- **Home Page** (`index.php`) - Hero section, services preview, testimonials
- **About Page** (`about.php`) - Company story, team, and values
- **Services Page** (`services.php`) - Detailed service offerings
- **Inquiry Page** (`inquiry.php`) - Contact and booking forms
- **Admin Panel** (`admin/`) - Backend management system

## 🚀 Technology Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with custom properties
- **JavaScript** - Interactive functionality
- **Bootstrap 5** - Responsive framework
- **AOS Library** - Scroll animations
- **Bootstrap Icons** - Icon set

### Backend
- **PHP 7.4+** - Server-side scripting
- **MySQL** - Database management
- **Apache/Nginx** - Web server

### External Resources
- **Unsplash Images** - High-quality stock photography
- **Google Fonts** - Typography
- **CDN Resources** - Fast content delivery

## 📂 Project Structure

```
cosmetic-store/
├── 📄 index.php              # Home page
├── 📄 about.php              # About us page
├── 📄 services.php           # Services page
├── 📄 inquiry.php            # Contact/inquiry page
├── 📄 database.sql           # Database schema
├── 📄 README.md              # Project documentation
├── 📁 admin/                 # Admin panel
│   └── 📄 index.php          # Admin dashboard
├── 📁 assets/                # Static assets
│   ├── 📁 css/
│   │   └── 📄 style.css      # Main stylesheet
│   └── 📁 js/
│       └── 📄 script.js      # JavaScript functionality
└── 📁 includes/              # PHP includes
    ├── 📄 db_config.php      # Database configuration
    ├── 📄 header.php         # Common header
    ├── 📄 footer.php         # Common footer
    └── 📄 navigation.php     # Navigation menu
```

## 🛠️ Installation & Setup

### Prerequisites
- **Web Server** (Apache/Nginx)
- **PHP 7.4+**
- **MySQL 5.7+**
- **Modern Web Browser**

### Step-by-Step Installation

1. **Clone/Download the Project**
   ```bash
   git clone <repository-url>
   cd cosmetic-store
   ```

2. **Set Up Web Server**
   - Place project files in your web server's document root
   - For XAMPP: `htdocs/cosmetic-store/`
   - For WAMP: `www/cosmetic-store/`

3. **Database Setup**
   - Create a new MySQL database named `glam_beauty`
   - Import the `database.sql` file
   - Update database credentials in `includes/db_config.php`

4. **Configuration**
   - Edit `includes/db_config.php` with your database details:
   ```php
   <?php
   $host = 'localhost';
   $dbname = 'glam_beauty';
   $username = 'your_username';
   $password = 'your_password';
   ?>
   ```

5. **Access the Website**
   - Visit `http://localhost/cosmetic-store/`
   - Admin panel: `http://localhost/cosmetic-store/admin/`

## 🎯 Target Audience

- **Beauty Enthusiasts** in Mumbai
- **Brides-to-be** seeking professional makeup
- **Skincare Conscious** individuals
- **Corporate Professionals** needing grooming services
- **Online Shoppers** preferring home delivery

## 🌟 Key Services Highlighted

### 💄 Professional Makeup
- Bridal makeup packages
- Party and event makeup
- Corporate styling
- Photoshoot makeup

### 🧴 Advanced Skincare
- Personalized facial treatments
- Anti-aging solutions
- Acne treatment programs
- Skin analysis and consultation

### 💎 Premium Products
- International cosmetic brands
- Organic and natural products
- Budget-friendly options
- Latest beauty arrivals

## 📱 Responsive Breakpoints

- **Mobile**: 320px - 767px
- **Tablet**: 768px - 991px
- **Desktop**: 992px - 1199px
- **Large Desktop**: 1200px+

## 🔧 Customization Guide

### Color Scheme
Primary colors are defined in CSS custom properties:
```css
:root {
    --primary-color: #d63384;
    --secondary-color: #6f42c1;
    --accent-color: #ffc107;
    --background-color: #f8f9fa;
}
```

### Adding New Services
1. Update `services.php` with new service content
2. Add corresponding images in assets folder
3. Update navigation if needed

### Modifying Contact Information
- Edit contact details in `includes/footer.php`
- Update Google Maps embed if location changes
- Modify phone numbers and email addresses

## 🚀 Performance Optimization

- **Image Optimization**: Use WebP format when possible
- **CSS Minification**: Compress CSS files for production
- **JavaScript Bundling**: Combine JS files to reduce requests
- **Caching**: Implement browser caching headers
- **CDN Usage**: External resources loaded from CDN

## 🔒 Security Features

- **Input Validation**: All form inputs are sanitized
- **SQL Injection Prevention**: Prepared statements used
- **XSS Protection**: Output escaping implemented
- **CSRF Protection**: Token-based form security

## 📊 SEO Features

- **Semantic HTML**: Proper heading structure
- **Meta Tags**: Optimized meta descriptions and keywords
- **Alt Text**: Images include descriptive alt attributes
- **Schema Markup**: Structured data for better search results
- **URL Structure**: SEO-friendly URLs

## 🌐 Browser Compatibility

- **Chrome** 70+
- **Firefox** 65+
- **Safari** 12+
- **Edge** 79+
- **Mobile Browsers**: iOS Safari, Chrome Mobile

## 📈 Future Enhancements

- [ ] **E-commerce Integration**: Online shopping cart
- [ ] **Appointment Booking System**: Real-time scheduling
- [ ] **Customer Portal**: Personal accounts and order history
- [ ] **Payment Gateway**: Online payment processing
- [ ] **Review System**: Customer rating and review platform
- [ ] **Social Media Integration**: Instagram feed display
- [ ] **Newsletter System**: Email marketing integration
- [ ] **Multi-language Support**: Hindi and English options

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📞 Support

For technical support or business inquiries:
- **Email**: info@glambeauty.com
- **Phone**: +91 98765 43210
- **Address**: Bandra West, Mumbai, Maharashtra

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🙏 Acknowledgments

- **Bootstrap Team** for the responsive framework
- **Unsplash Contributors** for beautiful imagery
- **AOS Library** for smooth animations
- **Bootstrap Icons** for comprehensive icon set

---

### 💼 About the Business

**Glam Beauty** has been Mumbai's trusted beauty destination since 2008, serving over 5,000 satisfied customers with authentic products, expert consultation, and professional services. Located in the heart of Bandra West, we continue to set the standard for beauty excellence in Mumbai.

---

*Built with ❤️ for the beauty community of Mumbai*