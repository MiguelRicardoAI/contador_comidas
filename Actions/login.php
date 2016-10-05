<?php 
	include("../Class/class.usuarios.php");
	$user= new usuarios();
	$tMovi=$_REQUEST['tMovi'];
	
	switch($tMovi){
		case 'LOGEAR':{
			$usuario=$_POST['user'];
			$psw=$_POST['psw'];
			$statu =$user->login($usuario,$psw);
			echo $statu;
		}break;
		case 'LOGOUT':{
			session_destroy(); 
		}break;
	}
?>