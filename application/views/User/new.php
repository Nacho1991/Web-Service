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
                <form class="form form-vertical"  action="<?php echo base_url('User/registrar') ?>" method="post" accept-charset="utf-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Registrar usuario
                            </div>
                        </div>
                        <div class="panel-body">     
                            <div class="control-group">
                                <label>Nombre:</label>
                                <div class="controls">
                                    <input placeholder="Nombre y apellidos" class=form-control type="text" name="nombre" />
                                </div>
                            </div>   
                            <fieldset>
                                <div class="control-group">
                                    <legend>Datos de acceso</legend>
                                    <div class="controls">
                                        <label>Nombre de usuario:</label>
                                        <input type="text" class="form-control" placeholder="Dígite su nombre de usuario" name="nombreusuario">
                                    </div>
                                    <div class="controls">
                                        <label>Contraseña: 
                                            <input size="30" placeholder="Dígite su contraseña" class="form-control" type="password" name="contrasenna" />
                                        </label>
                                        <label>Contraseña:
                                            <input size="30" placeholder="Vuelva a digitar la contraseña" class="form-control" type="password" name="verificarcontrasenna" />
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div><!--/panel content-->
                        <div class="panel-footer">
                            <center>
                                <input type="submit" value="Registrar" name="btnRegistrar" class="btn btn-info">
                                <a href="<?php echo base_url(); ?>User/index"><button class="btn btn-success" type="button">Atrás</button></a>
                            </center>
                        </div>
                    </div><!--/panel-->
                </form>
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
</body>
</html>
