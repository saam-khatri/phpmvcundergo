<?php
namespace Application\app\controllers\frontend;


use Application\app\controllers\MainController;

class FrontendController extends MainController
{
    protected $frontend_path = "frontend/master.php";
    public function __construct()
    {
        $this->Data('title', $this->makeTitle('home'));
//        $this->makeTitle()
    }

}