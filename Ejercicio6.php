<!DOCTYPE>
<html lang="en">
    <!--A06: Pedir un número entre 0 y 9.999, decir si es capicúa. -->
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 6</title>
</head>

<body>
        <form id="form1" name="form1" method="post" action="">
            
    <label><h2>INGRESE EL NUMERO:</h2></label>
        <label for="numeros"></label>
        <input type="text" name="numeros" id="numeros" />
      </p>
      <p>
        <input type="submit" name="calcular" id="calcular" value="calcular" />
        
      </p>
      
          <?php
	
                if (!empty($POST["numeros"])) {
                $numero = $POST ["numeros"];
                $numero2 = strrev ($numero);
                    
                    if ($numero == $numero2) {
                            echo "EL NUMERO $numero SI ES CAPICUA";
                    } else {
                            echo "EL NUMERO $numero NO ES CAPICUA";	 
                    }
                }
	?>
</body>
</html>
