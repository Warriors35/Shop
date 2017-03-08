<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 18:00:09
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/Auth/authlist.html" */ ?>
<?php /*%%SmartyHeaderCode:199322741958bcff0d98ed78-36431955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc939f921264f12d261a99ebc4b3f311c95b6b2b' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/Auth/authlist.html',
      1 => 1488794403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199322741958bcff0d98ed78-36431955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bcff0da0100',
  'variables' => 
  array (
    'auth' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bcff0da0100')) {function content_58bcff0da0100($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>会员列表</title>

    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
      .tr_color{background-color: #9F88FF} 
</style>

<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/authadd">【添加权限】</a>
                </span>
            </span>
</div>
<div></div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>权限名称</td>
            <td>控制器</td>
            <td>操作方法</td>
            <td>全路径</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
        <tr id="product1">
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</a></td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a></td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</a></td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</a></td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</a></td>
        </tr>
        <?php } ?>
          <tr>
            <td colspan="20" style="text-align: center;">
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html><?php }} ?>