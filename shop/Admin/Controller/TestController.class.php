<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller{
    function a()
    {
        $a = new \Model\RoleModel();
        $a -> saveAuth();
    }
    function q()
    {
        $info = S('name');
        if ($info){
            return $info;
        }else{
            $database = "数据库内获取的信息";
            S('name',$database);
            return $database;
        }
    }
    function d(){
        S('name',null);
        echo "delete";
    }
}