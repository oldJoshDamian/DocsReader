<?php

namespace Database;

trait Resource
{
    public static function all() {
        return cleanDirArray(scandir(self::data_path(), 1));
    }

    public static function find($resource_id) {
        try {
            $exists = in_array($resource_id, scandir(self::data_path()));
            if (!$exists) throw new \Exception;
            $resource = new \stdClass;
            $resource->id = $resource_id;
            $resource->path = self::data_path() . "/{$resource->id}";
        }
        catch (\Exception $error) {
            exit('resource not found');
        }

        return $resource;
    }
}