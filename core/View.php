<?php
namespace core;
class view{
    //模板文件
    protected  $file;
     //模板变量
    protected $vars = [];
    public function make($file){

        $this->file = 'view/'.$file.'.html';
        return $this;
    }
    public  function with($name,$value){
        $this->vars[$name] = $value;
        return $this;

    }
    public function __tostring(){
        extract($this->vars);
        include $this->file;
        return '';
    }
}