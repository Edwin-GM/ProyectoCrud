<?php
    include 'conexion.php';
    $idusuariodelete = $_POST['id'];

    $query = $conn->prepare("DELETE FROM usuarios WHERE idusuarios = ?;");

    $datosdelete = $query->execute([$idusuariodelete]);

    if ($datosdelete === TRUE) {
        header('location:index.php');
    }else{
        echo "Error al cargar los datos";
    }

?>