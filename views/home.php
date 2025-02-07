<?php
require_once 'config/Database.php';
require_once 'controllers/MusicController.php';

$controller = new MusicController($pdo);

$musicas = $controller->listarMusicas();
$suasmusicas = $controller->listarMusicasPorUserId($_COOKIE['user_id']);

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
                <li><a href="#">Início</a></li>
                <li><a href="#">Explorar</a></li>
                <li><a href="#">Sua Biblioteca</a></li>
                <li><a href="#">Premium</a></li>
                <li><a href="index.php?action=perfil">Página de perfil</a></li>
                <li><a href="index.php?action=logout">LogOut</a></li>
            </ul>    
        </nav>
    </header>


    <div class="flex-container musicaslistar">

        <section class="content-area">
            <h2>músicas</h2>
                <?php
                    foreach($musicas as $musica){
                        echo"<ul>$musica[nome]</ul>";
                    }
                ?>
        </section>
        
        <section class="content-area">
            <h2>suas músicas</h2>
                <?php
                    foreach($suasmusicas as $musica){
                        echo"<ul>$musica[nome]</ul>";
                    }
                ?>
        </section>
    </div>
<!--   
    <div class=" flex-container">
       
        <aside class="sidebar">
            <h3>Playlists</h3>
            <ul>
                <li><a href="#">Top Hits</a></li>
                <li><a href="#">Descobertas da Semana</a></li>
                <li><a href="#">Rock Clássico</a></li>
                <li><a href="#">Novidades</a></li>
            </ul>
        </aside>

        <section class="content-area">
            <h2>O que há de novo</h2>
            <div class="album-list">
                <div class="album">
                    <img src="img/album 1.jpg" alt="funk">
                    <p>funk</p>
                </div>
                <div class="album">
                    <img src="img/images.jfif" alt="Eletronica">
                    <p>Eletronica</p>
                </div>
                <div class="album">
                    <img src="img/gospel.jpg" alt="Gospel">
                    <p>Gospel</p>
                </div>
            </div>
        </section>
    </div>

    <div class=" flex-container">
       
        <aside class="sidebar">
            <h3>Playlists</h3>
            <ul>
                <li><a href="#">Top Hits</a></li>
                <li><a href="#">Descobertas da Semana</a></li>
                <li><a href="#">Rock Clássico</a></li>
                <li><a href="#">Novidades</a></li>
            </ul>
        </aside>

        <section class="content-area">
            <h2>O que há de novo</h2>
            <div class="album-list">
                <div class="album">
                    <img src="img/coutry.jfif" alt="Coutry">
                    <p>Coutry</p>
                </div>
                <div class="album">
                    <img src="img/sertanejo.jfif" alt="Sertanejo">
                    <p>Sertanejo</p>
                </div>
                <div class="album">
                    <img src="img/pop.jfif  " alt="pop">
                    <p>pop</p>
                </div>
            </div>
        </section>
    </div>
     -->

    <footer>
        <p>&copy; 2024 Spotify AB</p>
    </footer>
</body>
</html>