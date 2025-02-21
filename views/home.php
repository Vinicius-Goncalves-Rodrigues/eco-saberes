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
    <title>Eco saberes - Página Inicial</title>
    <link rel="stylesheet" href="style/estileira.css">
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
        <h1>ㅤ ㅤ" sustentabilidade não é <br> uma escolha é uma necessidade para <br>ㅤ ㅤa sobrevivencia do planeta "</h1>


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
    <div>
        <a href="quiz la.php">
        <img src="img\Gemini_Generated_Image_al2046al2046al20.jpg" alt=""  height="950" width="940px">
        <img src="img\Gemini_Generated_Image_al2046al2046al20.jpg" alt=""  height="950" width="940px">
        </a>
    </div>

    <div class="d">
    <h1 class="petro"> ㅤㅤFatos Interessantes</h1>
    <div class="nova-container-grid">
        <div class="nova-featured-box">
            <a href="quizla.php" class="textor"><h1>Aplicativos educacionais promovem sustentabilidade nas escolas</h1></a>
        </div>
        <div class="nova-side-boxes">
            <div class="nova-text-box"> <a href="quizla.php" class="textor"><h2>desenvolvimento do aplicativo 'consciencia ambiental'para educação amibiental</h2></a></div>
            <div class="nova-text-box"> <a href="quizla.php" class="textor"><h2>aplicativos facilitam consumo colaborativo e sustentavel</h2></a></div>
            <div class="nova-text-box"> <a href="quizla.php" class="textor"><h2>aplicativos incentivam habaitos sustentaveis no cotidiano</h2></a></div>
            <div class="nova-text-box"> <a href="quizla.php" class="textor"><h2>educação ambiental na pratica com uso de aplicativos</h2></a></div>
        </div>
    </div>
</div>



<div class="d">W
        <h1 class="petro"> ㅤㅤArtigos em destaque</h1>
        <div class="container-grid">
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3> projeto luz,camera conscientização incentiva a pratica sobre desenvolvimento sustentavel atraves de produção de videos</h3></a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3>projeto de educação ambiental promove leitura e sustentabilidade nas escolas municipais</h3> </a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3>a importancia da educação ambiental no desenvolvimento do seu filho</h3> </a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3> educação e conscientizacão promovendo a reciclagem na comunidade </h3> </a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3>HDS promove ação de conscientizacão ambiental e engaja colaboradores em praticas sustentaveis</h3> </a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3>educação ambiental tem papel estrategico , avaliam debatedores em sessao especial</h3> </a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3>educação ambiental leva a construção de praticas sustentaveis</h3> </a></div>
            <div class="text-box"> <a href="quizla.php" class="textor"> <h3>educação ambiental promovendo a concientização sobre praticas sustentaveis</h3> </a></div>

            
        </div>
    </div>

     <footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">

                <span></span>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">

                <span><b>Contatos</b></span>
                <p>contato@na.na</p>
                <p>+55 63 99200-0000</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">

                <span><b>Links</b></span>
                <p><a href="#servicos">Serviços</a></p>
                <p><a href="#empresa">Empresa</a></p>
                <p><a href="#sobre">Sobre</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">

                <span><b>Outros</b></span>
                <p>Políticas de Privacidade</p>
            </div>
        </div>
        <div class="logo">
            <img src="img\image__1_-removebg-preview (2).png" alt="Ispotify" >
        </div>

    </div>
    <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
</footer>
    
    
</body> 
</html>