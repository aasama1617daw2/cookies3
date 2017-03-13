<html> 
    <head> 
        <meta charset="UTF­8"> 
        <title>Desplegant una aplicació PHP sobre Heroku</title> 
    </head> 
    <body> 
        <?php 
            echo "Afegint Cookies<br>"; 
            echo "Sóc el desenvolupador aasama1617@gmail.com"; 
            setcookie("nom", "Jaume Pons", time()+3600, "/", "", 0); 
            setcookie("edat", "20", time()+3600, "/", "", 0); 
            setcookie("cicle", "DAW", time()+3600, "/", "", 0); 
            setcookie("curs", "2n", time()+3600, "/", "", 0); 
            setcookie("any", "2016­2017", time()+3600, "/", "", 0);            
        ?>  
    </body>    
</html>