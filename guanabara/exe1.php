<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Guanabara php1 </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<?php
$numero = null;
$maior = null;
$menor = null;

if (isset($_GET['numero'])) {
    $numero = $_GET["numero"];
    $menor = $numero - 1;
    $maior = $numero + 1;
}

// Verificar se o botão "Limpar" foi pressionado
if (isset($_GET['limpar'])) {
    $numero = null;
    $maior = null;
    $menor = null;
}

?>


<body>
    <form name="Form1" action="" method="get">
        <p>
            <label for="numero">Quantidade de horas trabalhadas:</label>
            <input type="text" name="numero" id="numero" value="<?php echo $numero; ?>"/>
        </p>
        <div>
            <p>
                <input type="submit" name="Enviar" value="Enviar"/>
                <input type="submit" name="limpar" value="Limpar"/> <!-- Botão Limpar -->
            </p> 
        </div>
    </form>
    
    <main>
        <h2>O número escolhido foi <?php echo $numero; ?></h2>
        <h2>O seu antecessor é <?php echo $menor; ?></h2>
        <h2>O seu sucessor é <?php echo $maior; ?></h2>
    </main>
</body>
</html>
