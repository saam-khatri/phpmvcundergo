<?php

namespace Application\system;
use PDOException;
use PDO;


class Route
{

    public  static  $_route_exits = false;

    public  static  $controllerNameSpace = "\Application\app\controllers\\";

    public static  function  common_action($controllerMethod)
    {
        $controllerMethod = explode('@', $controllerMethod);
        if (count($controllerMethod)< 2) throw  new PDOException("Controller and method Not Define");

        $controller_name = $controllerMethod[0];
        $method_name = $controllerMethod[1];

        if (!class_exists(self::$controllerNameSpace .$controller_name)) throw  new PDOException
        ("Controller not created :-> ".$controller_name.' in '. self::$controllerNameSpace);

        $controllers = self::$controllerNameSpace.$controller_name;
        $controller_object =  new $controllers;

        if (!method_exists($controller_object, $method_name)) throw  new PDOException($method_name." Method not created  in ". $controller_name);
        $controller_object->$method_name();

        return true;
    }

    public  function get($uri, $controllerMethod)
    {
        $request_Uri = Server::url();
        if ($uri === $request_Uri) {
            self::$_route_exits = true;
            self::common_action($controllerMethod);

        }
    }
    public  function  post($uri, $controllerMethod)
    {
        $request_Uri = Server::url();
        if ($uri === $request_Uri)
        {
//            self::$_route_exits = true;
            self::common_action($controllerMethod);

        }
    }

    public  function routeExits()
    {
        return self::$_route_exits;
    }

}