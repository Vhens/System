<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class LoginController extends BaseController {
    private $user='';
    /*读取用户表*/
    public function _initialize(){
        $this->user=M('user');
    }
    public function login(){
        $this->display();
    }
}
