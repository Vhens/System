<?php
namespace Common\Controller;
use Think\Controller;
/**
 * 通用基类控制器
 */

class BaseController extends Controller{
    /**
     * 初始化方法
     */
    public function _initialize(){
        if(!I('session.LoginName')){
             $this->redirect(U('Login/login'));
        }
    }
    /**
    *空操作方法
    */
    public function _empty(){
        $this->redirect('Index/index');
    }


}