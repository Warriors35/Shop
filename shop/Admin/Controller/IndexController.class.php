<?php
namespace Admin\Controller;
use Extended\AdminController;
class IndexController extends AdminController{
    function index(){
        $this -> display();
    }
    function head(){
        $this -> display();
    }
    function left(){
        // 封装sql语句,将session中之前上传过的mg_id值取出来
        $sql1 = "SELECT * FROM sw_manager WHERE mg_id=".session('mg_id');
        // 执行sql语句,将当前登录用户的信息从数据库中提取出来
        $mg_ig = D() -> query($sql1);
        // 然后将其中的权限id单独取出来
        $role_id = $mg_ig[0]['mg_role_id'];
        // 封装一个新的sql语句,将上面获取的权限id作为查询条件
        $sql2 = "SELECT * from sw_role WHERE role_id=".$role_id;
        // 从sw_role权限表中查看上面提取出的权限id所对应的权限号码
        $auth_id = D() -> query($sql2);
        // 将得到的这些权限号码继续作为查询条件封装进去.
        $role_ids = $auth_id[0]['role_auth_ids'];
        // 根据上面的权限号码,在sw_auth权限参数表中查看这些号码相对应哪些权限
        // 因为权限分为顶级和次顶级,网页上也以下拉菜单的形式分别,为了区分,分别将两种级别提取出来
        $sql3 = "SELECT * from sw_auth WHERE auth_level=0 ";
        // 将上面的条件去掉,收集所有的顶级权限菜单给admin管理员账号
        if (session('mg_id') != 1){
            // 管理员ID是1,如果不是管理员账号,再根据账号权限情况来给予
            $sql3 .= "AND auth_id IN ($role_ids)";
        }
        // 并将根据不同用户传递进的顶级菜单收集给auth_top顶级变量中
        $auth_top = D() -> query($sql3);
        // 这里同样去掉条件,收集所有的次级权限菜单给admin管理员账号
        $sql4 = "SELECT * from sw_auth WHERE auth_level=1 ";
        // 同样加上判断
        if (session('mg_id') != 1){
            // 同上,不是管理员的ID就加上条件.
            $sql4 .= "AND auth_id IN ($role_ids)";
        }
        // 将收集的次级菜单传给次级变量
        $auth_low= D() -> query($sql4);
        // 然后分别将两个变量传入smarty模板中,然后到模板文件中去遍历输出这些菜单.
        $this -> assign('auth_top',$auth_top);
        $this -> assign('auth_low',$auth_low);
        $this -> display();
    }
    function right(){
        $this -> display();
    }
    function a(){
        model_debug(CONTROLLER_NAME);
    }

}