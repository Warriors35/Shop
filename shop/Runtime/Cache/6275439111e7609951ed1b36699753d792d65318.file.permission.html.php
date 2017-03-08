<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 19:20:25
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/Role/permission.html" */ ?>
<?php /*%%SmartyHeaderCode:173568686058bd436035fb91-78986822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6275439111e7609951ed1b36699753d792d65318' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/Role/permission.html',
      1 => 1488799217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173568686058bd436035fb91-78986822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd436040777',
  'variables' => 
  array (
    'role_name' => 0,
    'level0' => 0,
    'v0' => 0,
    'auth_ids' => 0,
    'level1' => 0,
    'v1' => 0,
    'level2' => 0,
    'v2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd436040777')) {function content_58bd436040777($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》添加权限信息</span>
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
            <table border="1" width="100%" class="table_a">
                <div>正在为角色 <<?php echo $_smarty_tpl->tpl_vars['role_name']->value;?>
> 设置权限 </div>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['v0'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v0']->_loop = false;
 $_smarty_tpl->tpl_vars['k0'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['level0']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v0']->key => $_smarty_tpl->tpl_vars['v0']->value){
$_smarty_tpl->tpl_vars['v0']->_loop = true;
 $_smarty_tpl->tpl_vars['k0']->value = $_smarty_tpl->tpl_vars['v0']->key;
?>
                    <li>
                        <?php echo $_smarty_tpl->tpl_vars['v0']->value['auth_name'];?>
<input type="checkbox" name="authname[]" value="<?php echo $_smarty_tpl->tpl_vars['v0']->value['auth_id'];?>
"
                        <?php if (in_array($_smarty_tpl->tpl_vars['v0']->value['auth_id'],$_smarty_tpl->tpl_vars['auth_ids']->value)){?> checked="checked" <?php }?> />
                        <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['level1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['v1']->value['auth_pid']==$_smarty_tpl->tpl_vars['v0']->value['auth_id']){?>
                        <ul>
                            <?php echo $_smarty_tpl->tpl_vars['v1']->value['auth_name'];?>
<input type="checkbox" name="authname[]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['auth_id'];?>
"
                            <?php if (in_array($_smarty_tpl->tpl_vars['v1']->value['auth_id'],$_smarty_tpl->tpl_vars['auth_ids']->value)){?> checked="checked" <?php }?>/>
                            <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['level2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['v2']->value['auth_pid']==$_smarty_tpl->tpl_vars['v1']->value['auth_id']){?>
                                <ul>
                                    <?php echo $_smarty_tpl->tpl_vars['v2']->value['auth_name'];?>
<input type="checkbox" name="authname[]" value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['auth_id'];?>
"
                                    <?php if (in_array($_smarty_tpl->tpl_vars['v2']->value['auth_id'],$_smarty_tpl->tpl_vars['auth_ids']->value)){?> checked="checked" <?php }?>/>
                                </ul>
                            <?php }?>
                            <?php } ?>
                        </ul>
                        <?php }?>
                        <?php } ?>

                    </li>
                    <?php } ?>
                </ul>
                <tr>
                    <td  align="center">
                        <input type="submit"  value="确认添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>