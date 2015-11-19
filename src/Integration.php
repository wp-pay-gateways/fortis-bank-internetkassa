<?php

class Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id         = 'fortis-bank-internetkassa';
		$this->name       = 'Fortis Bank - iDEAL Internet Kassa';
		$this->provider   = 'fortis-bank';
		$this->deprecated = true;
	}
}
