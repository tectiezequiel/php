<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Guanabara php1</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<?php
$numero = null;
$gera = null;

if (isset($_GET['numero'])) {
    $numero = min($_GET['numero'], 100);

    if ($numero < 0) {
        // O número está fora do limite válido (menor que 0)
        echo "Erro: o número deve ser igual ou maior que 0.";
        die(0);
    } else {
        $gera = rand(1, 100);
    }
}

// Verificar se o botão "Limpar" foi pressionado
if (isset($_GET['limpar'])) {
    $numero = null;
    $gera = null;
}
?>

<body>
    <form name="Form1" action="" method="get">
        <p>
            <label for="numero">Escolha um número entre 0 e 100:</label>
            <input type="number" name="numero" id="numero" min="0" max="100" value="<?php echo $numero; ?>" required />
        </p>
        <div>
            <p>
                <input type="submit" name="Enviar" value="Enviar" />
                <input type="submit" name="limpar" value="Limpar" /> <!-- Botão Limpar -->
            </p>
        </div>
    </form>

    <main>
        <?php if ($numero !== null): ?>
            <h2>O número escolhido foi <?php echo $numero; ?></h2>
            <?php if ($gera !== null): ?>
                <h2>Você perdeu, tente novamente. Número gerado: <?php echo $gera; ?></h2>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>
</html>
