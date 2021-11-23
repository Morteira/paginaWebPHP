<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    </head>
    <body>
        
    <?php

        echo $_POST['nombre'];
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $asunto=$_POST['asunto'];
        $mensaje=$_POST['mensaje'];
  
        function mostrarDatos ($extraido) {
            if ($extraido !=NULL) {
                echo "- Nombre: ".$extraido['nombre']."<br/>";
              
            }else {
                echo "<br/>No hay más datos!!! <br/>";
            }
        }	
        //******************************************************
        include 'conexion.php';
        echo "</br>";
        $agrega= "insert into 
       contacto (idcontacto,nombre,email,asunto,mensaje,telefono) 
        values(null,'$nombre','$email','$asunto','$mensaje','$telefono')";
        
        //echo $res."</br>";
        if (mysqli_query($conn, $agrega)) {
            echo "Registro Insertado exitosamente</br>";
            $consulta= "SELECT * FROM  contacto WHERE idcontacto=(SELECT max(idcontacto) FROM contacto);";
            $result = mysqli_query($conn,$consulta);
            while ($fila = mysqli_fetch_array($result)){
                mostrarDatos($fila);
            }
            mysqli_free_result($result);
        } else {
            die(mysqli_error($conn))."</br>";
        } 
        mysqli_close($conn);
    ?>
</body>
</html>
