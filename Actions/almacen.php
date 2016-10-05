<?php
include("../Class/class.PDF2.php");
include("../Class/class.almacen.php");
$almacen= new almacen();
$pdf = new PDF2();
$tMovi=$_REQUEST['tMovi'];
switch($tMovi){
	case 'THABS':{
			$sem=$_REQUEST['sem'];
			$habitaciones=$almacen->gethabs($sem);
			$habitaciones = json_encode($habitaciones);
			echo $habitaciones;
	        }break;
	case 'TMEALSA':{
			$sem=$_REQUEST['sem'];
			$comidas=$almacen->gettmealsa($sem);
			$comidas = json_encode($comidas);
			echo $comidas;
	        }break;
	case 'TOTANG':{
			$sem=$_REQUEST['sem'];
			$comidas=$almacen->gettotala($sem);
			$comidas = json_encode($comidas);
			echo $comidas;
	        }break;
	case 'LMEALS':{
			$sem=$_REQUEST['sem'];
			$comidas=$almacen->getmealsl($sem);
			$comidas = json_encode($comidas);
			echo $comidas;
	        }break;
	case 'AMEALS':{
			$sem=$_REQUEST['sem'];
			$comidas=$almacen->getmealsa($sem);
			$comidas = json_encode($comidas);
			echo $comidas;
	        }break;
	case 'TMEALS':{
			$sem=$_REQUEST['sem'];
			$comidas=$almacen->gettmeals($sem);
			$comidas = json_encode($comidas);
			echo $comidas;
	        }break;
	case 'COUNTER':{
		    $hotel=$_REQUEST['hotel'];
			$conteo=$almacen->getconteo($hotel);
			$conteo = json_encode($conteo);
			echo $conteo;
	        }break;
	case 'COUNTERA':{
		    $hotel=$_REQUEST['hotel'];
			$conteo=$almacen->getconteoa($hotel);
			$conteo = json_encode($conteo);
			echo $conteo;
	        }break;
	case 'COUNTERG':{
			$conteo=$almacen->getconteog();
			$conteo = json_encode($conteo);
			echo $conteo;
	        }break;
	case 'COUNTERGL':{
			$conteo=$almacen->getconteogll();
			$conteo = json_encode($conteo);
			echo $conteo;
	        }break;
	case 'GETALL':{
			$inv=$almacen->getall();
			$inv = json_encode($inv);
			echo $inv;
			}break;
	case 'GETALLTOT':{
			$inv=$almacen->getalltot();
			$inv = json_encode($inv);
			echo $inv;
		    }break;
	case 'GETALLORD':{
			$inv=$almacen->getallord();
			$inv = json_encode($inv);
			echo $inv;
		    }break;
	case 'GETCW':{
			$idmat=$_REQUEST['clave'];
			$idwork=$_REQUEST['work'];
			$invcve=$almacen->getcw($idmat,$idwork);
			$invcve = json_encode($invcve);
			echo $invcve;
		    }break;
	case 'GETCWTOT':{
			$idmat=$_REQUEST['clave'];
			$idwork=$_REQUEST['work'];
			$invcve=$almacen->getcwtot($idmat,$idwork);
			$invcve = json_encode($invcve);
			echo $invcve;
		    }break;	
	case 'GETCWORD':{
			$idmat=$_REQUEST['clave'];
			$idwork=$_REQUEST['work'];
			$invcve=$almacen->getcword($idmat,$idwork);
			$invcve = json_encode($invcve);
			echo $invcve;
		    }break;
	case 'GETW':{
			$idwork=$_REQUEST['work'];
			$invcve=$almacen->getw($idwork);
			$invcve = json_encode($invcve);
			echo $invcve;
		    }break;		
	case 'GETWTOT':{
			$idwork=$_REQUEST['work'];
			$invcve=$almacen->getwtot($idwork);
			$invcve = json_encode($invcve);
			echo $invcve;
		    }break;
	case 'GETWORD':{
			$idwork=$_REQUEST['work'];
			$invcve=$almacen->getword($idwork);
			$invcve = json_encode($invcve);
			echo $invcve;
		    }break;
	case 'REPORTEG' :{
		    $getinv=$almacen->getall();
		    $gettot2=$almacen->getalltot();
		    $pdf->AddPage();
		    $pdf->Image('../Img/cmo.png', 10, 10, 45, 30, 'PNG');
		    $pdf->Image('../Img/birs.png', 145, 5, 55, 40, 'PNG');
    	    $pdf->tabla($getinv);
    	    $pdf->tabla1($gettot2);
    	    $pdf->Output('ComidaCMO.PDF','I');
	        }break;
	case 'REPORTEH' :{
		    $hotel=$_REQUEST['hotel'];
		    $getho=$almacen->getho($hotel);
		    $gethtot=$almacen->gethtot($hotel);
		    $pdf->AddPage();
		    $pdf->Image('../Img/cmo.png', 10, 10, 45, 30, 'PNG');
		    $pdf->Image('../Img/birs.png', 145, 5, 55, 40, 'PNG');
    	    $pdf->tabla($getho);
    	    $pdf->tabla1($gethtot);
    	    $pdf->Output('ComidaCMO.PDF','I');
	        }break;
	case 'REPORTEHW' :{
		    $idmat=$_REQUEST['hotel'];
		    $idwork=$_REQUEST['work'];
		    $getcw=$almacen->gethw($idmat,$idwork);
		    $getcwtot=$almacen->gethwtot($idmat,$idwork);
		    $pdf->AddPage();
		    $pdf->Image('../Img/cmo.png', 10, 10, 45, 30, 'PNG');
		    $pdf->Image('../Img/birs.png', 145, 5, 55, 40, 'PNG');
    	    $pdf->tabla($getcw);
    	    $pdf->tabla1($getcwtot);
    	    $pdf->Output('ComidaCMO.PDF','I');
	        }break;
	case 'REPORTEHWC' :{
		    $hotel=$_REQUEST['hotel'];
		    $idwork=$_REQUEST['room'];
		    $worksh=$_REQUEST['work'];
		    $getcw=$almacen->gethwc($hotel,$idwork,$worksh);
		    $getcwtot=$almacen->gethwctot($hotel,$idwork,$worksh);
		    $pdf->AddPage();
		    $pdf->Image('../Img/cmo.png', 10, 10, 45, 30, 'PNG');
		    $pdf->Image('../Img/birs.png', 145, 5, 55, 40, 'PNG');
    	    $pdf->tabla($getcw);
    	    $pdf->tabla1($getcwtot);
    	    $pdf->Output('ComidaCMO.PDF','I');
	        }break;
	
}
?>