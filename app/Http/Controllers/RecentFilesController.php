<?php

namespace App\Http\Controllers;

use App\Sessions\RecentFiles;

use App\Documentation;

class RecentFilesController
{
    public function store() {
        $fileData = input('fileData');
        $fileDataArr = json_decode($fileData, true);
        $documentation = Documentation::make($fileDataArr['version']);
        $file = $documentation->get($fileDataArr['title']);
        return RecentFiles::file($file);
    }
}