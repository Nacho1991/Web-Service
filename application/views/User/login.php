<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Iniciar sesión</div>
            </div>     
            <form method="post" accept-charset="utf-8" id="loginform" action="<?php echo base_url('User/authenticate') ?>" class="form-horizontal" role="form">
                <div style="padding-top:30px" class="panel-body" >
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Nombre de usuario">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                </div>
                <div style="margin-top:10px" class="panel-footer">
                    <center>
                        <input type="submit" class="btn btn-success" value="Iniciar sesión">
                    </center>
                </div>
            </form>  
        </div>  
    </div>
</div>
</body>
</html>