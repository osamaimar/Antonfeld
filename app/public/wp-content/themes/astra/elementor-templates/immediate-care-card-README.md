# Need Immediate Care Card - Elementor Template

This is an exact replica of the "Need Immediate Care?" card from the medical website, converted into an Elementor-compatible template for WordPress.

## Features

- **Exact Visual Match**: Perfectly replicates the original design with sky blue background and white text
- **Pure Elementor Elements**: Uses native Elementor widgets (Heading, Text Editor, Button) instead of HTML
- **Responsive Design**: Fully responsive across all device sizes
- **Interactive Elements**: Hover effects and smooth transitions
- **Customizable**: Easy to modify colors, text, and content through Elementor interface
- **Multiple Integration Options**: Shortcode, Elementor widget, or JSON template
- **Elementor Native**: Fully compatible with Elementor's styling and customization system

## Files Included

1. **`immediate-care-card.json`** - Elementor template configuration
2. **`immediate-care-card-styles.css`** - Custom CSS styles
3. **`immediate-care-card.php`** - PHP template with shortcode and widget functionality
4. **`immediate-care-card-README.md`** - This documentation file

## Template Structure

The template uses proper Elementor elements:

1. **Section**: Container with centered alignment
2. **Column**: Full-width column for the card
3. **Card Section**: Inner section with sky blue background and styling
4. **Heading Widget**: Title with highlighted text
5. **Text Editor Widget**: Description with highlighted phrases
6. **Button Widget**: Call-to-action button

## Original Design Specifications

- **Background**: Sky blue (`#0ea5e9`)
- **Text Color**: White (`#ffffff`)
- **Highlight Color**: Light teal (`#ccfbf1`)
- **Button**: White background with sky blue text
- **Border Radius**: 16px
- **Shadow**: `0 25px 50px -12px rgba(0, 0, 0, 0.25)`
- **Typography**: Inter font family
- **Max Width**: 600px (centered)

## Installation

### Method 1: Using Elementor Template Library

1. **Import Template**:
   - Go to WordPress Admin → Templates → Theme Builder
   - Click "Add New" → "Single"
   - Click "Import Template"
   - Upload the `immediate-care-card.json` file

2. **Apply Template**:
   - Set the template to display on your desired pages
   - Save and publish

### Method 2: Using Shortcode

1. **Activate PHP Template**:
   - Upload all files to your theme directory: `/wp-content/themes/astra/elementor-templates/`
   - The PHP file will automatically register the shortcode

2. **Use Shortcode**:
   - Add `[immediate_care_card]` to any page or post
   - Customize with parameters (see Usage section below)

### Method 3: Manual Elementor Setup

1. **Create New Page**:
   - Create a new page in WordPress
   - Edit with Elementor

2. **Apply Styles**:
   - Add the CSS from `immediate-care-card-styles.css` to your theme's custom CSS
   - Or enqueue the CSS file in your theme's functions.php

3. **Build Section**:
   - Create a new Section with centered alignment
   - Add a Column (100% width)
   - Add an inner Section for the card with sky blue background
   - Add Heading widget for the title
   - Add Text Editor widget for the description
   - Add Button widget for the call-to-action
   - Apply the styling from the JSON template

### Method 4: Using Elementor Widget (Pro)

1. **Activate Widget**:
   - Upload the PHP file to your theme directory
   - The widget will automatically register with Elementor

2. **Use Widget**:
   - In Elementor, search for "Immediate Care Card"
   - Drag and drop to your page
   - Customize through the widget settings

## Usage

### Shortcode Parameters

```php
[immediate_care_card 
    title="Need Immediate Care?"
    title_highlight="Immediate Care"
    description="We offer same-day appointments for urgent medical concerns. Don't wait - your health is our priority."
    description_highlight_1="same-day appointments"
    description_highlight_2="your health is our priority"
    button_text="Book Same-Day Appointment"
    button_url="#contact"
    button_action="link"
    card_class=""
    show_shadow="true"
]
```

### Shortcode Parameters Explained

- **`title`**: Main title text (default: "Need Immediate Care?")
- **`title_highlight`**: Text to highlight in the title (default: "Immediate Care")
- **`description`**: Description text
- **`description_highlight_1`**: First text to highlight in description
- **`description_highlight_2`**: Second text to highlight in description
- **`button_text`**: Button text (default: "Book Same-Day Appointment")
- **`button_url`**: Button URL (default: "#contact")
- **`button_action`**: Button action - "link" or "form" (default: "link")
- **`card_class`**: Additional CSS class for the card
- **`show_shadow`**: Show shadow effect - "true" or "false" (default: "true")

### Elementor Widget Settings

The widget provides the following customization options:

#### Content Tab
- Title
- Title Highlight
- Description
- Button Text
- Button URL
- Button Action (Link or Form)

#### Style Tab
- Card Background Color
- Text Color
- Highlight Color
- Button Background Color
- Button Text Color

## Customization Examples

### Basic Usage
```php
[immediate_care_card]
```

### Custom Content
```php
[immediate_care_card 
    title="Emergency Care Available"
    title_highlight="Emergency Care"
    description="Our emergency services are available 24/7 for urgent medical needs."
    button_text="Call Emergency Line"
    button_url="tel:+1234567890"
]
```

### Custom Styling
```css
.immediate-care-card {
    background: #your-color !important;
    border-radius: 20px !important;
}

.immediate-care-button {
    background: #your-button-color !important;
    color: #your-text-color !important;
}
```

## Form Integration

When `button_action="form"` is set, the button will trigger a JavaScript function that can be customized:

```javascript
function openAppointmentForm() {
    // Custom implementation
    // Examples:
    // - Open a modal
    // - Scroll to a form section
    // - Redirect to a booking page
    // - Trigger a popup
}
```

## Responsive Behavior

- **Desktop**: Full-width card with centered content
- **Tablet**: Reduced padding, smaller font sizes
- **Mobile**: Full-width with minimal margins, stacked layout

## Browser Support

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Notes

- **CSS**: Optimized with minimal selectors
- **Fonts**: Google Fonts loaded with `display=swap`
- **Animations**: CSS-only for smooth performance
- **JavaScript**: Minimal, only for form functionality

## Troubleshooting

### Common Issues

1. **Styles Not Loading**:
   - Ensure CSS file is properly enqueued
   - Check file permissions
   - Clear any caching plugins

2. **Widget Not Appearing**:
   - Verify Elementor Pro is active
   - Check if widget is registered properly
   - Clear Elementor cache

3. **Shortcode Not Working**:
   - Ensure PHP file is in the correct directory
   - Check for PHP errors in debug log
   - Verify shortcode is registered

### Debug Mode

Enable WordPress debug mode to see any PHP errors:

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

## Advanced Customization

### Custom CSS Classes

Add custom classes to the card:

```php
[immediate_care_card card_class="my-custom-class"]
```

Then style with CSS:

```css
.immediate-care-card.my-custom-class {
    /* Your custom styles */
}
```

### Custom JavaScript

Add custom JavaScript for button actions:

```javascript
// Override the default function
function openAppointmentForm() {
    // Your custom implementation
    console.log('Custom appointment form opened');
}
```

## Integration with Other Plugins

### Contact Form 7
```php
[immediate_care_card 
    button_action="form"
    button_url="#contact-form-7"
]
```

### Gravity Forms
```php
[immediate_care_card 
    button_action="form"
    button_url="#gform_wrapper_1"
]
```

### Custom Modal
```javascript
function openAppointmentForm() {
    // Open your custom modal
    document.getElementById('appointment-modal').style.display = 'block';
}
```

## License

This template is provided as-is for use with WordPress and Elementor. Modify as needed for your specific requirements.

## Changelog

### Version 1.0.0
- Initial release
- Exact replica of original design
- Shortcode functionality
- Elementor widget support
- Responsive design
- Custom CSS styling
