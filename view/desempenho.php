<div class="container">
    <form action="Controller/desempenho.php" method="POST">
    
    <h1 id="titulo">Desempenho do aluno:</h1>

    <div class="form-group">
        <label for="firstNumber">Informe a nota (0 - 100)</label>
        <input autocomplete="off" type="number" step="0.01" class="form-control" name="nota" id="firstNumber">
    </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>