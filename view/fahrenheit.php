<div class="container">
    <form action="Controller/fahr.php" method="POST">
    
    <h1 id="titulo">Converter para Fahrenheit:</h1>

    <div class="form-group">
        <label for="firstNumber">Temperatura °C</label>
        <input autocomplete="off" type="number" step="0.01" class="form-control" name="f" id="firstNumber">
    </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>