# Medical Testimonials Elementor Template

## Overview
This template provides an exact replica of the testimonials section from the medical website, featuring patient testimonials with ratings, images, and a call-to-action section.

## Features
- **Exact Design Match**: Replicates the original medical website testimonials section
- **Responsive Design**: Works perfectly on all device sizes
- **Interactive Elements**: Hover effects and smooth animations
- **Accessibility**: Proper focus states and keyboard navigation
- **Custom Styling**: Professional medical theme with sky blue and teal accents

## Files Included
- `medical-testimonials-styles.css` - Custom CSS styles
- `medical-testimonials.php` - PHP functionality and WordPress integration
- `medical-testimonials-README.md` - This documentation file

## Installation

### Method 1: Automatic Installation
1. Upload all files to your theme's `elementor-templates` directory
2. The styles will be automatically enqueued
3. Use the Elementor template JSON in your page builder

### Method 2: Manual Elementor Setup
1. Create a new section in Elementor
2. Set background color to `#F9FAFB`
3. Add padding: 80px top/bottom, 20px left/right
4. Set max width to 1200px
5. Add the following widgets in order:

#### Header Section
- **Heading Widget**: "What Our <span style='color: #0EA5E9;'>Patients</span> <span style='color: #14B8A6;'>Say</span>"
- **Text Editor Widget**: Description with highlighted text

#### Testimonials Grid
- **6 Testimonial Widgets** arranged in 3 columns (2 rows)
- Each testimonial includes:
  - Patient image
  - 5-star rating
  - Testimonial text
  - Patient name and details

#### Call-to-Action Section
- **Container Widget** with white background
- **Heading Widget**: "Join Our <span style='color: #0EA5E9;'>Family</span> of <span style='color: #14B8A6;'>Satisfied Patients</span>"
- **Text Editor Widget**: CTA description
- **2 Button Widgets**: Primary and secondary actions

## Customization

### Colors
- **Primary Blue**: `#0EA5E9` (sky-500)
- **Secondary Teal**: `#14B8A6` (teal-500)
- **Text Dark**: `#111827` (gray-900)
- **Text Medium**: `#374151` (gray-700)
- **Text Light**: `#6B7280` (gray-500)
- **Background**: `#F9FAFB` (gray-50)
- **Card Background**: `#FFFFFF` (white)
- **Star Rating**: `#FCD34D` (yellow-400)

### Typography
- **Font Family**: Inter (Google Fonts)
- **Title Size**: 36px (desktop), 28px (tablet), 24px (mobile)
- **Description Size**: 20px (desktop), 18px (tablet), 16px (mobile)
- **Testimonial Text**: 16px italic
- **Button Text**: 16px bold

### Spacing
- **Section Padding**: 80px top/bottom
- **Card Padding**: 24px
- **Card Spacing**: 32px gap
- **CTA Padding**: 32px

## Widget Settings

### Testimonial Widget
```json
{
  "testimonial_content": "Patient testimonial text",
  "testimonial_name": "Patient Name",
  "testimonial_job": "Age XX • Condition",
  "testimonial_image": "Image URL",
  "testimonial_image_position": "aside",
  "testimonial_alignment": "left",
  "show_rating": "yes",
  "testimonial_rating": "5",
  "star_style": "star_fontawesome",
  "stars_color": "#FCD34D",
  "stars_unmarked_color": "#E5E7EB",
  "background_color": "#FFFFFF",
  "border_radius": "16px",
  "padding": "24px",
  "box_shadow": "0 4px 25px -5px rgba(0,0,0,0.1)"
}
```

### Button Widget (Primary)
```json
{
  "text": "Schedule Consultation",
  "button_background_color": "#0EA5E9",
  "button_text_color": "#FFFFFF",
  "background_hover_color": "#0284C7",
  "border_radius": "8px",
  "button_padding": "12px 32px"
}
```

### Button Widget (Secondary)
```json
{
  "text": "Learn More About Our Services",
  "button_background_color": "transparent",
  "button_text_color": "#0EA5E9",
  "border_color": "#0EA5E9",
  "border_hover_color": "#0284C7",
  "hover_color": "#0284C7",
  "background_hover_color": "#EFF6FF",
  "border_radius": "8px",
  "button_padding": "12px 32px"
}
```

## Responsive Breakpoints
- **Desktop**: 1024px and above (3 columns)
- **Tablet**: 768px - 1023px (2 columns)
- **Mobile**: Below 768px (1 column)

## Browser Support
- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+

## Performance
- Optimized CSS with minimal redundancy
- Efficient hover animations
- Lazy loading for images
- Minimal JavaScript footprint

## Accessibility Features
- Proper heading hierarchy
- Alt text for images
- Focus states for interactive elements
- Keyboard navigation support
- Screen reader friendly

## Troubleshooting

### Styles Not Loading
1. Check if the CSS file is properly enqueued
2. Verify file permissions (644)
3. Clear any caching plugins
4. Check browser console for errors

### Layout Issues
1. Ensure Elementor is updated to latest version
2. Check for conflicting CSS
3. Verify widget settings match documentation
4. Test on different screen sizes

### Images Not Displaying
1. Verify image URLs are accessible
2. Check for CORS issues
3. Ensure images are properly sized (150x150px recommended)
4. Test with different image formats

## Support
For technical support or customization requests, please refer to the original medical website design or contact your development team.

## Version History
- **v1.0.0**: Initial release with exact design match
- Features: Responsive design, hover effects, accessibility support
