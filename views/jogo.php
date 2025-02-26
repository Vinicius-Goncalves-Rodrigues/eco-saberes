<?php
require_once "config.php";
require_once "controller/QuizController.php";

$quizController = new QuizController($pdo);
$quizController->listarUserId($_COOKIE['user_id']);

// Verifica se a página foi redirecionada do próprio jogo ou da página de início
if (isset($_POST['vez_do_time'])) {
    $jogo_id = $_POST['jogo_id'];
    $vez_do_time = $_POST['vez_do_time'];
} else {
    if (!isset($_POST['total_perguntas'])) {
        die("Erro: Número total de perguntas não foi fornecido.");
    }
    
    $todasPerguntas = $quizController->listarPerguntasId();
    shuffle($todasPerguntas);
    $perguntas_restantes = array_slice($todasPerguntas, 0, ($_POST['total_perguntas'] * 2) - count($todasPerguntas));
    
    if (empty($perguntas_restantes)) {
        die("Erro: Nenhuma pergunta disponível.");
    }
    
    $perguntaId = end($perguntas_restantes)['id'];
    $jogo_id = $quizController->criarJogo(($_POST['total_perguntas'] * 2), $perguntaId, 0, $perguntas_restantes, $_COOKIE['user_id']);
    $vez_do_time = 2;
}

// Pegar informações sobre o jogo
$jogo_info = $quizController->listarJogoPorId($jogo_id);
$pontuacao_time_1 = $jogo_info['pontuacao_time_1'];
$acabo_o_jogo = false;

if (isset($_POST['vez_do_time'])) {
    $perguntas_restantes = $jogo_info['perguntas_restantes'];
    array_pop($perguntas_restantes);
    if (!empty($perguntas_restantes)) {
        $perguntaId = end($perguntas_restantes)['id'];
    } else {
        $acabo_o_jogo = true;
    }
} else {
    $perguntaId = $jogo_info['pergunta_atual_id'];
    $perguntas_restantes = $jogo_info['perguntas_restantes'];
}

if (!empty($perguntas_restantes) && is_array($perguntas_restantes)) {
    $ultimaPergunta = end($perguntas_restantes);
    if (isset($ultimaPergunta['id'])) {
        $perguntaId = $ultimaPergunta['id'];
    } else {
        die("Erro: Nenhuma pergunta disponível.");
    }
} else {
    die("Erro: Nenhuma pergunta disponível.");
}

if (!$acabo_o_jogo) {
    $pergunta = $quizController->listarPerguntaPorId($perguntaId);
    $acertou = false;
    if (isset($_POST['pergunta_anterior_id']) && isset($_POST['resposta_selecionada'])) {
        $pergunta_anterior = $quizController->listarPerguntaPorId($_POST['pergunta_anterior_id']);
        if (ucfirst($_POST['resposta_selecionada']) == ucfirst($pergunta_anterior['resposta_certa'])) {
            $pontuacao_time_1++;
            $acertou = true;
        }
    }
    
    if (isset($_POST['vez_do_time'])) {
        $quizController->atualizarJogo($jogo_id, $perguntaId, $pontuacao_time_1, $perguntas_restantes);
    }
} else {
    $acertou = false;
    if (isset($_POST['pergunta_anterior_id'])) {
        $pergunta_anterior = $quizController->listarPerguntaPorId($_POST['pergunta_anterior_id']);
        if (ucfirst($_POST['resposta_selecionada']) == ucfirst($pergunta_anterior['resposta_certa'])) {
            $pontuacao_time_1++;
            $acertou = true;
        }
    }
    $quizController->criarResultado($pontuacao_time_1);
    header('Location: final.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="assets/css/jogo.css">
</head>
<body>
    <p class="time um">Sua pontuação: <?= htmlspecialchars($pontuacao_time_1) ?></p>
    <h2 class="um">
    <?php
    $timestring = "Você";
    echo $timestring . ($acertou ? " <p>ACERTOU!!!</p>" : " <p class='errou'>ERROU!!!</p>");
    ?>    
    </h2>
    <div class="container-quiz">
        <form method="POST">
            <h1><?= htmlspecialchars($pergunta["texto_pergunta"]) ?></h1>
            <h4>Perguntas restantes: <?= count($perguntas_restantes) ?></h4>

            <div><input type="radio" name="resposta_selecionada" value="A" required> <h1>A)</h1> <?= htmlspecialchars($pergunta['opcao_1']) ?></div>
            <div><input type="radio" name="resposta_selecionada" value="B"> <h1>B)</h1> <?= htmlspecialchars($pergunta['opcao_2']) ?></div>
            <div><input type="radio" name="resposta_selecionada" value="C"> <h1>C)</h1> <?= htmlspecialchars($pergunta['opcao_3']) ?></div>
            <div><input type="radio" name="resposta_selecionada" value="D"> <h1>D)</h1> <?= htmlspecialchars($pergunta['opcao_4']) ?></div>

            <input type="hidden" name="repassou" value="0">
            <input type="hidden" name="jogo_id" value="<?= htmlspecialchars($jogo_id) ?>">
            <input type="hidden" name="vez_do_time" value="<?= htmlspecialchars($vez_do_time) ?>">
            <input type="hidden" name="pergunta_anterior_id" value="<?= htmlspecialchars($perguntaId) ?>">
            <button><strong>ENVIAR RESPOSTA</strong></button>
        </form>
    </div>
</body>
</html>
