<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$servername = "localhost";
$database = "informaticatp";
$username = "root";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database,3307);
// Check connection
if (!$conn) {
    die("Conexion ha fallado: " . mysqli_connect_error());
}else
echo "Conexion Satisfactoria";

//mysqli_close($conn);
?>
</body>
</html>