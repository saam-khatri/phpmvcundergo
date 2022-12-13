<?php
namespace Application\system;
use PDOException;
class App
{
    public function run()
    {
        $this->getEnv();


        $route = new Route();
        require_once root_path('route/web.php');

        if ($route->routeExits() != true)
        {
            return view('frontend/no404.php');

        }






        unset($route);
    }

    public function getEnv()
    {
        $config = new Config();

        $env = $config->getFile("env.name");

        switch ($env)
        {
            case 'production':
                break;
            case "development":
            default:
                if (!ini_get('display_errors')) {
                    ini_set('display_errors', 0);
                }
                error_reporting(E_ALL);
                error_reporting('-1');

                break;
                break;

        }

    }

}