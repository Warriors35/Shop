<?php
namespace Model;
use Think\Model;
class AuthModel extends Model{
    function addAuth($post_info){
        $id = $this -> add($post_info);
        if ($post_info['auth_pid'] == 0){
            $auth_path = $id;
        }else{
            // 查询父级的字段信息,返回一维数组.
            $f_path = $this -> find($post_info['auth_pid']);
            $auth_path = $f_path['auth_path']."-".$id;
        }
        $level = count(explode('-',$auth_path)) - 1;
        $newinfo = array(
            'auth_id' => $id,
            'auth_path' => $auth_path,
            'auth_level' => $level,
        );
        $newdate = $this -> save($newinfo);
        return $newdate;
    }
}