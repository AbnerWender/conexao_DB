<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Funcionario</title>
</head>
<body>
    <form action="" id="form-cadastro" >
        <div class="row">
            <label for="nome">Nome: </label>
            <input type="text" id="nome">
        </div>

        <div class="row">
            <label for="cargo">Cargo: </label>
            <input type="text" name="cargo" id="cargo">
        </div>

        <div class="row">
            <label for="salario">Salario: </label>
            <input type="float" name="salario" id="salario">
        </div>

        <div class="row">
            <label for="idade">Idade: </label>
            <input type="number" name="idade" id="idade">
        </div>

        <div class="row">
            <label for="telefone"> Telefone: </label>
            <input type="tel" name="telefone" id="telefone">
        </div>

        <div class="row">
            <input type="submit" value="Enviar">
        </div>
    </form>

    
    <?php
        //entender qual o erro desta parte 
        $nome = $_GET['nome'];
        $cargo = $_GET['cargo'];
        $salario = $_GET['salario'];
        $idade = $_GET['idade'];
        $telefone = $_GET['telefone'];
        
        function renderTeamplate($funcionario){
            include 'teamplate.php';
        }
        
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco_de_dados = 'empresa_abnerdb';
        
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);
        
        // $consulta = $conexao->query('insert into funcionario(id, nome, cargo, idade, salario, telefone) values(3,"Everton Silva","Analista", 18, 10000, "67988888888")');
        
        $selectFuncionario = $conexao->query('select * from funcionario');
        
        $rowsFuncionario = $selectFuncionario->fetch_all(MYSQLI_ASSOC);
        
        $conexao->close();
        
        foreach($rowsFuncionario as $funcionario){
            renderTeamplate($funcionario);
        };
        
        ?>
</body>
</html>

