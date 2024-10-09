<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Funcionario</title>
</head>
<body>
    
    <form action="" id="form-cadastro" method="post">
        <div class="row">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name='nome'>
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

    <section id="secao-select">
        <form action="" id='select-todos' method="get">
            <label for="mostre-todos">Filtrar</label>
            <select name="select-cargo" id="select-cargo">
                <option value="treinee">Treinee</option>
                <option value="Dev Junior">Dev Junior</option>
                <option value="DevSenior">Dev Senior</option>
            </select>
            <input type="submit" name="btn-mostrar" value="Mostrar" id="mostrar">
        </form>
    </section>
    
    <?php
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco_de_dados = 'empresa_abnerdb';

        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

        if(isset($_POST['nome']) && isset($_POST['cargo']) && isset($_POST['salario']) && isset($_POST['idade']) && isset($_POST['telefone'])){
            $nome = $_POST['nome'];
            $cargo = $_POST['cargo'];
            $salario = $_POST['salario'];
            $idade = $_POST['idade'];
            $telefone = $_POST['telefone'];
            
            $insert = $conexao->query("insert into funcionario(nome, cargo, idade, salario, telefone) values('$nome', '$cargo', '$idade', '$salario', '$telefone')");
            
            $conexao->close();
        }

        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

        // ESTA DANDO ERRO NA LINHA 86, NÃO CONSEGUI ENTENDER A TEMPO, MAS VOU TENTAR RESOLVER

        // if(isset($_GET['select-cargo'])){
        //     function renderTeamplate($funcionario){
        //         include 'teamplate.php';
        //     };

        //     $cargo = $_GET['cargo'] 
        //     $cargoFiltro = $_GET['select-cargo'];

        //     $selectFiltro = $conexao->query('select * from funcionario where '$cargo' = '$cargoFiltro')');
            
        //     $rowsFuncionario = $selectTodos->fetch_all(MYSQLI_ASSOC);
        
        //     foreach($rowsFuncionario as $funcionario){
        //         renderTeamplate($funcionario);
        //     };

        //     $conexao->close();
        // };
        
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

        function renderTeamplate($funcionario){
            include 'teamplate.php';
        }

        $selectTodos = $conexao->query('select * from funcionario');
        
        $rowsFuncionario = $selectTodos->fetch_all(MYSQLI_ASSOC);
        
        $conexao->close();
        
        foreach($rowsFuncionario as $funcionario){
            renderTeamplate($funcionario);
        };

    ?>

        ?>



        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

        function renderTeamplate($funcionario){
            include 'teamplate.php';
        }

        $selectTodos = $conexao->query('select * from funcionario');
        
        $rowsFuncionario = $selectTodos->fetch_all(MYSQLI_ASSOC);
        
        $conexao->close();
        
        foreach($rowsFuncionario as $funcionario){
            renderTeamplate($funcionario);
        };

        ?>
</body>
</html>