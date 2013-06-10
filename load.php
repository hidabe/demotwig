<?php
	require_once 'vendor/autoload.php';
	$loader = new Twig_Loader_Filesystem('layout');
	// You must create directory cache with permissions
	$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
	));
?>
