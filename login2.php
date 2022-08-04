<?php


   	$host= "  epiz_27005200";
   	$dbUsername = "sql109.epizy.com";
   	$dbPassword ="MPobftFxRT";
   	$dbname = "epiz_27005200_loginpage";

    if (mysqli_connect_error()) {
    	die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());}
    	else {
	echo "All field are required";
	die();
}
?>