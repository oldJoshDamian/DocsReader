<?php

function config($configuration)
{
    $string = explode('.', $configuration);
    $filename = $string[0];
    $config = readConfigFile($filename);
    $data = (is_array($config) && array_key_exists($string[1], $config)) ? $config[$string[1]] : 'configuration value not found!';
    return $data;
}

function readConfigFile($filename)
{
    $helperDir = dirname(__FILE__);
    $baseDir = dirname($helperDir);
    $configDir = $baseDir . '/config/';
    $filepath = $configDir . $filename . '.php';
    $file = (file_exists($filepath)) ? include($filepath) : "{$filepath} not found!";
    return $file;
}
