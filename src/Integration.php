<?php

/**
 * Title: Fortis Bank - iDEAL Internet Kassa - Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id         = 'fortis-bank-internetkassa';
		$this->name       = 'Fortis Bank - iDEAL Internet Kassa';
		$this->provider   = 'fortis-bank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_ConfigFactory';
	}
}
