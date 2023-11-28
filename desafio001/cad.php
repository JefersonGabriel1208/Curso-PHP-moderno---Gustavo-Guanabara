<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
        
        
    </head>
    <body>
        <main>
            <h1>Resultado Final</h1>
            <p>

            <?php 
            //pegar o numero
            $n= $_REQUEST["num"] ?? 0;
            $a= $n - 1;
            $s= $n + 1;
            echo "O numero escolhido foi <strong>$n</strong>,";
            echo " o seu antecessor é <strong>$a</strong>";
            echo " e o seu sucessor é <strong>$s</strong>";

            ?>

            </p>
            <button onclick=" javascript: history.go(-1)">&#x2b05; Voltar</button>

        </main>
        
    </body>
    </html>



