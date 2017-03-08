<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 21:52:49
         compiled from "/Library/Webserver/Documents/web/shop/Admin/View/Manager/updmanager.html" */ ?>
<?php /*%%SmartyHeaderCode:122269052058bd54330ba163-79360036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffbd621dc9862625d18cb4ca9eba82114783f597' => 
    array (
      0 => '/Library/Webserver/Documents/web/shop/Admin/View/Manager/updmanager.html',
      1 => 1488808367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122269052058bd54330ba163-79360036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd5433147ff',
  'variables' => 
  array (
    'info' => 0,
    'role' => 0,
    'roleid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd5433147ff')) {function content_58bd5433147ff($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/Library/WebServer/Documents/web/ThinkPHP/Library/Vendor/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》修改管理员信息</span>
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
                <input type="hidden" name="mg_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_id'];?>
" />
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>管理员账号</td>
                    <td><input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_name'];?>
"/></td>
                </tr>
                <tr>
                    <td>所属角色</td>
                    <td>
                        <select name='mg_role_id'>
                            <option value="0">请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['role']->value,'selected'=>$_smarty_tpl->tpl_vars['roleid']->value),$_smarty_tpl);?>

                        </select>
                    </td>
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