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
 * @param    [type]
 * @param    [type]
 * @param    array
 * @return   [type]
 */
function  showMsg($status, $message,$data=array()) {
    $reuslt = array(
        'status' => $status,
        'message' => $message,
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
 *日期转换成时间戳
 * @author Vhen
 * @DateTime [2017-04-16T16:56:12+0800]
 * @param    [type]
 * @return   [type]
 */
function getDateTime($dateTime){
    return date('Y-m-d H:i:s',$dateTime);
}