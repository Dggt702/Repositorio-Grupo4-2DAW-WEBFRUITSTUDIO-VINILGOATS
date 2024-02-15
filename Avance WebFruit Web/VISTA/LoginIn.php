<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinylGOATs</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Header.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Footer.css">
    <link rel="stylesheet" type="text/css" href="../CSS/LandingPage.css">
    <link rel="stylesheet" type="text/css" href="../CSS/cssSignIn.css">

    <link rel="icon" type="image/png" href="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png" />
    <link rel="stylesheet" href="../CSS/cssSignIn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Untitled-1.css">
</head>

<body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <header>

        <div id="logo-cabra">
            <a href="Page2.html"><img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png">Vinyl GOATS</a>
            
        </div>
        <div class="usuario">
            <a href="landingPage.html">Registrate</a>
          
        </div>
    </header>
    <!---Dioggo: He puesto aca un div, debido a que si no lo está, no habra separacion entre el 
        header, Section y Aside, si alguien conoce alguna forma en la que se pueda arreglar eso, comentelo, o agreguelo--->


    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 container">    
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 arow" id="centrar" style="border:none;">
        
            <h2 id="tituloIniciar">Iniciar Sesión</h2>
            <img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png" id="imagenLogo">
      

        <form method="post" action="../CONTROLADOR/controlSignIn.php" id="registroForm">
          
            <label class="textoLogin" >Correo electrónico<span class="error">*</span>:</label>
            <input id="correo" class="campos" type="email" name="Correo" placeholder="Correo"/>
            <br>
            <div id="errorC"> <!-- Un div para poner los mensajitos de los errores del correo -->

            </div>
            <label for="password" class="textoLogin">Contraseña<span class="error">*</span>:</label>
            <input id="password" class="campos" type="password" name="Contraseña" placeholder="Contraseña"/>
            <br>

            <div id="submitCaja">
                <input type="submit" value="Ingresar" id="submitButton" name="submit">
            </div>
        
        </form>
        </div>
        </div>    
</div>

<div id="separador">
    <section>
        <!-- ... Contenido de la sección ... -->
    </section>

    <aside>
        <!-- ... Contenido del aside ... -->
    </aside>
</div>




<footer id="footer">
    <div class="container-fluid">
        <div class="row">
        
            <p class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 pFooter">&copy; 2023 VinylGOATs. Todos los derechos reservados.</p>
       
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infoNosotros">
                <p><strong>We are Vinyl Goats</strong></p>
                <a href="quienesSomos.html">Sobre Vinyl Goats</a>
                <a href="sostenibilidad.html">Sostenibilidad</a>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infoNosotros">
                <p><strong>¿Aún no tienes cuenta?</strong></p>
                <a href="landingPage.html">Registrase en Vinyl Goats</a>
              
            </div>
        
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icons">
                <img id="icon" src="../Icons/whatsapp.png" alt="Icono de WhatsApp">
                <img id="icon" src="../Icons/telegram.png" alt="Icono de Telegram">
                <img id="icon" src="../Icons/twitter.png" alt="Icono de Twitter">
                <img id="icon" src="../Icons/instagram.png" alt="Icono de Instagram">
                <img id="icon" src="../Icons/facebook.png" alt="Icono de Facebook">
                <img id="icon" src="../Icons/youtube.png" alt="Icono de Youtube">
            </div>

        </div>
    </div>
</footer>
    <script src="../JavaScript/functions.js"></script>
</body>
    
</html>



