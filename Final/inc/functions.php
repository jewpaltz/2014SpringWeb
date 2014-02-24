<?php
	include_once 'password.php';
	
	function GetConnection(){
		global $password;
		
		$conn = mysqli_connect('localhost', 'plotkinm', $password, 'plotkinm_db');
		return $conn;
	}
	