<?php

function cleanDirArray(array $array)
{
    $cleanArray = [];
    $count = 1;
    foreach($array as $item)
    {
        if($item === '.' || $item === '..') continue;
        $cleanArray[$count] = $item;
        $count ++;
    }
    
    return $cleanArray;
}