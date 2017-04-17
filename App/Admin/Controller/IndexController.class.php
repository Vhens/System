<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class IndexController extends BaseController {
    private $user='';
    /*读取用户表*/
    public function _initialize(){
        $this->user=M('user');
    }
    public function index(){
        $this->display();
    }
    public function add(){
        $this->display();
    }
}
