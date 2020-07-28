<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php

                require_once 'Caneta.php';

                $c1 = new Caneta;
                $c1->modelo = "BIC cristtal";
                $c1->cor = "azul";                

                $c1->rabiscar();
                $c1->tampar();

                print_r($c1);
                
            ?>
        </pre>
    </body>
</html>