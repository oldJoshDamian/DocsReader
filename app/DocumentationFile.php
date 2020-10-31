<?php

namespace App;

class DocumentationFile
{
    private $title;
    private $filename;
    private $dataPath;
    private $version;

    public function __construct(
        string $filename,
        string $title,
        string $dataPath,
        string $version
    ) {
        $this->set($filename, $title, $dataPath, $version);
    }

    public function data() {
        $ParseDown = new \Parsedown();
        $contents = file_get_contents($this->dataPath);
        echo $ParseDown->text($contents);
        return;
    }

    protected function set($filename, $title, $dataPath, $version) {
        $this->filename = $filename;
        $this->title = $title;
        $this->dataPath = $dataPath;
        $this->version = $version;
    }

    public function filename() {
        return $this->filename;
    }

    public function title() {
        return $this->title;
    }

    public function version() {
        return $this->version;
    }
}