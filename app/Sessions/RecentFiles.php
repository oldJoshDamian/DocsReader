<?php
namespace App\Sessions;

class RecentFiles
{
    public static function files() {
        try {
            if (!isset($_SESSION['recentFiles'])) {
                throw new \Exception;
            }
        } catch (\Exception $not_set) {
            $_SESSION['recentFiles'] = [];
        }
        return $_SESSION['recentFiles'];
    }

    public static function file($file) {
        $array_key = "{$file->version()}-{$file->title()}";
        try {
            $exists = array_key_exists($array_key, $_SESSION['recentFiles']);
            if (!$exists) throw new \Exception;
        } catch (\Exception $not_found) {
            $_SESSION['recentFiles'][$array_key] = $file;
        }
        return;
    }
}