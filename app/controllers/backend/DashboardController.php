<?php
namespace Application\app\controllers\backend;
class DashboardController extends BackendController
{

    public function index()
    {
        $this->Data('title',  $this->makeTitle("dashboard"));
        $this->Data('pages', 'pages/dashboard.php');
        return view($this->backend_path , $this->data);

    }

    public  function login()
    {
        $this->Data('title',  $this->makeTitle("login"));
        $this->Data('pages', 'pages/login.php');
        return view($this->backend_path , $this->data);
    }

    public  function signup()
    {
        $this->Data('title',  $this->makeTitle("register"));
        $this->Data('pages', 'pages/signup.php');
        return view($this->backend_path , $this->data);
    }

}