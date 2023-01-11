<?php
session_start();
if(isset($_REQUEST['cerrar'])) {

    $_SESSION['username'] = NULL;
    unset($_SESSION['username']);

    session_destroy();
    
    header('Location: ./index.php');
}

?>