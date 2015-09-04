<!DOCTYPE>
<html lang="en">
    <!--A07: Solicitar al usuario el total de kilómetros que recorre su automóvil 
    si con un litro se recorre 16.4 kilómetros, y desplegar cuantos litros de gasolina gastará, 
    redondear el resultado para que no muestre decimales.-->
    
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 7</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
    <center>
        
        <label><h2>Ingrese total de kilometros que recorre su automovil:</h2></label>
        <input type="text" name="kilometros" id="kilometros" />
        </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </p>
        
      </p>
      <label for="resultado">
      
        <?php
            if (!empty($GET["kilometros"])) {
            $k= $GET["kilometros"];
            $li=1/16.4;
            $r=$li;
            $t=$r*$k;
            $T= round($T);
            printf("%.0f",$T)."litros de gasolina";
                
        } echo $T." son el total de litros gastados";

        ?>
      </body>
      </html>