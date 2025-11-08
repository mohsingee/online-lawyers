<?php

use App\Models\Setting;

if (!function_exists('websetting')) {
    function websetting() {
        $setting = Setting::first();
        return $setting;
    }
}