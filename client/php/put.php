<?php

$appid = '[your app id]';
$appkey = '[your app key]';

$fields_string = "";
$fafsa_id = "[fafsa_id for application]";
$first_name = "[first name of applicant]";
$last_name = "[last name of applicant]";
$students_email_address = "[email address of applicant]";

$url = 'http://fafsa.api.publicprivatesector.org/applications/' . $fafsa_id;

$http = curl_init($url);
$data = array(
				'appid' => urlencode($appid),
				'appkey' => urlencode($appkey),
				'first_name' => urlencode($first_name),
				'last_name' => urlencode($last_name),
				'students_email_address' => urlencode($students_email_address)
				);
				
curl_setopt($http, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($http, CURLOPT_HEADER, false);
curl_setopt($http, CURLOPT_RETURNTRANSFER, true);
curl_setopt($http, CURLOPT_POSTFIELDS, http_build_query($data));

$output = curl_exec($http);
$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
$info = curl_getinfo($http);

echo $output;

curl_close($http);