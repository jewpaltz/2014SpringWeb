<?php
session_start();
/**
 * 
 */
class Accounts {
	function DoLogin($email, $password) {
		if(!empty($password))
		{
			$_SESSION['User'] = array('name'=>$email);
			return true;
		}else{
			return array('password'=>'Wrong password');
		}
	}
	function IsLoggedIn() {
		return (GetCurrentUser() != null);
	}
	function GetCurrentUser(){
		return isset($_SESSION['User']) ? $_SESSION['User'] : null;
	}
	function RequireLogin(){
		if(!IsLoggedIn())
		{
			header("Location: ../Accounts/login.php?returnUrl=$_SERVER[PHP_SELF]");
			die();
		}
	}	
}

