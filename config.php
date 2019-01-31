<?php 



require 'paypal/autoload.php';


$apiContext = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
		'AXJZVSy-tNN_mhQwMpekqImhXNiMnM3enGZTcPQzuBD-oqti9gE9A4pvOSC3ZuSPMzwQde7DhGVX6L1T',     // ClientID
		'EM1vFqmDuPz7uJgUE_d4rU9tc3VeJEkeK80KFZwA6omSOcuqTm4JcyBai51xPGBpBzUXt0JuYnGqTD1k'      // ClientSecret
	)
);



