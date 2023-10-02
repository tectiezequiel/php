<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando for</title>
 
</head>





<body>
    <div>
    <form id="for"action=""method="get">
    <p>Valor para ser calculado</p>
    <input type="text" name="numero"></br>
    <select name="missao">
					<option value="0">Calcular Fatorial(01)</option>
					<option value="1"> A Soman dos Nun(02)</option>
					<option value="2"> Calculo de Média(03)</option>
                    <option value="3"> Calculo de Frações(04)</option>
				</select>
    <input type="Submit" name="calc" value="executar">
</form>
 </div>   



<?php
//(1) Função para calcular o fatorial de um número
function calcularFatorial($numero) {
    $fatorial = 1;
    
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}
// (2)Função para calcular a soma dos números de 1 até o valor fornecido

function somanumero($numero) {
    

    $somanumero = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $somanumero += $i;
    
    }
    return $somanumero;
}
// (3) Função para calcular a média dos números de 1 até o valor fornecido


function media($numero)
{
    $somanumero = somanumero($numero);
    $media = $somanumero / $numero-0.5;

    return $media;}
// (4) Função para calcular FRACAO
function Fracao($numero)
{
    $fracao = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $fracao += 1 / $i;
    }

    return $fracao;

}
    ?>
<?php 
    if(isset($_GET["numero"])){
        $numero=$_GET["numero"];

        

    if(isset($_GET["missao"])){
        $opc=$_GET["missao"];
    
       switch ($opc) {
           case 0:
               // Fatorial		
               if ($numero < 0 || !is_numeric($numero) || $numero != intval($numero)) {
                   echo "Número inválido. Por favor, digite um número inteiro positivo.";
                   exit; 
               }	
               $resultado = calcularFatorial($numero);
               echo "Número inválido. Por favor, digite um número inteiro positivo.";
               break;
               
           case 1:
               //Soma
              $resultado = somanumero($numero);
              echo "<br>(2) O Soma de numero $numero é: $resultado";
              break;
           case 2:
               // Média
               $resultado  = media($numero);
               echo "<br> (3)Média da soma $numero é: $resultado";			
               break;
           case 3:
               // Frações
               $resultado  =fracao($numero);
               echo "<br>(4) frações 1/1 + 1/2 + 1/3 + ... + 1/valor $numero é: $resultado";			
               break;
            }
                				
       
   }}
?>
</body>
</html>