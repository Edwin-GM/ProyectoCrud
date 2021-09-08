<?php
    session_start();
    include ("conexion.php");
    $query = $conn->query("SELECT * FROM usuarios;");
    $insert = $query->fetchAll(PDO::FETCH_OBJ);


    if (!isset($_SESSION['usuario'])) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Estilos -->
    <link rel="stylesheet" href="../Estilos/estilos-index.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js">

</head>
<body>
    <section class="navbar-light bg-color">
        <nav class="navbar-brand text-right">
            <h1><?php  echo "<h4>Bienvenido - ".$_SESSION['usuario']."</h4>"?></h1>
        </nav>
        <a href="insert.php" class="btn btn-ing btn-block">
            <span class="input-icon"><i class="fas fa-user-edit"></i></span>Ingresar Datos</a></li>
        <a href="out.php" class="btn btn-success btn-block">
            <span class="input-icon"><i class="fas fa-power-off"></i></span>Cerrar Seccion</a></li>
    </section>
    <section class="container card-body mx-auto">
        <section class="row">
            <section class="col-lg-12">
                <section class="table-responsive">
                    <table id=tablapersonas class="table table-striped table-bordered table-condensed" style="width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th>Acciones Editar / Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                foreach($insert as $datoin){
                            ?>
                                <tr>
                                    <td><?php echo $datoin->idusuarios;?></td>
                                    <td><?php echo $datoin->Nombre;?></td>
                                    <td><?php echo $datoin->correo;?></td>
                                    <td><?php echo $datoin->usuario;?></td>
                                    <td>
                                        <section class="text-center">
                                            <section class="btn-group">
                                                <a href="edit.php?id=<?php echo $datoin->idusuarios;?>" class="btn btn-success btn-block">
                                                <span class="input-icon"><i class="fas fa-edit"></i></span>Editar</a></li>
                                            </section>
                                            <section class="btn-group">
                                                <a href="delete.php?id=<?php echo $datoin->idusuarios;?>" class="btn btn-danger btn-block">
                                                    <span class="input-icon"><i class="fas fa-trash-alt"></i></span>Eliminar</a></li>
                                            </section>
                                        </section>
                                    </td>
                                </tr>
                            <?php
                                }

                            ?>        
                        </tbody>
                    </table>
                </section>
            </section>
        </section>
    </section>
</body>
</html>
