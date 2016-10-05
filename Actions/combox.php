<?php
if (isset($_REQUEST['tCat']) and ($_REQUEST['tCat'] != "")) {
		$tcat = $_REQUEST['tCat'];
		include("../Class/class.combox.php");
		$combos=new Combos();
		switch($tcat){
			case 'GETPLACA':{
				$catsalida= $combos->getplacas();
			}break;
			case 'GETHOTEL':{
				$catsalida= $combos->gethotel();
			}break;
			case 'GETWORK':{
				$catsalida= $combos->getwork();
			}break;
		}
		print $catsalida;
	}
?>