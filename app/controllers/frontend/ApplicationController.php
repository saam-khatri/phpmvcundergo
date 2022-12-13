<?php

namespace Application\app\controllers\frontend;

class ApplicationController extends FrontendController
{
//    protected  $frontend_path = "frontend/";

    public function index()
    {
          $this->Data('title',  $this->makeTitle("home"));
          $this->Data('pages', 'pages/home.view.php');
          return view($this->frontend_path, $this->data);

    }
    public function about()
    {
        $this->Data('title',  $this->makeTitle("about"));
        $this->Data('pages', 'pages/about.view.php');
        return view($this->frontend_path, $this->data);

    }



}