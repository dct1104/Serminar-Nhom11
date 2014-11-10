<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:09:03
         compiled from "/home/u366837675/public_html/admin8795/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:848128454545f9fafec28b2-99132260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f69d4859935a8b909c604b706c1887fb7222c21' => 
    array (
      0 => '/home/u366837675/public_html/admin8795/themes/default/template/content.tpl',
      1 => 1413266289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848128454545f9fafec28b2-99132260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545f9fafed4164_70438669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f9fafed4164_70438669')) {function content_545f9fafed4164_70438669($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
