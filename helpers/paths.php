<?php

function base_path($path) {
    $pathsDir = dirname(__FILE__);
    $baseDir = dirname($pathsDir);
    return "{$baseDir}/{$path}";
}

function database_path($path) {
    return config('database.path') . "/{$path}";
}

function app_path($path) {
    return base_path("app/{$path}");
}

function public_path($path) {
    return base_path("public/{$path}");
}