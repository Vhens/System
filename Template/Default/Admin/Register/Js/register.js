$(function(){
    /**
     * 用户昵称验证
     * @author Vhen
     * @DateTime [2017-04-16T19:54:55+0800]
     * @param    {[type]}
     * @return   {[type]}
     */
    $('#userName').on('blur',function(){
        var userVal=$(this).val();
        var reg=/^[\u4E00-\u9FA5A-Za-z0-9]+$/;
        if(userVal==""||userVal==null){
            dialog.tip('用户昵称不能为空！','#userName','#52c3dd');
        }else if(!reg.test(userVal)){
             dialog.tip('用户昵称必须为中文、英文、数字！','#userName','#52c3dd');
        }
    });
    /**
     * QQ验证
     * @author Vhen
     * @DateTime [2017-04-16T21:12:05+0800]
     * @param    {[type]}
     * @return   {[type]}
     */
    $('#userQQ').on('blur',function(){
        var qqVal=$(this).val();
        var reg=/^[1-9][0-9]{4,}$/;
        if(qqVal==""||qqVal==null){
            dialog.tip('QQ不能为空！','#userQQ','#52c3dd');
        }else if(!reg.test(qqVal)){
             dialog.tip('QQ不能少于4位数且只能为数字！','#userQQ','#52c3dd');
        }
    });
    /**
     * 邮箱验证
     * @author Vhen
     * @DateTime [2017-04-16T21:17:31+0800]
     * @param    {[type]}
     * @return   {[type]}
     */
    $('#userEmail').on('blur',function(){
        var emailVal=$(this).val();
        var reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        if(emailVal==""||emailVal==null){
             dialog.tip('Email不能为空！','#userEmail','#52c3dd');
        }else if(!reg.test(emailVal)){
             dialog.tip('Email格式不正确！如：123@qq.com','#userEmail','#52c3dd');
        }
    })
    /**
     * 用户名验证
     * @author Vhen
     * @DateTime [2017-04-16T19:52:29+0800]
     * @param    {[type]}
     * @return   {[type]}
     */
   $('#loginName').on('blur',function(){
        var userVal=$(this).val();
        var reg=/^[\u4E00-\u9FA5A-Za-z0-9]+$/;
        var objURL=$('#form-register').attr("action")+'?check=1';
        console.log(objURL);
        if(userVal==""||userVal==null){
            dialog.tip('用户名不能为空！','#loginName','#52c3dd')
        }else if(!reg.test(userVal)){
             dialog.tip('用户名必须为中文、英文、数字！','#loginName','#52c3dd');
        }
        $.post(objURL,{loginName:userVal},function(result){
            console.log(result);
            if(result.status== 2) {
                return dialog.tip(result.message,result.selector,'#52c3dd');
            }
        },"JSON");
    });
   /**
    * 密码验证
    * @author Vhen
    * @DateTime [2017-04-16T21:22:50+0800]
    * @param    {[type]}
    * @return   {[type]}
    */
   $('#loginPwd').on('blur',function(){
        var pwdVal=$(this).val();
        var reg=/^[a-zA-Z]\w{5,17}$/;
        if(pwdVal==""||pwdVal==null){
            dialog.tip('密码不能为空！','#loginPwd','#52c3dd');
        }else if(!reg.test(pwdVal)){
             dialog.tip('以字母开头，长度在6~18之间，只能包含字母、数字和下划线！','#loginPwd','#52c3dd');
        }
   });
   /**
    * 确认密码验证
    * @author Vhen
    * @DateTime [2017-04-16T21:27:03+0800]
    * @param    {[type]}
    * @return   {[type]}
    */
   $('#rePwd').on('blur',function(){
        var rePwdVal=$(this).val();
        var pwdVal=$('#loginPwd').val();
        if(rePwdVal==""||rePwdVal==null){
            dialog.tip('确认密码不能为空！','#rePwd','#52c3dd')
        }else if(rePwdVal!=pwdVal){
             dialog.tip('密码不一致！','#rePwd','#52c3dd');
        }
   });
   /**
    * 手机号码验证
    * @author Vhen
    * @DateTime [2017-04-16T21:34:45+0800]
    * @param    {[type]}
    * @return   {[type]}
    */
   $('#userPhone').on('blur',function(){
        var telVal=$(this).val();
        var reg=/^1[34578]\d{9}$/;
        if(telVal==""||telVal==null){
            dialog.tip('手机号码不能为空！','#userPhone','#52c3dd');
        }else if(!reg.test(telVal)){
             dialog.tip('手机号码不正确！','#userPhone','#52c3dd');
        }
   });
   $('#code').on('blur',function(){
        var codeVal=$(this).val();
        if(codeVal==""||codeVal==null){
            dialog.tip('验证码不能为空！','#code','#52c3dd')
        }
   })
   /**
    * 注册
    * @author Vhen
    * @DateTime [2017-04-16T19:47:34+0800]
    * @param    {[type]}
    * @return   {[type]}
    */
    $('#register').on('click',function(){
        var objURL=$('#form-register').attr("action")+'?check=2',
        parms=$('#form-register').serialize();
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