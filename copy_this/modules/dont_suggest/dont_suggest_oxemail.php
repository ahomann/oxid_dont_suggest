<?php

	/**
	 * dont_suggest_suggest class.
	 * 
	 * @extends dont_suggest_suggest_parent
	 */
	class dont_suggest_oxemail extends dont_suggest_oxemail_parent {


		/**
		 * sendInviteMail function. if dont_suggest_invite activated do nothing
		 * 
		 * @access public
		 * @return void
		 */
		public function sendInviteMail() {
			$shop_config = oxNew('oxconfig');
			if($shop_config->getConfigParam( 'dont_suggest_invite' )) {
				return;
			} else {
				return parent::sendInviteMail();
			}
		}
		
		/**
		 * sendSuggestMail function. if dont_suggest_suggest activated do nothing
		 * 
		 * @access public
		 * @return void
		 */
		public function sendSuggestMail() {
			$shop_config = oxNew('oxconfig');
			if($shop_config->getConfigParam( 'dont_suggest_suggest' )) {
				return;
			} else {
				return parent::sendSuggestMail();
			}
		}
		
		/**
		 * sendPriceAlarmNotification function. if dont_suggest_pricealert activated do nothing
		 * 
		 * @access public
		 * @return void
		 */
		public function sendPriceAlarmNotification() {
			$shop_config = oxNew('oxconfig');
			if($shop_config->getConfigParam( 'dont_suggest_pricealert' )) {
				return;
			} else {
				return parent::sendPriceAlarmNotification();
			}
		}
		
		/**
		 * sendPricealarmToCustomer function. if dont_suggest_pricealert activated do nothing
		 * 
		 * @access public
		 * @return void
		 */
		public function sendPricealarmToCustomer() {
			$shop_config = oxNew('oxconfig');
			if($shop_config->getConfigParam( 'dont_suggest_pricealert' )) {
				return;
			} else {
				return parent::sendPricealarmToCustomer();
			}
		}
		
		
	}
?>