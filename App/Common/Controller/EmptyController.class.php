<?php
namespace Common\Controller;
use Common\Controller\BaseController;
/**
* 空控制器
*/
class EmptyController extends BaseController{
    public function index(){
        $this->display();
    }
}