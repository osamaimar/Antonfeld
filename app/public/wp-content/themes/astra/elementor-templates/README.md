# Medical Hero Section - Elementor Template

This is an exact replica of the medical hero section from the React-based medical website, converted into an Elementor-compatible template for WordPress.

## Features

- **Exact Visual Match**: Perfectly replicates the original design with gradient background, floating elements, and modern styling
- **Responsive Design**: Fully responsive across all device sizes
- **Interactive Elements**: Hover effects, form validation, and smooth transitions
- **Customizable**: Easy to modify colors, text, and content through Elementor interface
- **Form Integration**: Working appointment booking form with WordPress integration

## Files Included

1. **`medical-hero-template.json`** - Elementor template configuration
2. **`medical-hero-styles.css`** - Custom CSS styles
3. **`medical-hero-template.php`** - PHP template with shortcode functionality
4. **`README.md`** - This documentation file

## Installation

### Method 1: Using Elementor Template Library

1. **Import Template**:
   - Go to WordPress Admin → Templates → Theme Builder
   - Click "Add New" → "Single"
   - Click "Import Template"
   - Upload the `medical-hero-template.json` file

2. **Apply Template**:
   - Set the template to display on your desired pages
   - Save and publish

### Method 2: Using Shortcode

1. **Activate PHP Template**:
   - Upload all files to your theme directory: `/wp-content/themes/astra/elementor-templates/`
   - The PHP file will automatically register the shortcode

2. **Use Shortcode**:
   - Add `[medical_hero]` to any page or post
   - Customize with parameters (see Usage section below)

### Method 3: Manual Elementor Setup

1. **Create New Page**:
   - Create a new page in WordPress
   - Edit with Elementor

2. **Apply Styles**:
   - Add the CSS from `medical-hero-styles.css` to your theme's custom CSS
   - Or enqueue the CSS file in your theme's functions.php

3. **Build Section**:
   - Follow the structure in `medical-hero-template.json`
   - Use the provided HTML structure and styling

## Usage

### Shortcode Parameters

```php
[medical_hero 
    title="Your Health, Our Priority"
    subtitle="Our Priority"
    description="Your custom description here"
    primary_button_text="Schedule Appointment"
    primary_button_url="#contact"
    secondary_button_text="Learn More"
    secondary_button_url="#about"
    form_title="Quick Appointment"
    years_experience="15+"
    patients_treated="5000+"
    satisfaction_rate="98%"
]
```

### Customization Options

#### Colors
- Primary Blue: `#0ea5e9`
- Secondary Teal: `#06b6d4`
- Accent Teal: `#ccfbf1`
- Text White: `#ffffff`
- Light Blue: `#e0f2fe`

#### Typography
- Font Family: Inter (Google Fonts)
- Title: 64px (desktop), 48px (tablet), 40px (mobile)
- Description: 20px (desktop), 18px (tablet), 16px (mobile)

#### Layout
- Grid: 2 columns on desktop, 1 column on mobile
- Spacing: 48px gap between columns
- Padding: 80px top/bottom, 32px left/right

## Form Integration

The template includes a working appointment booking form that:

1. **Validates Input**: Client-side and server-side validation
2. **Security**: WordPress nonce protection
3. **Sanitization**: All input data is sanitized
4. **Action Hook**: `medical_appointment_submission`
5. **Success Message**: Displays confirmation after submission

### Customizing Form Processing

To customize form submission, modify the `handle_medical_appointment_submission()` function in `medical-hero-template.php`:

```php
function handle_medical_appointment_submission() {
    // Your custom form processing logic here
    // Save to database, send email, etc.
}
```

## Browser Support

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Notes

- **CSS**: Optimized with minimal selectors and efficient properties
- **Images**: Uses SVG icons for crisp display at all sizes
- **Fonts**: Google Fonts loaded with `display=swap` for better performance
- **Animations**: CSS-only animations for smooth performance

## Troubleshooting

### Common Issues

1. **Styles Not Loading**:
   - Ensure CSS file is properly enqueued
   - Check file permissions
   - Clear any caching plugins

2. **Form Not Working**:
   - Verify WordPress nonce is enabled
   - Check form action URL
   - Ensure proper form submission handling

3. **Layout Issues**:
   - Check for conflicting CSS
   - Verify responsive breakpoints
   - Test on different devices

### Debug Mode

Enable WordPress debug mode to see any PHP errors:

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

## Customization Examples

### Changing Colors

```css
.medical-hero-section {
    background: linear-gradient(135deg, #your-color-1 0%, #your-color-2 100%);
}

.medical-hero-title .highlight {
    color: #your-accent-color;
}
```

### Modifying Content

```php
// In your theme's functions.php
function custom_medical_hero_content() {
    return array(
        'title' => 'Your Custom Title',
        'description' => 'Your custom description...',
        // ... other parameters
    );
}
```

## Support

For issues or questions:

1. Check this documentation first
2. Review the original React component for reference
3. Test in a staging environment before going live
4. Ensure all dependencies are properly installed

## License

This template is provided as-is for use with WordPress and Elementor. Modify as needed for your specific requirements.

## Changelog

### Version 1.0.0
- Initial release
- Exact replica of React medical hero section
- Full Elementor compatibility
- Responsive design
- Form integration
- Custom CSS styling
