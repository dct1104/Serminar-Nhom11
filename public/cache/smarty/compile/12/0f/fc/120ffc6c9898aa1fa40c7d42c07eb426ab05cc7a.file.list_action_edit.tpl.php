<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:09:03
         compiled from "/home/u366837675/public_html/admin8795/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745316908545f9fafa1ad91-69315174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120ffc6c9898aa1fa40c7d42c07eb426ab05cc7a' => 
    array (
      0 => '/home/u366837675/public_html/admin8795/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1413266290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745316908545f9fafa1ad91-69315174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545f9fafa8b518_18587424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f9fafa8b518_18587424')) {function content_545f9fafa8b518_18587424($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
