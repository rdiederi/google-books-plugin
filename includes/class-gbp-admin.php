<?php

class GBP_Admin {
    public function __construct() {
        add_action('admin_menu', [$this, 'add_settings_page']);
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function add_settings_page() {
        add_options_page(
            'Google Books Settings',
            'Google Books',
            'manage_options',
            'gbp-settings',
            [$this, 'settings_page_html']
        );
    }

    public function register_settings() {
        register_setting('gbp_settings', 'gbp_api_key');
        register_setting('gbp_settings', 'gbp_cache_duration');
    }

    public function settings_page_html() {
        ?>
        <div class="wrap">
            <h1>Google Books Settings</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('gbp_settings');
                do_settings_sections('gbp_settings');
                ?>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="gbp_api_key">API Key</label></th>
                        <td><input type="text" name="gbp_api_key" id="gbp_api_key" value="<?php echo esc_attr(get_option('gbp_api_key', '')); ?>" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="gbp_cache_duration">Cache Duration (seconds)</label></th>
                        <td><input type="number" name="gbp_cache_duration" id="gbp_cache_duration" value="<?php echo esc_attr(get_option('gbp_cache_duration', 3600)); ?>" class="small-text"></td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}
