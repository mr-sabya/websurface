<?php

if (!function_exists('module_path')) {
    function module_path($module, $path = '')
    {
        return base_path("app/Modules/{$module}/{$path}");
    }
}
