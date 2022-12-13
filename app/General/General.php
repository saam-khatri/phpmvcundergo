<?php

namespace Application\app\General;


use Application\system\Config;

trait General
{
    public  $data = [];

    public function Data($key, $value = null)
    {
        if(empty($key)) throw  new \PDOException("Data key not set");

        return $this->data[$key] = $value;

    }

    public function makeTitle($backend, $separator = " : : ", $frontend = null)
    {
        if (!isset($frontend)) {
            $frontend = (new Config())->getFile("title.name");

        }

        return $frontend . $separator . $backend;
    }


}