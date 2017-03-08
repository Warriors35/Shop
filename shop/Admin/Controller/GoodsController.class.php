<?php
namespace Admin\Controller;
use Extended\AdminController;

class GoodsController extends AdminController{
    function showlist(){
        $goods = D('goods');
        $all = $goods -> count();
        $row = 7;
        $page = new \extended\Page($all,$row);
        $sql = "SELECT * FROM sw_goods ".$page ->limit;
        $info = $goods -> query($sql);
        $pagelist = $page -> fpage();
        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> display();
    }
    function update($goods_id){
        $goods = D('goods');
        if (!empty($_POST)){
            $goods -> create();
            $a = $goods -> save();
            if ($a){
                echo "success!";
            }else{
                echo "failure";
            }
        }else{
            $info = $goods -> find($goods_id);
            $this -> assign('info',$info);
            $this -> display();
        }
    }
    function add(){
        $goods = D('goods');
        $this->display();
        if (!empty($_FILES)) {
            $config = array(
                'maxSize' => 3145728,
                'rootPath' => './public/',
                'savePath' => 'upload/',
                'exts' => array('jpg', 'gif', 'png', 'jpeg'),
            );
            $upload = new \Think\Upload($config);
            $img = $upload->uploadOne($_FILES['goods_img']);
            if (!$img) {
                echo $upload->getError();
                exit;
            } else {
                $big = $img['savepath'].$img['savename'];
                $_POST['goods_big_img'] = $big;
                // 实例化缩略图类
                $smg = new \Think\Image();
                // 调用rootPath来获取rootPath的路径,也就是获取我们上传文件的完整路径,为了方便打开它.
                $src = $upload -> rootPath.$big;
                // 用open来打开这个路径,即在PHP中打开这个图片文件
                $smg -> open($src);
                // 用thumb方法制作缩略图,后面参数为高宽
                $smg -> thumb(150,150);
                // 制作完了缩略图将这个缩略头文件重新命名
                $q = $img['savepath']."small_".$img['savename'];
                // 然后用这个新命名保存起来,并保存在指定路径路径.
                $smg -> save($upload -> rootPath.$q);
                $_POST['goods_small_img'] = $q;
            }
            $goods->create();
            $a = $goods->add();
            if ($a) {
                echo "success";
         } else {
                echo "shibai";
         }
        }
    }
    function delete($goods_id){
        $goods = D('goods');
        $d = $goods -> delete($goods_id);
        if ($d){
            $this -> redirect('goods/showlist',array(),1,'删除成功');
        }else{
            $this -> redirect('goods/showlist',array(),3,'删除失败');
        }
    }
    function query(){
        $que = D('goods');
        $sql = "select goods_category_id, avg(goods_price) from sw_goods GROUP BY goods_category_id 
                HAVING avg(goods_price) > 1000";
        $c = $que -> query($sql);
        model_debug($c);
    }

}