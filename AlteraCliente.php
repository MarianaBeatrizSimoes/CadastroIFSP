<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="AlteraClienteExe.php" method="post">
       <fieldset>
        <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" 
                    name="nome" 
                    id="nome"
                    value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text"
                    name="email"
                    id="email"
                    values="<?php echo $row['email']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    
       </fieldset>
    </form>
    </body>
    </html>