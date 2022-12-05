<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="app/webroot/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="app/webroot/css/index.css">
    <title>Home | Help-Maxi</title>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-white	">Bem vindo ao</h1>
                    <h2 class="title has-text-white">Help-Maxi </h2>&nbsp;
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="app/controller/login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Seu e-mail" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <p>Usuário novo? <a href="app/views/cadastrar.php">Clique aqui para cadastrar</a><p>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<footer class="footer">
    <div class="content has-text-centered">
        <p>Projeto Integrador III - <a href="app/views/dashboardAdm.php">Home</a></p>
    </div>
</footer>
</footer>

</html>