<?php

init_session();

if (config('app.mode') === 'development') error_init();

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once base_path('routes/web.php');
require_once base_path('routes/helpers.php');

// Start the routing
SimpleRouter::start();