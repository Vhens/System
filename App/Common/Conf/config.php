<?php
return array(
	//'配置项'=>'配置值'
    'LOAD_EXT_CONFIG'=>'db',
    'URL_CASE_INSENSITIVE'   => false, // url区分大小写
    'MODULE_ALLOW_LIST'     =>  array('Home','Admin'),  //允许访问列表
    'MD5_PREFIX'=>'vhen@cdf222',//加密前缀
    'URL_ROUTER_ON' => true, //URL路由
    'URL_MODEL'=>2,
    'URL_HTML_SUFFIX' => '',
    // 'LAYOUT_ON'=>true,
    // 'LAYOUT_NAME'=>'layout',
    'TMPL_PARSE_STRING' =>array(//模版参数配置项目
        '__JS__'=>__ROOT__."/".'Public/Js',
        '__CSS__'=>__ROOT__."/".'Public/Css',
        '__IMG__'=>__ROOT__."/".'Public/Img',
        '__FONT__'=>__ROOT__."/".'Public/font-awesome',
        '__URL__'=>__ROOT__."/".'Template/Default/Admin',
    ),
);