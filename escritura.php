
<?php
if(isset($_POST['submit'])){
$nombre = "nombre:".$_POST['nombre']."
";
$apellido = "apellido:".$_POST['apellido']."
";
$email = "email:".$_POST['email']."
";
$edad = "edad:".$_POST['edad']."
";
$nivelEstudio = "nivelEstudio:".$_POST['nivelEstudio']."
";
$listaCurso = "listaCurso:".$_POST['listaCurso']."
";
$masInfo = "masInfo:".$_POST['masInfo']."
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