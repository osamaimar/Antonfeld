<?php
/**
 * Medical Hero Section Elementor Template
 * 
 * This template creates an exact replica of the medical hero section
 * with gradient background, floating elements, and appointment form.
 * 
 * @package Astra
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue custom styles
function medical_hero_enqueue_styles() {
    wp_enqueue_style(
        'medical-hero-styles',
        get_template_directory_uri() . '/elementor-templates/medical-hero-styles.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'medical_hero_enqueue_styles');

// Register Elementor template
function register_medical_hero_template() {
    // This would typically be done through Elementor's template system
    // For now, we'll create a shortcode that can be used
}
add_action('init', 'register_medical_hero_template');

// Shortcode for the medical hero section
function medical_hero_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Your Health, Our Priority',
        'subtitle' => 'Our Priority',
        'description' => 'Providing compassionate, comprehensive healthcare with over 15 years of experience. Your wellness journey starts here with personalized care tailored just for you.',
        'primary_button_text' => 'Schedule Appointment',
        'primary_button_url' => '#',
        'secondary_button_text' => 'Learn More',
        'secondary_button_url' => '#',
        'form_title' => 'Quick Appointment',
        'years_experience' => '15+',
        'patients_treated' => '5000+',
        'satisfaction_rate' => '98%'
    ), $atts);

    ob_start();
    ?>
    <section class="medical-hero-section" id="home">
        <!-- Background Elements -->
        <div class="medical-hero-bg-elements">
            <div class="medical-hero-bg-circle-1"></div>
            <div class="medical-hero-bg-circle-2"></div>
            <div class="medical-hero-bg-circle-3"></div>
            <div class="medical-hero-bg-circle-4"></div>
            
            <!-- Wave SVG backgrounds -->
            <svg class="medical-hero-wave-1" viewBox="0 0 1200 320" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,208C1200,224,1248,192,1296,165.3L1344,139V320H1296C1248,320,1152,320,1056,320C960,320,864,320,768,320C672,320,576,320,480,320C384,320,288,320,192,320C96,320,48,320,24,320H0V96Z" fill="rgba(255,255,255,0.1)"/>
            </svg>
            
            <svg class="medical-hero-wave-2" viewBox="0 0 1200 320" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,170.7C672,149,768,139,864,154.7C960,171,1056,213,1152,213.3C1200,213,1248,171,1296,149.3L1344,128V320H1296C1248,320,1152,320,1056,320C960,320,864,320,768,320C672,320,576,320,480,320C384,320,288,320,192,320C96,320,48,320,24,320H0V160Z" fill="rgba(255,255,255,0.05)"/>
            </svg>
        </div>

        <div class="medical-hero-content">
            <div class="medical-hero-grid">
                <!-- Left Column - Text Content -->
                <div class="medical-hero-left">
                    <h1 class="medical-hero-title">
                        <?php echo esc_html($atts['title']); ?>
                        <span class="highlight"><?php echo esc_html($atts['subtitle']); ?></span>
                    </h1>
                    
                    <p class="medical-hero-description">
                        <?php echo wp_kses_post($atts['description']); ?>
                    </p>
                    
                    <div class="medical-hero-buttons">
                        <a href="<?php echo esc_url($atts['primary_button_url']); ?>" class="medical-hero-btn-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <?php echo esc_html($atts['primary_button_text']); ?>
                        </a>
                        
                        <a href="<?php echo esc_url($atts['secondary_button_url']); ?>" class="medical-hero-btn-secondary">
                            <?php echo esc_html($atts['secondary_button_text']); ?>
                        </a>
                    </div>

                    <div class="medical-hero-stats">
                        <div class="medical-hero-stat">
                            <svg class="medical-hero-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <path d="M9 12l2 2 4-4"/>
                            </svg>
                            <div class="medical-hero-stat-number"><?php echo esc_html($atts['years_experience']); ?></div>
                            <div class="medical-hero-stat-label">Years Experience</div>
                        </div>
                        
                        <div class="medical-hero-stat">
                            <svg class="medical-hero-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                            <div class="medical-hero-stat-number"><?php echo esc_html($atts['patients_treated']); ?></div>
                            <div class="medical-hero-stat-label">Patients Treated</div>
                        </div>
                        
                        <div class="medical-hero-stat">
                            <svg class="medical-hero-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="6"/>
                                <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                            </svg>
                            <div class="medical-hero-stat-number"><?php echo esc_html($atts['satisfaction_rate']); ?></div>
                            <div class="medical-hero-stat-label">Satisfaction Rate</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Appointment Form -->
                <div class="medical-hero-right">
                    <div class="medical-hero-form-container">
                        <div class="medical-hero-form-inner">
                            <h3 class="medical-hero-form-title">
                                <span class="highlight"><?php echo esc_html($atts['form_title']); ?></span>
                            </h3>
                            
                            <form class="medical-hero-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                                <?php wp_nonce_field('medical_appointment_form', 'appointment_nonce'); ?>
                                <input type="hidden" name="action" value="medical_appointment_submission">
                                
                                <div>
                                    <input type="text" name="full_name" placeholder="Full Name" required>
                                </div>
                                
                                <div>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                
                                <div>
                                    <input type="tel" name="phone" placeholder="Phone Number" required>
                                </div>
                                
                                <div>
                                    <select name="service" required>
                                        <option value="">Select Service</option>
                                        <option value="general-consultation">General Consultation</option>
                                        <option value="preventive-care">Preventive Care</option>
                                        <option value="chronic-disease-management">Chronic Disease Management</option>
                                        <option value="womens-health">Women's Health</option>
                                    </select>
                                </div>
                                
                                <button type="submit">
                                    <span>Book Appointment</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('medical_hero', 'medical_hero_shortcode');

// Handle form submission
function handle_medical_appointment_submission() {
    if (!isset($_POST['appointment_nonce']) || !wp_verify_nonce($_POST['appointment_nonce'], 'medical_appointment_form')) {
        wp_die('Security check failed');
    }
    
    $full_name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    
    // Here you would typically save to database or send email
    // For now, we'll just redirect back with a success message
    
    wp_redirect(add_query_arg('appointment', 'success', wp_get_referer()));
    exit;
}
add_action('admin_post_medical_appointment_submission', 'handle_medical_appointment_submission');
add_action('admin_post_nopriv_medical_appointment_submission', 'handle_medical_appointment_submission');

// Display success message
function medical_appointment_success_message() {
    if (isset($_GET['appointment']) && $_GET['appointment'] === 'success') {
        echo '<div class="notice notice-success"><p>Thank you! Your appointment request has been submitted successfully.</p></div>';
    }
}
add_action('wp_footer', 'medical_appointment_success_message');
?>
