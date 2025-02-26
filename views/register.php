<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - ecp-saberes</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
                <img class="i" src="img\image__1_-removebg-preview.png" alt="">
                <br>
                <h1>Informe seus dados </h1>
                <h2>complete as informações para prosseguir para o site</h2>
            <div class="linha"></div>
            <br><div class="linha"></div><br>
            <div class="login-container">
            <form action="index.php?action=register" method="post">
                <input type="text" name="nome" placeholder="nome de usuario" required>
                <input type="text" name="email" placeholder="email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit" class="login-btn">Entrar</button>
                <?php
                    if(!empty($_POST)){
                        echo "errou a senha!!!!! tem que ser igual!!";
                    }
                ?>
                <p class="signup-text">ja tem uma conta? <a href="index.php?action=login">fazer login</a>.</p>
            </form>
            </div>
            <h3><img src="img\escudo.png" alt="">Ambiente 100% Seguro</h3>
</body>
</html>
