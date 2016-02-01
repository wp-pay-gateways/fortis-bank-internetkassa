<?php

/**
 * Title: Fortis Bank - iDEAL Internet Kassa - Test config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_TestConfig extends Pronamic_WP_Pay_Gateways_FortisBank_IDealInternetKassa_Config {
	public function get_payment_server_url() {
		return 'https://www.secure.neos-solution.com/ncol/test/orderstandard.asp';
	}
}
