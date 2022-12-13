<?php

require_once "vendor/autoload.php";
use Application\system\App;

    try {

        $appRun = new App();
        $appRun->run();

    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
