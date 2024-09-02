<?php

use App\Models\RegisteredUser;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

if (!function_exists('setting')) {
    function setting()
    {
        return Cache::rememberForever('setting', function () {
            return Setting::latest()->first();
        });
    }
}

