<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinylGOATs</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
    <link rel="stylesheet" type="text/css" href="../CSS/navbar.css"> <!-- Agregamos el nuevo archivo CSS para la barra de navegación -->
    <link rel="icon" type="image/png" href="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png" />
    <script src="../JavaScript/functions.js"></script>
</head>
<body onload="slider()">
    <!-- Header (logo y "regístrate")-->
    <header>
        <div id="logo-cabra">
            <a href="../VISTA/Page2.html"><img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png">Vinyl GOATS</a>
        </div>
        
        <div id="usuario" class="usuario">
            <a id="register" href="../VISTA/landingPage.html">REGISTRATE</a>
        </div>
    </header>

    <!-- *Nueva* barra de navegación -->
    <nav class="navbar">
        <div id="idiomas">  
            <a href=""><img src="../IMG/espaniol.png"></a>
            <a href=""><img src="../IMG/ingles.png"></a>
        </div>

        <a href="#">Ofertas</a>
        <a href="#">Novedades</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
    </nav>

    <!-- Slider -->
    <div id="slide">
        <div class="slideCapa">
            <div class="slider">
                <img src="../IMG/SLIDER/1.png" alt="">
                <img src="../IMG/SLIDER/2.png" alt="">
                <img src="../IMG/SLIDER/3.png" alt="">
                <img src="../IMG/SLIDER/4.png" alt="">
            </div>
        </div>
    </div>

    <!-- Sección de Vinilos -->
    <section id="vinilos">
        <h2>Vinilos Disponibles</h2>
        <div class="row">
            <div class="vinilo-container">
            <!-- Plantilla para cada vinilo **copiad esto** -->
            <!-- 
            <div class="vinilo">
                <img src="IMG/VINILOS/ .jpg" alt="Vinilo x">
                <p>Título</p>
                <p>Precio: x €</p>
                <button>Añadir al carrito</button>
            </div>
            -->

            <?php
                $tv = new TeamVista();
            ?>
               
            </div>
        </div>
    </section>

    <footer id="footer">
        <p id="pFooter">&copy; 2023 VinylGOATs. Todos los derechos reservados.</p>
        <div id="icons">
            <img id="icon" src="../Icons/whatsapp.png" alt="Icono de WhatsApp">
            <img id="icon" src="../Icons/telegram.png" alt="Icono de Telegram">
            <img id="icon" src="../Icons/twitter.png" alt="Icono de Twitter">
            <img id="icon" src="../Icons/instagram.png" alt="Icono de Instagram">
            <img id="icon" src="../Icons/facebook.png" alt="Icono de Facebook">
            <img id="icon" src="../Icons/youtube.png" alt="Icono de Youtube">
        </div>
        
    </footer>
</body>
</html>