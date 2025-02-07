
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<input name="nome" placeholder="nome">
<input  name="duracao" placeholder="duracao">
<input  name="genero" placeholder="genero">
<button type="submit">Entrar</button>
                </form> 
</body>
</html>
<?php
require_once 'config/Database.php';
require_once 'controllers/MusicController.php';

$controller = new MusicController($pdo);

if(isset($_POST["nome"])){
    $controller->inserirmusica( $_POST["nome"],  $_POST["duracao"], $_POST["genero"], $_COOKIE['user_id']);
}
