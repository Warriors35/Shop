<?php
namespace Model;
use Think\Model;
class RoleModel extends Model{
    function saveAuth($auth,$role_id){
        $auth_ids = implode(',',$auth);
        $info = D('auth') -> select($auth_ids);
        $auth_ac = '';
        foreach ($info as $k =>$v){
            if (!empty($v['auth_c']) && !empty($v['auth_a'])){
                $auth_ac .= $v['auth_c']."-".$v['auth_a'].",";
            }
        }
        $update = array(
            'role_id' => $role_id,
            'role_auth_ids' => $auth_ids,
            'role_auth_ac' => $auth_ac,
        );
        return $this -> save($update);

    }
}
