<?php 
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('location:index.php');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
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
    <link rel="stylesheet" href="../Estilos/estilos.css">
</head>
<body>
    <section class="container">
        <section class="card card-login mx-auto text-center">
            <section class="card-header mx-auto .bg-secondary">
                <span class="logo_title mt-5"> Iniciar Seccion </span>
            </section>

            <section class="card-body">
                <form action="procesologin.php" method="POST">

                    <section class="input-group form-group">
                        <section class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </section>
                        <input type="text" class="form-control" name="usser" placeholder="usuario" >
                    </section>

                    <section class="input-group form-group">
                        <section class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </section>
                        <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                    </section>

                    <section class="form-group">
                        <input type="submit" name="btn" class="btn btn-outline-primary float-right login_btn" name="guardar" value="Iniciar Seccion">
                    </section>
                </form>
            <section>
        </section>
    </section>
</section>
</body>
</html>