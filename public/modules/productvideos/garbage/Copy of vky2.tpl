{literal}
<style type="text/css">


 .Accordion {
	border-left: solid 1px gray;
	border-right: solid 1px black;
	border-bottom: solid 1px gray;
	overflow: hidden;
}

.AccordionPanel {
	margin: 0px;
	padding: 0px;
}
.AccordionPanelTab {
	background-color: #CCCCCC;
	border-top: solid 1px black;
	border-bottom: solid 1px gray;
	margin: 0px;
	padding: 2px;
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
}
.AccordionPanelContent {
	overflow: auto;
	margin: 0px;
	padding: 0px;
	height: 200px;
}


.AccordionPanelOpen .AccordionPanelTab {
	background-color: #EEEEEE;
}

.AccordionPanelTabHover {
	color: #555555;
}
.AccordionPanelOpen .AccordionPanelTabHover {
	color: #555555;
}

.AccordionFocused .AccordionPanelTab {
	background-color: #3399FF;
}

.AccordionFocused .AccordionPanelOpen .AccordionPanelTab {
	background-color: #33CCFF;
}

</style>



<script type="text/javascript">
$(document).ready(function () {
		$("#selects").change(function() {

$("#form3").submit();
});
		
	});
</script>


{/literal}



<div id="Accordion1" class="Accordion" tabindex="0">

    <div class="AccordionPanelTab">Label 1</div>
    <div class="AccordionPanelContent">Content 1</div>

    <div class="AccordionPanelTab">Label 2</div>
    <div class="AccordionPanelContent">Content 2</div>

</div>















{* vivek
<input type="hidden" name="cky" value="aaaaa" />
  <select name="packId" id="selects">
<option value="">--select--</option>
 {foreach from=$productpack key=i item=product}
            <option value="{$product.pack_name}">{$product.name}</option>
          {/foreach}
     </select>
*}