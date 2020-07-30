<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php

                require_once 'ContaBanco.php';
                
                $p1 = new ContaBanco(); //CC
                $p2 = new ContaBanco(); //CP

                $p1->abrirConta("CC");
                $p1->setDono("Ugo");
                $p1->setNumConta(111);

                $p2->abrirConta("CP");
                $p2->setDono("Ana");
                $p2->setNumConta(222);

                $p1->depositar(300);
                $p2->depositar(500);

                $p2->sacar(1000);

                $p1->pagarPacote();
                $p2->pagarPacote();

                $p1->sacar(338);
                $p2->sacar(630);

                $p1->fecharConta();
                $p2->fecharConta();



                print_r($p1);
                print_r($p2);
                
            ?>
        </pre>
    </body>
</html>