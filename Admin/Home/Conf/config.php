<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'           =>  'mysql',
    'DB_HOST'           =>  'localhost',
    'DB_NAME'           =>  'qzvs',//需要新建一个数据库！名字叫
    'DB_USER'           =>  'root',     //数据库用户名
    'DB_PWD'            =>  'root',//数据库登录密码
    'DB_PORT'           =>  '3306',
    'URL_MODEL'  =>1,

    'TMPL_PARSE_STRING' =>array(
        '__IMGURL__'=>__ROOT__.'/Public/asset/img',
        '__JSURL__'=>__ROOT__.'/Public/asset/js',
        '__CSSURL__' => __ROOT__.'/Public/asset/css',
        '__STATIC__' => __ROOT__ . '/Public/asset',
       // '__URL__'=>__ROOT__.'/Public',
            'LOCALHOST'=>'http://123.57.30.41/qzvs/'
        )
);