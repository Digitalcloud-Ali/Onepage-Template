# 🚀 Onepage Template - Modernized Version 2.0

A modern, secure, and responsive one-page website template that has been completely updated to follow current web standards and best practices.

![Template Preview](https://img.shields.io/badge/Status-Production%20Ready-brightgreen)
![License](https://img.shields.io/badge/License-MIT-blue)
![PHP Version](https://img.shields.io/badge/PHP-7.4+-purple)
![CSS](https://img.shields.io/badge/CSS-Modern%20Grid%20%26%20Flexbox-orange)

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Demo](#demo)
- [Installation](#installation)
- [Usage](#usage)
- [Customization](#customization)
- [Browser Support](#browser-support)
- [Contributing](#contributing)
- [License](#license)
- [Credits](#credits)
- [Support](#support)

## 🌟 Overview

This template has been completely modernized from its original version, incorporating the latest web development standards, security best practices, and modern design principles. Perfect for businesses, portfolios, and service-based websites.

## ✨ Features

### 🔒 Security Features
- **CSRF Protection** - All forms include CSRF tokens
- **Input Sanitization** - Proper validation and sanitization
- **Security Headers** - XSS protection, content type options
- **Modern PHP** - Updated from deprecated functions

### 🎨 Modern Design
- **Responsive Layout** - Mobile-first approach
- **CSS Grid & Flexbox** - Modern layout techniques
- **CSS Custom Properties** - Easy theming and customization
- **Smooth Animations** - CSS transitions and keyframes
- **Glass Morphism** - Modern visual effects

### 🚀 Performance
- **Vanilla JavaScript** - No jQuery dependencies
- **Optimized CSS** - Efficient selectors and properties
- **Lazy Loading** - Images and content optimization
- **Minified Assets** - Production-ready files

### 📱 Responsive Design
- **Mobile-First** - Optimized for all devices
- **Touch-Friendly** - Mobile navigation and interactions
- **Cross-Browser** - Works on all modern browsers
- **Accessibility** - WCAG compliant design

## 🎯 Demo

Visit the live demo to see the template in action:
- **Live Preview**: [Your Demo URL]
- **Features Showcase**: Responsive design, animations, forms

## 🛠️ Installation

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Modern web browser

### Quick Start

1. **Clone the repository**
   ```bash
   git clone https://github.com/digitalcloudno/onepage-template.git
   cd onepage-template
   ```

2. **Upload to your web server**
   - Upload all files to your web server directory
   - Ensure PHP is enabled on your server

3. **Configure your server**
   - Make sure `.htaccess` is enabled (Apache)
   - Set proper file permissions (755 for directories, 644 for files)

4. **Access your site**
   - Navigate to your domain in a web browser
   - The template should load immediately

### Alternative Installation Methods

#### Using Composer (if applicable)
```bash
composer install
```

#### Manual Download
- Download the ZIP file from releases
- Extract to your web server directory

## 📖 Usage

### Basic Setup

1. **Edit Configuration**
   - Open `includes/config.php`
   - Update `ADMIN_EMAIL` with your email
   - Modify `SITE_URL` if needed

2. **Customize Content**
   - Edit `index.html` for main content
   - Update images in the `images/` folder
   - Modify colors in `style-modern.css`

3. **Form Configuration**
   - Forms are pre-configured for email delivery
   - Update recipient emails in PHP files
   - Test form submissions

### Advanced Customization

#### Color Scheme
```css
:root {
    --primary-color: #cb3a01;    /* Main brand color */
    --accent-color: #ff6b35;     /* Accent color */
    --text-dark: #333333;        /* Dark text */
    --text-light: #ffffff;       /* Light text */
}
```

#### Typography
```css
:root {
    --font-family-primary: 'Inter', 'Segoe UI', system-ui, sans-serif;
    --font-size-h1: 3.5rem;
    --font-size-h2: 2.5rem;
}
```

#### Spacing
```css
:root {
    --spacing-xs: 0.5rem;
    --spacing-sm: 1rem;
    --spacing-md: 1.5rem;
    --spacing-lg: 2.5rem;
    --spacing-xl: 4rem;
    --spacing-xxl: 6rem;
}
```

## 🎨 Customization

### Sections Available
- **Hero Section** - Main landing area
- **About Section** - Company information
- **Services Section** - Service offerings
- **Portfolio Section** - Work showcase
- **Request Quote** - Contact form
- **Support Section** - Help and resources

### Adding New Sections
1. Add HTML structure to `index.html`
2. Create corresponding CSS in `style-modern.css`
3. Add navigation links if needed
4. Test responsiveness across devices

### Modifying Forms
- Forms use modern PHP with CSRF protection
- Easy to add/remove fields
- Built-in validation and sanitization
- Email delivery configuration

## 🌐 Browser Support

| Browser | Version | Support |
|---------|---------|---------|
| Chrome | 90+ | ✅ Full Support |
| Firefox | 88+ | ✅ Full Support |
| Safari | 14+ | ✅ Full Support |
| Edge | 90+ | ✅ Full Support |
| IE | 11 | ⚠️ Limited Support |

## 🤝 Contributing

We welcome contributions! Here's how you can help:

### Contributing Guidelines

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Make your changes**
4. **Test thoroughly**
5. **Submit a pull request**

### Development Setup

1. **Clone your fork**
   ```bash
   git clone https://github.com/digitalcloudno/onepage-template.git
   ```

2. **Install dependencies** (if any)
   ```bash
   npm install
   ```

3. **Make changes and test**
4. **Commit with clear messages**
   ```bash
   git commit -m "Add amazing new feature"
   ```

5. **Push and create PR**

### Code Standards
- Follow existing code style
- Add comments for complex logic
- Test on multiple browsers
- Ensure mobile responsiveness

## 📄 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

### MIT License Summary
- ✅ **Free to use** for commercial and non-commercial purposes
- ✅ **Free to modify** and distribute
- ✅ **Free to use** in private and public projects
- ✅ **Attribution required** (see credits section)
- ❌ **No warranty** provided

### What You Can Do
- Use in commercial projects
- Modify and customize
- Distribute modified versions
- Use in client work
- Include in other projects

### What You Must Do
- Include the original license
- Credit the original authors
- Include copyright notices

## 🙏 Credits

### Original Template
- **Template Name**: Onepage Template
- **Original Version**: 1.0 (Legacy)
- **Original Technologies**: jQuery, Old PHP, Basic CSS

### Modernization & Development
- **Modernized By**: [DigitalCloud.no](https://digitalcloud.no/)
- **Contact Email**: [ask@digitalcloud.no](mailto:ask@digitalcloud.no)
- **Website**: [https://digitalcloud.no/](https://digitalcloud.no/)
- **Version**: 2.0 (Complete Redesign)

### Technologies Used
- **Frontend**: HTML5, CSS3, Vanilla JavaScript (ES6+)
- **Backend**: PHP 7.4+, Modern Security Practices
- **Design**: CSS Grid, Flexbox, Custom Properties
- **Icons**: Emoji Icons, Custom SVG (where applicable)

### Special Thanks
- Modern web standards community
- CSS Grid and Flexbox pioneers
- PHP security best practices contributors
- Open source community

## 📞 Support

### Getting Help

1. **Documentation**: Check this README first
2. **Issues**: Create a GitHub issue for bugs
3. **Discussions**: Use GitHub discussions for questions
4. **Email**: Contact us directly at [ask@digitalcloud.no](mailto:ask@digitalcloud.no)

### Common Issues

#### Forms Not Working
- Check PHP is enabled on your server
- Verify email configuration in `config.php`
- Check server error logs

#### Styling Issues
- Clear browser cache
- Check CSS file paths
- Verify `.htaccess` is working

#### Mobile Responsiveness
- Test on actual devices
- Check viewport meta tag
- Verify CSS media queries

### Professional Support

Need professional help with customization or deployment?

- **Email**: [ask@digitalcloud.no](mailto:ask@digitalcloud.no)
- **Website**: [https://digitalcloud.no/](https://digitalcloud.no/)
- **Services**: Custom development, hosting, maintenance

## 📈 Roadmap

### Version 2.1 (Planned)
- [ ] Dark/Light theme toggle
- [ ] Additional animation options
- [ ] Enhanced form validation
- [ ] Performance optimizations

### Version 2.2 (Future)
- [ ] PWA capabilities
- [ ] Advanced SEO features
- [ ] Multi-language support
- [ ] CMS integration options

## 🔄 Changelog

### Version 2.0 (Current)
- Complete modernization from legacy code
- Security improvements and CSRF protection
- Modern CSS with Grid and Flexbox
- Vanilla JavaScript implementation
- Responsive design overhaul
- Performance optimizations

### Version 1.0 (Legacy)
- Original jQuery-based template
- Basic responsive design
- Simple PHP forms
- Traditional CSS layout

## 📊 Statistics

- **Downloads**: [![Downloads](https://img.shields.io/github/downloads/digitalcloudno/onepage-template/total)](https://github.com/digitalcloudno/onepage-template)
- **Stars**: [![Stars](https://img.shields.io/github/stars/digitalcloudno/onepage-template)](https://github.com/digitalcloudno/onepage-template)
- **Forks**: [![Forks](https://img.shields.io/github/forks/digitalcloudno/onepage-template)](https://github.com/digitalcloudno/onepage-template)
- **Issues**: [![Issues](https://img.shields.io/github/issues/digitalcloudno/onepage-template)](https://github.com/digitalcloudno/onepage-template)

## 🌟 Showcase

Have you used this template? Show us your work!

- **Submit your site**: [ask@digitalcloud.no](mailto:ask@digitalcloud.no)
- **Share on social media**: Tag us @digitalcloudno
- **GitHub stars**: Help others discover this template

---

## 📝 Quick Start Summary

```bash
# 1. Clone the repository
git clone https://github.com/digitalcloudno/onepage-template.git

# 2. Upload to your web server

# 3. Configure in includes/config.php

# 4. Customize content in index.html

# 5. Deploy and enjoy!
```

---

**Made with ❤️ by [DigitalCloud.no](https://digitalcloud.no/)**

**Free to use, modify, and distribute under MIT License**

**Questions? Contact us at [ask@digitalcloud.no](mailto:ask@digitalcloud.no)**

---

*This template is provided as-is for educational and commercial use. While we strive for quality, we cannot guarantee it will meet your specific needs. For professional assistance, please contact us directly.*
