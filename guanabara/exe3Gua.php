<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Guanabara php1 </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
<?php
        $numero = null;
        $dolar = null;
        $real = null;

    if  (isset($_GET['numero'])) {
            $numero = $_GET["numero"];
            $real = $_GET["numero"]?? 0;
            $dolar =$real/4.92;
        }

        // Verificar se o botão "Limpar" foi pressionado
    if  (isset($_GET['limpar'])) {
            $numero = null;
            $dolar = null;
            $real = null;
        }


?>



    <form   name="Form1" action="" method="get">
            <p>
                <label for="numero">Coloque o  seu valor em R$ Reais, para converter em U$ dolares. </label>
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
        
   
    <h2>
    <p>
<?php 
                // Formatação de moedas simples!
            //echo  "Seus R \$" . $real." equivalem a US \$" . $dolar; 
                //Formatação de moedas com espaçamento!
                // echo "Seus R\$". number_format($real, 2, ",", "."). ", equivalem a \$". number_format($dolar, 2,  ",", ".")." . ";  
                // Formatação de moedas com internacionalização!
                // Biblioteca intl(internalization PHP).
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);	

                echo  "<P> Seus R$\$ " . numfmt_format_currency($padrao, $real,"BRL") ." equivalem a " .numfmt_format_currency($padrao, $dolar,"USD" )."</p>";                                         
                                                   
    
         
            ?>  
     
     </h2>
     <button onclick="javascript:history.go(-1)">Voltar</button>
        
     </main>
</body>
</html>
