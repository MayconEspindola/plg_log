<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLG LOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJcjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/images/PLG_log.png">
    <link rel="stylesheet" href="/assets/style/login.css">
</head>
<body>
    <div class="container">
        <div class="container-login">
            <div class="wrap-login">
                <form method="POST" class="login-form" action="/inc/autenticacao.php">
                    <h1>Login</h1>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == 1) {
                        echo '<p style="color: red;">Usuário ou senha incorretos.</p>';
                    }
                    ?>
                    <p>Digite os seus dados de acesso no campo abaixo.</p>
                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input class="input-form" type="text" name="nome" autocomplete="off" required>
                        <span class="focus-input-form" data-placeholder="Usuário" name="nome"></span>
                    </div>
                    <div class="wrap-input margin-bottom-35">
                        <input class="input-form" type="password" name="senha" required>
                        <span class="focus-input-form" data-placeholder="Senha" name="senha"></span>
                    </div>
                    <div class="container-login-form-btn">
                        <button class="login-form-btn">
                            <input type="submit" value="Login" class="btn" id="login" name="login"/>
                        </button>
                    </div>
                    <li>
                        <span class="text1">
                            Não tem conta?
                            <a href="/src/cadastro.html" class="text2">Criar</a>
                        </span>
                    </li>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        let inputs = document.getElementsByClassName('input-form');
        for (let input of inputs) {
            input.addEventListener("blur", function() {
                if(input.value.trim() != ""){
                    input.classList.add("has-val");
                } else {
                    input.classList.remove("has-val");
                }
            });
        }
    </script>
</body>
</html>