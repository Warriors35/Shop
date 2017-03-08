<?php
namespace Admin\Controller;
use Extended\AdminController;
class OrderController extends AdminController{
    function showlist(){
        echo "经理级的权限可以访问此页";
    }
}