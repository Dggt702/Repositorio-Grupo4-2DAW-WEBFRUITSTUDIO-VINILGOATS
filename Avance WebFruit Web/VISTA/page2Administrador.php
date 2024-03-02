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
                            if(isset($_SESSION["usuarioAdmin"])){
                                $nombreUsuario=$_SESSION["usuarioAdmin"];
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
                <a href="../VISTA/page2Administrador.php"><img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png">Vinyl GOATS</a>
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
                <?php  
                if(isset($_SESSION["usuarioAdmin"])){ 
                    echo "<a href='page2Administrador.php'>";
                    echo "<img src='../IMG/espaniol.png'>";

                }elseif(isset($_SESSION["usuarioLogeado"]) || !isset($_SESSION["usuarioLogeado"])){
                    echo "<a href='Page2.php'>";
                    echo "<img src='../IMG/espaniol.png'>";

                } ?> </a>
                <a href="pageIngles.php"><img src="../IMG/ingles.png"></a>
            </div>

            <a href="#">Ofertas</a>
            <a href="#">Novedades</a>
            <a href="#">Categorías</a>
            <a href="contacto.php">Contacto</a>
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
                            <a href="InterfazAdministrador.php" class="nav-link text-white">
                                <i class="fs-5 fa fa-gauge"></i><span class="fs-4 ms-3 d-none d-sm-inline">I. Gráfica</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="page2Administrador.php" class="nav-link text-white">
                                <i class="fs-5 fa fa-house"></i><span class="fs-4 ms-3 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-tables-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Articulos</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-grid2"></i><span class="fs-4 ms-3 d-none d-sm-inline">Productos</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 mask">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Ordenes</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Clientes</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Contenido -->
            <div id="contenido_main" class="p-2 text-center justify-content-center">
                <!-- Sección de Vinilos -->

                <section id="vinilos" class="text-center justify-content-center">

                    <!-- Slider -->
                    <!-- Slider -->
                    <div id="sliderBlock" class="container">
                        <div class="row">
                            <div class="col">
                                <div id="slide" class="text-center">
                                    <div class="slideCapa">
                                        <div class="slider">
                                            <img src="../IMG/SLIDER/1.png" alt="">
                                            <img src="../IMG/SLIDER/2.png" alt="">
                                            <img src="../IMG/SLIDER/3.png" alt="">
                                            <img src="../IMG/SLIDER/4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--CONTENIDO PRINCIPAL-->

                    <h2 id="titulo">vINILOS</h2>
                        <!-- Plantilla para cada vinilo **copiad esto** -->
                        <!--
                        <div class="col-lg-4 col-xl-3 mb-4">
                            <div class="vinilo">
                                <img src="../IMG/VINILOS/nombre-imagen.jpg" class="img-fluid" alt="Vinilo x">
                                <a href="./infoDiscos.html">NOMBRE - ARTISTA</a>
                                <p>Precio: X €</p>
                                <button class="btn btn-primary">Añadir al carrito</button>
                            </div>
                        </div>
                        -->

                        <div id="search-group" class="input-group mb-3">
                            <input type="text" id="searchInput" class="input-group-text" placeholder="Buscar productos/servicios">
                            <button class="btn btn-secondary" onclick="search()">Buscar</button>
                        </div>
 <?php
                        require_once("../MODELO/TeamModel.php");
                        require_once("TeamVista.php");
                        require_once("../MODELO/Album.php");
                        echo TeamVista::imprimirFilaAlbum(TeamModel::getListaAlbumes());
?>

                        </div>
                        <!-- ... (repetir para otros vinilos) ... -->

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