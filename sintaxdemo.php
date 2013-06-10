<?php
	require_once("load.php");
	echo $twig->render('sintaxdemo.html.twig', array('count' => 10));
?>
