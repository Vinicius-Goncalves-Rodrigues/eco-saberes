<?php
require_once 'config/Database.php';
require_once 'controllers/MusicController.php';

$controller = new MusicController($pdo);

$musicas = $controller->listarMusicas();

if(isset($_POST["id_musica"])){
    $controller->atualizarMusica($_POST["id_musica"],$_POST['nome'],$_POST['duracao'],$_POST['genero']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <select name="id_musica">
            <?php
            foreach($musicas as $musica){
                echo"<option value='$musica[id_musica]'>$musica[nome]</option>";
            }?>
        </select>
        <input type="text" name="nome" placeholder="nome" >
        <input type="text" name="duracao" placeholder="duração">
        <input type="text" name="genero" placeholder="gênero">

        <button type="submit">Atualizar Musica</button>

    </form> 
</body>
</html>

