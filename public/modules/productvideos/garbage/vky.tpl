<link rel="stylesheet" type="text/css" href="{$module_dir}pack.css" />
<script language="javascript" type="text/javascript" src="{$module_dir}js/pack.js"></script>
{literal}
<style type="text/css">

</style>
<script type="text/javascript">

</script>


{/literal}
<div style="height:50px">
<a href="javascript:history.go(-1)" class="button">Go Back </a>
</div>
 
<table width="902" border="0" class="table">
    <tr>
    {if $cky==0}  <td width="90">Select Pack</td>
      <td width="796">
       <select name="pack" id="select">
            <option>--select--</option>
            {foreach from=$productdetail key=i item=product}
            <option value="{$product.id_product}">{$product.name}</option>
          {/foreach}
        </select> 
{else}
Pack :{$resultpackname}
/if}
    </td>
   </tr>
   <tr>
     <td ><b>Select Products for pack</b></td>
    <td >  <textarea name="vidio" id="vidio" class="u_vidio" style="width:300px;height:250px;"></textarea></td>
   </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>