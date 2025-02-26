<?php
session_start();
include_once 'controllers/UserController.php';
include_once 'config/Database.php';

$action = $_GET['action'] ?? '';

$controller = new UserController($pdo);

switch ($action) {
    case 'register':
        if (!empty($_POST)) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            if ($controller->register($nome, $email, $senha)) {
                header("Location: index.php?action=login");
            } else {
                echo "Erro ao cadastrar usuário.";
            }
        } else {
            include 'views/register.php';
        }
        break;

    case 'login':

        if (!empty($_POST)) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if ($controller->login($email, $senha)) {
                header("Location: index.php?action=home");
            } else {
                echo "Login ou senha inválidos.";
            }
        } else {
            include 'views/login.php';
        }
        break;

    case 'home':
        if (isset($_COOKIE['user_id'])) {
            include 'views/home.php';
        } else {
            header("Location: index.php?action=login");
        }
        break;

    case 'logout':
        session_destroy();
        header("Location: index.php?action=login");
        break;

        case 'iniciar_quiz':
        if (isset($_COOKIE['user_id'])) {
            include 'views/index.html';
        } else {
            header("Location: index.php?action=iniciar_quiz");
        }
        break;

    case 'iniciar_jogo':
        if (isset($_COOKIE['user_id'])) {
            include 'views/jogo.php';
        } else {
            header("Location: index.php?action=iniciar_jogo");
        }
        break;

    case 'resultado':
        if (isset($_COOKIE['user_id'])) {
            include 'views/final.php';
        } else {
            header("Location: index.php?action=resultado");
        }
        break;
    case 'regitrar_pergunta':
        if (isset($_COOKIE['user_id'])) {
            include 'views/registrar_pergunta.php';
        } else {
            header("Location: index.php?action=regitrar_pergunta");
        }
        break;
    case 'perfil':
        if (isset($_COOKIE['user_id'])) {
            include 'views/perfil.php';
        } else {
            header("Location: index.php?action=perfil");
        }
        break;
    default:
        header("Location: index.php?action=login");
        break;
}
?>
