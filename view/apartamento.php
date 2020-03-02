<div class="container">
    <form action="Controller/apart.php" method="POST">
    
    <h1 id="titulo">Calcular valor do pagamento</h1>

    <div class="form-group">
        <label for="firstNumber">Nome do proprietário:</label>
        <input autocomplete="off" type="text" class="form-control" name="nome">
    </div>

    <div class="form-group">
        <label for="firstNumber">Número do apartamento:</label>
        <input autocomplete="off" type="number" class="form-control" name="numeroapart">
    </div>

    <div class="form-check">
            <input class="form-check-input" type="radio" name="animal" id="radiobutton1" value="Cao">
            <label class="form-check-label" for="radiobutton1">
                Cachorro
            </label>
        </div>
       
        <div class="form-check">    
            <input class="form-check-input" type="radio" name="animal" id="radiobutton2" value="Cao">
            <label class="form-check-label" for="radiobutton2">
                Papagaio
            </label>
        </div>
     
        <div class="form-check">
            <input class="form-check-input" type="radio" name="animal" id="radiobutton2" value="Cao">
            <label class="form-check-label" for="radiobutton2">
                Gato
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="animal" id="radiobutton2" value="">
            <label class="form-check-label" for="radiobutton2">
                Não tenho
            </label>
        </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>