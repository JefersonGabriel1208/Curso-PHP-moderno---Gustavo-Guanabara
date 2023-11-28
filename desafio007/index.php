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

        <h1>Informe seu salário</h1>


        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="v1">Salário(R$) </label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">

            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong> </p>

            <input type="submit" value="Calcular">

        </form>

    </main>



    <section>
        <h2>Resultado Final</h2>

        <?php
        
            //quem recebe um salario de 5000 ganha 3 salarios minimos e ainda sobram R$860,00

        $salario= $_POST['salario'];
        $calQuantosSalarios= floor($salario/1380) ;
        $valorSobra= $salario%1380 ;


        echo "Quem recebe um salário de <strong>$salario</strong>, ganha <strong>$calQuantosSalarios </strong>salários mínimos e ainda sobram mais <strong>R$$valorSobra,00</strong> ";

?>

    </section>
</body>

</html>