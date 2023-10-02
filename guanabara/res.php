<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Desafio exe5</title>
</head>

<body>
<main>
<h1>Analisador de Número</h1>
    <?php 
            if (isset($_GET['n'])) {
                $num = $_GET["n"]?? 0;
            
            }
         echo " Analisando o número <strong>". number_format($num, 3, ",", ".")." informado pelo usuario:";

            $int = (int) $num;
            $fra = $num - $int;

        echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0,",", ".")."</strong></li>";    
        echo "<li> A parte fracionário do número é <strong>". number_format($fra, 3, ",", ".")."</strong></li></ul>";  
        ?>
        </main>
        
    
    

<button onclick="javascript:history.go(-1)">Voltar</button> 
   
        
</body>
</html>