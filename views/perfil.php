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
<<<<<<< HEAD
            <img src="img\image__1_-removebg-preview (2).png" alt="Ispotify" >
=======
            <a href="index.php?action=home">
            <img src="img/spotify icon.png" alt="Ispotify" width="100px">
            </a>
>>>>>>> 252a926a9f0ef78d0a47637e9497b8d7efeafcbb
        </div>


        <nav>
            <ul>
<<<<<<< HEAD
                <li> <img src="img\avatar (1).png" alt="" height="38" width="38"><a href="index.php?action=perfil"><H2>Minha conta</H2></a></li>
                <li> <img src="img\sair (1).png" alt="BOA TARDE DANADÃO" height="38" width="38"><a href="index.php?action=logout"><h2>LogOut</h2></a></li>
=======
                <li><a href="index.php?action=perfil">Página de perfil</a></li>
                <li><a href="index.php?action=logout">LogOut</a></li>
>>>>>>> 252a926a9f0ef78d0a47637e9497b8d7efeafcbb
            </ul>    
        </nav>
    </header>
    <div class="login-container">   
        <div class="login-box2">
            <h2>Criar Artigo</h2>
    <form method="POST">
<<<<<<< HEAD
      <input  name="nome" placeholder="nome do artigo">
      <input  name="duracao" placeholder="assunto">
      <input  name="genero" placeholder="texto">
=======
      <input  name="nome" placeholder="nome da música">
      <input  name="assunto" placeholder="duração da música">
      <input  name="assunto" placeholder="gênero da música">
>>>>>>> 252a926a9f0ef78d0a47637e9497b8d7efeafcbb
      <input name="operacao" type="hidden" value="criar">
      <button class="login-btn" type="submit">Criar artigo</button>
    </form> 
    <h2>deletar Artigo</h2>
    <form method="POST">
        <select name="id_musica">
            <?php
            foreach($musicas as $musica){
                echo"<option value='$musica[id_musica]'>$musica[nome]</option>";
            }?>
            
        </select>
        <input name="operacao" type="hidden" value="delete">
        <button class="login-btn" type="submit">deletar artigo</button>

    </form>
    <h2>Atualizar Artigo</h2>
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
        <button class="login-btn" type="submit">Atualizar artigo</button>

    </form> 
</div>
</div>
</body>
</html>
