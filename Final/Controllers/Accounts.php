<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view 		= $action = $_REQUEST['action'];
	@$format 	= $_REQUEST['format'];

	switch ($action){
		default:	// Login
		$results = array();
		require_once('../inc/Accounts.php');
		if(isset($_REQUEST['returnUrl']))
			$_SESSION['returnUrl'] = $_REQUEST['returnUrl'];
		if(!isset($_SESSION['returnUrl']) && isset($_SERVER['HTTP_REFERER']))
			$_SESSION['returnUrl'] = $_SERVER['HTTP_REFERER'];
				
		if(isset($_POST['email']))
		{
			$row = $_POST;
			$results = DoLogin($_POST['email'], $_POST['password']);
			if($results === true)
			{
				$returnUrl = !empty($_SESSION['returnUrl']) ? $_SESSION['returnUrl'] : '../Home/';
				header("Location: $returnUrl");
				die();
			}
		}else{
			$row = array('email'=>null, 'password'=>null);
		}
	}
	
	switch ($format) { 
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/Products/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Products/$view.php";	
			include __DIR__ . "/../Views/Shared/_PublicLayout.php";
			break;
	}
	