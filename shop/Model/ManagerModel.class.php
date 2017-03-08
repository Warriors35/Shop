<?php
namespace Model;
use Think\Model;
class ManagerModel extends Model{
    // 制作一个方法用以对用户名和密码进行验证,并设置两个参数,分别储存用户名与密码.
    function checkNamePwd($name,$password){
        // getByXxx(); 根据指定字段查询数据,如果能查询到数据,会将这个数据保存在一维数组中返回,如果不能则返回null.
        $info = $this -> getbymg_name($name);
        if ($info != null){
            // 如果能查询到数据,证明用户名是对的,那么继续验证密码
            if ($info['mg_pwd'] != $password){
                // 如果$info中得到的关于密码的信息,也就是从数据库中提取到的正确密码与用户输入的$password不符
                // 那么证明密码不正确,返回一个错误信息.
                return false;
            }else{
                // 如果用户密码都相同,那么需要返回$info中保存的正确账号密码,用以加入session中维持长期登录.
                return $info;
            }
        }else{
            // 如果不能查询到数据,说明用户名不正确,密码已经没必要再验证了.
            return false;
        }
    }

}