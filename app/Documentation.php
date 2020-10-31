<?php
namespace App;

use Database\Resource;

use App\DocumentationFile as File;

class Documentation
{
    use Resource;
    protected static $dataPath = 'docs';
    protected $version;

    public static function make($version) {
        $resource = self::find($version);
        $documentation = new Documentation();
        $documentation->version = $resource->id;
        return $documentation;
    }

    public function files() {
        try {
            if ($this->version == null)  throw new \Exception;
            $files = scandir(self::data_path() . "/{$this->version}/");
        } catch (\Exception $error) {
            exit('version not found');
        }
        return cleanDirArray($files);
    }

    public function version() {
        return $this->version;
    }

    public function get($title) {
        $files = $this->files();
        $filename = append_extn($title, 'md');
        try {
            $exists = in_array($filename, $files);
            if (!$exists) throw new \Exception;
            $resource = new \stdClass;
        } catch (\Exception $error) {
            exit('resource not found');
        }

        $dataPath = self::data_path() . "/" . $this->version . "/{$filename}";
        $file = new File($filename, $title, $dataPath, $this->version);
        return $file;
    }

    protected static function data_path() {
        return database_path(self::$dataPath);
    }
}