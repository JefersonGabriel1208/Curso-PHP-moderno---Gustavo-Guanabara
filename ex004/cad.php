    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
        
        
    </head>
    <body>
        <header>
            <h1>Resultado do processamento</h1>
        </header>

        <main>
            <?php 
                //var_dump($_REQUEST);//variável superglobal
                //$_get, $_post, $_Cookies

                $n= $_GET["nome"] ??"sem nome" ;
                $s= $_GET["sobrenome"] ??"desconhecido";

                echo "É um prazer te conhecer  <strong>$n $s</strong> !! Bem vindo ao meu site!!";

                
            ?>

            
                <a href="index.html">Voltar para a página anterior</a>
        </main>
        
    </body>
    </html>



