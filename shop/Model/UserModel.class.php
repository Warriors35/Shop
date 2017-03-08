<?php
namespace Model;
use Think\Model;
class UserModel extends Model{
    // 批处理自动验证信息
    protected $patchValidate        =   true;
    // 通过重写父类属性_validate实现表单验证
    protected $_validate        =   array(
        /* username代表需要验证的表单字段,require代表必须填写,
           最后则是需要打印显示的错误信息 */
        array('username', 'require', '用户名不能为空'),
        array('password', 'require', '密码不能为空'),
        array('password2', 'require', '请再次输入密码确认'),
        /* password2与password分别代表需要进行对比的两个字段,
           两次密码不一致代码提示的错误信息,confirm则代表了对比的规则是两个
           字段是否一致
           2代表的含义是只有字段不为空的时候才验证*/
        array('password2', 'password', '两次密码不一致', 2, 'confirm'),
        /* 之后括号内的第一个都是代表了将要验证的字段,
           第二个代表了将要验证的规则,
           第三个代表了提示的错误信息.不再说明
           email代表的规则是自动检查是否符合email格式标准 */
        array('user_email', 'email', '邮箱格式不正确'),
        /* 中间的规则是一个可以自行填写的正则表达式,你可以写上任何符合你规则的正则表达式 */
        array('user_qq', "/^[1-9]\d{4,9}$/", 'QQ格式不正确'),
        /* user_xueli这个字段是一个单选框,四种答案分别对应了2,3,4,5这4种编号,
           在register模板文件中可以通过查看它的标签name属性来得知,
           0代表只要POST表单提交的数据中存在这个字段就验证
           in代表验证值是否在2,3,4,5这个范围内*/
        array('user_xueli', '2,3,4,5', '请选择至少一个学历', 0, 'in'),
        /* 这个可能要稍微复杂一些,callback是一个高级验证规则,它可以设置一个自定义验证规则
           看下面的check_hobby方法,它里面定义了一些判断语句和返回结果(count注1)
           在验证规则里填写上我们自定义的验证方法,然后在验证条件中写入callback,那么将会
           自动调取与验证规则同名的方法,如果方法返回的值是假,那么将会直接给出错误信息,
           如果为真则通过验证 */
        array('user_hobby', 'check_hobby', '请至少选择两种爱好', 0, 'callback'),
    );  // 自动验证定义

    function check_hobby($name){
        if (count($name) < 2){
            return false;
        }else{
            return true;
        }
    }
}