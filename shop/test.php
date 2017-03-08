<?php
function test(){
    if (empty($_POST['adminname'])){
        echo "用户名不能为空";
    }
    if (empty($_POST['adminpwd'])){
        echo "密码不能为空";
    }
}