<link rel="stylesheet" type="text/css" href="{$module_dir}jquery.fastconfirm.css" />
<script language="javascript" type="text/javascript" src="{$module_dir}js/jquery.fastconfirm.js"></script>
{literal}


 <script type="text/javascript">
$(document).ready(function(){
$('tr:even').css("background-color","#e8e8e8");
$('.vky').click(function(event) {
event.preventDefault();
var q=$(this);
var t=$(this).attr('href');
var id=$(this).attr('id');
				$(this).fastConfirm({
					position: "right",
					questionText: "Are you sure you want <br/>to delete this pack?",
					onProceed: function(trigger) {


$.ajax({
   type: "POST",
   url: t,
   data: "delid="+id,
   success: function(msg){
   //  alert( "Data Saved: " + msg );
    $('#msg').html('record deleted');
q.parent('td').parent('tr').hide();
   }
 });


					//	window.location=t+"&delid="+id;
					},
					onCancel: function(trigger) {
						//alert("");
					}
				});
			});

});
</script>


{/literal}


<div id="msg"></div>
<a href="{$tt}'&cky=0" class="button" >Add New</a>
<br/>
<br />
<table width="500" border="0" class="table">


  <tr>
<th>Id</th>
    <th>Pack Name</th>
    <th>Detail</th>
    <th>Edit</th>
    <th>Remove</th>
</tr>

{foreach from=$productpack key=i item=product}

<tr class="tttt">
    <td>{$product.pack_name}</td>
    <td>{$product.name}</td>
    <td><a href="{$cookie->vkypage}&cky={$product.pack_name}" ><img src="{$module_dir}img/details.gif" /></a></td>
    <td><a href="{$cookie->vkypage}&cky={$product.pack_name}" ><img src="{$module_dir}img/edit.gif" /></a></td>
    <td><a href="{$cookie->vkypage}" id="{$product.pack_name}" class="vky"><img src="{$module_dir}img/delete.gif" /></a></td>
</tr>

 {/foreach}

 </table>















{* vivek
<input type="hidden" name="cky" value="aaaaa" />
  <select name="packId" id="selects">
<option value="">--select--</option>
 {foreach from=$productpack key=i item=product}
            <option value="{$product.pack_name}">{$product.name}</option>
          {/foreach}
     </select>
*}