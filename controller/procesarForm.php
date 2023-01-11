<?php

session_start();
if (isset($_REQUEST['btn-agregar'])) {
    $nombreIMG = $_FILES['foto']['name'];
    if(empty($_POST['description']) || empty($nombreIMG)){
        echo "<script language='JavaScript'> alert('Por favor complete todos los campos.'); 
        location.assign('index.php');</script>";
    }else{
        
        require_once('../config/conexion.php');
            $nombreIMG = $_FILES['foto']['name'];
            $temporal = $_FILES['foto']['tmp_name'];
            $carpeta = '../img';
            $ruta = $carpeta.'/'.$nombreIMG;
            move_uploaded_file($temporal, $carpeta.'/'.$nombreIMG);
            
            $description = $_POST['description'];
        
            $query= "INSERT INTO imagen (ruta, descripcion) VALUES('$ruta','$description')";
        
            $execute = mysqli_query($connect, $query) or die(mysqli_error($conexion));
        
            $bandera = "completo";
            if($execute){
                $_SESSION["completo"] = true;
                
                header("Location: ../index.php");
            }
            else{
                echo "Ocurrio un error";
            }
        }
    }