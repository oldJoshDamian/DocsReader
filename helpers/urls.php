<?php

function asset($path) {
    $host = $_SERVER['HTTP_HOST'];
    $protocol = strtolower(explode("/", $_SERVER['SERVER_PROTOCOL'])[0]);
    return "{$protocol}://{$host}/{$path}";
}