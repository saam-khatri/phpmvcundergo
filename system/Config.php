<?php
namespace Application\system;


class Config
{
    public function getFile($file = null)
    {
        if (empty($file)) return false;
        $file = explode('.', $file);
        $path = array_shift($file);
        $path .= '.php';

        if (file_exists(root_path('config/' . $path)))
        {
            $getFile = require(root_path('config/' . $path));
            foreach ($file as $value) {
                if (isset($getFile[$value])) {
                    $getFile = $getFile[$value];
                }
                if (!is_array($getFile)) {
                    return $getFile;
                }
            }
            return $file;


        }

        return false;

    }

}