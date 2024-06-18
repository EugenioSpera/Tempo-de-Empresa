
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe as datas de admissão e demissão do formulário
    $admissao = $_POST['admissao'];
    $demissao = isset($_POST['demissao']) ? $_POST['demissao'] : null;

    // Cria objetos DateTime para as datas de admissão e demissão (se existir)
    $admissaoObj = new DateTime($admissao);
    
    if ($demissao) {
        $demissaoObj = new DateTime($demissao);
    } else {
        $demissaoObj = new DateTime('now'); // Data atual caso não haja data de demissão
    }

    // Calcula o intervalo entre as datas
    $intervalo = $admissaoObj->diff($demissaoObj);

    // Extrai os componentes do intervalo
    $anos = $intervalo->y;
    $meses = $intervalo->m;
    $dias = $intervalo->d;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Tempo de Trabalho</title>
</head>
<body>
    <h1>Resultado - Tempo de Trabalho</h1>

    <?php if (isset($anos) && isset($meses) && isset($dias)): ?>
        <p>Você trabalhou na empresa por <?= $anos ?> anos, <?= $meses ?> meses e <?= $dias ?> dias.</p>
    <?php else: ?>
        <p>Nenhuma data de admissão informada.</p>
    <?php endif; ?>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>