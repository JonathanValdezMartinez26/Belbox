<?php 
    $active6="active"; 
    include "head.php"; 
    include "header.php"; 
    include "aside.php";
?>
    
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1>Alta Usuarios</h1>
            <ol class="breadcrumb">
                <li><a href="Home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Usuarios</li>
            </ol>
        </section>
        <section class="content"><!-- Main content -->
            <div class="register-box">
                <div id="result"></div>
                <div class="register-box-body">
                    <p class="login-box-msg">Ingrese los Datos del Nuevo Usuario</p>
                    <form method="post" id="add" name="add">
                        <div class="form-group has-feedback">
                            <input type="text" name="fullname" class="form-control" placeholder="Nombre y Apellidos*" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico*" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña*" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <p class="text-muted text-right">Campos Obligatorios* </p>
                        <div class="row">
                            <div class="">
                                <button id="save_data" type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                            </div><!-- /.col -->
                        </div>
                    </form>

                </div><!-- /.form-box -->
            </div><!-- /.register-box -->
        </section>
    </div><!-- /.content -->
    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>




    <script>
        $(document).ready(function(){
            load(1);
        });

        $( "#add" ).submit(function( event ) {
            $('#save_data').attr("disabled", true);

            var parametros = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "action/adduser.php",
                data: parametros,
                beforeSend: function(objeto){
                    $("#result").html("Mensaje: Cargando...");
                },
                success: function(datos){
                    $("#result").html(datos);
                    $('#save_data').attr("disabled", false);
                    load(1);
                }
            });
            event.preventDefault();
        })
    </script>
<?php include "footer.php"; ?>