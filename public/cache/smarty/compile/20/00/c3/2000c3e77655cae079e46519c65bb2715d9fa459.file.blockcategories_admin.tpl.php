<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:20:48
         compiled from "/home/u366837675/public_html/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:888800420545fa270f081f8-73202410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2000c3e77655cae079e46519c65bb2715d9fa459' => 
    array (
      0 => '/home/u366837675/public_html/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1413360536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888800420545fa270f081f8-73202410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545fa27100a0a6_37495401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545fa27100a0a6_37495401')) {function content_545fa27100a0a6_37495401($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
