
    <?php    

    function linkResource($rel, $href) {
        echo "<link rel='{$rel}' href='{$href}'>";
        }  
        include_once("./formularioPhp.php");
        include_once("./escritura.php");
       
        echo $nombre;
        echo "<br>";
        echo $apellido;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $edad;
        echo "<br>";
        echo $nivelEstudio;
        echo "<br>";
        echo $listaCurso;
        echo "<br>";
        echo $masInfo;
        echo "<br>";

        include_once("./lectura.php");
        
    ?>
