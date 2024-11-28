<?php

class GBP_Shortcode {
    public function __construct() {
        add_shortcode('book_list', [$this, 'render_books']);
    }

    public function render_books($atts) {
        $atts = shortcode_atts([
            'query' => 'WordPress',
            'max_results' => 5,
        ], $atts);

        $cache = new GBP_Cache();
        $cache_key = 'gbp_' . md5($atts['query']);
        $books = $cache->get($cache_key);

        if (!$books) {
            $api = new GBP_API();
            $books = $api->fetch_books($atts['query'], $atts['max_results']);
            $cache->set($cache_key, $books);
        }

        ob_start();
        include GBP_PLUGIN_DIR . 'templates/book-list.php';
        return ob_get_clean();
    }
}
