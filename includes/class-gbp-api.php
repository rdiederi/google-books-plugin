<?php

class GBP_API {
    private $api_key;

    public function __construct() {
        $this->api_key = get_option('gbp_api_key', '');
    }

    public function fetch_books($query, $max_results = 10) {
        $url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($query) . "&maxResults=" . $max_results . "&key=" . $this->api_key;
        $response = wp_remote_get($url);

        if (is_wp_error($response)) {
            return [];
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        return isset($data['items']) ? $data['items'] : [];
    }
}
