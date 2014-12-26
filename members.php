<?
include_once("config.php");

if(!loggedIn()):
header('Location: index.php');
endif;

print("Bienvenido <b>".$_SESSION["login"]."</b><br>\n");
 
print("<a href=\"logout.php"."\">Salir</a>");
?>
