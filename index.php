<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="index.css">
    <?php
        include('inicia_sessao.php');
        if(empty($_SESSION['login'])){
            header("Location: login.html");
        }
        
        //session_destroy();
    ?>
</head>
<body>
    <div class="container">
        <h1>Pagina inicial</h1>
        <?php
            if(!empty($_SESSION['login'])):
        ?>
        <a href="CadastroCidade.html" class="button">Cadastrar Cidade</a>
        <a href="ListarCidade.php" class="button">Listar Cidade</a>
        <a href="CadastroCliente.php" class="button">Cadastrar Cliente</a>
        <a href="ListarCliente.php" class="button">Listar Cliente</a>
        <a href="logout.php" class="button">Logout</a>
        <a href="login.html" class="button">Login</a>

        <?php
        echo "<li><a>Olá ". $_SESSION['login']['nome']. "</a></li>";
        endif;
        ?>
    </div>
</body>
</html>
