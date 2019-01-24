
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    function valida_email($email) {
        if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $email)) return true;
        else return false;
    }

    function genera_random($longitud){
       $exp_reg="[^A-Z0-9]";
       return substr(preg_replace($exp_reg, "", md5(rand())) .
         preg_replace($exp_reg, "", md5(rand())) .
         preg_replace($exp_reg, "", md5(rand())),
         0, $longitud);
    }
   include ("../projecto/acesodb.php");
   if (strlen($_REQUEST['pass'])>=8 && strlen($_REQUEST['pass'])<=16 && valida_email($_REQUEST['email'])== true && $_REQUEST["user"] != NULL) {

    mysqli_query($db,"insert into login (user , pass , email) values ('$_REQUEST[user]','$_REQUEST[pass]','$_REQUEST[email]')") or die("Problemas en el SELECT");

    mysqli_close($db);

    echo "<h2>Registro correcto</h2>";
  }elseif(strlen($_REQUEST['pass'])<8) {

    header("Location: Login.php?error=1");
  }elseif (strlen($_REQUEST['pass'])>16) {

    header('Location: Login.php?error=2');
  }elseif(valida_email($_REQUEST['email'])== false){

    header("Location: Login.php?error=3");
  }elseif($_REQUEST["user"] == NULL){
    header("Location: Login.php?error=4");  
  }
    ?>

  </body>
</html>
