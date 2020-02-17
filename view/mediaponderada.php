    <div class="container">
    <form action="Controller/mediaponderada.php" method="POST">
    
    <h1 id="titulo">Calcular a média ponderada</h1>

    <div class="form-group">
        <label for="firstNumber">Primeira Nota:</label>
        <input autocomplete="off" type="number" step="0.01" class="form-control" name="first" id="firstNumber">
    </div>

    <div class="form-group">
        <label for="firstNumber">Segunda Nota:</label>
        <input autocomplete="off" type="number" step="0.01" class="form-control" name="second" id="firstNumber">
    </div>

    <div class="form-group">
        <label for="firstNumber">Terceira Nota:</label>
        <input autocomplete="off" type="number" step="0.01" class="form-control" name="third" id="firstNumber">
    </div>


    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>