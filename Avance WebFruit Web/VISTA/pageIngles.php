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

<body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Header (logo y "regístrate")-->
    <header class="bg-orange py-3">
        <div id="div-caja-header" class="d-flex justify-content-between align-items-center">
            <div id="caja-vacia" class="d-none d-sm-block">
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
                        <button class="dropdown-item" href="#">Configuration</button>
                        <a class="dropdown-item" href="../CONTROLADOR/cerrarSesion.php">Log out</a>
                    </div>
                </div>
            </div>

            <div id="logo-cabra" class="d-flex justify-content-center align-items-center">
                <a href="../VISTA/Page2.php" class="text-light">
                    <img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png" alt="Vinyl GOATS Logo">
                    Vinyl GOATS
                </a>
            </div>

            
            
            <div id="headerArribaDerecha">
                <div id="usuarioFR" class="usuario d-none d-sm-flex">
                    <a id="register" href="../VISTA/landingPage.html">REGISTER</a>
                </div>

                <i class="bi bi-cart4" id="iconCarrito" alt="Carrito de la Compra"></i>
                <div id="contenedorCarrito" class="container-cart-products hidden-cart text-white mt-5">
                    <div class="row-product">
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="cantidad-producto-carrito"></span>
                                <p class="titulo-producto-carrito">The cart is empty.</p>
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

            <a href="#">Offers</a>
            <a href="#">news</a>
            <a href="#">Categories</a>
            <a href="contacto.php">Contact</a>
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
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Clients</span>
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
                    <div class="slider-container mb-3" id="divContainer">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../IMG/SLIDER/1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../IMG/SLIDER/2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../IMG/SLIDER/3.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../IMG/SLIDER/4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>


                    <!--CONTENIDO PRINCIPAL-->

                    <h2 id="titulo">VINYLS</h2>
                        <!-- Plantilla **ANTIGUA** para cada vinilo **copiad esto** --> 
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

                        <div id="search-group" class="input-group mb-3 d-flex justify-content-center align-items-center">
                            <input type="text" id="searchInput" class="input-group-text" placeholder="Buscar productos/servicios">
                            <button class="btn btn-secondary" onclick="search()">Search</button>
                        </div>
 <?php
                        require_once("../MODELO/TeamModel.php");
                        require_once("TeamVista.php");
                        require_once("../MODELO/Album.php"); 
                        echo TeamVista::imprimirFilaAlbum(TeamModel::getListaAlbumes());
?>
                </section>     
            </div>
                
                
        </div>

        </div>
    </div>

    

    <footer id="footer">

        <div class="container-fluid">
            <div class="row">
            
                <p class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 pFooter">&copy; 2023 VinylGOATs. All rights reserved.</p>
        
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infoNosotros">
                    <p><strong>We are Vinyl Goats</strong></p>
                    <a href="quienesSomos.html">About Vinyl Goats</a>
                    <a href="sostenibilidad.html">Sustainability</a>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infoNosotros">
                    <p><strong>¿You don't have an account yet?</strong></p>
                    <a href="landingPage.html">Register in Vinyl Goats</a>
                
                </div>
            
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icons mt-2 d-flex justify-content-evenly align-items-center">
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-telegram"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-youtube"></i>
                </div>



            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
