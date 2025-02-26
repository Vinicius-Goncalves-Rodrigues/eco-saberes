<?php
require_once "config.php";
require_once "controller/QuizController.php";

$quizController = new QuizController($pdo);

// Obtém o ID do último resultado registrado
$ultimoResultadoId = $quizController->getLatestResultadoId();

if (!$ultimoResultadoId) {
    die("Erro: Nenhum resultado encontrado.");
}

// Busca os detalhes do resultado
$jogo = $quizController->listarResultadoPorId($ultimoResultadoId);

if (!$jogo) {
    die("Erro: Não foi possível carregar os dados do resultado.");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilofinal.css">
    <title>FINAL DO JOGO!</title>
</head>
<body>
    <a href="index.html" class="voltar">&lt; Voltar</a>
    <div class="jogo">
        <h3>Sua pontuação: <?= htmlspecialchars($jogo["pontuacao_final_time_1"]) ?></h3>
    </div>
</body>
</html>
