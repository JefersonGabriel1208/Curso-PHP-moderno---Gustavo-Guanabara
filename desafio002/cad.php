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
            <h1>Número gerado entre 0 e 100 foi</h1>
            <p>

            <?php

            $inferior= 0;
            $superior = 100;
            
            $numero = mt_rand($inferior, $superior);
            echo $numero."<br>";  
            

            //mt_rand()= 1997 - mersene twister
            //rand - 1951 - 
            //candom_int() gera numeros aleatorios criptograficamente seguros

           


            ?>

            </p>
            <button onclick=" javascript: history.go(-1)">&#x2b05; Voltar</button>

        </main>
        
    </body>
    </html>



