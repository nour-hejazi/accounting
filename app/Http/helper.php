<?php

if ( ! function_exists('adminUrl')) {
    function adminUrl($url = null)
    {
        return url('admin/' . $url);
    }
}

if ( ! function_exists('setting')) {
    function setting()
    {
        return \App\Setting::orderBy('id', 'desc')->first();
    }
}