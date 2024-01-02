<?php
//The MPESA API Keys
$consumerKey = "d1NDNl5p6bE7dGAV3WVlB2C80TqYTVAG";
$consumerSecret = "puYxQAkkSoIQHgU5";
//ACCESS TOKEN URL
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers );
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey .":". $consumerSecret);
$result = curl_exec( $curl );
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo $result;
//$result = json_encode($result);
// echo $access_token = $result->access_token;
curl_close($curl);
