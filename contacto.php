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

    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="acerca.html">Acerca de</a>
            <a href="producto.html">Producto</a>
            <a href="servicies.html">Servicios</a>
            <a href="contacto.php">Contacto</a>
            <a href="preguntas.html">Preguntas Frecuentes</a>
        </nav>
        <section class="textos-header">
            <h1>Universidad Cátolica Nuestra Señora de la Asunción</h1>
            <h2>Sede Guarambaré</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;">
                </path>
            </svg>
        </div>
    </header>

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


    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <a href="https://www.facebook.com/unicatolicapy" target="_blank"><h4>Facebook</h4></a>
                <p></p>
            </div>
            <div class="content-foo">
                <a href="https://api.whatsapp.com/send?phone=595981515514&text=Quiero%20hacer%20una%20consulta" target="_blank"><h4>Whatsaap</h4></a>
                <p></p>
            </div>
            <div class="content-foo">
                <a href="https://www.instagram.com/unicatolicapy/" target="_blank"><h4>Instagram</h4></a>
                <p></p>
            </div>
            <div class="content-foo">

                <p>
                    <a href="https://maps.google.com/?q=-25.498665,-57.464824" target="_blank" style="color: #fff;">  <h4>Location</h4></a>
                </p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Alejandro, Ana, Carlos </h2>
    </footer>

</body>

   
</html>


