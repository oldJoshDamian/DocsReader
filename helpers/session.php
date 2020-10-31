<?php

use App\Sessions\RecentFiles;

function init_session() {
    return session_start();
}

function recentFiles() {
    return RecentFiles::files();
}