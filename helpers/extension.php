<?php

function extract_name(string $filename) {
    $string = explode(".", $filename);
    return $string[0];
}

function append_extn(string $filename, string $ext) {
    return "{$filename}.{$ext}";
}