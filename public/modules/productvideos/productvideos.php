<?php
/*
* 2011-2012 Opensum.com
* NOTICE OF LICENSE
* This source file is subject to the Academic Free License (AFL 3.0)
*  @author vivek  <vivek@opensum.com,vkt005@gmail.com>
*  @copyright  2011-2012 opensum(sarvam tech solution) SA
*  @version  Release: 1.0
*  @license    opensum.com  Academic Free License (AFL 3.0)
*  Free to use
*/
include_once '../../classes/Product.php';
class Productvideos extends Module
{
  const INSTALL_SQL_FILE = 'install.sql';
  private $_html = '';
   function __construct()
    {
     $this->name = 'productvideos';
     parent::__construct();
     $this->tab = 'productvideos';
     $this->version = '1.0';
     $this->displayName = $this->l('opensum productvideos module');
     $this->description = $this->l('Module for creating product producvideo');
     $this->error = false;
     $this->valid = false;
    }
   public function getContent()
    {
     global $smarty, $cookie;
     $modulepath="?tab=AdminModules&configure=".$this->name."&token=".Tools::getValue('token')."&tab_module=".$this->tab."&module_name=$this->name";
     $delid=Tools::getValue('delid');
     $delid=intval($delid);
     if($delid!=""){
        $db = Db::getInstance();
        $sql="DELETE FROM `"._DB_PREFIX_."product_videos` WHERE product_id = {$delid}";
        if($db->Execute($sql)){
           Tools::redirectAdmin($modulepath);
        }
    }
    if (Tools::isSubmit('submitUpdate'))
    {
     $id_product=Tools::getValue('pack');
     $cky=Tools::getValue('cky');
     $video=Tools::getValue('video');
     $db = Db::getInstance();
     $id_lang=((int)($cookie->id_lang));
     $select="SELECT name FROM  `"._DB_PREFIX_."product_lang` where id_product='{$id_product}' and id_lang='{$id_lang}' limit 0,1";
     $result = Db::getInstance()->ExecuteS($select);
     $product_name=$result[0]['name'];

      $selectc="SELECT * FROM  `"._DB_PREFIX_."product_videos` where product_id='{$id_product}' limit 0,1";
      $resultc = Db::getInstance()->ExecuteS($selectc);
      $resultc=$resultc[0];

      if($resultc['id']!=''){
          $sql="UPDATE  `"._DB_PREFIX_."product_videos` SET  `product_name` =  '{$product_name}',
    `video` =  '{$video}' WHERE  `id` ={$resultc['id']}";
      }else{
            $sql= "INSERT INTO `"._DB_PREFIX_."product_videos` (`id`, `product_id`,`product_name` ,`video`)
                       VALUES (NULL, '{$id_product}','$product_name', '{$video}');";
      }
      if($id_product!=''){
      if($db->Execute($sql)){
               Tools::redirectAdmin($modulepath);}
       }else{echo "please select product first";}
              }
              $this->_displayBlockyoutubevideo()    ;
        $this->_displayForm();
        return $this->_html;
        }
private function _displayForm()
    {
    $db = Db::getInstance();
    global $smarty, $cookie;
    $modulepath="?tab=AdminModules&configure=".$this->name."&token=".Tools::getValue('token')."&tab_module=".$this->tab."&module_name=$this->name";
    $product=new ProductCore();
    $productdetail=$product->getProducts(1, 0, '', 'id_product', 'ASC');
    $select="SELECT * FROM  `"._DB_PREFIX_."product_videos` order by product_id	";
    $result = Db::getInstance()->ExecuteS($select);
   $edid=Tools::getValue('edid');
    if($edid!=''){
        $selectp="SELECT * FROM  `"._DB_PREFIX_."product_videos` where product_id='{$edid}' limit 0,1";
        $resultp = Db::getInstance()->ExecuteS($selectp);
    $resultp=$resultp[0];
    }

  		$iso = Language::getIsoById((int)($cookie->id_lang));
		$isoTinyMCE = (file_exists(_PS_ROOT_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en');
		$ad = dirname($_SERVER["PHP_SELF"]);
               $this->_html.=' <link rel="stylesheet" type="text/css" href="'.__PS_BASE_URI__.'modules/productvideos/jquery.fastconfirm.css" />
<script language="javascript" type="text/javascript" src="'.__PS_BASE_URI__.'modules/productvideos/js/jquery.fastconfirm.js"></script>';
		$this->_html .=  '
                    <script type="text/javascript">
$(document).ready(function(){
$(\'tr:even\').css("background-color","#e8e8e8");
$(\'.vky\').click(function(event) {
event.preventDefault();
var q=$(this);
var t=$(this).attr(\'href\');

				q.fastConfirm({
					position: "right",
					questionText: "Are you sure you want <br/>to delete this video ?",
					onProceed: function(trigger) {
                                        window.location=t;},
					onCancel: function(trigger) {
						}
					});

});
});
</script>
<script type="text/javascript">
			var iso = \''.$isoTinyMCE.'\' ;
			var pathCSS = \''._THEME_CSS_DIR_.'\' ;
			var ad = \''.$ad.'\' ;
			</script>
			<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce.inc.js"></script>';
		$this->_html .= '
		<script type="text/javascript">id_language = Number('.$defaultLanguage.');</script>
		<form method="post" action="'.$_SERVER['REQUEST_URI'].'" enctype="multipart/form-data">
                <fieldset style="width: 905px;">
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->displayName.'</legend>
			<label>'.$this->l('Select product').'</label>';
                $this->_html .= '<div id="title_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').';float: left;">';

                  $this->_html .= ' <select name="pack" id="select">
            <option>--select--</option>';
            for($i=0;$i<count($productdetail);$i++){
           $product=$productdetail[$i];
            if($resultp['product_id']==$product['id_product']){$selected="selected=selected";}else{$selected="";}
           $this->_html .=' <option value="'.$product['id_product'].'"'.$selected.'>'.$product['name'].'</option>';
            }
       $this->_html .= ' </select>
                </div>';
			   $this->_html .='<div class="clear"></div>
				<p><label>'.$this->l('Youtube embeded code').'</label>
				<div class="margin-form">';
                           $this->_html .= '
					<div id="cpara_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').';float: left;">
					<textarea class="rte" cols="70" rows="30" id="body_paragraph_'.$language['id_lang'].'" name="video">';
                if($resultp['video']!=''){$this->_html.=$resultp['video'];}else{
                $this->_html.=$_REQUEST['video'];}
                $this->_html.='</textarea>
					</div></p>';
                $this->_html .= '
					<div class="clear"></div>
				</div>
				<div class="clear pspace"></div>
				<div class="margin-form clear"><input type="submit" name="submitUpdate" value="'.$this->l('Update the editor').'" class="button" /></div>
			</fieldset>
		</form>';
 $this->_html.='<div><h2>Added video to product</h2></div><br/><table class="table">
     <thead>
     <tr>
    <th scope="col">product</th>
    <th scope="col">edit</th>
    <th scope="col">delete</th>
  </tr></thead>';
 for($i=0;$i<count($result);$i++){
 $this->_html.=' <tr>
    <td scope="col">'.$result[$i]['product_name'].'</td>
    <td scope="col"><a href="'.$modulepath.'&edid='.$result[$i]['product_id'].'">edit</a></td>
    <td scope="col"><a href="'.$modulepath.'&delid='.$result[$i]['product_id'].'" class="vky">delete</a></td>
  </tr>';
  }
  $this->_html.='
</table>';
 }
    public function install()
    {
      if (!file_exists(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
			return (false);
		else if (!$sql = file_get_contents(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
			return (false);
		$sql = str_replace('PREFIX_', _DB_PREFIX_, $sql);
		$sql = preg_split("/;\s*[\r\n]+/",$sql);
		foreach ($sql as $query){
        	if (!Db::getInstance()->Execute(trim($query)))
                   return (false);
                }
    if (parent::install() == false
				OR $this->registerHook('productTab') == false
				OR $this->registerHook('productTabContent') == false)
			return (false);
    return (true);
    }
    public function uninstall()
	{
		if (!parent::uninstall() OR
		!Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.'product_videos`'))
			return false;
		return true;
	}
  private function _displayBlockyoutubevideo()
	{
       $this->_html .= 'This module Let\'s you add youtube presentation (or other link) for your products.
With this module you can add a videos embed code or link to your products,
it provide facility to add diffrent video for each product
 the video  will be displayed in the extra tab name product video on the product page (next to more info tab)';

	}
    function hookProductTab($params)
	{
		global $smarty;
		$smarty->assign('ms_tabs', intval(Configuration::get('PS_TAB_PAGES')));
		return $this->display(__FILE__, 'tab.tpl');
	}
public function hookProductTabContent()
   {
    $db = Db::getInstance();
     global $smarty;
     $id_product=Tools::getValue('id_product');
    $selectvideo="SELECT * FROM  `"._DB_PREFIX_."product_videos` where product_id='{$id_product}' limit 0,1";
    $resultvideo = Db::getInstance()->ExecuteS($selectvideo);
    $resultvideo=$resultvideo[0];
   // print_r($resultvideo);
     $smarty->assign('this_path', $this->_path);
     $ss=html_entity_decode($resultvideo['video']);
     $smarty->assign('tttt', $ss);
      return $this->display(__FILE__, 'product_page.tpl');
      exit ();
    }
}
