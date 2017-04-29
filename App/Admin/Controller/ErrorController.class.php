<?php
namespace Common\Controller;
use Think\Controller;
/**
* 空控制器
*/
class ErrorController extends Controller{
    public function error(){
        $this->display();
    }
}