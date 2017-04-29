<?php
namespace Admin\Controller;
use Think\Controller;
class RegisterController extends Controller {

    /**
     * 注册功能
     * @author Vhen
     * @DateTime [2017-04-18T20:17:36+0800]
     * @return   [type]                     [description]
     */
    public function register(){
        if(IS_POST){
            $rePwd=I('post.rePwd','',getMD5);
            $code=I('post.code');
            $paras=I('get.check');
            $loginName=I('post.loginName','',regUserName);
            $data =array(
                'userName'=>I('post.userName','',regUserName),
                'userQQ'=>I('post.userQQ','',regQQ),
                'userEmail'=>I('post.userEmail','',regEmail),
                'userType'=>I('post.userType'),
                'loginName'=>I('post.loginName','',regUserName),
                'loginPwd'=>I('post.loginPwd','',getMD5),
                'userSex'=>I('post.userSex'),
                'userPhone'=>I('post.userPhone','',regPhone),
                'createTime'=>getDateTime(time()),
                'lastIP'=>get_client_ip()
            );
            if($paras==1){
                $checkName=D('User')->getUserName($loginName);
                if( $loginName== $checkName['loginname']){
                    return showMsg(2,'用户名已存在！','#loginName');
                }
            }else{
                  if(!$data['userName']||!isset($data['userName'])){
                        return showMsg(2,'用户名必须为中文、英文、数字！','#userName');
                    }
                    if(!$data['userQQ']||!isset($data['userQQ'])){
                        return showMsg(2,'QQ不能少于4位数且只能为数字！','#userQQ');
                    }
                    if(!$data['userEmail']||!isset($data['userEmail'])){
                        return showMsg(2,'Email格式不正确！如：123@qq.com','#userEmail');
                    }
                    if(!$loginName||!isset($loginName)){
                        return showMsg(2,'用户名必须为中文、英文、数字！','#loginName');
                    }
                    if(!$data['userPhone']||!isset($data['userPhone'])){
                        return showMsg(2,'手机号码不正确！','#userPhone');
                    }
                    if(check_code($code)===false){
                          return showMsg(2,'验证码不正确！','#code');
                    }
                    $userData=D('User')->addData($data);
                    if(!$userData){
                        return showMsg(0,'登录失败！');
                    }else{
                        return showMsg(1,'注册成功！');
                    }
            }

        }
        $this->display();
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
