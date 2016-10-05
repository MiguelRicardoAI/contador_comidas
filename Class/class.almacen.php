<?php
require_once('class.db.php');
class almacen extends db{
		var $cadena;
		function almacen(){
			$this->cadena = "";
			$this->abreConexion();
		}
        //Angel inn
        function getmealsa($sem){
            $this->cadena="SELECT date_format(fecha, '%W') fecha, comida, count(comida) conteo, sum(precio) precio, CASE WHEN comida = 'desayuno' THEN '14' WHEN comida = 'comida' THEN '14' WHEN comida = 'cena' THEN '14' ELSE 'err' END pagadas, CASE WHEN count(comida) BETWEEN 0 AND 14 then 0 WHEN count(comida) BETWEEN 14 AND 24 THEN ( count(comida)-14 ) ELSE 'err' END extras, CASE WHEN count(comida) BETWEEN 0 AND 14 then 0 WHEN count(comida) BETWEEN 14 AND 24 THEN ( count(comida)-14 ) * precio ELSE 'err' END subtotal from hotel where sem=$sem and v_hot='Angel Inn' group by fecha, comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['fecha'];
                     $arraymatnom[1]= $fila['comida'];
                     $arraymatnom[2]= $fila['conteo'];
                     $arraymatnom[3]= $fila['precio'];
                     $arraymatnom[4]= $fila['pagadas'];
                     $arraymatnom[5]= $fila['extras'];
                     $arraymatnom[6]= $fila['subtotal'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function gethabs($sem){
            $this->cadena="SELECT  count(roomp)-14 numero,costo costo2, ((count(roomp)-14)*costo*5) total FROM persona WHERE hot_nom='Angel Inn' and semp=$sem";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['numero'];
                     $arraymatnom[1]= $fila['costo2'];
                     $arraymatnom[2]= $fila['total'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function gettmealsa($sem){
            $this->cadena="SELECT  count(roomp)-14 numero,costo_d costo2, ((count(roomp)-14)*costo_d*5) total FROM `persona` WHERE hot_nom='Angel Inn' and semp=$sem";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['numero'];
                     $arraymatnom[1]= $fila['costo2'];
                     $arraymatnom[2]= $fila['total'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function gettotala($sem){
            $this->cadena="SELECT ((count(roomp)-14)*costo*5)+((count(roomp)-14)*costo_d*5) total FROM `persona` WHERE hot_nom='Angel Inn' and semp=$sem";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['total'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }

        //Laureles
        function getmealsl($sem){
            $this->cadena="SELECT date_format(fecha, '%W') fecha, comida, count(comida) conteo, sum(precio) precio, CASE WHEN comida = 'desayuno' THEN '21' WHEN comida = 'comida' THEN '35' WHEN comida = 'cena' THEN '35' ELSE 'err' END pagadas, CASE WHEN count(comida) BETWEEN 0 AND 35 then 0 WHEN count(comida) BETWEEN 35 AND 47 THEN ( count(comida)-35 ) ELSE 'err' END extras, CASE WHEN count(comida) BETWEEN 0 AND 35 then 0 WHEN count(comida) BETWEEN 35 AND 47 THEN ( count(comida)-35 ) * precio ELSE 'err' END subtotal from hotel where sem=$sem and v_hot='Los Laureles' group by fecha, comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['fecha'];
                     $arraymatnom[1]= $fila['comida'];
                     $arraymatnom[2]= $fila['conteo'];
                     $arraymatnom[3]= $fila['precio'];
                     $arraymatnom[4]= $fila['pagadas'];
                     $arraymatnom[5]= $fila['extras'];
                     $arraymatnom[6]= $fila['subtotal'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function gettmealsl($sem){
            $this->cadena="SELECT  count(roomp)-35 numero,costo_d costo2, ((count(roomp)-14)*costo_d*5) total FROM `persona` WHERE hot_nom='Los Laureles' and semp=$sem";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['numero'];
                     $arraymatnom[1]= $fila['costo2'];
                     $arraymatnom[2]= $fila['total'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function getconteog(){
            $this->cadena="SELECT COUNT(comida) num, comida FROM hotel WHERE fecha LIKE DATE( NOW( ) ) GROUP BY comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['num'];
                     $arraymatnom[1]= $fila['comida'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function getconteogll(){
            $this->cadena="SELECT COUNT(comida) num, comida FROM hotel WHERE fecha LIKE DATE( NOW( ) ) and v_hot='Los Laureles' GROUP BY comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['num'];
                     $arraymatnom[1]= $fila['comida'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function getconteo($hotel){
            $this->cadena="SELECT COUNT(comida) num, comida FROM hotel WHERE fecha LIKE DATE( NOW( ) ) and h_nom='$hotel' GROUP BY comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['num'];
                     $arraymatnom[1]= $fila['comida'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }
        function getconteoa($hotel){
            $this->cadena="SELECT COUNT(comida) num, comida FROM hotel WHERE fecha LIKE DATE( NOW( ) ) and h_nom='$hotel' and v_hot='Angel Inn' GROUP BY comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                     $arraymatnom[0]= $fila['num'];
                     $arraymatnom[1]= $fila['comida'];
                     $arrayinsu[$cont]=$arraymatnom;
                    $cont++; 
               }
               return $arrayinsu;
            }
        }

        function getall(){
            $this->cadena="SELECT works,h_room,h_nom,dp_nom,dp_app,hora,fecha,comida,precio FROM persona INNER JOIN hotel on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['works'];
                    $arrayinv[1]= $fila['h_nom'];
                    $arrayinv[2]= $fila['h_room'];
                    $arrayinv[3]= $fila['hora'];
                    $arrayinv[4]= $fila['fecha'];
                    $arrayinv[5]= $fila['dp_nom'];
                    $arrayinv[6]= $fila['dp_app'];
                    $arrayinv[7]= $fila['comida'];
                    $arrayinv[8]= $fila['precio'];
                    $arrayinvfam[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvfam;
            }
        }
        function getalltot(){
            $this->cadena="SELECT count(id_h) numero,comida,sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
        function getallord(){
            $this->cadena="SELECT count(id_h) numero,comida,sum(precio) costo FROM hotel group by comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['numero'];
                    $arrayinv[1]= $fila['comida'];
                    $arrayinv[2]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
        function getcw($idmat,$idwork){
            $this->cadena="SELECT works,h_room,h_nom,fecha,hora,dp_nom,dp_app,comida,precio FROM persona INNER JOIN hotel on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where works='$idwork' and roomp=$idmat ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinvcveswr[0]= $fila['works'];
                    $arrayinvcveswr[1]= $fila['h_nom'];
                    $arrayinvcveswr[2]= $fila['h_room'];
                    $arrayinvcveswr[3]= $fila['hora'];
                    $arrayinvcveswr[4]= $fila['fecha'];
                    $arrayinvcveswr[5]= $fila['dp_nom'];
                    $arrayinvcveswr[6]= $fila['dp_app'];
                    $arrayinvcveswr[7]= $fila['comida'];
                    $arrayinvcveswr[8]= $fila['precio'];
                    $arrayins[$cont]=$arrayinvcveswr;
                    $cont++;
               }
               return $arrayins;
            }
        }
        function getcwtot($idmat,$idwork){
            $this->cadena="SELECT sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where roomp=$idmat  and works='$idwork' ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
        function getcword($idmat,$idwork){
            $this->cadena="SELECT count(id_h) numero,comida,sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where roomp=$idmat  and works='$idwork' group by comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['numero'];
                    $arrayinv[1]= $fila['comida'];
                    $arrayinv[2]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
        function getw($idwork){
            $this->cadena="SELECT works,h_room,h_nom,dp_nom,dp_app,hora,fecha,comida,precio FROM persona INNER JOIN hotel on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where works='$idwork'";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['works'];
                    $arrayinv[1]= $fila['h_nom'];
                    $arrayinv[2]= $fila['h_room'];
                    $arrayinv[3]= $fila['hora'];
                    $arrayinv[4]= $fila['fecha'];
                    $arrayinv[5]= $fila['dp_nom'];
                    $arrayinv[6]= $fila['dp_app'];
                    $arrayinv[7]= $fila['comida'];
                    $arrayinv[8]= $fila['precio'];
                    $arrayinvfam[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvfam;
            }
        }
        function getwtot($idwork){
            $this->cadena="SELECT sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where works='$idwork' ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
        function getword($idwork){
            $this->cadena="SELECT count(id_h) numero,comida,sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where works='$idwork' group by comida";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['numero'];
                    $arrayinv[1]= $fila['comida'];
                    $arrayinv[2]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
        function getho($hotel){
            $this->cadena="SELECT works,h_room,h_nom,dp_nom,dp_app,hora,fecha,comida,precio FROM persona INNER JOIN hotel on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where h_nom='$hotel'";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['works'];
                    $arrayinv[1]= $fila['h_nom'];
                    $arrayinv[2]= $fila['h_room'];
                    $arrayinv[3]= $fila['hora'];
                    $arrayinv[4]= $fila['fecha'];
                    $arrayinv[5]= $fila['dp_nom'];
                    $arrayinv[6]= $fila['dp_app'];
                    $arrayinv[7]= $fila['comida'];
                    $arrayinv[8]= $fila['precio'];
                    $arrayinvfam[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvfam;
            }            
        }
        function gethtot($hotel){
            $this->cadena="SELECT sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where h_nom='$hotel'";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['costo'];  
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }
                function gethwc($idmat,$idwork,$worksh){
            $this->cadena="SELECT works,h_room,h_nom,fecha,hora,dp_nom,dp_app,comida,precio FROM persona INNER JOIN hotel on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where h_nom='$idmat' and roomp='$idwork' and works='$worksh' ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinvcveswr[0]= $fila['works'];
                    $arrayinvcveswr[1]= $fila['h_nom'];
                    $arrayinvcveswr[2]= $fila['h_room'];
                    $arrayinvcveswr[3]= $fila['hora'];
                    $arrayinvcveswr[4]= $fila['fecha'];
                    $arrayinvcveswr[5]= $fila['dp_nom'];
                    $arrayinvcveswr[6]= $fila['dp_app'];
                    $arrayinvcveswr[7]= $fila['comida'];
                    $arrayinvcveswr[8]= $fila['precio'];                    
                    $arrayins[$cont]=$arrayinvcveswr;
                    $cont++; 
               }
               return $arrayins;
            }
        }
        function gethwctot($idmat,$idwork,$worksh){
            $this->cadena="SELECT sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where h_nom='$idmat' and roomp='$idwork' and works='$worksh' ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }

        
        //PRUEBAS
        function gethw($idmat,$idwork){
            $this->cadena="SELECT works,h_room,h_nom,fecha,hora,dp_nom,dp_app,comida,precio FROM persona INNER JOIN hotel on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where h_nom='$idmat' and works='$idwork'";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinvcveswr[0]= $fila['works'];
                    $arrayinvcveswr[1]= $fila['h_nom'];
                    $arrayinvcveswr[2]= $fila['h_room'];
                    $arrayinvcveswr[3]= $fila['hora'];
                    $arrayinvcveswr[4]= $fila['fecha'];
                    $arrayinvcveswr[5]= $fila['dp_nom'];
                    $arrayinvcveswr[6]= $fila['dp_app'];
                    $arrayinvcveswr[7]= $fila['comida'];
                    $arrayinvcveswr[8]= $fila['precio'];                    
                    $arrayins[$cont]=$arrayinvcveswr;
                    $cont++; 
               }
               return $arrayins;
            }
        }
        function gethwtot($idmat,$idwork){
            $this->cadena="SELECT sum(precio) costo FROM hotel INNER JOIN persona on persona.roomp=hotel.h_room and persona.hot_nom=hotel.h_nom and persona.semp=hotel.sem where h_nom='$idmat' and works='$idwork' ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                 $cont=0;
                while($fila = $this->assoc()){
                    $arrayinv[0]= $fila['costo'];                    
                    $arrayinvt[$cont]=$arrayinv;
                    $cont++; 
               }
               return $arrayinvt;
            }
        }


        //PRUEBAS

		function setalmacen($cadena){
			$this->cadena =$cadena;
			$this->insertarBD();
		}
	}
?>
