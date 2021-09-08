<?php

    session_start();
    include_once 'conexion.php';
    $usuario = $_POST['usser'];
    $contraseña = $_POST['pass'];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?");
    $query->execute([$usuario, $contraseña]);
    $datos = $query->fetch(PDO::FETCH_OBJ);

    if ($datos === FALSE) {
        header('location:login.php');
    }elseif($query->rowCount()==1){
        $_SESSION['usuario'] = $datos->usuario;
        header('location:index.php');
    }
?>
