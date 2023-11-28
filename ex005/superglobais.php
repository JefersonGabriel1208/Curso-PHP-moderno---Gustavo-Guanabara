<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                    
                setcookie("dia-da-semana","Segunda",time()+3600);
                session_start();
                $_SESSION["testee"] = "Funcionou";



                echo "<h1>SuperglobalGET</h1>";
                var_dump($_GET);

                echo "<h1>SuperglobalPOST</h1>";
                var_dump($_POST);

                echo "<h1>SuperglobalRequest</h1>";
                var_dump($_REQUEST);

                echo "<h1>SuperglobalCOOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>SuperglobalSESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal Globals</h1>";
                var_dump($GLOBALS);

            ?>

        </!--pre->
    </main>
</body>
</html>