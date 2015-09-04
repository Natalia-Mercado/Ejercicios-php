<!DOCTYPE>
<html lang="en">
    <!--A04: Pedir un número entre 0 y 9.999 y mostrarlo con las cifras al revés-->
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
</head>

<body>
    
            <form id="form1" name="form1" method="post" action="">
    <center>
    
      <p>
            <label><h2>Ingrese el numero</h2></label>
            <input type="text" name="numero" id="numero" />
        
      </p>
      
      <p>
          
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
                
      </p>
      
      <p>
            <label for="resultado">
                
            <?php
            
                    if (!empty($POST["numero"])) {
                    $numero = $POST["numero"];
                    $numerostring=(string)$numero;
                    $resultado="";
                    
                            for ($i = strlen($numero); $i >=0; $i--) {
                            $resultado.=$numerostring[$i];
                            }
                            
            echo "El valor al reves es:$resultado <br/>";
               
         }
 
            ?>
</body>
</html>



