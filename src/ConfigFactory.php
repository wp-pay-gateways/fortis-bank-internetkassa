<?php

/**
 * Title: Fortis Bank - iDEAL Internet Kassa - Config factory
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_ConfigFactory extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_ConfigFactory {
	public function __construct() {
		parent::__construct( 'Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_Config', 'Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_TestConfig' );
	}
}
