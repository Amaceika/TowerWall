<?php

//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('codebird.php');

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = '555DckpjT8Wuakr7LouOA';
$CONSUMER_SECRET = 'ZyDVWB6jy21E8QBmeR1SHHm5g9ZCBgakTIRoiavuwMY';
$ACCESS_TOKEN = '386147802-3cy6leJF4v5KkKQYK58eAo6nmW5tKi4RckzaOir2';
$ACCESS_TOKEN_SECRET = '1vTzxLYGYuyhA7G46n69IXz30D5UJTJzdQ8HCZlfQko';

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
