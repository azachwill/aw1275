<?php
/*
Plugin Name:        Bladerunner - Posit
Plugin URI:         http://bladerunner.elseif.se
Description:        Laravel Blade template engine for WordPress optimized for Posit.co and php 8.2.X and up.
Version:            1.8.1
Author:             Andreas Ek
Author URI:         https://www.elseif.se/
License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

if (!class_exists('Bladerunner\\Container')) {
    throw new \Exception("Composer instance missing! Have you run composer update?");
}

/**
 * Register global files and functions
 */
array_map(function ($file) {
    $file = "globals/{$file}.php";
    require_once($file);
}, ['helpers', 'setup', 'filters']);
