<div class="container">
    <form action="Controller/imc.php" method="POST">
    
    <h1 id="titulo">Calcular IMC</h1>

        <div class="form-group">
            <label for="altura">Altura</label>
            <input autocomplete="off" type="number" step="0.01" class="form-control" name="altura" id="altura">
        </div>

        <div id="checkbox" class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="radiobutton2" value="Masculino">
                <label class="form-check-label" for="radiobutton2">
                    Masculino
                </label>
            </div>
        <div id="checkbox" class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="radiobutton3" value="Feminino">
                <label class="form-check-label" for="radiobutton3">
                    Feminino
                </label>
        </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= 'O seu IMC é'.$_GET['result']?></span>
        <?php } ?>
</div>