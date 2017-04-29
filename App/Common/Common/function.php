<?php
//传递数据以易于阅读的样式格式化后输出
function p($data){
    // 定义样式
    $str='<pre style="display: block;padding: 9.5px;margin: 44px 0 0 0;font-size: 13px;line-height: 1.42857;color: #333;word-break: break-all;word-wrap: break-word;background-color: #f5f5f5;border: 1px solid #CCC;border-radius: 4px;box-shadow:0 0  2px #000;">';
    // 如果是boolean或者null直接显示文字；否则print
    if (is_bool($data)) {
        $show_data=$data ? 'true' : 'false';
    }elseif (is_null($data)) {
        $show_data='null';
    }else{
        $show_data=print_r($data,true);
    }
    $str.=$show_data;
    $str.='</pre>';
    echo $str;
}
/**
 * 显示消息
 * @author Vhen
 * @DateTime [2017-04-16T16:42:24+0800]
 * @param    [status]状态
 * @param    [message]消息
 * @param    [selector]选择器
 * @param    array
 * @return   [type]
 */
function showMsg($status, $message,$selector=null,$data=array()) {
    $reuslt = array(
        'status' => $status,
        'message' => $message,
        'selector'=>$selector,
        'data' => $data,
    );

    exit(json_encode($reuslt));
}
/**
 * 加密强度
 * @author Vhen
 * @DateTime [2017-04-16T16:46:49+0800]
 * @param    [type]
 * @return   [type]
 */
function getMd5($password){
    return md5(md5($password.C('MD5_PREFIX')));
}
/**
 * 验证用户
 * @author Vhen
 * @DateTime [2017-04-19T00:45:58+0800]
 * @param    [type]                     $data [description]
 * @return   [type]                           [description]
 */
function regUserName($data){
    $reg="/^[\u4E00-\u9FA5A-Za-z0-9]+$/";
    preg_match($reg,$data,$res);
    return $data;
}
/**
 * [regQQ 验证QQ]
 * @author Vhen
 * @DateTime [2017-04-19T00:56:21+0800]
 * @param    [type]                     $data [description]
 * @return   [type]                           [description]
 */
function regQQ($data){
    $reg="/^[1-9][0-9]{4,}$/";
    preg_match($reg,$data,$res);
    return $data;
}
/**
 * [regEmail 验证邮箱]
 * @author Vhen
 * @DateTime [2017-04-19T00:57:37+0800]
 * @param    [type]                     $data [description]
 * @return   [type]                           [description]
 */
function regEmail($data){
    $reg="/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";
    preg_match($reg,$data,$res);
    return $data;
}
/**
 * [regPwd 验证密码]
 * @author Vhen
 * @DateTime [2017-04-19T00:58:55+0800]
 * @param    [type]                     $data [description]
 * @return   [type]                           [description]
 */
function regPwd($data){
    $reg="/^[a-zA-Z]\w{5,17}$/";
    preg_match($reg,$data,$res);
    return $data;
}
/**
 * [regPhone 验证手机号码]
 * @author Vhen
 * @DateTime [2017-04-19T01:00:26+0800]
 * @param    [type]                     $data [description]
 * @return   [type]                           [description]
 */
function regPhone($data){
    $reg="/^1[34578]\d{9}$/";
    preg_match($reg,$data,$res);
    return $data;
}
/**
 * [check_code 检测验证码]
 * @author Vhen
 * @DateTime [2017-04-19T22:40:24+0800]
 * @param    [type]                     $code [description]
 * @param    string                     $id   [description]
 * @return   [type]                           [description]
 */
function check_code($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
 }
/**
 *日期转换成时间戳
 * @author Vhen
 * @DateTime [2017-04-16T16:56:12+0800]
 * @param    [type]
 * @return   [type]
 */
function getDateTime($dateTime){
    return date('Y-m-d H:i:s',$dateTime);
}