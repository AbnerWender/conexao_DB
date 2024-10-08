<section id="secao-funcionario">
    <div class="card-funcionario">
        <header>
            <h2>Nome: <?= $funcionario['nome']; ?> </h2>
            <p>Cargo: <?= $funcionario['cargo']; ?> </p>
            <p>Idade: <?= $funcionario['idade']; ?> </p>
        </header>
        
        <footer>
            <span>ID: <?= $funcionario['id']; ?></span>
            <br>
            <a href="tel:">Telefone: <?= $funcionario['telefone']; ?></a>
        </footer>
    </div>
</section>