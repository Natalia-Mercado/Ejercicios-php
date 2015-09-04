<!DOCTYPE html>
    <!--* To change this license header, choose License Headers in Project Properties.
        * To change this template file, choose Tools | Templates
        * and open the template in the editor.-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
    
    <center>
        
       <!-- A03: Por medio de un menú dar al usuario la opción de seleccionar círculo o circunferencia si selecciona círculo calcular su área. A=PI*r^2, si selecciona circunferencia calcular su longitud.-->
        
      <p>        
          <label>
              <h3>INGRESE EL VALOR DEL RADIO</h3>
          </label>
                <input type="text" name="radio" id="radio" />
        
                <label for="opcion">
                    
                <br />
                <br />
                
                    OPCIONES
                    
                </label>
        
            <select name="opcion" id="opcion">
                
                        <option value="0">¡Seleccione Una Opcion!</option>
                        <option value="1">Círculo.</option>
                        <option value="2">Circunferencia.</option>
          
            </select>
      </p>
        
      <p>
          
        <input type="submit" name="ENVIAR" id="ENVIAR" value="ENVIAR" />
                
      </p>
        
      <p>
        
          <label for="resultado">
              
              <?php

                if (!empty($POST["opcion"])) {
	               $radio = $POST["radio"];
                   $Pi = 3.1416;
                   $a = $Pi * $radio *  $radio;
                   $l = 2 * $Pi * $radio;
	 
	               $opc = $POST["opcion"];
                    
	                   if ($opc == 1){
                           
		                  echo"<h1><center>El área del circulo es:</h1><h2><center> $a</center></h2></center><br/>";
                           
                            }else {
                           
	 	                         echo"<h1><center> La longitud de la circunferencia es:</h1><h2><center> $l</center></h2></center><br/>";	
                           
                            }
                }
  

             ?>
</body>
</html>

