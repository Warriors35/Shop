<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 19:09:17
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/Role/rolelist.html" */ ?>
<?php /*%%SmartyHeaderCode:154305228458bd435d6a0e12-71775307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd979e972d05a46d563c19fdf5b74a54cd9998b3e' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/Role/rolelist.html',
      1 => 1488548341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154305228458bd435d6a0e12-71775307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd435d794e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd435d794e8')) {function content_58bd435d794e8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加角色】</a>
                </span>
            </span>
</div>
<div></div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>角色名称</td>
            <td align="center">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
        <tr id="product1">
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</a></td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</a></td>
            <td><a href="<?php echo @__CONTROLLER__;?>
/permission/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">设置权限</a></td>
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