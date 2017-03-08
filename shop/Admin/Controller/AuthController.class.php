<?php
namespace Admin\Controller;
use Extended\AdminController;
class AuthController extends AdminController{
    function authList(){
        $info = $this -> getInfo(true);
        $this -> assign('auth',$info);
        $this -> display();
    }
    function authAdd(){
        if (!empty($_POST)){
            $a = new \Model\AuthModel();
            $newinfo = $a -> addAuth($_POST);
            if ($newinfo){
                $this->success("权限添加成功","authlist");
            }else{
                $this->error("权限添加失败","authlist");
            }
        } else {
            $info = $this->getInfo();
            // 将$info中的二维数组,转换成以pid为下标,name为值的数组,方便模板中使用
            $authinfo = array();
            // 用foreach来循环遍历分别将数组中的pid与name取出来,因为我们需要自己设定下标,所以在循环中不需要$k
            foreach ($info as $v) {
                $authinfo[$v['auth_id']] = $v['auth_name'];
            }
            $this->assign('authinfo', $authinfo);
            $this->display();
            model_debug($authinfo);
        }
    }
    function getInfo($filter=false){
        if ($filter == flase) {
            $info = D('auth') -> order('auth_path') -> select();
        }else{
            $info = D('auth') -> where('auth_level<2') -> order('auth_path') -> select();
        }
        foreach ($info as $k => $v){
            $info[$k]['auth_name'] = str_repeat('____',$v['auth_level']).$info[$k]['auth_name'];
        }
        return $info;
    }
    function test(){
        $info = $this -> getInfo();
        // 将$info中的二维数组,转换成以pid为下标,name为值的数组,方便模板中使用
        $authinfo = array();
        // 用foreach来循环遍历分别将数组中的pid与name取出来,因为我们需要自己设定下标,所以在循环中不需要$k
        foreach ($info as $v){
            $authinfo[$v['auth_id']] = $v['auth_name'];
        }
        $this -> assign('authinfo',$authinfo);
    }
}
