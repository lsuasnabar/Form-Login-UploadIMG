<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>login</title>
</head>
<body>
    <?php
        include_once('./config/conexion.php');
        session_start();
        if(isset($_REQUEST['btn-agregar'])){
            if(empty($_POST['username']) || empty($_POST['password'])){
                echo "Por favor ingrese los datos obligatorios";
            }else{
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $query = "SELECT * FROM users WHERE username= '".$username."' and password ='".$password."'";
                
                $execute = mysqli_query($connect, $query);
        
                if($fila = mysqli_fetch_assoc($execute)){
                    $_SESSION['username'] = $_POST['username'];
                    echo $_SESSION['username'];
                    echo "<script language='JavaScript'> location.assign('./index.php'); </script>";
                    
                }else{
                    echo "<script language='JavaScript'> alert('Datos incorrectos.'); 
                    location.assign('login.php');</script>";
                }
            }
        }else{
            
        ?>

    <h1 class="">Ingrese sus credenciales</h1>
    <div class="formulario form-login">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenido</h3>

                <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div class="">
                        <label for="" class="controls">Usuario:</label>
                        <input class="controls" type="text" name="username" id="username" placeholder="Ingrese su usuario">
                    </div>
                    <div class="">
                        <label for="" class="controls">Contraseña:</label>
                        <input class="controls" type="password" name="password" id="password">
                    </div>
                    
                        <button class="btn-submit" type="submit" name="btn-agregar">Ingresar</button>
                    
                </form>

            </div>
            
        </div>
    </div>
    <div>
    <?php } ?>
</body>
</html>