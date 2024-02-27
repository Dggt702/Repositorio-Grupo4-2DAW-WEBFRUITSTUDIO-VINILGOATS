<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Header.css">
    <link rel="icon" type="image/png" href="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Document</title>
</head>
<body class="bg-dark">
<?php
    require_once ("TeamVista.php");
?>

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
                        <button class="dropdown-item" href="#">Setting</button>
                        <button class="dropdown-item disabled" href="#">Profile</button>
                    </div>
                </div>
            </div>

            <div id="logo-cabra">
                <a href="../VISTA/Page2.html"><img src="../IMG/LOGO_VINYL_GOATS_1_SIN_LETRAS_TRANSPARENCIA.png"></a>
            </div>
        
        </div>
    </header>

        <h1 class="container-fluid text-light mt-3">Interfaz del Administrador:</h1>
        <?php

if (isset($_POST["submitInserciones"]) && isset($_POST["tInsercion"])){
        echo TeamVista::imprimirTipoInsercion($_POST["tInsercion"]);
   
?>
      
        

<?php
}else{
?>

  <form action="" method="POST">
            <div class="container-fluid row col-3">
                <div class="input-group">
                    <select class="form-select" name="tInsercion">
                        <option disabled selected hidden>Elige el tipo de inserción</option>
                        <option value="album">Album</option>
                        <option value="artista">Artista</option>
                        <option value="cancion">Cancion</option>
                    </select>
                    <input class="btn btn-warning" type="submit" name="submitInserciones"/>
                </div>  
            </div>
        </form>

<?php

}
?>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


