<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'     =>  array(  //定义常用路径
		'__HOME_Public__'	=>  __ROOT__.'/Tpl/Public',
        '__HOME_CSS__'      =>  __ROOT__.'/Public/css',
        '__HOME_JS__'       =>  __ROOT__.'/Public/js',
        '__HOME_IMAGE__'    =>  __ROOT__.'/Public/images',
        '__HOME_Date__'     =>  __ROOT__.'/Public/MyDataPicker',
        '__ADMIN_CSS__'     =>  __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/css',
        '__ADMIN_JS__'      =>  __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/js',
        '__ADMIN_IMAGE__'   =>  __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/image'

    ),
     /* 数据库设置 */
    'DB_TYPE'                => 'mysql', // 数据库类型
    'DB_HOST'                => 'localhost', // 服务器地址
    'DB_NAME'                => 'SiteManage', // 数据库名
    'DB_USER'                => 'root', // 用户名
    'DB_PWD'                 => 'zhaohao', // 密码
    'DB_PORT'                => '3306', // 端口
    'DB_PREFIX'              => '', // 数据库表前缀
    'DB_PARAMS'              => array(), // 数据库连接参数
    'DB_DEBUG'               => true, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'        => true, // 启用字段缓存
    'DB_CHARSET'             => 'utf8', // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'         => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'         => false, // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'          => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'            => '', // 指定从服务器序号
    /*session start*/
    'SESSION_AUTO_START' =>true,
	/*布局设定 */
	 'LAYOUT_ON'              => true, // 是否启用布局
    'LAYOUT_NAME'            => 'Public/public', // 当前布局名称 默认为layout

);