<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 01:38:19
         compiled from "/home/u366837675/public_html/modules/productvideos/product_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567038800545fa1216e7f78-83264131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b5c64875098b4c4c36fc4d495ea1be7f5ce283' => 
    array (
      0 => '/home/u366837675/public_html/modules/productvideos/product_page.tpl',
      1 => 1415558249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567038800545fa1216e7f78-83264131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545fa121718c67_68804747',
  'variables' => 
  array (
    'modules_dir' => 0,
    'tttt' => 0,
    'ms_tabs' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545fa121718c67_68804747')) {function content_545fa121718c67_68804747($_smarty_tpl) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
productvideos/extratabs.css" />
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
extratabs/js/TabSwitcher.js"></script>

<div id="idTab15"><?php echo $_smarty_tpl->tpl_vars['tttt']->value;?>
</div>

<script language="javascript">
	TabSwitcher.init("<?php echo $_smarty_tpl->tpl_vars['ms_tabs']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
modules/extratabs/");
</script><?php }} ?>
