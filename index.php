<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Desplegant una aplicacióPHP sobre Heroku</title>
  </head>
  <body>
      <?php 
        echo "Afegint Cookies<br>";
        echo "Sóc el desenvolupar aasama1617daw2@gmail.com";
        setcookie("nom", "Jaume Pons", time()+3600, "/", "", 0);
        setcookie("edat", "20", time()+3600, "/", "", 0);
        setcookie("cicle", "DAW", time()+3600, "/", "", 0);
        setcookie("curs", "2n", time()+3600, "/", "", 0);
        setcookie("any", "2016-2017s", time()+3600, "/", "", 0);

       ?>
  </body>
</html>