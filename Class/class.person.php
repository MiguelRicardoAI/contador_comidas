<?php
require_once('class.db.php');
class personas extends db{
		var $cadena;
		function personas(){
			$this->cadena = "";
			$this->abreConexion();
		}
		function setpersonas($cadena){
			$this->cadena =$cadena;
			$this->insertarBD();
		}
		function getidempleados($idroom){
             $this->cadena = "SELECT roomp FROM persona WHERE roomp LIKE'%".$idroom."%' GROUP BY roomp";
             $band_result = $this->consultar($this->cadena);
             if($band_result){
                $num=0;
                while($fila = $this->assoc()){
                    $arraycuarto[0]= $fila['roomp'];
                    $arraycuart[$num]=$arraycuarto;
                 $num++;
                }
                return $arraycuart;
            }
        }
        function multiple(){
            $multi=0;
            $this->cadena="SELECT time(now()) tim FROM dual ";
            $band_result = $this->consultar($this->cadena);
            if($band_result){
                while($fila = $this->assoc()){
                    $hora= $fila['tim'];
               }
            $hora = substr($hora, -8,2); 
            if ($hora>=7 && $hora<=11) {
                $multi=1;
            }else if ($hora>=11 && $hora<=15){
                $multi=2;
            }else if($hora>=15 && $hora<=21){
                $multi=3;
            }else{
                $multi=0;
            }
            return $multi;
            }
            
        }        

        function getdes($cveroom,$cvehotel){
            $stado=false;
            $this->cadena="SELECT h_room FROM hotel INNER JOIN persona ON hotel.h_room=persona.roomp AND hotel.h_nom=persona.hot_nom AND hotel.sem=persona.semp WHERE h_room=$cveroom AND fecha LIKE date(now()) AND h_nom='$cvehotel' and comida='desayuno'";
            $band_result = $this->consultar($this->cadena);
             if($band_result){
                while($fila = $this->assoc()){
                    $array['h_room']= $fila['h_room'];
                }
                if(empty($array)){
                    $stado=true;
                }else{
                    $stado=false;
                }
                return $stado;            
            }
        }
        function getcom($cveroom,$cvehotel){
            $stado=false;
            $this->cadena="SELECT h_room FROM hotel INNER JOIN persona ON hotel.h_room=persona.roomp AND hotel.h_nom=persona.hot_nom AND hotel.sem=persona.semp WHERE h_room=$cveroom AND fecha LIKE date(now()) AND h_nom='$cvehotel' and comida='comida'";
            $band_result = $this->consultar($this->cadena);
             if($band_result){
                while($fila = $this->assoc()){
                    $array['h_room']= $fila['h_room'];
                }
                if(empty($array)){
                    $stado=true;
                }else{
                    $stado=false;
                }
                return $stado;            
            }
        }
        function getcen($cveroom,$cvehotel){
            $stado=false;
            $this->cadena="SELECT h_room FROM hotel INNER JOIN persona ON hotel.h_room=persona.roomp AND hotel.h_nom=persona.hot_nom AND hotel.sem=persona.semp WHERE h_room=$cveroom AND fecha LIKE date(now()) AND h_nom='$cvehotel' and comida='cena'";
            $band_result = $this->consultar($this->cadena);
             if($band_result){
                while($fila = $this->assoc()){
                    $array['h_room']= $fila['h_room'];
                }
                if(empty($array)){
                    $stado=true;
                }else{
                    $stado=false;
                }
                return $stado;            
            }
        }

        function getchekador($cveroom,$cvehotel){
            $stado=false;
            $this->cadena="SELECT h_room FROM hotel INNER JOIN persona ON hotel.h_room=persona.roomp AND hotel.h_nom=persona.hot_nom AND hotel.sem=persona.semp WHERE h_room=$cveroom AND fecha LIKE date(now()) AND h_nom='$cvehotel'";
            $band_result = $this->consultar($this->cadena);
             if($band_result){
                while($fila = $this->assoc()){
                    $array['h_room']= $fila['h_room'];
                }
                if(empty($array)){
                    $stado=true;
                }else{
                    $stado=false;
                }
                return $stado;            
            }
        }
        function getexiste($cveroom,$cvehotel){
            $stado=false;
            $this->cadena="SELECT roomp FROM persona where roomp=$cveroom and hot_nom='$cvehotel'";
            $band_result = $this->consultar($this->cadena);
             if($band_result){
                while($fila = $this->assoc()){
                    $array['roomp']= $fila['roomp'];
                }
                if(empty($array)){
                    $stado=true;
                }else{
                    $stado=false;
                }
                return $stado;  
            }
        }
	}
?>