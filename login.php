<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="CSS/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="logar.php" method="post">
            <div class="input-field">
                <input type="text" id="email" placeholder="digite seu email" name="email">
                <label for="email">Email:</label>
            </div>

            <div class="input-field">
                <input type="password" id="senha" name="senha">
                <label for="senha">Senha:</label>
            </div>

            <div class="center">
                <button type="submit">Entrar</button>
            </div>
             <!-- Script PHP para mostrar a mensagem de erro -->
            <?php
                if(isset($_GET['erro'])){
                echo "
                <div class='msg' style='text-align:center; color:red; font-weight:bold;'>
                <p>".$_GET['erro']."</p>
                ";
                }
            ?>
        </form>
    
    </div>
</body>
</html>