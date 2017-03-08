<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 20:33:01
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/Manager/managerlist.html" */ ?>
<?php /*%%SmartyHeaderCode:102275572158bd4daf5461a9-15546315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1a6394cf462306aecd12bca6cec85bf65a8ae4' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/Manager/managerlist.html',
      1 => 1488803576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102275572158bd4daf5461a9-15546315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd4daf5d1fd',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'roleinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd4daf5d1fd')) {function content_58bd4daf5d1fd($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float: left;">当前位置是：管理员管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
</div>
<div></div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>后台账号</td>
            <td>所属角色</td>
            <td>操作</td>
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
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</a></td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['roleinfo']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</a></td>
            <td><a href="<?php echo @__CONTROLLER__;?>
/updmanager/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
">修改</a></td>
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