<?php

$appid = '[your app id]';
$appkey = '[your app key]';

$fields_string = "";
$first_name = "[first name of applicant]";
$last_name = "[last name of applicant]";
$students_email_address = "[email address of applicant]";

$url = 'http://fafsa.api.publicprivatesector.org/applications/';
$fields = array(
				'appid' => urlencode($appid),
				'appkey' => urlencode($appkey),
				'first_name' => urlencode($first_name),
				'last_name' => urlencode($last_name),
				'students_email_address' => urlencode($students_email_address)
				);

foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$http = curl_init();

curl_setopt($http,CURLOPT_URL, $url);
curl_setopt($http,CURLOPT_POST, count($fields));
curl_setopt($http,CURLOPT_POSTFIELDS, $fields_string);

$output = curl_exec($http);
$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
$info = curl_getinfo($http);

//var_dump($info);

curl_close($http);

?>