<?php

if (!function_exists('cloudflare')) {
    /**
     * Helper to easy load an cloudflare method or the api.
     *
     * @param string $method cloudflare method name
     *
     * @return \Teakowa\Cloudflare\Cloudflare
     */
    function cloudflare($method = null)
    {
        $cloudflare = app('Teakowa\Cloudflare\Cloudflare');

        return $method ? $cloudflare->load($method) : $cloudflare;
    }
}
