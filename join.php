<?
include_once("config.php");
if(loggedIn()):
header('Location: members.php');
endif;
if(isset($_POST["submit"])):
	if(!($_POST["password"] == $_POST["password2"])):
		echo "<p>Password ingresados no coinciden</p>";
		exit;
	endif;
	
    $query = $coll->findOne(array('login' => $_POST['login']));

	if(empty($query)):
		newUser($_POST["login"], $_POST["password"]);
		cleanMemberSession($_POST["login"], $_POST["password"]);
		header("Location: members.php");
	else:
	  echo '<p>Usuario o password no existe, Porfavor verifique sus credenciales.</p>';
	endif;
endif;
?>

<html lang="es">
<head>
<meta charset="UTF-8">
  <title>Esneyder -Desarrollo MongoDB</title>
  <link rel="stylesheet" href="css/pragma.min.css">
  <script src="js/pragma.js"></script>
  <script src="js/validate.js"></script>
</head>
<body>
 



<form data-pragma-validate action="<?=$_SERVER["PHP_SELF"];?>" method="POST">
  <div class="row">
    <label for="usuario" class="xs-4 text-right">Usuario:</label>
    <input type="text" required      name="login" value="<?php print isset($_POST["login"]) ? $_POST["login"] : "" ; ?>"maxlength="15"
     class="xs-8" placeholder="usuario"/>
    <div class="help xs-8 xs-offset-4"></div>
  </div>
  <div class="row">
    <label for="password" class="xs-4 text-right">Contraseña:</label>
    <input type="password" required name="password" id="password" class="xs-8" placeholder="Su contraseña para iniciar sesión"/>
    <div class="help xs-8 xs-offset-4"></div>
  </div>
  <div class="row">
    <label for="password" class="xs-4 text-right">Verificación de contraseña:</label>
    <input type="password" required data-rule-equalto="password"   name="password2" class="xs-8"  placeholder="Vuelva a repetir su contraseña"/>
    <div class="help xs-8 xs-offset-4"></div>
  </div>
  <div class="row">
    <div class="xs-8 xs-offset-4">
      <button type="submit" name="submit" class="button primary">Registrarme</button>
    </div>
  </div>
</form>
</body>

</html>
