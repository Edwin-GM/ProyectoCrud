<?php
    session_start();
    include 'conexion.php';
    $id = $_GET['id'];

    $query = $conn->prepare("SELECT * FROM usuarios WHERE idusuarios = ?");
    $query->execute([$id]);
    $datosedi = $query->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Estilos -->
    <link rel="stylesheet" href="../Estilos/estilos-edit.css">
</head>
<body>
    <section class="container">
        <section class="card card-login mx-auto text-center">
            <section class="card-header mx-auto">
                <span class="logo_title mt-5"> Editar Informacion </span>
            </section>
            <section class="card-body">
                <form action="procesoedit.php" method="POST">
                    <section class="input-group form-group">
                        <section class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                        </section>
                        <input type="text" class="form-control" name="Nombre" value="<?php echo $datosedi->Nombre;?>" >
                    </section>

                    <section class="input-group form-group">
                        <section class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                        </section>
                        <input type="text" class="form-control" name="Correo" value="<?php echo $datosedi->correo;?>" >
                    </section>

                    <section class="input-group form-group">
                        <section class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-id-badge"></i></span>
                        </section>
                        <input type="text" class="form-control" name="Usuario" value="<?php echo $datosedi->usuario;?>" >
                    </section>

                    <section class="input-group form-group">
                        <section class="input-group-prepend">
                            <span   span class="input-group-text"><i class="fas fa-key"></i></span>
                        </section>
                        <input type="password" class="form-control" name="Contraseña" value="<?php echo $datosedi->contraseña;?>">
                    </section>

                    <section class="form-group">
                        <section class="input-group-prepend">
                            <a href="index.php" class=" btn float-right edit_btn btn-danger">Cerrar</a></li>
                        </section>
                    </section>

                    <section class="form-group">
                        <section class="input-group-prepend">
                            <input type="hidden" name="id" value="<?php echo $datosedi->idusuarios;?>">
                            <input type="submit" class="btn float-right edit_btn btn-success" name="Editar" placeholder="Editar Datos." value="Editar Datos">
                        </section>
                    </section>
                </form>
            <section>
        </section>
    </section>
</section>
</body>
</html>