<?php
    session_start();
    
    if(isset($_SESSION["username"])){
        $user = $_SESSION["username"];
    }else{
        header('Location: ./login.php');
    }
    
    if(isset($_SESSION["completo"])){
        echo '<div class="alerta" role="alert">Imagen cargada con exito!</div> ';
        
        unset($_SESSION["completo"]);
    }
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/styles.css">
    <title>Form img</title>
</head>
<body>
    <h1 class="">Admin-Formulario de imagenes</h1>
    <div class="formulario">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenido <?php echo $user; ?></h3>
                <a href="cerrar.php?cerrar=yes">Cerrar sesión</a>
                <form action="./controller/procesarForm.php" method="post" enctype="multipart/form-data">
                    <div class="">
                        <label for="" class="controls">Ingrese descripción</label>
                        <textarea class="controls" name="description" id="description" cols="10" rows="1"></textarea>
                    </div>
                    <div class="">
                        <input class="controls" type="file" name="foto" id="img">
                    </div>
                    
                        <button class="btn-submit" type="submit" name="btn-agregar">Agregar imagen</button>
                    
                </form>

            </div>
            
        </div>
    </div>
    <div>

</body>
</html>