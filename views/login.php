<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - eco-saberes</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="main">
    <div class="img">
    </div>
    <div class="login-container">   
        <div class="login-box">
            <h1 class="spotify-logo">Entrar</h1>
            <h2>Faça login para acessar o aplicativo do eco saberes</h2>
            <form action="index.php?action=login" method="post">
                <input type="text" name="email" placeholder="Email ou nome de usuário" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit" class="login-btn">Entrar</button>
            </form>
            <p class="signup-text">Não tem uma conta? <a href="index.php?action=register">cadastre-se agora mesmo</a>.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>