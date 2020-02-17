<div class="container">
    <form action="Controller/maior.php" method="POST">
    
    <h1 id="titulo">Verificar qual o maior número</h1>

    <div class="form-group">
        <label for="firstNumber">Primeiro Número:</label>
        <input autocomplete="off" type="number" step="0.0000001" class="form-control" name="firstnumber" id="firstNumber">
    </div>

    <div class="form-group">
        <label for="firstNumber">Segundo Número:</label>
        <input autocomplete="off" type="number" class="form-control" name="secondnumber" id="firstNumber">
    </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>