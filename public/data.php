<?php

function check_url($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://safebrowsing.googleapis.com/v4/threatMatches:find?key=AIzaSyDnz_7Sh5iGdIfNQp-ydY2si3p-sNB-O1Y");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            ' {
    "client": {
      "clientId":      "yourcompanyname",
      "clientVersion": "1.5.2"
    },
    "threatInfo": {
      "threatTypes":      ["MALWARE", "SOCIAL_ENGINEERING"],
      "platformTypes":    ["WINDOWS"],
      "threatEntryTypes": ["URL"],
      "threatEntries": [
        {"url": "'.$url.'"},
     
      ]
    } }
  ');

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

$server_output = curl_exec($ch);

curl_close ($ch);
$do = json_decode($server_output ,true)['matches'][0]['threatType'];
if(isset($do)){
    die('bad');
} else {
    die('good');
}

}

function getcurl($url){

$handle = curl_init();
 
$url = $url;
 
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);
 
curl_close($handle);
 
return $output;



}

if (isset($_GET['check_url'])) {
	

check_url($_GET['check_url']);


}
if (isset($_GET['api'])) {
	
		

	if (getcurl('http://service-api-ntor.pw/check.php?check=' . $_GET['api']) == 'good') {
		
		echo "chase-scama44545564545448";
		die();

	} else {

		echo "bad";
		die();
	}


}