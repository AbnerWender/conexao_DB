<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Funcionario</title>
</head>
<body>
    
</body>
    <?php

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
</html>

