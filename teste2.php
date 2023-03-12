<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<div>
    Calculo da Folha mensal
</div>  
        <?php
        //Recebe  os dados da página inicial
        $nome= $_POST ["nome"];
        $salario= $_POST ["salario"];
        $percentual= $_POST ["percentual"];

       $descontos=$salario*$percentual/100;
       $a_receber=$salario-$descontos;
       ?>
<div>
O funcionario:<?php echo $nome;?>
</div>
<div>
O Salario total:<?php echo $salario;?>
</div>
<div >
Valor dos Descontos:<?php echo $descontos;?>
</div>
<div >
Líquido a Receber:<?php echo $a_receber;?>
</div>
</body>
</html>