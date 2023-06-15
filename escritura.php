
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

$file=fopen("C:\Users\ADMIN\Desktop\datos.txt", "a");
fwrite($file, PHP_EOL . "*************************" . PHP_EOL);
fwrite($file, $nombre);
fwrite($file, $apellido);
fwrite($file, $email);
fwrite($file, $edad);
fwrite($file, $nivelEstudio);
fwrite($file, $listaCurso);
fwrite($file, $masInfo);
fwrite($file, PHP_EOL . "*************************");
fclose($file);
}
?>