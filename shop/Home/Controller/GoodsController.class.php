<?php
namespace Home\Controller;
use Think\Controller;
// 创建商品控制器
class GoodsController extends Controller{
    // 创建商品列表
    function showlist(){
        echo R('User/ads');
        $this->display();
    }
    // 创建商品细节
    function detail(){
        $this->display();
    }
}