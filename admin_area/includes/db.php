<?php
	
	$link = mysqli_init();

	$con = mysqli_connect("localhost", "root", "", "myshop_kz") ;

	if(mysqli_connect_errno()){

		echo "Failed to connect to MySQL: ". mysqli_connect_error();
	}

	//mysql_query("SET NAMES 'cp1251'");

	

?>