<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('asset2')) {
    function asset2($path): string
    {
        if (!file_exists(public_path('version.txt'))) {
            file_put_contents(public_path('version.txt'), time());
        }

        $version = Cache::remember('version', 86400, function () {
            return file_get_contents(public_path('version.txt'));
        });

        return asset($path) . '?v' . $version;
    }
}
