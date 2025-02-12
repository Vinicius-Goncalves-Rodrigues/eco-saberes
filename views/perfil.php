<?php
require_once 'config/Database.php';
require_once 'controllers/MusicController.php';

$controller = new MusicController($pdo);

$musicas = $controller->listarMusicasPorUserId($_COOKIE['user_id']);


if(isset($_POST["operacao"])){
    if($_POST['operacao'] == 'criar'){
        $controller->inserirmusica( $_POST["nome"], $_POST["assunto"], $_POST["assunto"],$_COOKIE['user_id']);
        header("Location: #");
    }
    if($_POST["operacao"] == 'delete'){
        $controller->deletarMusica($_POST['id_musica']);
        header("Location: #");
    }
    if($_POST["operacao"] == 'atualizar'){
        
        $controller->atualizarMusica($_POST['id_musica'],$_POST['nome'],$_POST["assunto"], $_POST["assunto"]);
        header("Location: #");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify - Página Inicial</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  
    <header>
        <div class="logo">
            <img src="img/spotify icon.png" alt="Ispotify" width="100px">
        </div>
        <nav>
            <ul>
                <li><a href="index.php?action=perfil">Página de perfil</a></li>
                <li><a href="index.php?action=logout">LogOut</a></li>
            </ul>    
        </nav>
    </header>
    <div class="login-container">   
        <div class="login-box">
            <h2>Criar Música</h2>
    <form method="POST">
      <input  name="nome" placeholder="nome da música">
      <input  name="assunto" placeholder="duração da música">
      <input  name="assunto" placeholder="gênero da música">
      <input name="operacao" type="hidden" value="criar">
      <button class="login-btn" type="submit">Criar Música</button>
    </form> 
    <h2>deletar Música</h2>
    <form method="POST">
        <select name="id_musica">
            <?php
            foreach($musicas as $musica){
                echo"<option value='$musica[id_musica]'>$musica[nome]</option>";
            }?>
            
        </select>
        <input name="operacao" type="hidden" value="delete">
        <button class="login-btn" type="submit">deletar musica</button>

    </form>
    <h2>Atualizar Música</h2>
    <form method="POST">
        <select name="id_musica">
            <?php
            foreach($musicas as $musica){
                echo"<option value='$musica[id_musica]'>$musica[nome]</option>";
            }?>
            
        </select>
        <input name="nome" placeholder="nome da música">
        <input name="assunto" placeholder="duração da música">
        <input name="assunto" placeholder="gênero da música">
        <input name="operacao" type="hidden" value="atualizar">
        <button class="login-btn" type="submit">Atualizar musica</button>

    </form> 
</div>
</div>
    <footer>
        <p>&copy; 2024 Spotify AB</p>
    </footer>
</body>
</html>
