<?php
    include 'conexion.php';
    $idusuarioedit = $_POST['id']; 
    $Nombreedit = $_POST['Nombre'];
    $correoedit = $_POST['Correo'];
    $usuarioedit = $_POST['Usuario'];
    $passwordedit = $_POST['Contraseña'];

    $query = $conn->prepare("UPDATE usuarios SET Nombre = ?, correo = ?, usuario = ?, 
    contraseña = ? WHERE idusuarios = ?;");

    $datosedit = $query->execute([$Nombreedit,$correoedit,$usuarioedit,$passwordedit,$idusuarioedit]);

    if ($datosedit === TRUE) {
        header('location:index.php');
    }else{
        echo "Error al cargar los datos";
    }

?>