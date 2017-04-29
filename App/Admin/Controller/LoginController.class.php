<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    /**
     * 登录功能
     * @author Vhen
     * @DateTime [2017-04-20T19:14:05+0800]
     * @return   [type]                     [description]
     */
    public function login(){
        if(IS_POST){
            $loginName=I('post.loginName','',regUserName);
            $loginPwd=I('post.loginPwd','',getMD5);
            $code=I('post.code');
            $userData=D('User')->getUserName($loginName);
            $isLock=$userData['islock'];
            if($isLock==1){
                return showMsg(0,'该用户已被冻结,请联系管理员！');
            }
            if($loginName!=$userData['loginname']){
                return showMsg(2,'该用户不存在！','#loginName');
            }
            if($loginPwd!=$userData['loginpwd']){
                return showMsg(2,'密码不正确！','#loginPwd');
            }
            if(check_code($code)===false){
                  return showMsg(2,'验证码不正确！','#code');
            }
            $data=array(
                'lastTime'=>getDateTime(time()),
            );
            $uid=$userData['uid'];
            D('User')->UpdateByUserId($uid,$data);
            D('User')->IncByUserId($uid,'loginCount');
            session('LoginName',$userData['loginname']);
            return showMsg(1,'登录成功');
        }
        $this->display();
    }
    /**
     * [layout 退出登录]
     * @author Vhen
     * @DateTime [2017-04-22T01:59:43+0800]
     * @return   [type]                     [description]
     */
    public function layout(){
        session('loginName',null);
        $this->redirect(U('Login/login'));
    }
    /**
    *验证码
    */
    public function Verify(){
        $Verify =new \Think\Verify();
        $Verify->fontSize = 15;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }
}
