<?php

class med_offerchat extends Module {

	public function __construct() {
		$this->name = 'med_offerchat';
		$this->tab = version_compare(_PS_VERSION_, '1.4.0.0', '>=')?'advertising_marketing':'Mediacom87';
		$this->version = '2.1';
		$this->need_instance = 0;
		$this->author = 'Mediacom87';
		parent::__construct();
		$this->displayName = $this->l('Livechat OfferChat');
		$this->description = $this->l('Integrate your OfferChat script on your site.');
	}

	function install()
	{
		if (!parent::install()
			|| !$this->registerHook('header')
			|| !Configuration::updateValue('MED_OFFERCHAT', ''))
			return false;
		return true;
	}

	function uninstall()
	{
		if (!Configuration::deleteByName('MED_OFFERCHAT') || !parent::uninstall())
			return false;
		return true;
	}

	public function getContent($tab = 'AdminModules')
	{
		global $currentIndex, $cookie;

		$token = Tools::getAdminToken($tab.(int)Tab::getIdFromClassName($tab).(int)$cookie->id_employee);
		$output = '<h2><img src="'.$this->_path.'logo.gif" alt="" /> '.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitofferchat'))
		{
			if(Configuration::updateValue('MED_OFFERCHAT', trim(Tools::getValue('offerchatscript'))))
				Tools::redirectAdmin($currentIndex.'&modulename='.$this->name.'&configure='.$this->name.'&conf=6&token='.$token);
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		return '
		<fieldset class="space">
				<legend><img src="'.$this->_path.'img/google-icon-16x16.png" alt="" height="16" width="16" /> '.$this->l('Ads').'</legend>
				<p><a href="http://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign='.$this->name.'" target="_blank" title="'.$this->l('Mediacom87 WebAgency').'">'.$this->l('You can also support our agency by clicking the advertising below').'.</a></p>
				<p style="text-align:center">
				<script type="text/javascript"><!--
					google_ad_client = "ca-pub-1663608442612102";
					/* Gratuit OfferChat 728x90 */
					google_ad_slot = "4903333951";
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
				</p>
		</fieldset>

		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<p>'.$this->l('Above all things, subscribe to').' <a href="https://www.offerchat.com" title="'.$this->l('Above all things, subscribe to').' OFFERCHAT" target="_blank" style="color:orange"><b>OFFERCHAT</b></a></p>
			<fieldset>
				<legend><a href="http://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign='.$this->name.'"><img src="'.$this->_path.'logo.gif" alt="" /></a>'.$this->l('Settings').'</legend>

				<label><a href="https://www.offerchat.com/" target="_blank" title="'.$this->l('OfferChat live chat solutions Create your account').'"><img src="'.$this->_path.'logo.png" alt="'.$this->l('OfferChat - live chat solution!').'" /></a></label>
				<div class="margin-form"><input type="text" name="offerchatscript" value="'.Configuration::get('MED_OFFERCHAT').'" /> <input type="submit" name="submitofferchat" value="'.$this->l('Save').'" class="button" />
					<p>'.$this->l('To configure this module, after registering on').' <a href="https://www.offerchat.com/" title="'.$this->l('Above all things, subscribe to').' OFFERCHAT" target="_blank" style="color:orange"><b>OFFERCHAT</b></a>, '.$this->l('get code to insert the script and find the API Key like you can see below on the screenshot. Enter this API Key above.').'</p>
					<p><a href="https://www.offerchat.com/" target="_blank" title="'.$this->l('OfferChat live chat solutions Create your account').'"><img src="'.$this->_path.'img/med_offerchat_key.jpg" alt="'.$this->l('OfferChat - live chat solution - API Key example').'" /></a></p>
				</div>
			</fieldset>
		</form>

		<fieldset class="space">
				<legend><a href="https://www.paypal.com/fr/mrb/pal=LG5H4P9K8K6FC" target="_blank"><img src="'.$this->_path.'img/paypal-icon-16x16.png" alt="" /></a>'.$this->l('Donation').'</legend>
				<p><a href="http://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign='.$this->name.'" target="_blank" title="'.$this->l('Mediacom87 WebAgency').'">'.$this->l('This module was developed and generously offered to the PrestaShop\'s community by Mediacom87 WebAgency specializing in supporting eCommerce.').'</a></p>
				<p><a href="http://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign='.$this->name.'" target="_blank" title="'.$this->l('Mediacom87 WebAgency').'">'.$this->l('If you want to support the Mediacom87\'s process, you can do so by making a donation.').'</a></p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="text-align:center">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="7CMK92LUKG9QW">
				<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
				<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
				</form>


		</fieldset>

		<fieldset class="space">
				<legend><img src="'.$this->_path.'img/google-icon-16x16.png" alt="" height="16" width="16" /> '.$this->l('Ads').'</legend>
				<p><a href="http://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign='.$this->name.'" target="_blank" title="'.$this->l('Mediacom87 WebAgency').'">'.$this->l('You can also support our agency by clicking the advertising below').'.</a></p>
				<p style="text-align:center">
				<script type="text/javascript"><!--
					google_ad_client = "ca-pub-1663608442612102";
					/* Gratuit OfferChat 728x90 */
					google_ad_slot = "4903333951";
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
				</p>
		</fieldset>
		';
	}

	function hookHeader($params)
	{
		global $smarty;
		if ($offerchat = Configuration::get('MED_OFFERCHAT')) {
			$smarty->assign('offerchat', $offerchat);
			return $this->display(__FILE__, $this->name.'.tpl');
		}
	}
}

?>
