<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class RegisterController extends BaseController {
    public function register(){
        if(IS_POST){
            $data =I('post.');
            return showMsg(1,'dsfs5454');
        }
        $this->display();
    }
}
