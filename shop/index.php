<?php
define('APP_DEBUG',true);
// 定义css img js访问路径常量

// 定义主机访问地址
define('SITE_URL','http://localhost/web/');
// 定义前台CSS路径
define('CSS_URL',SITE_URL.'shop/public/Home/css/');
// 定义前台IMG路径
define('IMG_URL',SITE_URL.'shop/public/Home/images/');
// 定义前台JS路径
define('JS_URL',SITE_URL.'shop/public/Home/js/');
// 定义后台CSS路径
define('ADMIN_CSS_URL',SITE_URL.'shop/public/Admin/css/');
// 定义后台IMG路径
define('ADMIN_IMG_URL',SITE_URL.'shop/public/Admin/images/');
// 定义后台JS路径
define('ADMIN_JS_URL',SITE_URL.'shop/public/Admin/js/');
// 定义smarty后台图片路径
define('SMARTY_IMG_URL',SITE_URL.'shop/public/Admin/');
// 定义用于upload路径
define('UPLOAD_IMG',SITE_URL.'shop/public/');
// 封装Model调试命令
function model_debug($mag){
    echo "<pre>";
    var_dump($mag);
    echo "</pre>";
}

include ('../ThinkPHP/ThinkPHP.php');
