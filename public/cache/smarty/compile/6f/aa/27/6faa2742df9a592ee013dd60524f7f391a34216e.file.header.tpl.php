<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:10:21
         compiled from "/home/u366837675/public_html/modules/facebooklike/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1414084954545f9ffd21d854-00786597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6faa2742df9a592ee013dd60524f7f391a34216e' => 
    array (
      0 => '/home/u366837675/public_html/modules/facebooklike/header.tpl',
      1 => 1414851520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414084954545f9ffd21d854-00786597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fl_lang_code' => 0,
    'fl_default_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545f9ffd256833_23708905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f9ffd256833_23708905')) {function content_545f9ffd256833_23708905($_smarty_tpl) {?><div id="fb-root"></div>
<script type="text/javascript">

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['fl_lang_code']->value;?>
/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<?php if ($_smarty_tpl->tpl_vars['fl_default_image']->value) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['fl_default_image']->value;?>
" /> 
<link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['fl_default_image']->value;?>
" />
<?php }?><?php }} ?>
