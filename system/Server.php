<?php

namespace Application\system;


class Server
{
    public static function url()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = preg_replace('/[?].*/', '', $url);
        $url = trim($url, '/');
        if (empty($url)) {
            $url .= '/';
        }

        return $url;
    }

}