<?php 
include("../Class/class.person.php");
$personas= new personas();
$tMovi=$_REQUEST['tMovi'];

switch($tMovi){
	case 'GETCUARTO':{
		$idroom = $_GET["term"];
		$cuarto=$personas->getidempleados($idroom);
		$cuarto = json_encode($cuarto);
		echo $cuarto;
	    }break;
	case 'CHEKAR':{
		$cveroom=$_POST['cveroom'];
		$cvehotel=$_POST['cvehotel'];
		$valhot=$_POST['cvevh'];
		$multi=$personas->multiple();
		if ($multi==1) {
			$vacio=$personas->getdes($cveroom,$cvehotel);
			$existe=$personas->getexiste($cveroom,$cvehotel);
		if( $vacio & !$existe){
			$cadena="INSERT INTO hotel(hora,fecha,sem,h_nom,h_room,v_hot)VALUES(TIME(NOW()),NOW(),WEEK(NOW()),'$cvehotel','$cveroom','$valhot')";
			$personas->setpersonas($cadena);
			$cadena="UPDATE `hotel` SET `comida`= CASE WHEN hora BETWEEN 7 AND 11 then 'desayuno' WHEN hora BETWEEN 11 AND 15 THEN 'comida' WHEN hora BETWEEN 15 AND 21 THEN 'cena' ELSE 'err' END ";
			$personas->setpersonas($cadena);
			$cadena="UPDATE `hotel` SET `precio`= CASE WHEN h_nom='Los Laureles' and hora BETWEEN 7 AND 11 then 120 WHEN h_nom='Los Laureles' and hora BETWEEN 11 AND 15 THEN 180 WHEN h_nom='Los Laureles'and hora BETWEEN 15 AND 21 THEN 180 WHEN h_nom='Angel Inn' and hora BETWEEN 7 AND 11 then 110 WHEN h_nom='Angel Inn'and hora BETWEEN 11 AND 15 THEN 180 WHEN h_nom='Angel Inn'and hora BETWEEN 15 AND 21 THEN 180 ELSE 'err' END";
			$personas->setpersonas($cadena);
			echo 1;
		}else{
			if ($vacio) {
				echo 3;
			}else{
				echo 2;
			}
		}
		}else if($multi==2){
			$vacio=$personas->getcom($cveroom,$cvehotel);
			$existe=$personas->getexiste($cveroom,$cvehotel);
		if( $vacio & !$existe){
			$cadena="INSERT INTO hotel(hora,fecha,sem,h_nom,h_room,v_hot)VALUES(TIME(NOW()),NOW(),WEEK(NOW()),'$cvehotel','$cveroom','$valhot')";
			$personas->setpersonas($cadena);
			$cadena="UPDATE `hotel` SET `comida`= CASE WHEN hora BETWEEN 7 AND 11 then 'desayuno' WHEN hora BETWEEN 11 AND 15 THEN 'comida' WHEN hora BETWEEN 15 AND 21 THEN 'cena' ELSE 'err' END ";
			$personas->setpersonas($cadena);
			$cadena="UPDATE `hotel` SET `precio`= CASE WHEN h_nom='Los Laureles' and hora BETWEEN 7 AND 11 then 120 WHEN h_nom='Los Laureles' and hora BETWEEN 11 AND 15 THEN 180 WHEN h_nom='Los Laureles'and hora BETWEEN 15 AND 21 THEN 180 WHEN h_nom='Angel Inn' and hora BETWEEN 7 AND 11 then 110 WHEN h_nom='Angel Inn'and hora BETWEEN 11 AND 15 THEN 180 WHEN h_nom='Angel Inn'and hora BETWEEN 15 AND 21 THEN 180 ELSE 'err' END";
			$personas->setpersonas($cadena);
			echo 1;
		}else{
			if ($vacio) {
				echo 3;
			}else{
				echo 2;
			}
		}
		}else if($multi==3){
			$vacio=$personas->getcen($cveroom,$cvehotel);
			$existe=$personas->getexiste($cveroom,$cvehotel);
		if( $vacio & !$existe){
			$cadena="INSERT INTO hotel(hora,fecha,sem,h_nom,h_room,v_hot)VALUES(TIME(NOW()),NOW(),WEEK(NOW()),'$cvehotel','$cveroom','$valhot')";
			$personas->setpersonas($cadena);
			$cadena="UPDATE `hotel` SET `comida`= CASE WHEN hora BETWEEN 7 AND 11 then 'desayuno' WHEN hora BETWEEN 11 AND 15 THEN 'comida' WHEN hora BETWEEN 15 AND 21 THEN 'cena' ELSE 'err' END ";
			$personas->setpersonas($cadena);
			$cadena="UPDATE `hotel` SET `precio`= CASE WHEN h_nom='Los Laureles' and hora BETWEEN 7 AND 11 then 120 WHEN h_nom='Los Laureles' and hora BETWEEN 11 AND 15 THEN 180 WHEN h_nom='Los Laureles'and hora BETWEEN 15 AND 21 THEN 180 WHEN h_nom='Angel Inn' and hora BETWEEN 7 AND 11 then 110 WHEN h_nom='Angel Inn'and hora BETWEEN 11 AND 15 THEN 180 WHEN h_nom='Angel Inn'and hora BETWEEN 15 AND 21 THEN 180 ELSE 'err' END";
			$personas->setpersonas($cadena);
			echo 1;
		}else{
			if ($vacio) {
				echo 3;
			}else{
				echo 2;
			}
		}
		}
		}break;
}
?>