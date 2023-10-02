<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos de RH</title>
    <link rel="stylesheet" href="../backp/style.css">
</head>


  
<?php 
/*
$vh=0;
$qh=0;
$pd=0; 
// recebeu os valores por get

if (isset($_get["vh"]) ) {
    $vh=$_GET["vh"];
    $qh=$_GET["qh"];
    $pd=$_GET["pd"];
}*/
$qh=0;
$vh=0;
$desconto=0;
$pd=0;
$sbruto=0;
$sliquido=0;
$fgts=0;
$ir=0;
$mult=0;
    if (isset($_POST["Enviar"])) {
        $qh = $_POST["qtdhoras"];
        $vh = $_POST["vhoras"];
       // $pd = $_POST["desconto"];
        $sbruto= $qh*$vh;
        $desconto = ($sbruto * $pd) /100;  
        $sliquido = $sbruto - $desconto;
       
    }
if ($sliquido <=1900) {
    echo "isento desconto IR";
}
elseif ($sliquido>1900 && $sliquido<2800){
$ir=$sliquido*7.5/100;echo"<br> 7.5% desconto IR";
    }
elseif ($sliquido>2800 && $sliquido<3700){
        $ir=$sliquido*15/100;echo"<br> 15% desconto IR";
    }
elseif ($sliquido>3700 && $sliquido<4660){
                $ir=$sliquido*22.5/100;echo"<br> 22.5% desconto IR";
    }
elseif ($sliquido>4660){
        $ir=$sliquido*27.5/100;echo"<br> 27.5% desconto IR";
            }
//-------
    if ($sliquido <=1690) {
        $fgts=$sliquido*8/100; echo "<br> 0% desconto FGTS";
        }
    elseif ($sliquido>1690 && $sliquido<2800){
        $fgts=$sliquido*9/100; echo "<br> 9% desconto FGTS";
             }
     elseif ($sliquido>2800 && $sliquido<5640){
    $fgts=$sliquido*11/100;echo "<br> 11% desconto FGTS ";
            }
    elseif ($sliquido>5640){
    $fgts=$sliquido*11.5/100;echo "<br> 11% desconto FGTS";
             }
                                               

             $desconto = $fgts+$ir;  
             $sliquido = $sbruto - $desconto;




?>
    <body>
    <form name="Form1"  action="" method="post">
    <p>
    <label for="qtdhoras"> Quantidade de horas trabalhadas </label>
    <input type="text" name="qtdhoras" id="qtdhoras" value="<?php echo $qh;?>"/>
    </p>
    <p>
    <label for="vhoras"> Valor da hora trabalhada </label>
    <input type="text" name="vhoras" id="vhoras" value="<?php echo $vh;?>"/>
    </p> 
      
    <p>
        <input type="submit" name="Enviar" value="Enviar"/>
    </p>
  </form>
  <header>
        <h2>Salário Bruto:<?php echo $sbruto;?> </h2>
        <h2>Salário liquido:<?php echo $sliquido;?> </h2>  
        <h2>Valor do ir <?php echo $ir?></h2>
        <h2>Valor do fgts <?php echo $fgts?></h2>
        </header>
       
</body>
</html>