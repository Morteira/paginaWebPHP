<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php


function mostrarDatos ($extraido) {
if ($extraido !=NULL) {
	echo "- Código: ".$extraido['nombre']."<br/>";
	}

else {echo "<br/>No hay más datos!!! <br/>";}
}	
//******************************************************
include 'conexion.php';

$consulta="SELECT * FROM contacto ";

$result = mysqli_query($conn,$consulta);

while ($fila = mysqli_fetch_array($result)){

	mostrarDatos($fila);

}

mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>