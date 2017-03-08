<?php
namespace Extended;
use Think\Controller;
class AdminController extends Controller{
    function __construct()
    {
        parent::__construct();
        $sql = "SELECT role_auth_ac FROM sw_manager a JOIN sw_role b ON a.mg_role_id=b.role_id WHERE 
                a.mg_id=".session('mg_id');
        $ac = D() -> query($sql);
        $auth_ac = $ac[0]['role_auth_ac'];
        $user_url = CONTROLLER_NAME."-".ACTION_NAME;
        $right_url = array('index-left','index-right','index-index','index-head');
        if (session('mg_id') === null){
            exit('不登录就想进,真的皮');
        }
        if (!in_array($user_url,$right_url) && session('mg_id') != 1 && strpos($auth_ac,$user_url) === false){
            exit('以为自己有权限 ? 不存在的');
        }
    }
}
