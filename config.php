<?php
	$servername = "localhost" ;
	$username = "root";
	$password = "";
	$dbname = "khalistadb";
	
		//create connection
	$mysqli = mysqli_connect($servername, $username, $password,$dbname);
		//check connection 
		if(!$mysqli) {
	 die("Koneksi Gagal : ".mysqli_connect_error());
	}
	
?>