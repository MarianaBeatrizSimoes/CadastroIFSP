<?php

include('includes/conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM Cliente WHERE email = '$email'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    if($row['senha'] == $senha){
        include('inicia_sessao.php');
        $_SESSION['login'] = $row;
        header('Location: index.php');
    }else{
        echo "<h2>Senha inválida bobão!
        Sua senha é ". $row['senha']."</h2>";
    }
}else{
        echo "<h1>Usuário não encontrado</h1>";
    }
?>