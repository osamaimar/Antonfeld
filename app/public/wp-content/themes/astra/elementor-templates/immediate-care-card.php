<?php
/**
 * Immediate Care Card Elementor Template
 * 
 * This template creates an exact replica of the "Need Immediate Care?" card
 * with sky blue background, white text, and call-to-action button.
 * 
 * @package Astra
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue custom styles
function immediate_care_card_enqueue_styles() {
    wp_enqueue_style(
        'immediate-care-card-styles',
        get_template_directory_uri() . '/elementor-templates/immediate-care-card-styles.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'immediate_care_card_enqueue_styles');

// Shortcode for the immediate care card
function immediate_care_card_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Need Immediate Care?',
        'title_highlight' => 'Immediate Care',
        'description' => 'We offer same-day appointments for urgent medical concerns. Don\'t wait - your health is our priority.',
        'description_highlight_1' => 'same-day appointments',
        'description_highlight_2' => 'your health is our priority',
        'button_text' => 'Book Same-Day Appointment',
        'button_url' => '#contact',
        'button_action' => 'link', // 'link' or 'form'
        'card_class' => '',
        'show_shadow' => 'true'
    ), $atts);

    // Sanitize attributes
    $title = sanitize_text_field($atts['title']);
    $title_highlight = sanitize_text_field($atts['title_highlight']);
    $description = wp_kses_post($atts['description']);
    $description_highlight_1 = sanitize_text_field($atts['description_highlight_1']);
    $description_highlight_2 = sanitize_text_field($atts['description_highlight_2']);
    $button_text = sanitize_text_field($atts['button_text']);
    $button_url = esc_url($atts['button_url']);
    $button_action = sanitize_text_field($atts['button_action']);
    $card_class = sanitize_html_class($atts['card_class']);
    $show_shadow = $atts['show_shadow'] === 'true';

    // Build CSS classes
    $card_classes = array('immediate-care-card');
    if ($card_class) {
        $card_classes[] = $card_class;
    }
    if ($show_shadow) {
        $card_classes[] = 'has-shadow';
    }
    $card_class_string = implode(' ', $card_classes);

    ob_start();
    ?>
    <div class="immediate-care-card-container">
        <div class="<?php echo esc_attr($card_class_string); ?>">
            <h3 class="immediate-care-title">
                <?php echo esc_html($title); ?>
                <span class="highlight"><?php echo esc_html($title_highlight); ?></span>?
            </h3>
            
            <p class="immediate-care-description">
                <?php 
                $description_with_highlights = str_replace(
                    array($description_highlight_1, $description_highlight_2),
                    array(
                        '<span class="highlight">' . esc_html($description_highlight_1) . '</span>',
                        '<span class="bold">' . esc_html($description_highlight_2) . '</span>'
                    ),
                    esc_html($description)
                );
                echo $description_with_highlights;
                ?>
            </p>
            
            <?php if ($button_action === 'form'): ?>
                <button class="immediate-care-button" onclick="openAppointmentForm()">
                    <span><?php echo esc_html($button_text); ?></span>
                </button>
            <?php else: ?>
                <a href="<?php echo $button_url; ?>" class="immediate-care-button">
                    <span><?php echo esc_html($button_text); ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($button_action === 'form'): ?>
    <script>
    function openAppointmentForm() {
        // This function can be customized to open a modal, redirect to a form, etc.
        // For now, it will scroll to the contact section or open a modal
        var contactSection = document.getElementById('contact');
        if (contactSection) {
            contactSection.scrollIntoView({ behavior: 'smooth' });
        } else {
            // Fallback: redirect to contact page or open modal
            window.location.href = '<?php echo esc_js($button_url); ?>';
        }
    }
    </script>
    <?php endif; ?>

    <style>
    .immediate-care-card.has-shadow {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('immediate_care_card', 'immediate_care_card_shortcode');

// Widget for Elementor (if Elementor Pro is available)
if (class_exists('\Elementor\Widget_Base')) {
    class Immediate_Care_Card_Widget extends \Elementor\Widget_Base {
        
        public function get_name() {
            return 'immediate_care_card';
        }

        public function get_title() {
            return __('Immediate Care Card', 'textdomain');
        }

        public function get_icon() {
            return 'eicon-call-to-action';
        }

        public function get_categories() {
            return ['general'];
        }

        protected function _register_controls() {
            $this->start_controls_section(
                'content_section',
                [
                    'label' => __('Content', 'textdomain'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'title',
                [
                    'label' => __('Title', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => 'Need Immediate Care?',
                ]
            );

            $this->add_control(
                'title_highlight',
                [
                    'label' => __('Title Highlight', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => 'Immediate Care',
                ]
            );

            $this->add_control(
                'description',
                [
                    'label' => __('Description', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => 'We offer same-day appointments for urgent medical concerns. Don\'t wait - your health is our priority.',
                ]
            );

            $this->add_control(
                'button_text',
                [
                    'label' => __('Button Text', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => 'Book Same-Day Appointment',
                ]
            );

            $this->add_control(
                'button_url',
                [
                    'label' => __('Button URL', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::URL,
                    'placeholder' => __('https://your-link.com', 'textdomain'),
                    'default' => [
                        'url' => '#contact',
                        'is_external' => false,
                        'nofollow' => false,
                    ],
                ]
            );

            $this->add_control(
                'button_action',
                [
                    'label' => __('Button Action', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'link',
                    'options' => [
                        'link' => __('Link', 'textdomain'),
                        'form' => __('Open Form/Modal', 'textdomain'),
                    ],
                ]
            );

            $this->end_controls_section();

            $this->start_controls_section(
                'style_section',
                [
                    'label' => __('Style', 'textdomain'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'card_background_color',
                [
                    'label' => __('Card Background Color', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#0ea5e9',
                ]
            );

            $this->add_control(
                'text_color',
                [
                    'label' => __('Text Color', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#ffffff',
                ]
            );

            $this->add_control(
                'highlight_color',
                [
                    'label' => __('Highlight Color', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#ccfbf1',
                ]
            );

            $this->add_control(
                'button_background_color',
                [
                    'label' => __('Button Background Color', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#ffffff',
                ]
            );

            $this->add_control(
                'button_text_color',
                [
                    'label' => __('Button Text Color', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#0ea5e9',
                ]
            );

            $this->end_controls_section();
        }

        protected function render() {
            $settings = $this->get_settings_for_display();
            
            $title = $settings['title'];
            $title_highlight = $settings['title_highlight'];
            $description = $settings['description'];
            $button_text = $settings['button_text'];
            $button_url = $settings['button_url']['url'];
            $button_action = $settings['button_action'];
            
            // Get style settings
            $card_bg = $settings['card_background_color'];
            $text_color = $settings['text_color'];
            $highlight_color = $settings['highlight_color'];
            $button_bg = $settings['button_background_color'];
            $button_text_color = $settings['button_text_color'];
            
            ?>
            <div class="immediate-care-card-container">
                <div class="immediate-care-card" style="background-color: <?php echo esc_attr($card_bg); ?>; color: <?php echo esc_attr($text_color); ?>;">
                    <h3 class="immediate-care-title" style="color: <?php echo esc_attr($text_color); ?>;">
                        <?php echo esc_html($title); ?>
                        <span class="highlight" style="color: <?php echo esc_attr($highlight_color); ?>;"><?php echo esc_html($title_highlight); ?></span>?
                    </h3>
                    
                    <p class="immediate-care-description" style="color: <?php echo esc_attr($text_color); ?>;">
                        <?php echo wp_kses_post($description); ?>
                    </p>
                    
                    <?php if ($button_action === 'form'): ?>
                        <button class="immediate-care-button" onclick="openAppointmentForm()" style="background-color: <?php echo esc_attr($button_bg); ?>; color: <?php echo esc_attr($button_text_color); ?>;">
                            <span><?php echo esc_html($button_text); ?></span>
                        </button>
                    <?php else: ?>
                        <a href="<?php echo esc_url($button_url); ?>" class="immediate-care-button" style="background-color: <?php echo esc_attr($button_bg); ?>; color: <?php echo esc_attr($button_text_color); ?>;">
                            <span><?php echo esc_html($button_text); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        }
    }

    // Register the widget
    add_action('elementor/widgets/widgets_registered', function() {
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Immediate_Care_Card_Widget());
    });
}

// Helper function to create Elementor template structure
function create_immediate_care_elementor_structure() {
    return array(
        'section' => array(
            'background_color' => 'rgba(0,0,0,0)',
            'padding' => array('top' => 48, 'right' => 0, 'bottom' => 0, 'left' => 0),
            'text_align' => 'center'
        ),
        'card_section' => array(
            'background_color' => '#0ea5e9',
            'border_radius' => 16,
            'padding' => array('top' => 32, 'right' => 32, 'bottom' => 32, 'left' => 32),
            'box_shadow' => '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
            'max_width' => 600,
            'margin' => '0 auto'
        ),
        'title' => array(
            'text' => 'Need <span style="color: #ccfbf1;">Immediate Care</span>?',
            'color' => '#ffffff',
            'font_size' => 24,
            'font_weight' => 700,
            'text_align' => 'center',
            'margin_bottom' => 16
        ),
        'description' => array(
            'text' => 'We offer <span style="color: #ffffff; font-weight: 600;">same-day appointments</span> for urgent medical concerns. Don\'t wait - <span style="color: #ccfbf1; font-weight: 700;">your health is our priority</span>.',
            'color' => '#e0f2fe',
            'font_size' => 16,
            'text_align' => 'center',
            'margin_bottom' => 24
        ),
        'button' => array(
            'text' => 'Book Same-Day Appointment',
            'background_color' => '#ffffff',
            'text_color' => '#0ea5e9',
            'hover_background' => '#f0f9ff',
            'border_radius' => 8,
            'padding' => array('top' => 12, 'right' => 32, 'bottom' => 12, 'left' => 32),
            'font_weight' => 700
        )
    );
}
?>
