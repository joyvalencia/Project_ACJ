<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          $t=date("H");
                if ($t<"10")
                 {
                 echo "Bon matí!";
                 }
                elseif ($t<"20")
                 {
                 echo "Bona tarda!";
                 }
                else
                 {
                 echo "Bona nit!";
                 }
                 echo "hola";
                 echo "Adiós";
                 echo "hola mon"+"hola fantasma" + "adios fantasma";
        ?> 
    </body>
</html>
