<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    echo "<h1>Dados do cliente</h1>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    $sql = "INSERT INTO Cliente(nome, email)";
    $sql .= " VALUES('".$nome."','".$email."')";
    echo $sql;
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h2>Dados cadastrados com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
    ?>
</body>
</html>