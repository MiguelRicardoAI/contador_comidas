<?php
require('../Libs/fpdf/fpdf.php');

class PDF2 extends FPDF
{
 function cabecera()
    {
        $this->SetXY(10, 40);
        $this->SetFont('Arial','B',8);
        $this->SetFillColor(128,0,0);//Fondo verde de celda
        $this->SetTextColor(240, 255, 240); //Letra color blanco
        $this->RoundedRect(10, 40, 15, 7, 2, 'FD');
        $this->CellFitSpace(15,7,'Workshop',0, 0 , 'C');  
        $this->RoundedRect(25, 40, 20, 7, 2, 'FD');
        $this->CellFitSpace(20,7,'Hotel',0, 0 , 'C');  
        $this->RoundedRect(45, 40, 10, 7, 2, 'FD');
        $this->CellFitSpace(10,7,'Room',0, 0 , 'C');  
        $this->RoundedRect(55, 40, 15, 7, 2, 'FD');
        $this->CellFitSpace(15,7,'Date',0, 0 , 'C');  
        $this->RoundedRect(70, 40, 20, 7, 2, 'FD');
        $this->CellFitSpace(20,7,'Hour',0, 0 , 'C');  
        $this->RoundedRect(90, 40, 20, 7, 2, 'FD');
        $this->CellFitSpace(20,7,'Name',0, 0 , 'C');  
        $this->RoundedRect(110, 40, 20, 7, 2, 'FD');
        $this->CellFitSpace(20,7,'Last Name',0, 0 , 'C');  
        $this->RoundedRect(130, 40, 15, 7, 2, 'FD');
        $this->CellFitSpace(15,7,'Meal',0, 0 , 'C'); 
        $this->RoundedRect(145, 40, 10, 7, 2, 'FD');
        $this->CellFitSpace(10,7,'Price',0, 0 , 'C');         
    }
    function cabecera1()
    {
        $this->SetXY(170, 40);
        $this->SetFont('Arial','B',8);
        $this->SetFillColor(128,0,0);//Fondo verde de celda
        $this->SetTextColor(240, 255, 240); //Letra color blanco
        $this->RoundedRect(170, 40, 15, 7, 2, 'FD');
        $this->CellFitSpace(15,7,'Total',0, 0 , 'C');      
    }
     
    function datos($datos)
    {  
        $this->SetXY(10,47);
        $this->SetFont('Arial','',8);
        $this->SetFillColor(229, 229, 229); //Gris tenue de cada fila
        $this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false; //Para alternar el relleno
        $ejeY = 47; //Aquí se encuentra la primer CellFitSpace e irá incrementando
        $letra = 'D'; //'D' Dibuja borde de cada CellFitSpace -- 'FD' Dibuja borde y rellena
        foreach($datos as $fila)
        {
            //Por cada 3 CellFitSpace se crea un RoundedRect encimado
            //El parámetro $letra de RoundedRect cambiará en cada iteración
            //para colocar FD y D, la primera iteración es D
            //Solo la celda de enmedio llevará bordes, izquierda y derecha
            //Las celdas laterales colocarlas sin borde
            $this->RoundedRect(10, $ejeY, 145, 7, 2, $letra);
            //$this->CellFitSpace(40,7, utf8_decode($fila['id_user']),0, 0 , 'L' );
            $this->CellFitSpace(15,7, utf8_decode($fila[0]),0, 0 , 'L' );
            $this->CellFitSpace(20,7, utf8_decode($fila[1]),'LR', 0 , 'L' );
            $this->CellFitSpace(10,7, utf8_decode($fila[2]),'LR', 0 , 'L' );
            $this->CellFitSpace(15,7, utf8_decode($fila[3]),'LR', 0 , 'L' );
            $this->CellFitSpace(20,7, utf8_decode($fila[4]),'LR', 0 , 'L' );
            $this->CellFitSpace(20,7, utf8_decode($fila[5]),'LR', 0 , 'L' );
            $this->CellFitSpace(20,7, utf8_decode($fila[6]),'LR', 0 , 'L' );
            $this->CellFitSpace(15,7, utf8_decode($fila[7]),'LR', 0 , 'L' );
            $this->CellFitSpace(10,7, utf8_decode($fila[8]),0, 0 , 'L' );         
 
            $this->Ln();
            //Condición ternaria que cambia el valor de $letra
            ($letra == 'D') ? $letra = 'FD' : $letra = 'D';
            //Aumenta la siguiente posición de Y (recordar que X es fijo)
            //Se suma 7 porque cada celda tiene esa altura
            $ejeY = $ejeY + 7;
        }

    }

    function datos1($datos)
    {  
        $this->SetXY(173,47);
        $this->SetFont('Arial','',8);
        $this->SetFillColor(229, 229, 229); //Gris tenue de cada fila
        $this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false; //Para alternar el relleno
        $letra = 'D'; //'D' Dibuja borde de cada CellFitSpace -- 'FD' Dibuja borde y rellena
        foreach($datos as $fila)
        {
            $this->RoundedRect(170, 47, 15, 7, 2, $letra);
            $this->CellFitSpace(15,7, utf8_decode($fila[0]),0, 0 , 'L' ); 
            $this->Ln();
            ($letra == 'D') ? $letra = 'FD' : $letra = 'D';
        }

    }
 
    function tabla($datos)
    {
        $this->cabecera();
        $this->datos($datos);
    }
    function tabla1($datos1)
    {
        $this->cabecera1();
        $this->datos1($datos1);
    }


    // Pie de página
    function Footer()
    {

        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        $this -> SetTextColor( 0 , 0 , 0);
        // Número de página
        $this->Cell(10,0,'HOTEL HACIENDA LOS LAURELES',0,0,'L');
        $this->cell(160);
        $this->Cell(10,0,'TEL: (951)512-1979 TEL: (951)512-1979 CEL: (951)103-3365',0,0,'R');
        $this->Ln(2);
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }
 
    //**************************************************************************************************************
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }
//**********************************************************************************************
 
 function RoundedRect($x, $y, $w, $h, $r, $style = '', $angle = '1234')
    {
        $k = $this->k;
        $hp = $this->h;
        if($style=='F')
            $op='f';
        elseif($style=='FD' or $style=='DF')
            $op='B';
        else
            $op='S';
        $MyArc = 4/3 * (sqrt(2) - 1);
        $this->_out(sprintf('%.2f %.2f m', ($x+$r)*$k, ($hp-$y)*$k ));
 
        $xc = $x+$w-$r;
        $yc = $y+$r;
        $this->_out(sprintf('%.2f %.2f l', $xc*$k, ($hp-$y)*$k ));
        if (strpos($angle, '2')===false)
            $this->_out(sprintf('%.2f %.2f l', ($x+$w)*$k, ($hp-$y)*$k ));
        else
            $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
 
        $xc = $x+$w-$r;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2f %.2f l', ($x+$w)*$k, ($hp-$yc)*$k));
        if (strpos($angle, '3')===false)
            $this->_out(sprintf('%.2f %.2f l', ($x+$w)*$k, ($hp-($y+$h))*$k));
        else
            $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
 
        $xc = $x+$r;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2f %.2f l', $xc*$k, ($hp-($y+$h))*$k));
        if (strpos($angle, '4')===false)
            $this->_out(sprintf('%.2f %.2f l', ($x)*$k, ($hp-($y+$h))*$k));
        else
            $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
 
        $xc = $x+$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2f %.2f l', ($x)*$k, ($hp-$yc)*$k ));
        if (strpos($angle, '1')===false)
        {
            $this->_out(sprintf('%.2f %.2f l', ($x)*$k, ($hp-$y)*$k ));
            $this->_out(sprintf('%.2f %.2f l', ($x+$r)*$k, ($hp-$y)*$k ));
        }
        else
            $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
        $this->_out($op);
    }
 
    function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $h = $this->h;
        $this->_out(sprintf('%.2f %.2f %.2f %.2f %.2f %.2f c ', $x1*$this->k, ($h-$y1)*$this->k,
            $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
    }



}
?>