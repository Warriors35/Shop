<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
    function login(){
        if (!empty($_POST)){
            $verify = new \Think\Verify();
            $v = $verify -> check($_POST['captcha']);
            if (!$v){
                echo "验证码错误";
            }else{
                $user = new \Model\ManagerModel();
                $rst = $user -> checkNamePwd($_POST['admin_user'],$_POST['admin_psd']);
                if ($rst === false){
                    echo "用户名或密码错误";
                }else{
                    session('admin_user',$rst['mg_name']);
                    session('mg_id',$rst['mg_id']);
                    $this -> redirect('index/index');
                }
            }
        }
        $l = L();
        $this -> assign('lang', $l);
        // display() 可以有参数,参数既是方法名.
        // 如display(abc) 既代表访问当前模块下的当前控制下的abc方法:/Admin/Manager/abc.html
        $this->display();
    }
    function logout(){
        session(null);
        $this -> redirect('manager/login');
    }
    function verify(){
        $config = array(
            'fontSize'  => 12,              // 验证码字体大小(px)
            'useCurve'  => false,            // 是否画混淆曲线
            'useNoise'  => false,            // 是否添加杂点
            'imageH'    => 22,               // 验证码图片高度
            'imageW'    => 110,               // 验证码图片宽度
            'length'    => 4,               // 验证码位数
            'fontttf'   => '4.ttf',              // 验证码字体，不设置随机获取
            'bg'        => array(243, 251, 254),  // 背景颜色
        );
        $verify = new \Think\Verify($config);
        $verify -> entry();
    }
    function test(){
        $a = new \Model\ManagerModel();
        $rs = $a -> check($_POST['admin_user'],$_POST['admin_psd']);
        if ($rs){
            session('admin_user',$rs['mg_name']);
            session('mg_id'.$rs['mg_id']);
        }
    }
    function managerlist(){
        $info = D('manager') -> select();
        $this -> assign('info',$info);
        $roleinfo = array();
        $role = D('role') -> select();
        foreach ($role as $v){
            $roleinfo[$v['role_id']] = $v['role_name'];
        }
        $this -> assign('roleinfo',$roleinfo);
        $this -> display();
    }
    function updmanager($mg_id){
        $manager = D('manager');
        if (!empty($_POST)){
            $a = $manager -> create();
            $s = $manager -> save($a);
            if ($s){
                $this ->success("修改成功","managerlist");
            }else{
                $this ->success("修改失败","managerlist");
            }
        }else{
            $info = $manager -> find($mg_id);
            $role = D('role') -> select();
            foreach ($role as $v){
                $rolename[$v['role_id']] = $v['role_name'];
            }
            $this -> assign('role',$rolename);
            $this -> assign('info',$info);
            $this -> assign('roleid',$info['mg_role_id']);
            $this -> display();
        }
    }
}