<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Guanabara php1 </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
<style>
body {
    width: 98%;
    background-image: linear-gradient(120deg, #e3f2fd,#bbdefb,#90caf9,#64b5f6,#42a5f5,#2196f3,#1e88e5,#1976d2,#1565c0,#0d47a1) ; 
    https://coolors.co/palette/e3f2fd-bbdefb-90caf9-64b5f6-42a5f5-2196f3-1e88e5-1976d2-1565c0-0d47a1
}
h1{
color:white;
font-size:1.4em;
margin-top: 6;
}
section{
  margin-bottom: 0%;

}
</style>
</head>
<body>
      <h1> Conversor de dolar, funciona mod  avancado.</h1>
      <section>
<?php
        $numero = null;
        $dolar = null;
        $real = null;

      $início = date ('m-d-Y', strtotime("-7 days"));
      $fim =date("m-d-Y");

      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$início .'\'&@dataFinalCotacao=\''.$fim .'\'&$top=100&$orderby=dataHoraCotacao&$format=json&$select=cotacaoCompra';
      $dados = json_decode(file_get_contents($url), true);


      $cotacao = $dados["value"][0]["cotacaoCompra"];
      
      echo "A cotação foi $cotacao";

  if  (isset($_GET['numero'])) {
            $numero = $_GET["numero"];
            $real = $_GET["numero"];
            $dolar =$cotacao;
            $cotacao =$real/$cotacao;
        }
       
        // Verificar se o botão "Limpar" foi pressionado
  if  (isset($_GET['limpar'])) {
            $numero = null;
            $dolar = null;
            $real = null;
        }

    
?>
</section>


  <form   name="Form1" action="" method="get">
            <p>
                <label for="numero" style="color:white;">Coloque o  seu valor em R$ Reais, para converter em U$ dolares. </label>
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
        

    <p>
    <main>
<?php 
                // Formatação de moedas simples!
            //echo  "Seus R \$" . $real." equivalem a US \$" . $dolar; 
                //Formatação de moedas com espaçamento!
                // echo "Seus R\$". number_format($real, 2, ",", "."). ", equivalem a \$". number_format($dolar, 2,  ",", ".")." . ";  
                // Formatação de moedas com internacionalização!
                // Biblioteca intl(internalization PHP).
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);	

                echo  "<P> Seus  " . numfmt_format_currency($padrao, $real,"BRL") ." equivalem a " .numfmt_format_currency($padrao, $cotacao,"USD" )."</p>";                                         
                                                   
    
         
            ?>  
    </main> 
     <nav>
     <button onclick="javascript:history.go(-1)">Voltar</button>
     </nav>  
    
</body>
</html>
