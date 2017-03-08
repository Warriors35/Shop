<?php
return array(
	//'配置项'=>'配置值'
    // 设置URL地址模式
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'TMPL_ENGINE_TYPE'		=>  'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效
    //设置多语言切换
    'LANG_SWITCH_ON'        => true,   // 默认关闭语言包功能
    'LANG_AUTO_DETECT'      => true,   // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST'             => 'zh-cn,zh-tw,en-us',  // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE'          => 'l',		// 默认语言切换变量
    'DEFAULT_LANG'          =>  'zh-cn', // 默认语言
    'ERROR_PAGE'            =>  'http://localhost/web/shop/Public/Error/error.html',

);