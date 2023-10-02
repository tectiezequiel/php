<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>
    <link rel="stylesheet" href="../RH/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        h3 {
            position: relative;
            top: 250px;
            left: 300px;
            margin-left: 100px;
            color: black;
            background-color: rgba(0, 0, 0, 0.2);
        }
        div{
            position: relative;
            margin-left: 100px;
            text-align: center;
            color: black;
            background-color: rgba(0, 0, 0, 0.2);
            margin-left: 300px;
            margin-right: 300px;
        }


     
        
        form {
            position: relative;
            margin-left: 300px;
            margin-right: 300px;
            text-align: center;
            color: black;
            background-color: rgba(0, 0, 0, 0.2);
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    
<form id="for" action="" method="get">
    <p>Valor para ser calculado</p>
    <input type="text" name="numero"><br>
    <input type="Submit" name="Enviar" value="Enviar">
</form>

<?php 
function fatorial($numero) {
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
    $soma = 0;
    $media = 0;
    $fat = 1;

    if ($numero > 0) {
        for ($i = 1; $i <= $numero; $i++) {
            $soma += $i;
            $fat *= $i;
        }
        $media = $soma / $numero;
    }
}
?>

<?php if (isset($numero) && $numero > 0): ?>
    <div>
    <h2>Você pediu para contar até <?php echo $numero; ?></h2>
    <h2>Todos os valores somados deram <?php echo $soma; ?></h2>
    <h2>Média: <?php echo $media; ?></h2>
    <h2>Fatorial: <?php echo $fat; ?></h2>
<?php elseif (isset($numero) && $numero == 0): ?>
    <h2>O número digitado é zero. Por favor, digite um número válido diferente de zero.</h2>
<?php elseif (isset($numero)): ?>
    <h2>Por favor, digite um número válido.</h2>
    </div>
<?php endif; ?>
</body>
</html>