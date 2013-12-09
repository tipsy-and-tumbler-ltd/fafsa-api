<?php
$appid = '[your app id]';
$appkey = '[your app key]';

$fafsa_id = "[fafsa_id for application]";

$url = 'http://fafsa.api.publicprivatesector.org:80/applications/' . $fafsa_id . '?appid=' . $appid . '&appkey=' . $appkey;

$http = curl_init($url);
curl_setopt($http, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($http, CURLOPT_HEADER, false);
curl_setopt($http, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($http);
$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
$info = curl_getinfo($http);
//var_dump($info);

echo $output;

curl_close($http);

?>