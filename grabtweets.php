<?php

//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('twitter-oauth/codebird.php');

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'mcbGBhdwLtzfrWDlxChYw';
$CONSUMER_SECRET = 'z8iCAtt0AlHPg8RuPvtyyHovjzYZzwH6o98BGtG9s';
$ACCESS_TOKEN = '1691569446-8eskBU2aZVJ4U8N5Fm5xgYqmypZiGHsOTtuFWtG';
$ACCESS_TOKEN_SECRET = 'fyFnf6hjyBPw1EtDobpaBLORTbw1DplLYDildZ5ByU';

//Get authenticated
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
$cb = Codebird::getInstance();
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);


//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
	'screen_name' => $q,
	'q' => $q,
	'count' => $count
);

//Make the REST call
$data = (array) $cb->$api($params);

//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);

?>