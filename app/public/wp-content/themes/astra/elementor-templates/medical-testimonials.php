<?php
/**
 * Medical Testimonials Elementor Template
 * 
 * This template provides styling and functionality for the medical testimonials section
 * to match the original design exactly.
 * 
 * @package Astra
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue custom styles
function medical_testimonials_enqueue_styles() {
    if (function_exists('get_template_directory_uri')) {
        wp_enqueue_style(
            'medical-testimonials-styles',
            get_template_directory_uri() . '/elementor-templates/medical-testimonials-styles.css',
            array(),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'medical_testimonials_enqueue_styles');

// Add custom CSS classes to Elementor widgets
function medical_testimonials_add_custom_classes($widget, $args) {
    // Add custom classes to testimonial widgets
    if ($widget->get_name() === 'testimonial') {
        $widget->add_render_attribute('wrapper', 'class', 'medical-testimonial-card');
    }
    
    // Add custom classes to button widgets in CTA section
    if ($widget->get_name() === 'button') {
        $settings = $widget->get_settings();
        if (isset($settings['text']) && strpos($settings['text'], 'Schedule Consultation') !== false) {
            $widget->add_render_attribute('button', 'class', 'medical-cta-primary');
        } elseif (isset($settings['text']) && strpos($settings['text'], 'Learn More About Our Services') !== false) {
            $widget->add_render_attribute('button', 'class', 'medical-cta-secondary');
        }
    }
    
    // Add custom classes to container widgets in CTA section
    if ($widget->get_name() === 'container') {
        $settings = $widget->get_settings();
        if (isset($settings['background_color']) && $settings['background_color'] === '#FFFFFF') {
            $widget->add_render_attribute('wrapper', 'class', 'medical-testimonials-cta-container');
        }
    }
}
add_action('elementor/frontend/widget/before_render', 'medical_testimonials_add_custom_classes', 10, 2);

// Add custom CSS classes to sections
function medical_testimonials_add_section_classes($element, $args) {
    if ($element->get_name() === 'section') {
        $settings = $element->get_settings();
        if (isset($settings['background_color']) && $settings['background_color'] === '#F9FAFB') {
            $element->add_render_attribute('wrapper', 'class', 'medical-testimonials-section');
        }
    }
}
add_action('elementor/frontend/section/before_render', 'medical_testimonials_add_section_classes', 10, 2);

// Add custom CSS classes to columns
function medical_testimonials_add_column_classes($element, $args) {
    if ($element->get_name() === 'column') {
        $element->add_render_attribute('wrapper', 'class', 'medical-testimonials-container');
    }
}
add_action('elementor/frontend/column/before_render', 'medical_testimonials_add_column_classes', 10, 2);

// Add custom CSS classes to heading widgets
function medical_testimonials_add_heading_classes($element, $args) {
    if ($element->get_name() === 'heading') {
        $settings = $element->get_settings();
        if (isset($settings['title']) && strpos($settings['title'], 'What Our') !== false) {
            $element->add_render_attribute('heading', 'class', 'medical-testimonials-title');
        } elseif (isset($settings['title']) && strpos($settings['title'], 'Join Our') !== false) {
            $element->add_render_attribute('heading', 'class', 'medical-testimonials-cta-title');
        }
    }
}
add_action('elementor/frontend/widget/before_render', 'medical_testimonials_add_heading_classes', 10, 2);

// Add custom CSS classes to text editor widgets
function medical_testimonials_add_text_editor_classes($element, $args) {
    if ($element->get_name() === 'text-editor') {
        $settings = $element->get_settings();
        if (isset($settings['editor']) && strpos($settings['editor'], 'Real stories') !== false) {
            $element->add_render_attribute('editor', 'class', 'medical-testimonials-description');
        } elseif (isset($settings['editor']) && strpos($settings['editor'], 'Experience the difference') !== false) {
            $element->add_render_attribute('editor', 'class', 'medical-testimonials-cta-description');
        }
    }
}
add_action('elementor/frontend/widget/before_render', 'medical_testimonials_add_text_editor_classes', 10, 2);

// Add custom JavaScript for enhanced interactions
function medical_testimonials_add_scripts() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effects to testimonial cards
        const testimonialCards = document.querySelectorAll('.elementor-widget-testimonial .elementor-testimonial-wrapper');
        testimonialCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
                this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 4px 25px -5px rgba(0, 0, 0, 0.1)';
            });
        });
        
        // Add click tracking to CTA buttons
        const ctaButtons = document.querySelectorAll('.medical-cta-primary, .medical-cta-secondary');
        ctaButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Add your analytics tracking here
                console.log('CTA button clicked:', this.textContent);
            });
        });
        
        // Add smooth scrolling for anchor links
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'medical_testimonials_add_scripts');

// Add custom CSS for specific Elementor widgets
function medical_testimonials_add_custom_css() {
    ?>
    <style>
    /* Additional custom styles for Elementor widgets */
    .elementor-section.medical-testimonials-section {
        background: #F9FAFB !important;
    }
    
    .elementor-widget-testimonial .elementor-testimonial-wrapper {
        background: #FFFFFF !important;
        border-radius: 16px !important;
        padding: 24px !important;
        box-shadow: 0 4px 25px -5px rgba(0, 0, 0, 0.1) !important;
        border: 1px solid #E5E7EB !important;
        transition: all 0.3s ease !important;
        height: 100% !important;
    }
    
    .elementor-widget-testimonial .elementor-testimonial-wrapper:hover {
        transform: translateY(-4px) !important;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
    }
    
    .elementor-widget-testimonial .elementor-testimonial-content {
        font-family: 'Inter', sans-serif !important;
        font-size: 16px !important;
        font-weight: 400 !important;
        line-height: 1.6 !important;
        color: #374151 !important;
        font-style: italic !important;
        margin-bottom: 24px !important;
    }
    
    .elementor-widget-testimonial .elementor-testimonial-name {
        font-family: 'Inter', sans-serif !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        color: #111827 !important;
        margin-bottom: 4px !important;
    }
    
    .elementor-widget-testimonial .elementor-testimonial-job {
        font-family: 'Inter', sans-serif !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        color: #6B7280 !important;
    }
    
    .elementor-widget-testimonial .elementor-testimonial-image {
        width: 48px !important;
        height: 48px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    .elementor-widget-testimonial .elementor-star-rating {
        color: #FCD34D !important;
    }
    
    .elementor-widget-testimonial .elementor-star-rating__star {
        color: #FCD34D !important;
        fill: currentColor !important;
    }
    
    .elementor-widget-container.medical-testimonials-cta-container {
        background: #FFFFFF !important;
        border-radius: 16px !important;
        padding: 32px !important;
        box-shadow: 0 4px 25px -5px rgba(0, 0, 0, 0.1) !important;
        border: 1px solid #E5E7EB !important;
        max-width: 896px !important;
        margin: 48px auto 0 !important;
    }
    
    .elementor-widget-button .elementor-button.medical-cta-primary {
        background: #0EA5E9 !important;
        color: #FFFFFF !important;
        padding: 12px 32px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        border: none !important;
        font-family: 'Inter', sans-serif !important;
        font-size: 16px !important;
        transition: all 0.2s ease !important;
    }
    
    .elementor-widget-button .elementor-button.medical-cta-primary:hover {
        background: #0284C7 !important;
        color: #FFFFFF !important;
        transform: translateY(-1px) !important;
        box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3) !important;
    }
    
    .elementor-widget-button .elementor-button.medical-cta-secondary {
        background: transparent !important;
        color: #0EA5E9 !important;
        padding: 12px 32px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        border: 2px solid #0EA5E9 !important;
        font-family: 'Inter', sans-serif !important;
        font-size: 16px !important;
        transition: all 0.2s ease !important;
    }
    
    .elementor-widget-button .elementor-button.medical-cta-secondary:hover {
        background: #EFF6FF !important;
        color: #0284C7 !important;
        border-color: #0284C7 !important;
        transform: translateY(-1px) !important;
        box-shadow: 0 4px 12px rgba(14, 165, 233, 0.2) !important;
    }
    </style>
    <?php
}
add_action('wp_head', 'medical_testimonials_add_custom_css');

// Helper function to get testimonial data
function get_medical_testimonials_data() {
    return array(
        array(
            'name' => 'Jennifer Adams',
            'age' => 34,
            'condition' => 'Preventive Care',
            'rating' => 5,
            'text' => 'Dr. Mitchell has been my family doctor for over 5 years. Her attention to detail and genuine care for her patients is exceptional. She always takes the time to listen and explain everything thoroughly.',
            'image' => 'https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=150'
        ),
        array(
            'name' => 'Robert Chen',
            'age' => 45,
            'condition' => 'Diabetes Management',
            'rating' => 5,
            'text' => 'Managing my diabetes has become so much easier with Dr. Mitchell\'s guidance. She developed a comprehensive treatment plan that fits my lifestyle, and my blood sugar levels have never been better.',
            'image' => 'https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=150'
        ),
        array(
            'name' => 'Maria Rodriguez',
            'age' => 28,
            'condition' => 'Women\'s Health',
            'rating' => 5,
            'text' => 'Dr. Mitchell made me feel comfortable and supported throughout my pregnancy. Her expertise and compassionate care gave me confidence during this important time in my life.',
            'image' => 'https://images.pexels.com/photos/1102341/pexels-photo-1102341.jpeg?auto=compress&cs=tinysrgb&w=150'
        ),
        array(
            'name' => 'William Thompson',
            'age' => 62,
            'condition' => 'Heart Disease Care',
            'rating' => 5,
            'text' => 'After my heart attack, Dr. Mitchell developed a comprehensive recovery plan that has greatly improved my quality of life. Her ongoing monitoring and adjustments to my treatment have been invaluable.',
            'image' => 'https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=150'
        ),
        array(
            'name' => 'Emily Watson',
            'age' => 52,
            'condition' => 'Mental Health Support',
            'rating' => 5,
            'text' => 'Dr. Mitchell\'s holistic approach to healthcare includes mental wellness. She helped me through a difficult period with empathy and practical solutions that really made a difference.',
            'image' => 'https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=150'
        ),
        array(
            'name' => 'David Park',
            'age' => 38,
            'condition' => 'General Consultation',
            'rating' => 5,
            'text' => 'I appreciate Dr. Mitchell\'s thorough approach to healthcare. She doesn\'t just treat symptoms but looks at the whole picture. Her preventive care recommendations have kept me healthier than ever.',
            'image' => 'https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=150'
        )
    );
}
?>
