<?php
require __DIR__ . '/vendor/autoload.php';

use App\Http\Controllers\DocumentationController;

use App\Documentation;

$documentation = Documentation::make('7x');

print_r($documentation->get('artisan')->data());
//DocumentationController::index();