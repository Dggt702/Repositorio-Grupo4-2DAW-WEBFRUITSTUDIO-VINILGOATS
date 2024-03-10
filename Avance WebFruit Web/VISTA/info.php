<?php

require_once "TeamVista.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Header.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Nav.css">
    <link rel="stylesheet" type="text/css" href="../CSS/InfoDiscos.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="../functions.js"></script>

    <!-- Header (logo y "regístrate")-->
    <header>
        <div id="div-caja-header">
            <div id="caja-vacia">
                <div class="dropdown open p-3">
                    <button
                        class="btn border-none dropdown-toggle text-white" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fa fa-user"></i><span class="ms-2">User</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <?php   
                            session_start();
                            if(isset($_SESSION["usuarioLogeado"])){
                                $nombreUsuario=$_SESSION["usuarioLogeado"];
                                echo "<a class='dropdown-item' href='configuracionUsuario.php'>$nombreUsuario</a>";
                            }else{
                                session_destroy();
                                echo "<a class='dropdown-item' href='./LoginIn.php'>Iniciar Sesión</a>";
                            }
                        ?>
                        <button class="dropdown-item" href="#">Configuración</button>
                        <a class="dropdown-item" href="../CONTROLADOR/cerrarSesion.php">Cerrar Sesión</a>
                    </div>
                </div>
            </div>

            <div id="logo-cabra">
                <a href="../VISTA/Page2.php"><img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png">Vinyl GOATS</a>
            </div>
            
            
            <div id="headerArribaDerecha">
                <div id="usuarioFR" class="usuario">
                    <a id="register" href="../VISTA/landingPage.html">REGISTRATE</a>
                </div>

                <i class="bi bi-cart4" id="iconCarrito" alt="Carrito de la Compra"></i>
                <div id="contenedorCarrito" class="container-cart-products hidden-cart text-white mt-5">
                    <div class="row-product">
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="cantidad-producto-carrito"></span>
                                <p class="titulo-producto-carrito">El carrito está vacío</p>
                                <span class="precio-producto-carrito"></span>
                            </div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="icon-close"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                                >
                                </path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="cart-total">
                        <h3>Total</h3>
                        <span class="total-pagar">0€</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- *Nueva* barra de navegación -->
    <nav class="navbar">
        <div id="div-caja-nav">
            <div id="idiomas">  
                <a href="Page2.php"><img src="../IMG/espaniol.png"></a>
                <a href="pageIngles.php"><img src="../IMG/ingles.png"></a>
            </div>

            <a href="#">Ofertas</a>
            <a href="#">Novedades</a>
            <a href="#">Categorías</a>
            <a href="contacto.php">Contacto</a>
        </div>
    </nav>

    <section class= "container-fluid">
        
        <?php
            
            $id = $_GET["idAlbum"];
            echo TeamVista::informacionDelAlbum($id);
                            
        ?>

    </section>

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
</body>
</html>
