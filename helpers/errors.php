<?php

function error_init()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL | E_STRICT);
    return;
}