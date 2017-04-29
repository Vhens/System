$(function(){
    /**
     * 验证用户名
     * @author Vhen
     * @DateTime [2017-04-20T00:32:24+0800]
     * @param    {[type]}                   ){                     var curVal [description]
     * @return   {[type]}                       [description]
     */
    $('#loginName').on('blur',function(){
        var curVal=$(this).val();
        var objUrl=$('#form-login').attr('action');
        if(curVal==""||curVal==null){
            return dialog.tip('用户名不能为空！','#loginName','#52c3dd')
        }
    });
    /**
     * 验证密码
     * @author Vhen
     * @DateTime [2017-04-20T00:34:31+0800]
     * @param    {[type]}                   ){                     var curVal [description]
     * @return   {[type]}                       [description]
     */
    $('#loginPwd').on('blur',function(){
        var curVal=$(this).val();
        if(curVal==""||curVal==null){
            return dialog.tip('密码不能为空！','#loginPwd','#52c3dd')
        }
    });
    /**
     * 验证码
     * @author Vhen
     * @DateTime [2017-04-20T00:34:53+0800]
     * @param    {[type]}                   ){                     var curVal [description]
     * @return   {[type]}                       [description]
     */
    $('#code').on('blur',function(){
        var curVal=$(this).val();
        if(curVal==""||curVal==null){
            return dialog.tip('验证码不能为空！','#code','#52c3dd')
        }
    });
    /**
     * 提交数据
     * @author Vhen
     * @DateTime [2017-04-20T19:08:02+0800]
     * @param    {[type]}                   ){                 } [description]
     * @return   {[type]}                       [description]
     */
    $('#btn-login').on('click',function(){
        var objURL=$('#form-login').attr('action');
        var parms=$('#form-login').serialize();
       $.post(objURL,parms,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }else if(result.status == 1) {
                return dialog.success(result.message,jumpUrl);
            }else if(result.status == 2) {
                return dialog.tip(result.message,result.selector,'#52c3dd');
            }
        },'JSON');
    });
});