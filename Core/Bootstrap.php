<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/19
 * Time: 21:32
 */
namespace core;
class Bootstrap {
    public static  function  run(){
        session_start();
        $_SESSION['username'] ='222';
        self::parseUrl();
    }
    //创建框架
    public static  function parseUrl(){
       if(isset($_GET['s'])){
            //分析常量生成控制器
          $info =  explode('/',$_GET['s']);
           $class = "\web\controller\\".ucfirst($info[0]);
           $action = $info[1];
        }else{
            $class = "\web\controller\index";
            $action = 'show';
       }
       echo  (new $class)->$action();
    }
}