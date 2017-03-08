<?php
namespace Admin\Controller;
use Extended\AdminController;
class RoleController extends AdminController{
    function rolelist(){
        $info = D('role') -> select();
        $this->assign('info',$info);
        $this -> display();
    }
    function permission($role_id){
        if (!empty($_POST)){
            $role = new \Model\RoleModel();
            $save = $role -> saveAuth($_POST['authname'],$role_id);
            if ($save){
                echo "没毛病";
            }else{
                echo "有毛病";
            }
        }else{
            $name = D('role') -> getByRole_id($role_id);
            $role_name = $name['role_name'];
            $this -> assign('role_name',$role_name);
            $level0 = D('auth') -> where('auth_level = 0') -> select();
            $level1 = D('auth') -> where('auth_level = 1') -> select();
            $level2 = D('auth') -> where('auth_level = 2') -> select();
            $level3 = D('auth') -> where('auth_level = 3') -> select();
            $this -> assign('level0',$level0);
            $this -> assign('level1',$level1);
            $this -> assign('level2',$level2);
            $this -> assign('level3',$level3);
            $auth_ids = $name['role_auth_ids'];
            $auth_ids_arr = explode(',',$auth_ids);
            $this -> assign('auth_ids',$auth_ids_arr);
            $this -> display();
        }
    }
}