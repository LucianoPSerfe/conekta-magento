<?php
class Conekta_Oxxo_Block_Info_Oxxo extends Mage_Payment_Block_Info
{
	protected function _prepareSpecificInformation($transport = null)
	{
		if (null !== $this->_paymentSpecificInformation) {
			return $this->_paymentSpecificInformation;
		}
		$info = $this->getInfo();
		$transport = new Varien_Object();
		$transport = parent::_prepareSpecificInformation($transport);
		//$transport->addData(array(
			//Mage::helper('payment')->__('Expiry Date') => $info->getOxxoExpiryDate(),
			//Mage::helper('payment')->__('Barcode Url') => $info->getOxxoBarcodeUrl()
		//));
		return $transport;
	}
}
