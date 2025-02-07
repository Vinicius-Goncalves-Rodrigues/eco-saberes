<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Spotify</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1 class="spotify-logo">Spotify</h1>
            <h2>Cadastre sua conta</h2>
            <div class="dd">
            <button class="fb-login-btn">
                <img src="img/google.png" alt="" width="20px" height="20px">
                Continuar com o Google
            </button>
            <br><br>
            <button class="fb-login-btn">
                <img src="img/facebook (2).png" alt="" width="20px" height="20px">
                Continuar com o Facebook
            </button>
            <br><br>
            <button class="fb-login-btn">
                <img src="img/apple.png" alt=""width="20px" height="20px">
                Continuar com o Apple
            </button>
            <br><br>
            <button class="fb-login-btn">Continuar com o Telefone</button>
        </div>
            <br>     <br>
            <div class="linha"></div>
            <br><br>
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
            
        </div>
    </div>
</body>
</html>
