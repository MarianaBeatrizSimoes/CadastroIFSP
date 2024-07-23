<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="ListarCidade.css" media="screen" />
<?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM Cliente";
    $result = mysqli_query($con, $sql); //execulta a consulta
    ?>
    <h1>Consulta de Clientes</h1>
    <a href="CadastroCliente.html">Cadastrar Novo Cliente</a>
    <table align="center" border="1" width="500">
       <tr>
         <th>Código</th>
         <th>Nome</th>
         <th>Email</th>
         <th>Alterar</th>
         <th>Deletar</th>
        </tr>
        <?php //mysqli_fetch_array lê uma linha por vez
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href='AlteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='DeletaCliente.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>