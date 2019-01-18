<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Registro de usuario</h1>
    <form method="POST" action="registro.php" accept-charset="utf-8">
    Nombre de usuario: <input type="text" name="user"><br>
    Contraseña:        <input type="password" name="pass"><br>
    E-mail:            <input type="text" name="email"><br>
    <input type="submit" name="registrar" value="Enviar">
    </form>
    <?php
    if(isset($_GET['error'])){
      if ($_GET['error']==1) {
      echo "Contraseña muy corta";
    }elseif ($_GET['error']==2) {
      echo "Contraseña muy larga";
    }elseif($_GET['error']==3){
      echo "No ha introducido e-mail";
    }elseif ($_GET['error']==4) {
      echo "Usuario en blanco";
    }
    }
     ?>

  </body>
</html>
