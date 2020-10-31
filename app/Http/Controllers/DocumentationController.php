<?php
namespace App\Http\Controllers;

use App\Documentation;

use Jenssegers\Blade\Blade;


class DocumentationController
{
    public function index() {
        $documentations = Documentation::all();
        $blade = new Blade(base_path('resources/views/'), base_path('resources/views/cache/'));
        echo $blade->render('homepage', compact('documentations'));
        return;
    }

    public function show($version) {
        $documentation = Documentation::make(append_extn($version, 'x'));
        $files = $documentation->files();
        $doc_version = $documentation->version();
        $blade = new Blade(base_path('resources/views/'), base_path('resources/views/cache/'));
        echo $blade->render('documentation.show', compact('files', 'doc_version'));
        return;
    }

    public function file($version, $title) {
        $documentation = Documentation::make(append_extn($version, 'x'));
        $blade = new Blade(base_path('resources/views/'), base_path('resources/views/cache/'));
        $file = $documentation->get($title);
        if ($file) {
            $all_docs = Documentation::all();
        }
        echo $blade->render('documentation.file', compact('file', 'all_docs'));
        return;
    }
}