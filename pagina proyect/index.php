<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });
</script>
</head>
<body>
<form method="POST" action="includes/process.php">
<div class="login-form">
     <h1>Iniciar Sesion</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Usuario " id="UserName" name="usuario" >
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Contraseña" id="Passwod" name="contrasena" >
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      
     <button type="submit" class="log-btn" >Ingresar</button>
     
    </form>
   </div>
</body>
</html>

