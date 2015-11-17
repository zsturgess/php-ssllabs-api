<?php
require_once('include_me.php');

use BjoernrDe\SSLLabsApi\Calls\AnalyzeCall;
use BjoernrDe\SSLLabsApi\Calls\GetEndpointDataCall;

/*
//Analyze Call
$parameters = array('host' => 'ssllabs.com');
$analyzeCall = new AnalyzeCall($parameters);
$analyzeCall->setDevMode(true);

echo '<pre>';
print_r($analyzeCall->send());
echo '</pre>';
*/

//getEndpointData Call
$parameters = array('host' => 'ssllabs.com', 's' => '64.41.200.100');
$getEndpointDataCall = new GetEndpointDataCall($parameters);
$getEndpointDataCall->setDevMode(true);

echo '<pre>';
print_r($getEndpointDataCall->send());
echo '</pre>';