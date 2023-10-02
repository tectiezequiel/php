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
$dolar = null;
$real = null;

if (isset($_GET['numero'])) {
    $numero = $_GET["numero"];
    $real = $numero;
    $dolar =$real/4.92;
}

// Verificar se o botão "Limpar" foi pressionado
if (isset($_GET['limpar'])) {
    $numero = null;
    $dolar = null;
    $real = null;
}

?>


<body>
    <form name="Form1" action="" method="get">
        <p>
            <label for="numero">Coloque o valor em $ Reais vai converter em $ dolares</label>
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
        <h2>O seu antecessor $ Reais é <?php echo $real; ?></h2>
        <h2>O valor em $dolares$ é <?php printf("%.1f",$dolar); ?></h2>
        
       
    </main>
</body>
</html>
