<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:10:21
         compiled from "/home/u366837675/public_html/modules/facebookcomments/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1992875167545f9ffd289088-69041958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9d7e021e3b792a2b8def67cc28fc50b8701b6a' => 
    array (
      0 => '/home/u366837675/public_html/modules/facebookcomments/header.tpl',
      1 => 1415510787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992875167545f9ffd289088-69041958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'fcbc_appid' => 0,
    'fcbc_admins' => 0,
    'fcbc_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545f9ffd2cf4a6_73987898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f9ffd2cf4a6_73987898')) {function content_545f9ffd2cf4a6_73987898($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['fcbc_appid'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_appid'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_admins'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_admins'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_lang'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_appid'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_appid'], null, 0);?> 

<meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['fcbc_appid']->value;?>
"/><meta property="fb:admins" content="<?php echo $_smarty_tpl->tpl_vars['fcbc_admins']->value;?>
"/><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['fcbc_lang']->value;?>
/all.js#xfbml=1&appId=<?php echo $_smarty_tpl->tpl_vars['fcbc_appid']->value;?>
";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php }} ?>
