<?php
namespace  web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder; //验证
class index{

        protected  $view;
    public function __construct()
    {
        $this->view = new View();
    }

    public  function show(){

     return  $this->view->make('index')->with('version','1.0,php 7.02');

    }
    public function login(){
        dd($_SESSION);
        return  $this->view->make('login');
    }
    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->build();
        $builder->output();
    }

}