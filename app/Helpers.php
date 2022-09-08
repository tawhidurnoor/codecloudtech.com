<?php

use App\Models\Meta;
use App\Models\Script;

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
