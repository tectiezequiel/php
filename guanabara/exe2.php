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
$gera = null;

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];


if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
	$gera = rand(1,100);
}}


// Verificar se o botão "Limpar" foi pressionado
if (isset($_GET['limpar'])) {
    $numero = null;
    $gera = null;
   
}

?>

<body>
    <form name="Form1" action="" method="get">
        <p>
        
            <label for="numero">Faça sua aposta:</label>
            <input type="text" name="numero" id="numero"/>
           

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
        <h2>Você perdeu, tente novamente.<?php echo $gera;?>                                             </h2>
        
    </main>
    <?php 
    if ($numero >= 0 && $numero <= 100) {
        // O número está dentro do limite válido (0 a 100)
        // Faça o que deseja com o número válido
    } else {
        // O número está fora do limite válido
        echo "<strong>O número deve estar entre 0 e 100.</strong>";
    }
 
?>
</body>
</html>
