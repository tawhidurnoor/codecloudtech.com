<?php

use App\Models\Meta;
use App\Models\Script;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\URL;

if (!function_exists('geteURL')) {
    function getURL()
    {
        return  URL::current();
    }
}

if (!function_exists('getBaseURL')) {
    function getBaseURL()
    {
        $root = '//' . $_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        return $root;
    }
}

if (!function_exists('getFileBaseURL')) {
    function getFileBaseURL()
    {
        if (env('FILESYSTEM_DRIVER') == 's3') {
            return env('AWS_URL') . '/';
        } else {
            return getBaseURL() . 'public/';
        }
    }
}

if (!function_exists('getMetaMetaTitle')) {
    function getMetaMetaTitle()
    {
        $meta = Meta::findOrFail(1);
        return $meta->meta_title;
    }
}


if (!function_exists('getMetaDescription')) {
    function getMetaDescription()
    {
        $meta = Meta::findOrFail(1);
        return $meta->meta_description;
    }
}

if (!function_exists('getMetaKeywords')) {
    function getMetaKeywords()
    {
        $meta = Meta::findOrFail(1);
        return $meta->keywords;
    }
}

if (!function_exists('getMetaImage')) {
    function getMetaImage()
    {
        $meta = Meta::findOrFail(1);
        return $meta->meta_image;
    }
}

if (!function_exists('getScripts')) {
    function getScripts($script_name)
    {
        $script = Script::findOrFail(1);
        if ($script_name == 'head') {
            return $script->head_scripts;
        } else {
            return $script->body_scripts;
        }
    }
}

if (!function_exists('getSettings')) {
    function getSettings($setting_name)
    {
        $setting = Setting::findOrFail(1);
        if ($setting_name == 'phone') {
            return $setting->phone;
        } elseif ($setting_name == 'email') {
            return $setting->email;
        } elseif ($setting_name == 'address') {
            return $setting->address;
        } elseif ($setting_name == 'logo_light') {
            return $setting->logo_light;
        } elseif ($setting_name == 'logo_dark') {
            return $setting->logo_dark;
        } elseif ($setting_name == 'website_name') {
            return $setting->website_name;
        } elseif ($setting_name == 'motto') {
            return $setting->motto;
        } elseif ($setting_name == 'favicon') {
            return $setting->favicon;
        }
    }
}


if (!function_exists('getServices')) {
    function getServices()
    {
        $services = Service::all();
        return $services;
    }
}
