<?php
namespace Home\Controller;
use Think\Controller;
// 创建用户控制器,以实现注册和登录的展示
class UserController extends Controller
{
    // 创建登录方法
    function login()
    {
        $this->display();
    }

    // 创建注册方法
    function register()
    {
        $a = new \Model\UserModel();
        if (!empty($_POST)) {
            $z = $a -> create();
            if (!$z){
                $b = $a ->getError();
                foreach ($b as $v)
                echo $v;
            }
            // hobby这个爱好选项,因为是多项,收集起来的数据将会以数组的形式来储存,
            // 这也是为什么之前自建的hobby规则需要用count来计算数组内的元素,但在实际的
            // 用add方法注入数据表之前,数据表中爱好这个字段不能接受数组,只能接受数字,
            // 所以需要用implode来将数组转换为数组,而括号内第一个参数则是以逗号来区分的意思.
            // 同时,这也是一种通过AR方式来实现的,因为它直接调用了user_hobby这个方法,实际上也就是注入了属性.
            $a -> user_hobby = implode(',', $_POST['user_hobby']);
            $rst = $a -> add();
            if ($rst) {
                echo $this -> success('注册成功,下面将跳转到登录界面',U('User/login'));
            } else {
                echo $this -> error('注册失败,请检查您的网络情况或稍后再试',U('User/register'));
            }
        } else {
            $this->display();
        }
    }
    function test(){
        $a = count(false);
        model_debug($a);
    }
}