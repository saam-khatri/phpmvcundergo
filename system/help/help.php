<?php

/**
 * root path
 */

    if (!function_exists('root_path')) {
        function root_path($path = '')
        {
            $path = trim($path, '/');
            $path .= "/";
            $path = rtrim($path, '/');
            if (empty($path)) {
                return dirname(dirname(dirname(__FILE__)));
            }
            $dir = dirname(dirname(dirname(__FILE__)));
            return $dir . '/' . $path;
        }

    }

/**
 * view path
 */
    if (!function_exists('view')) {
        function view($path, $data = array())
        {
            $path = str_replace('.php', '', $path);
            $path .= '.php';
            extract($data);
            if (!file_exists(root_path('view/' . $path))) throw new PDOException('Page not found ');
            require_once root_path('view/' . $path);
            return true;


        }
    }


if (!function_exists('url')) {
    function url($path = '')
    {
//        $getHost = \Application\system\Config::get('env.host');
        $getHost = (new \Application\system\Config())->getFile('env.host');
        $url = trim($path, '/');
        $getHost .= '/' . $url;
        return $getHost;


    }
}


if (!function_exists('admin_url')) {
    /**
     * @param string $path
     * @return array|bool|mixed|string|null
     */
    function admin_url($path = '')
    {
        $getHost = (new \Application\system\Config())->getFile('env.host');
        $url = trim($path, '/');
        $getHost .= '/admin/' . $url;
        return $getHost;


    }
}
