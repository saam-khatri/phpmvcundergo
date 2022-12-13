<?php

namespace Application\app\controllers\backend;

use Application\app\controllers\MainController;

class BackendController extends MainController
{
    protected $backend_path = "backend/master.php";
    public function __construct()
    {
        $this->Data('title', $this->makeTitle('home'));

    }

}