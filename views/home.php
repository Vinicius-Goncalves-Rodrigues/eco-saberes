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
            <img src="img\image__1_-removebg-preview (2).png" height="100" width="105px"alt="Ispotify" >
            
            <a href="index.php?action=home">
            </a>

        </div>
        <h1>ㅤ ㅤ" sustentabilidade não é <br> uma escolha é uma necessidade para <br>ㅤ ㅤa sobrevivencia do planeta "</h1>


        <nav>
            <ul>

                <li> <img src="img\avatar (1).png" alt="" height="38" width="38"><a href="index.php?action=perfil"><H2>Minha conta</H2></a></li>
                <li> <img src="img\sair (1).png" alt="BOA TARDE DANADÃO" height="38" width="38"><a href="index.php?action=logout"><h2>LogOut</h2></a></li>
            </ul>    
        </nav>
    </header>
    <hr class="hr"> 
    <div>
        <a href="quiz\indexquiz.php">
        <img src="img\Gemini_Generated_Image_kmkbkakmkbkakmkb.jfif" alt=""  height="950" width="945px">
        <img src="img\Gemini_Generated_Image_kmkbkakmkbkakmkb.jfif" alt=""  height="950" width="945px">
        </a>
    </div>

    <div class="d">
    <h1 class="petro"> ㅤㅤFatos Interessantes</h1>
    <div class="nova-container-grid">
        <div class="nova-featured-box">
            <a href="views\html" class="textor"><h1>Aplicativos educacionais promovem sustentabilidade nas escolas</h1></a>
        </div>
        <div class="nova-side-boxes">
            <div class="nova-text-box"> <a href="views/html/index2.html" class="textor"><h2>desenvolvimento do aplicativo 'consciencia ambiental'para educação amibiental</h2></a></div>
            <div class="nova-text-box"> <a href="views/html/index4.html" class="textor"><h2>aplicativos facilitam consumo colaborativo e sustentavel</h2></a></div>
            <div class="nova-text-box"> <a href="views/html/index3.html" class="textor"><h2>aplicativos incentivam habaitos sustentaveis no cotidiano</h2></a></div>
            <div class="nova-text-box"> <a href="views/html/index5.html" class="textor"><h2>educação ambiental na pratica com uso de aplicativos</h2></a></div>
        </div>
    </div>
</div>



<div class="d">W
        <h1 class="petro"> ㅤㅤArtigos em destaque</h1>
        <div class="container-grid">
            <div class="text-box"> <a href="views/trabalho em grupo/index76.html" class="textor"> <h3> projeto luz,camera conscientização incentiva a pratica sobre desenvolvimento sustentavel atraves de produção de videos</h3></a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia.html" class="textor"> <h3>projeto de educação ambiental promove leitura e sustentabilidade nas escolas municipais</h3> </a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia2.html" class="textor"> <h3>a importancia da educação ambiental no desenvolvimento do seu filho</h3> </a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia3.html" class="textor"> <h3> educação e conscientizacão promovendo a reciclagem na comunidade </h3> </a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia4.html" class="textor"> <h3>HDS promove ação de conscientizacão ambiental e engaja colaboradores em praticas sustentaveis</h3> </a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia5.html" class="textor"> <h3>educação ambiental tem papel estrategico , avaliam debatedores em sessao especial</h3> </a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia6.html" class="textor"> <h3>educação ambiental leva a construção de praticas sustentaveis</h3> </a></div>
            <div class="text-box"> <a href="views/trabalho em grupo/noticia7.html" class="textor"> <h3>educação ambiental promovendo a concientização sobre praticas sustentaveis</h3> </a></div>

            
        </div>
    </div>

    <div class="container2">
    <div class="container">
        <div class="left-section">
            <h1>"Investir em h1ráticas sustentáveis <br>  é investir no futuro do planeta<br> e da humanidade."</h1>
        </div>
        <div class="right-section">
            <div class="cinza">
                <h1>
            <h2>Fale conosco</h2>
            <p>Eco saberes S/A</p>
            <p>CNPJ 12.345.678/0001-78</p>
            <p>Rua da Alegria, nº 1000</p>
            <p>Cidade Xique-Xique</p>
            <p>CEP 12345-678</p>
            <p>São Paulo - SP</p>
        </h1>
        </div>
            <div class="logo2">
                <img src="img\image.png" alt="Logo Eco Saberes" width="250" height="250">
            </div>
        </div>
    </div>
    </div>
    <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
</footer>
    
    
</body> 
</html>