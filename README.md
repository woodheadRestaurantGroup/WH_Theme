# WH Restaurant Theme

A modern, responsive WordPress theme designed specifically for restaurants. Built with performance, SEO, and user experience in mind.

## Theme Meta

- **Theme Name**: WH Restaurant Theme
- **Theme URI**: https://woodheadrestaurantgroup.co.uk
- **Author**: Woodhead Restaurant Group
- **Author URI**: https://woodheadrestaurantgroup.co.uk
- **Description**: A premium WordPress theme designed specifically for restaurants, featuring modern design, performance optimization, and comprehensive schema markup for enhanced SEO.
- **Version**: 1.0.0
- **License**: Copyright Woodhead Restaurant Group
- **License URI**: https://woodheadrestaurantgroup.co.uk
- **Text Domain**: wh-restaurant
- **Tags**: restaurant, food, menu, responsive, modern, performance, seo
- **Requires at least**: WordPress 5.0
- **Tested up to**: WordPress 6.4
- **Requires PHP**: 7.4

## Features

- 🎨 **Modern Design**: Clean, responsive layout optimized for all devices
- 🚀 **Performance Optimized**: Lazy loading images, optimized assets, and efficient code
- 🔍 **SEO Ready**: Schema.org markup for restaurants, proper meta tags, and semantic HTML
- 🍽️ **Menu Management**: Easy menu management with ACF integration
- 📱 **Mobile First**: Responsive design that works beautifully on all devices
- 🛠️ **Developer Friendly**: Well-documented code and modular structure

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Advanced Custom Fields Pro
- MySQL 5.6 or higher

## Installation

1. Download the theme files
2. Upload to `/wp-content/themes/` directory
3. Activate the theme through the 'Themes' menu in WordPress
4. Install and activate required plugins:
   - Advanced Custom Fields Pro

## Theme Setup

### Required ACF Fields

The theme uses several ACF fields for configuration. Import the following field groups:

1. **Theme Options**
   - Google Analytics Account
   - MailMunch Site ID
   - CookieYes ID
   - Meta Keywords

2. **Restaurant Schema Fields**
   - Cuisine Type
   - Price Range
   - Address Information
   - Geo Coordinates
   - Opening Hours
   - Contact Information
   - Social Media Links

## Theme Structure

```
WH_Theme/
├── css/                    # Modular CSS files
│   ├── variables.css      # CSS variables
│   ├── reset.css          # Reset styles
│   ├── core.css           # Core/base styles
│   ├── layout.css         # Layout styles
│   ├── typography.css     # Typography styles
│   ├── components.css     # Component styles
│   ├── lazy-loading.css   # Lazy loading styles
│   └── media-queries.css  # Responsive styles
├── lib/                   # Library files
│   └── utils/            # Utility functions
├── partials/             # Template parts
│   ├── block_image.php
│   ├── block_content_menu.php
│   ├── first_section.php
│   └── menu_section.php
├── page-templates/       # Page templates
├── functions.php         # Theme functions
├── header.php           # Header template
├── footer.php           # Footer template
├── index.php           # Main template
├── style.css           # Main stylesheet
└── index.js            # Theme JavaScript
```

## Performance Features

- **Lazy Loading Images**: Images load as they enter the viewport
- **Optimized Assets**: Minified CSS and JavaScript
- **Efficient Code**: Clean, modular code structure
- **Cache Busting**: Proper versioning for assets

## Security Features

- Proper escaping of all ACF field outputs
- Secure AJAX implementation
- Nonce verification for forms
- Sanitized user inputs

## SEO Features

- Schema.org markup for restaurants
- Proper meta tags
- Semantic HTML structure
- Optimized heading hierarchy
- Mobile-friendly design

## Customization

### Colors and Typography

Theme colors and typography can be customized through the WordPress Customizer or ACF Theme Options.

### Layout

The theme uses a flexible grid system that can be customized through CSS variables.

## License

This theme is copyright Woodhead Restaurant Group

## Credits

- WordPress
- Advanced Custom Fields
- MailMunch
- Google Analytics
- CookieYes

## Changelog

### 1.0.0
- Initial release
- Basic theme structure
- Menu management
- Schema.org markup
- Performance optimizations 