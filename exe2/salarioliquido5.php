<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
 body {
    width: 98%;
    background-image: linear-gradient(120deg, #ffff,#95f9c3,#0b3866) ; 
}
section{
    background-image:linear-gradient(120deg, #ffff,#95f9c3,#0b3866)   ;
  margin-bottom: 0.5%;

}
form {
    background-color:rgba(0, 84, 183, 0.33);
    padding: 15px;
    border-radius: 10px;
    padding: 4px;
}
form label {
    background-color:rgba(188, 229, 224, 0.67);
  
    
}
div:hover >p{
text-decoration: underline;/*quando passa p mouse quanha sublinhado */ 
color:black;
background-color: black;
}
main{
    margin-top: 0.5%;

}
</style>
<body>


<section> 
<?php 



$qh=0;
$vh=0;
$desconto=0;
$pd=0;
$sbruto=0;
$sliquido=0;
$fgts=0;
$ir=0;
    if (isset($_POST["Enviar"])) {
        $qh = $_POST["qtdhoras"];
        $vh = $_POST["vhoras"];
        //$pd = $_POST["desconto"];
        $sbruto= $qh*$vh;
        $sliquido = $sbruto - $desconto;
        
    }
if ($sliquido <=1900) {
   echo "<h3> isento </h3>";
}
elseif ($sliquido>1900 && $sliquido<2800){
$ir=$sliquido*7.5/100; echo "<h3>7.5 descotado IR<br><br></h3>";
    }
elseif ($sliquido>2800 && $sliquido<3700){
        $ir=$sliquido*15/100;echo "<h3>15 descotado IR<br><br></h3>";
    }

    elseif ($sliquido>3700 && $sliquido<4660){
                $ir=$sliquido*22.5/100;echo "<h3>22.5 descotado IR<br><br></h3>";
    }
elseif ($sliquido>4660){
        $ir=$sliquido*27.5/100;echo "<h3>27.5 descotado IR <br><br></h3>";
         }
            
//-------
    if ($sliquido <=1690) {
        $fgts=$sliquido*8/100;echo"<h3>descotado FGTS</h3>";
        }
    elseif ($sliquido>1690 && $sliquido<2800){
        $fgts=$sliquido*9/100;echo"<h3>9 descotado FGTS</h3>";
             }
     elseif ($sliquido>2800 && $sliquido<5640){
    $fgts=$sliquido*11/100;echo"<h3>11 descotado FGTS,</h3>";
            }
    elseif ($sliquido>5640){
    $fgts=$sliquido*11.5/100;echo "<h3> 11.5 descotado FGTS</h3>";
             }
                                               


$desconto= $fgts + $ir;
$sliquido = $sbruto - $desconto;


?>

            </section>





<form name="Form1"  action="" method="post">
    <p>
    <label for="qtdhoras"> Quantidade de horas trabalhadas </label>
    <input style="background-color:rgba(0, 84, 183, 0.33);"  type="text" name="qtdhoras" id="qtdhoras" value="<?php echo $qh;?>"/>
    </p>
    <p>
    <label  for="vhoras"> Valor da hora trabalhada </label>
    <input style="background-color:rgba(0, 84, 183, 0.33);"type="text" name="vhoras" id="vhoras" value="<?php echo $vh;?>"/>
    </p> 
   
    <div> 
    <p>
        <input style="background-color:rgba(0, 84, 183, 0.33)" type="submit" name="Enviar" value="Enviar"/>
    </p> </div>
  </form>
        <main style="background-image: linear-gradient(120deg, #ffff,#6699CC);">
            
            Salário Bruto:<?php echo $sbruto;?><br>
            Desconto:<?php echo $desconto;?> <br>
            Salário liquido:<?php echo $sliquido;?> <br>
            Valor do ir <?php echo $ir?><br>
            Valor do fgts <?php echo $fgts?><br>
        </main>
</body>
</html>