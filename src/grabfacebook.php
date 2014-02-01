<?php
	require 'file:///C|/xampp/htdocs/TestServer/src/facebook.php';
	$facebook = new Facebook(array('appId'  => '380769072050241','secret' => '8195d9e6597666efb07af8fcf386928d',));
  	// Get User ID
  	$user = $facebook->getUser();
?>