<?php /*%%SmartyHeaderCode:1279769402545f9ffd2e1306-49949867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d08a8ed687df9ba8a6e92485e7fe27f139180d' => 
    array (
      0 => '/home/u366837675/public_html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1413267033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1279769402545f9ffd2e1306-49949867',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545f9ffd3194b9_85722810',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f9ffd3194b9_85722810')) {function content_545f9ffd3194b9_85722810($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://giaytructuyen.16mb.com/vn/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Tìm kiếm" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Tìm kiếm</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
