<?php
// 行为扩展定义
return array(
    'app_begin'     =>  array(
        'Behavior\ReadHtmlCache', // 读取静态缓存
        'Behavior\CheckLang', // 启动多语言支持

    ),
);