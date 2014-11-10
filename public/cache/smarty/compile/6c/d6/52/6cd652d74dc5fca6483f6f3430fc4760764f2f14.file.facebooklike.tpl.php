<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:15:13
         compiled from "/home/u366837675/public_html/modules/facebooklike/facebooklike.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1717363283545fa1211ef924-99468498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd652d74dc5fca6483f6f3430fc4760764f2f14' => 
    array (
      0 => '/home/u366837675/public_html/modules/facebooklike/facebooklike.tpl',
      1 => 1414851520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1717363283545fa1211ef924-99468498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fl_default_hook' => 0,
    'fl_send' => 0,
    'fl_width' => 0,
    'fl_faces' => 0,
    'fl_layout' => 0,
    'fl_font' => 0,
    'fl_text' => 0,
    'fl_color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545fa1212239f1_79140576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545fa1212239f1_79140576')) {function content_545fa1212239f1_79140576($_smarty_tpl) {?><script type="text/javascript">

window.fbAsyncInit = function() {

FB.Event.subscribe('edge.create', function(targetUrl) {
_gaq.push(['_trackSocial', 'facebook', 'like', targetUrl]);
});

FB.Event.subscribe('edge.create', function(targetUrl) {
_gaq.push(['_trackSocial', 'facebook', 'unlike', targetUrl]);
});

FB.Event.subscribe('edge.create', function(targetUrl) {
_gaq.push(['_trackSocial', 'facebook', 'send', targetUrl]);
});

}
</script>
<?php if ($_smarty_tpl->tpl_vars['fl_default_hook']->value) {?>
<li>
<?php } else { ?>

<div class="facebook_container">
<?php }?>
	<div class="fb-like" data-send="<?php echo $_smarty_tpl->tpl_vars['fl_send']->value;?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['fl_width']->value;?>
" data-show-faces="<?php echo $_smarty_tpl->tpl_vars['fl_faces']->value;?>
" data-layout="<?php echo $_smarty_tpl->tpl_vars['fl_layout']->value;?>
" data-font="<?php echo $_smarty_tpl->tpl_vars['fl_font']->value;?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['fl_text']->value;?>
" data-colorscheme="<?php echo $_smarty_tpl->tpl_vars['fl_color']->value;?>
"></div>
<?php if ($_smarty_tpl->tpl_vars['fl_default_hook']->value) {?>
</li>
<?php } else { ?>
</div>
<?php }?><?php }} ?>
