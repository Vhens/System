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

    }
    /**
    *验证码
    */
    public function Verify(){
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 15;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }
    /**
    *空操作方法
    */
    public function _empty(){
        $this->redirect('Index/index');
    }


}