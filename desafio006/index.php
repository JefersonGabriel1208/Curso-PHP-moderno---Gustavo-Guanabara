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

        <h1>Anatomia de uma divisão</h1>


        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            Dividendo: <input type="number" name="dividendo"><br>
            Divisor: <input type="number" name="divisor"><br>

            <input type="submit" value="Calcular">

        </form>

    </main>



    <section>
        <h2>Estrutura da divisão</h2>

        <?php
        
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dividendo = $_POST["dividendo"];
    $divisor = $_POST["divisor"];

    $quociente = floor($dividendo / $divisor);
    $resto = $dividendo % $divisor;

    echo "<pre>";
    echo " " . $dividendo . " |" . $divisor . "<br>";
    echo str_repeat("-", strlen($dividendo) + 2) . "|" . str_repeat("-", strlen($divisor)) . "<br>";
    echo " " . $quociente  .     " R". $resto;
    echo "</pre>";


    echo "Dividendo: $dividendo <br>";
    echo "Divisor: $divisor <br>";
    echo "Quociente: $quociente <br>";
    echo "Resto: $resto";
}
?>
        ?>

    </section>
</body>

</html>