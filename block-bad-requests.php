<?php
/**
 * Plugin Name: Block Bad HTTP Request
 * Description: Blocks suspicious HTTP requests in order to speed up site loading or patch security loopholes temporarily.
 * Version: 1.0.1
 * Author: Joshua L. Garza
 * Author URI: https://wwww.joshualeegarza.com
 */

// Hook into the admin menu to add a settings page
add_action('admin_menu', 'bbr_add_admin_menu');

// Add the settings page
function bbr_add_admin_menu() {
    add_options_page(
        'Block Bad Requests Settings',
        'Block Bad Requests',
        'manage_options',
        'block-bad-requests',
        'bbr_options_page'
    );
}

// Display the settings page
function bbr_options_page() {
    ?>
    <div class="wrap">
        <h1>Block Bad Requests Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('bbr_settings_group');
            do_settings_sections('block-bad-requests');
            submit_button('Save Changes', 'primary', 'submit', true, ['class' => 'submit-button']);
            ?>
        </form>
    </div>
    <?php
}

// Initialize plugin options
add_action('admin_init', 'bbr_settings_init');

function bbr_settings_init() {
    register_setting('bbr_settings_group', 'bbr_filter_urls');
    add_settings_section(
        'bbr_settings_section',
        'Filter URLs',
        null,
        'block-bad-requests'
    );
    add_settings_field(
        'bbr_filter_urls',
        'URLs to Filter',
        'bbr_filter_urls_render',
        'block-bad-requests',
        'bbr_settings_section'
    );
}

function bbr_filter_urls_render() {
    $urls = get_option('bbr_filter_urls', []);
    ?>
    <textarea name="bbr_filter_urls[]" rows="10" cols="50" class="large-text"><?php echo esc_textarea(implode("\n", $urls)); ?></textarea>
    <p class="description">Enter one URL per line to filter from the output.</p>
    <?php
}

// Start output buffering
add_action('template_redirect', 'bbr_start_output_buffer', 1);

function bbr_start_output_buffer() {
    ob_start('bbr_filter_buffer');
}

// Filter the buffered content
function bbr_filter_buffer($buffer) {
    $urls = get_option('bbr_filter_urls', []);
    foreach ($urls as $url) {
        $buffer = str_replace(trim($url), '', $buffer);
    }
    return $buffer;
}

// Enqueue custom admin styles
add_action('admin_enqueue_scripts', 'bbr_enqueue_styles');

function bbr_enqueue_styles($hook) {
    // Only load styles on the settings page
    if ($hook !== 'settings_page_block-bad-requests') {
        return;
    }
    wp_enqueue_style('block-bad-requests-css', plugin_dir_url(__FILE__) . 'css/block-bad-requests.css');
}
