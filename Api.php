<?php
require_once('include_me.php');

use BjoernrDe\SSLLabsApi\Calls\AnalyzeCall;
use BjoernrDe\SSLLabsApi\Calls\GetEndpointDataCall;
use BjoernrDe\SSLLabsApi\Calls\GetStatusCodesCall;
use BjoernrDe\SSLLabsApi\Calls\GetRootCertsRaw;

/*
//Analyze Call
$parameters = array('host' => 'bjoernr.de');
$analyzeCall = new AnalyzeCall($parameters);
$analyzeCall->setDevMode(true);

echo '<pre>';
print_r($analyzeCall->send());
echo '</pre>';
*/

/*
//getEndpointData Call
$parameters = array('host' => 'ssllabs.com', 's' => '64.41.200.100');
$getEndpointDataCall = new GetEndpointDataCall($parameters);
$getEndpointDataCall->setDevMode(false);

echo '<pre>';
print_r($getEndpointDataCall->send());
echo '</pre>';
*/

/*
//getStatusCodes Call
$getStatusCodesCall = new GetStatusCodesCall();
$getStatusCodesCall->setDevMode(false);

$statusCallObject = $getStatusCodesCall->send();

echo '<pre>';
print_r($statusCallObject);
print_r($statusCallObject->getStatusDetail('TESTING_PROTOCOL_INTOLERANCE_304'));
echo '</pre>';
*/

//getRootCertsRaw Call
$getRootCertsRawCall = new GetRootCertsRaw();
$getRootCertsRawCall->setDevMode(false);

echo '<pre>';
print_r($getRootCertsRawCall->send());
echo '</pre>';