<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 19:54:40
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/index/left.html" */ ?>
<?php /*%%SmartyHeaderCode:168557021358bd46d91347d2-69132876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f6a7ac2a6d140441d28aa66ce6971aff1081a7' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/index/left.html',
      1 => 1488801279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168557021358bd46d91347d2-69132876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd46d92198e',
  'variables' => 
  array (
    'auth_top' => 0,
    'tv' => 0,
    'auth_low' => 0,
    'lv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd46d92198e')) {function content_58bd46d92198e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
                    <?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['tk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['tk']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(<?php echo $_smarty_tpl->tpl_vars['tv']->value['auth_id'];?>
)
                                    href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['tv']->value['auth_name'];?>
</a></td></tr>
                        <tr height=4>
                            <td></td></tr>
                    </table>
                    <table id=child<?php echo $_smarty_tpl->tpl_vars['tv']->value['auth_id'];?>
 style="display: none" cellspacing=0 cellpadding=0
                           width=150 border=0>
                        <?php  $_smarty_tpl->tpl_vars['lv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lv']->_loop = false;
 $_smarty_tpl->tpl_vars['lk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_low']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lv']->key => $_smarty_tpl->tpl_vars['lv']->value){
$_smarty_tpl->tpl_vars['lv']->_loop = true;
 $_smarty_tpl->tpl_vars['lk']->value = $_smarty_tpl->tpl_vars['lv']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['lv']->value['auth_pid']==$_smarty_tpl->tpl_vars['tv']->value['auth_id']){?>
                        <tr height=20>
                            <td align=middle width=30><img height=9 src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['lv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['lv']->value['auth_a'];?>
"
                                   target=right><?php echo $_smarty_tpl->tpl_vars['lv']->value['auth_name'];?>
</a>
                            </td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                    </table>
                    <?php } ?>
    </body>
</html><?php }} ?>