<?php

class db
{
    function abreConexion($base = "cmo", $host = "localhost", $usuario = "prueba", $password = "cmo2016")
    {
        $this->hostServidor = $host;
        $this->usuarioBD = $usuario;
        $this->passBD = $password;
        $this->nomBD = $base;
       
        $this->linkConexion = mysql_connect($this->hostServidor, $this->usuarioBD, $this->passBD);
        if (!$this->linkConexion)
        {
            die("No se puede conectar con el servidor: " . mysql_error());
        } else
        {
            mysql_select_db($this->nomBD);
        }
    }
    function cierraConexion()
    {
        mysql_close($this->linkConexion);
    }

	
	function consultar()
	{
		$this->consulta = mysql_query($this->cadena,$this->linkConexion);
		return true ;
	}
	
	function insertarBD()
	{
		$this->consulta= mysql_query($this->cadena,$this->linkConexion);
		return true;
	}
	
	public function assoc() {
        if ($this->result = mysql_fetch_assoc($this->consulta)) {
            return $this->result;
        }else{
            return false;
        }
    }
    
}
?>