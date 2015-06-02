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
            <div class="col-md-9" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Información del perfil</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <strong>Avatar</strong>
                                <img alt="User Pic" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Dog.svg/120px-Dog.svg.png" class="img-circle"> 
                                <a data-toggle="modal" data-target="#avatar" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-upload"></i>  Cambiar avatar</a>
                            </div>
                            <div class=" col-md-9 col-lg-9 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td><strong>Nombre:</strong></td>
                                            <td>
                                                <div class="controls">
                                                    <input type="text" class="form-control" readonly="" value="<?php echo $usuario->Nombre ?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td><strong>Género:</strong></td>
                                            <td>
                                                <div class="controls">
                                                    <select class="form-control" name="sexo">
                                                        <option value="Masculino">Máculino</option>
                                                        <option value="Masculino">Femenino</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Nombre de usuario:</strong>
                                            </td>
                                            <td>
                                                <div class="controls">
                                                    <input readonly="" class="form-control" type="text" value="<?php echo $usuario->Nombre_Usuario ?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Contraseña:</strong>
                                            </td>
                                            <td>
                                                <div class="controls">
                                                    <input value="<?php echo md5($usuario->Contrasenna) ?>" readonly="" class="form-control" type="text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Fecha de nacimiento:</strong>
                                            </td>
                                            <td>
                                                <div class="controls">
                                                    <input readonly="" id="fechanacimiento" type="text" class="form-control" value="12/12/12">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <center>
                            <a href="" id="editar" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>  Editar</a>
                            <a href="<?php echo base_url() ?>User/index" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
                        </center>
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

<!--Modal encargado de cargar la foto de perfil-->
<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cargar avatar</h4>
            </div>
            <div id="modalbody" class="modal-body">
                <center>
                    <div class="form-group">
                        <input id="file-3" type="file" multiple=false>
                    </div>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#file-3").fileinput({
        showCaption: false,
        browseClass: "btn btn-primary",
        fileType: "png"
    });
</script>
</body>
</html>

