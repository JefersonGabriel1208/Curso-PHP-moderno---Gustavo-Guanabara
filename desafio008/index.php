<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <main>

        <h1>Informe um número</h1>


        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="v1">Número </label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular">

        </form>

    </main>



    <section>
        <h2>Resultado Final</h2>

        <?php
        
            

        $numero= $_POST['numero'];

        echo "Analisando o número <strong>$numero</strong>, temos :  <br></br>";

        //calcular raiz quadrada e cúbica
        $raizquadrada= sqrt($numero);
        $raizcubica = pow($numero,1/3);

        echo "<li>A raiz quadrada é: $raizquadrada</li>";
        echo "<li>A raiz cúbica é: $raizcubica</li>";

        //$calQuantosSalarios= floor($salario/1380) ;
        //$valorSobra= $salario%1380 ;


        

?>

    </section>
</body>

</html>