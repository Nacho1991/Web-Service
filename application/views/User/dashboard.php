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
                        <li class=""><a href="<?php echo base_url()?>User/profile">Ver perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>User/logout">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="<?php echo base_url() ?>dashboard">Dashboard</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url()?>User/index">Usuarios</a></li>
            <li class="divider"></li>
            <li><a href="">Usuarios</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Dashboard
                    </div>
                    <div class="panel-body">
                        
                        
                        
                        
                        <!--Contenido del cuerpo de la página-->
                        
                        
                        
                        
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
</body>
</html>