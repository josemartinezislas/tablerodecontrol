<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
  <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  <link href="css/stylo-login.css" rel="stylesheet">
</head>
<body>
  <header>
    <article>
    <br><br>
      <p><tgrande>Tablero </tgrande><tchico>de</tchico></p>
      <p><tchico>Inversiones y Empleo</tchico></p>
    </article>

<br><br>
  </header>
  <div class="container"><!-- container -->
    <div class="row"><!-- row -->
      <div class="col-md-4 col-md-offset-4"><!-- col -->
        <div id="girandologo"><!-- imagen -->
          <img class="img-rounded img-responsive center-block" src="images/logo.png" alt="">
        </div><!-- /imagen-->
        <div class="caja">
        <form method="post"><!-- form -->
           <div class="input-group input-group-sm">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" name="user" id="user" class="form-control" placeholder="Usuario o email"></input>

        </div>
        <br>
        <div class="input-group input-group-sm">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña"></input>
        </div>
        <br>
          <div class="form-group"><!-- boton -->
            <button type="button" name="login" id="login" value="Login" class="btn btn-success">Ingresar</button>
          </div> <!-- /boton -->
          
        </form><!-- /form -->
        </div>
        <span id="result"></span>
      </div><!-- /col -->
    </div><!-- /row -->
  </div><!-- /container -->
  <br>
  <footer>
  <div class="container">
  <h3>Gobierno del Estado de Hidalgo | Secretaría de Desarrollo Económico</h3>
  </div>
  </footer>
</body>
</html>

<script>
  $(document).ready(function() {
    $('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      };
    });
  });
</script>
