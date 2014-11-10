<?php
class Refralcategory extends Module
{
  const INSTALL_SQL_FILE = 'install.sql';
    private $_html = '';
   function __construct()
    {
        $this->name = 'refralcategory';
        parent::__construct();
        $this->tab = 'eCartService.net Tutorials';
        $this->version = '1.0';
        $this->displayName = $this->l('Second Tutorial Module');
       $this->description = $this->l('Our second module - A "Hello world" redux');
       $this->error = false;
		$this->valid = false;
    }
   public function getContent()
    {
       if (Tools::isSubmit('submit'))
    {

   //Print_r($_REQUEST);
     //  Configuration::updateValue($this->name.'_message', Tools::getValue('our_message'));
       $crc=Tools::getValue('crc');
            $db = Db::getInstance();
            
           
            $delete="DELETE FROM `"._DB_PREFIX_."refral`";
      $db->Execute($delete);
       for($i=0;$i<count($crc);$i++){
           $id_product=$crc[$i];
           $sstatus="status".$id_product;
           $status=Tools::getValue($sstatus);
      
         $statuss=$status==''?0:1;
     
          $sql= "INSERT INTO `"._DB_PREFIX_."refral` (`id`, `id_product`, `status`)
               VALUES (NULL, '{$id_product}', '{$statuss}');";

          
           $db->Execute($sql);
       }


    }

    $this->_displayForm();
    return $this->_html;
    }
    private function _displayForm()
    {
$db = Db::getInstance();
//$result=$db->ExecuteS("SELECT * FROM  `"._DB_PREFIX_."category` WHERE active =0");

$selectcat="SELECT c . * , pcl.name
FROM  `"._DB_PREFIX_."category` c
LEFT OUTER JOIN "._DB_PREFIX_."category_lang AS pcl ON pcl.id_category = c.id_category
AND pcl.id_lang =1
WHERE c.active =0
LIMIT 0 , 30";
$result=$db->ExecuteS($selectcat);
//print_r($result);
$x=' <form action="'.$_SERVER['REQUEST_URI'].'" method="post"><table width="200" border="1">
<table class="table">
<thead>
<tr>
    <th scope="col"><b>CategoryId</b></th>
    <th scope="col"><b>CategoryName</b></th>
    <th scope="col"><b>Category Status<b/></th>
    <th scope="col"><b>Refral Status</b></th>
  </tr></thead><tbody>
';
for($i=0;$i<count($result);$i++){
    $results=$result[$i];
    $qq="SELECT * FROM  `"._DB_PREFIX_."refral` WHERE id_product ={$results['id_category']}";
    $res=$db->Executes($qq);
    $res=$res[0];
  $x.= "<tr><td>".$results['id_category']."</td>
<td>".$results['name']."</td>
<td>
      <input type=\"hidden\" name=\"crc[]\" value=\"".$results['id_category']."\"/>";
       if($res['status']=='0'){$x.="<input name=\"status".$results['id_category']."\" type=\"checkbox\" value=\"1\" />";}
else{$x.="<input name=\"status".$results['id_category']."\" type=\"checkbox\" value=\"1\" checked />";}
   $x.= "</td>";
   $x.= "<td>".$res['status']."</td>
  </tr>";
}
$x.='</tbody></table>';
        $this->_html .= $x.'
         
            <input type="submit" name="submit" value="'.$this->l('Update').'" class="button" />
    </form>';
    }

    public function install()
    {
   if (!file_exists(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
			return (false);
		else if (!$sql = file_get_contents(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
			return (false);
		$sql = str_replace('PREFIX_', _DB_PREFIX_, $sql);
		$sql = preg_split("/;\s*[\r\n]+/",$sql);
		foreach ($sql as $query)
			if (!Db::getInstance()->Execute(trim($query)))
return (false);
    parent::install();
    if (!$this->registerHook('leftColumn'))
        return false;
    }
public function hookLeftColumn()
   {
    $db = Db::getInstance();
      global $smarty;
    $t=$_REQUEST['id_category'];
    $rr="SELECT * FROM  `"._DB_PREFIX_."refral` WHERE id_product ={$t}";
     $resrr=$db->Executes($rr);
        $resrr=$resrr[0];
    if($resrr['id']!=''){
     $qq="SELECT * FROM  `"._DB_PREFIX_."refral` WHERE id_product ={$t} and status=1";
    $res=$db->Executes($qq);
   
    $res=$res[0];

    if(!empty ( $t))
        {
            if($res['id']!=''){
              
            }else{
           
            $smarty->assign('this_path', $this->_path);
            return $this->display(__FILE__, 'product_page.tpl');
                    exit ();
             }
        }
    }
    else{        }
   // return '<div class="block"><h4>vivek'.$t.$resrr['id'].Configuration::get($this->name.'_message') . '</h4></div>';
    }


}
