<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Get a site setting value by key (managed in the admin panel).
     */
    function setting(string $key, ?string $default = null): ?string
    {
        try {
            $value = Setting::get($key, $default);

            return ($value === null || $value === '') ? $default : $value;
        } catch (\Throwable $e) {
            // Database not migrated yet — fall back to the default
            return $default;
        }
    }
}

if (! function_exists('media_url')) {
    /**
     * Resolve a stored image path to a URL. Handles both uploaded files
     * (storage/...) and paths into the template's public images folder.
     */
    function media_url(?string $path, string $fallback = 'images/resource/image-1.jpg'): string
    {
        if (! $path) {
            return asset($fallback);
        }

        return str_starts_with($path, 'images/') ? asset($path) : asset('storage/' . $path);
    }
}
