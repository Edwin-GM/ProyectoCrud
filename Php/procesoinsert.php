<?php

    include 'conexion.php';
    $Nombredb = $_POST['Nombre'];
    $correodb = $_POST['Correo'];
    $usuariodb = $_POST['Usuario'];
    $passworddb = $_POST['Contraseña'];

    $query = $conn->prepare("INSERT INTO usuarios(Nombre,correo,usuario,contraseña) 
    VALUES (?,?,?,?)");

    $query->bindParam(1,$Nombredb);
    $query->bindParam(2,$correodb);
    $query->bindParam(3,$usuariodb);
    $query->bindParam(4,$passworddb);

    if ($query->execute()) {
        header('location:index.php');
    }else{
        echo "Error al cargar los datos";
    }
?>