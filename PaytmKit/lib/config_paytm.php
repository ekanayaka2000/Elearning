<?php
define('PAYTM_ENVIRONMENT', 'TEST'); // Change to 'PROD' for production
define('PAYTM_MERCHANT_KEY', 'your_actual_merchant_key_here'); 
define('PAYTM_MERCHANT_MID', 'your_actual_mid_here');
define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); // Change to your website name for production

// URL Configurations
if (PAYTM_ENVIRONMENT == 'PROD') {
    $PAYTM_STATUS_QUERY_NEW_URL = 'https://securegw.paytm.in/merchant-status/getTxnStatus';
    $PAYTM_TXN_URL = 'https://securegw.paytm.in/theia/processTransaction';
} else {
    $PAYTM_STATUS_QUERY_NEW_URL = 'https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
    $PAYTM_TXN_URL = 'https://securegw-stage.paytm.in/theia/processTransaction';
}

define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
?>
