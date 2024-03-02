<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinylGOATs</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Header.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Nav.css">
    <link rel="stylesheet" type="text/css" href="../CSS/SectionCSS/Aside.css">
    <link rel="stylesheet" type="text/css" href="../CSS/SectionCSS/Slider.css">
    <link rel="stylesheet" type="text/css" href="../CSS/SectionCSS/SectionMain.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Footer.css">
    <link rel="icon" type="image/png" href="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../JavaScript/functions.js"></script>
</head>

<body onload="slider()">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                            }elseif(isset($_SESSION["usuarioAdmin"])){
                                $nombreUsuario=$_SESSION["usuarioAdmin"];
                                echo "<a class='dropdown-item' href='configuracionUsuario.php'>$nombreUsuario</a>";
                            }else{
                                session_destroy();
                                echo "<a class='dropdown-item' href='./LoginIn.php'>Iniciar Sesión</a>";
                            }
                        ?>
                        <button class="dropdown-item" href="#">Setting</button>
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

    <!-- Barra de navegación -->
    <nav class="navbar">
        <div id="div-caja-nav">
            <div id="idiomas">  
                <a href="Page2.php"><img src="../IMG/espaniol.png"></a>
                <a href="pageIngles.php"><img src="../IMG/ingles.png"></a>
            </div>

            <a href="#">Ofertas</a>
            <a href="#">Novedades</a>
            <a href="#">Categorías</a>
            <a href="#">Contacto</a>
        </div>
    </nav>

    <!-- MAIN SECTION -->

    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- Aside con  barra lateral -->
            <div class="bg-dark col-auto col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-between d-none d-sm-block">
                
                
                <div class="bg-dark p-2">
                  
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-gauge"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="Page2.php" class="nav-link text-white">
                                <i class="fs-5 fa fa-house"></i><span class="fs-4 ms-3 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-tables-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Articles</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-grid2"></i><span class="fs-4 ms-3 d-none d-sm-inline">Products</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 mask">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Customers</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div id="map" style='width:30%'>
                <script src="../JavaScript/scriptMapa.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
            </div>

            <div id="informacion" style='width:50%; display:flex ; flex-direction:column; margin-top:10em; align-items:center; color:white;'>
               <h1>Nuestra Ubicación</h1>
               <h4>Direccion: Carr. de Guadarrama, 85, 28260 Galapagar, Madrid</h4>
               <h4>Numero de Contacto: +34 689904521</h4>
               <h4>Correo eletrónico: contacto@vinylgoats.com</h4>            
            </div>
                </section>
            </div>

        </div>
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
</body>
</html>
