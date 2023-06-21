
<?php
if(isset($_POST['submit'])){
$nombre = "Nombre:              ".$_POST['nombre']."
";
$apellido = "Apellido:            ".$_POST['apellido']."
";
$email = "Email:               ".$_POST['email']."
";
$edad = "Edad:                ".$_POST['edad']."
";
$nivelEstudio = "Nivel de Estudio:   ".$_POST['nivelEstudio']."
";
$listaCurso = "Curso Interesado:   ".$_POST['listaCurso']."
";
$masInfo = "Recibir Informacion: ".$_POST['masInfo']."
";

$datos=fopen(".\datos.txt", "a") or 
die("Problemas con la creacion");
fwrite($datos, PHP_EOL . "************************************" . PHP_EOL);
fwrite($datos, $nombre);
fwrite($datos, $apellido);
fwrite($datos, $email);
fwrite($datos, $edad);
fwrite($datos, $nivelEstudio);
fwrite($datos, $listaCurso);
fwrite($datos, $masInfo);
fwrite($datos, PHP_EOL . "************************************");
fclose($datos);
}
?>