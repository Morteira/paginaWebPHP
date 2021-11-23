<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ale.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Diseño</label>

        <ul>
          <li><a class="active" href="#">Inicio</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Contactos</a></li>
          <li><a href="#">Otros</a></li>
        </ul>
      </nav>

    <div class="contact_form">

    
     <div class="formulario">
            <h1>Formulario de contacto</h1>
            <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>

            <form action="archivoprocesa.php" method="post">  
                <p>
                    <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                    </label>
                    
                    <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>
                
                <p>
                    <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                    <label for="telefone" class="colocar_telefono">Teléfono
                    </label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>    
                
               <!--  <p>
                    <label for="website" class="colocar_website">Sitio web
                    </label>
                    <input type="url" name="introducir_website" id="website" placeholder="Escribe la URL de tu web">
                </p>  -->   
                
                <p>
                    <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="asunto" id="asunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>    
                
                <p>
                    <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                    </label>                     
                    <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                </p>                    
                
                <button type="submit" name="enviar_formulario" id="enviar" ><p>Enviar</p></button>

                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>       
            </form>
        </div>
    </div>

</body>

   
</html>


