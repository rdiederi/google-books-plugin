<?php

class GBP_Cache {
    private $cache_duration;

    public function __construct() {
        $this->cache_duration = get_option('gbp_cache_duration', 3600); // Default 1 hour.
    }

    public function get($key) {
        return get_transient($key);
    }

    public function set($key, $value) {
        set_transient($key, $value, $this->cache_duration);
    }

    public function delete($key) {
        delete_transient($key);
    }
}
