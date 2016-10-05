<?php
session_start(); 
require_once('class.db.php');
class usuarios extends db{
		var $cadena;
		function usuarios(){
			$this->cadena = "";
			$this->abreConexion();
		}
		function login($usuario,$psw){
			$this->cadena="SELECT user_nom,user_pwd FROM usuarios WHERE user_nom='$usuario' AND user_pwd='$psw' ";
			$band_result = $this->consultar($this->cadena);
			if($band_result){
				while($fila = $this->assoc()){
					$user=$fila['user_nom'];
					$pass=$fila['user_pwd'];
				}
				if (empty($user)){
					$stado=0;
				}else{
					if(($user==$usuario)&&($pass==$psw)){
						$stado=1;
						$_SESSION['cve_usuario'] = $user;
						$_SESSION['cve_psw'] = $pass;
					}else{
						if($user==$usuario){
							$stado=2;
						}else{
							$stado=3;
						}
					}
				}
			}
			return $stado;
		}
		
		function setusuario($cadena){
			$this->cadena =$cadena;
			$this->insertarBD();
		}
	}
?>