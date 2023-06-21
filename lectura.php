<?php
    if(isset($_POST['submit'])){
        $lectura = fopen("./datos.txt", "r") or 
        die("No se pudo leer el archivo!");
        
        while(!feof($lectura)) {
            echo fgets($lectura) . "<br>";
          }
        fclose($lectura);
    }
?>