<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 19:51:16
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/manager/managerlist.html" */ ?>
<?php /*%%SmartyHeaderCode:45940039658bd4c47db2c79-44354264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518aa899b1402d87526cf75088238de46c4ebdc2' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/manager/managerlist.html',
      1 => 1488801075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45940039658bd4c47db2c79-44354264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd4c47e2dc3',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd4c47e2dc3')) {function content_58bd4c47e2dc3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改角色</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》修改角色信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_id'];?>
" />
            <table border="1" width="100%" class="table_a">
                <tr>123
                    <td>账号ID</td>
                    <td>123</td>
                    </td>
                </tr>
                <tr>123
                    <td>角色名称</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>