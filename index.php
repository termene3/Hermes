<?php

	require_once('application/Hermes.php');
	$Hermes = new Hermes\Heart;
	
	$Auth = new Auth;
	echo $Auth->Login();
	
?>