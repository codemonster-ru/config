<?php

use Codemonster\Config\Config;

if (!function_exists('config')) {
    function config(string|array $key, mixed $default = null): mixed
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                Config::set($k, $v);
            }

            return null;
        }

        return Config::get($key, $default);
    }
}
