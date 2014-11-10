<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 00:10:21
         compiled from "/home/u366837675/public_html/modules/scrolltop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275138564545f9ffdc05095-77247770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1797e0b28fc884fab5f923a019deb40a96ce8f73' => 
    array (
      0 => '/home/u366837675/public_html/modules/scrolltop/footer.tpl',
      1 => 1414851853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275138564545f9ffdc05095-77247770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stx' => 0,
    'sty' => 0,
    'sto' => 0,
    'stc' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545f9ffdc451f8_73238783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f9ffdc451f8_73238783')) {function content_545f9ffdc451f8_73238783($_smarty_tpl) {?><a href="#" style="right:<?php echo $_smarty_tpl->tpl_vars['stx']->value;?>
; bottom:<?php echo $_smarty_tpl->tpl_vars['sty']->value;?>
; opacity:<?php echo $_smarty_tpl->tpl_vars['sto']->value;?>
; <?php if ($_smarty_tpl->tpl_vars['stc']->value==1) {?>background: url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
icon_top.png') no-repeat;<?php } else { ?>background: url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
icon_top2.png') no-repeat;<?php }?>" class="mypresta_scrollup"><?php echo smartyTranslate(array('s'=>'scroll','mod'=>'scrolltop'),$_smarty_tpl);?>
</a><?php }} ?>
