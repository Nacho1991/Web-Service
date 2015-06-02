<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">
                Multicomercial El Naranjo
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Bienvenido <?php echo $usuario->Nombre ?>!
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Configuraciones</li>
                        <li class=""><a href="<?php echo base_url() ?>User/profile">Ver perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url() ?>User/logout">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="<?php echo base_url() ?>dashboard">Dashboard</a></li>
            <li class="divider"></li>
            <li class="active"><a href="<?php echo base_url() ?>User/index">Usuarios</a></li>
            <li class="divider"></li>
            <li><a href="">Usuarios</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="row">
            <div class="col-md-9">
                <a href="<?php echo base_url() ?>User/nuevo"><button class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>Nuevo
                    </button></a>
                <br>
                <br>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Lista de usuarios
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover" id="dev-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($users != NULL) {
                                    foreach ($users->result()as $row) {
                                        echo
                                        "<tr>"
                                        . "<td>{$row->Id}</td>"
                                        . "<td>{$row->Nombre}</td>"
                                        . "<td id=option-user  WIDTH=35%>"
                                        . "<a href=" . base_url() . "User/delete/{$row->Id}>" . form_button(array('name' => 'btneliminar', 'class' => "btn-danger", 'content' => 'Eliminar', 'id' => $row->Id)) . "</a>"
                                        . form_button(array('name' => 'btnmodificar', 'class' => 'btn-warning', 'content' => 'Modificar', 'id' => $row->Id))
                                        . form_button(array('data-toggle' => 'modal', 'data-target' => '#detallesuser', 'name' => 'btndetalles', 'class' => 'btn-primary', 'content' => 'Detalles', 'id' => 'detalles', 'name' => $row->Id))
                                        . "</td>"
                                        . "</tr>"
                                        . "";
                                    }
                                } else {
                                    echo "<tr><td colspan=3><center>No hay usuarios registrados</center></td></tr>";
                                }
                                ?>              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Acerca de</div>
                    <div class="panel-body">
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Desarrollador</div>
                    <div class="panel-body">
                        Ignacio Valerio Vega
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Detalles del producto</h4>
            </div>
            <div id="modalbody" class="modal-body">
                <div class="form-group">
                    <label for="registrodetalles">N° Registro:</label>
                    <input name="nombre" readonly="" id="registrodetalles" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="nombredetalles">Nombre:</label>
                    <input name="nombre" readonly="" id="nombredetalles" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="nombreusuario">Nombre de usuario:</label>
                    <input name="nombreusuario" readonly="" id="nombreusuario" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="contrasenna">Contraseña:</label>
                    <input name="contrasenna" readonly="" id="contrasenna" type="password" class="form-control" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#option-user .btn-warning").bind("click", function () {
        alert('dafas');
    });
    $("#option-user .btn-primary").bind("click", function () {
        var id = $(this).attr("id");
        $.ajax({
            url: 'https://192.168.0.100/User/detalles/' + id,
            type: 'GET',
            accepts: '',
            success: function (data) {
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(JSON.stringify(textStatus, jqXHR['status']));
            }
        });
    });
</script>
</body>
</html>