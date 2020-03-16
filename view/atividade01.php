<div class="container">
    <form action="Controller/atividade01.php" method="POST">
    
    <h1 id="titulo">Calculadora</h1>

    <div class="form-group">.
        <label for="firstNumber">Primeiro Número:</label>
        <input autocomplete="off" type="number" class="form-control" name="n1" id="firstNumber">
    </div>

    <div class="form-group">
        <label for="secondNumber">Segundo Número:</label>
        <input autocomplete="off" type="number" class="form-control" name="n2" id="secondNumber">
    </div>

    <div class="form-group">
        <label for="letra">Letra:</label>
        <input autocomplete="off" type="text" class="form-control" name="l1" id="letra">
    </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>