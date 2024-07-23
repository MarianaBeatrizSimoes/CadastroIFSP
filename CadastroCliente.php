<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CadastroCliente.css">
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
      <legend>Cadastro do Cliente</legend>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <label for="ativo">Ativo:</label>
           <select name="ativo" id="ativo">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
           </select>
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <select name="cidade" id="cidade">
            <?php
            include('includes/conexao.php');
            $sql = "SELECT * FROM cidade";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)){
                echo "<option values '".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
            }
            ?>
            </select>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </fieldset>
    </form>
</body>
</html>