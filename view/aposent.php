<div class="container">
    <form action="Controller/aposent.php" method="POST">
    
    <h1 id="titulo">Verificar aposentadoria</h1>

    <div class="form-group">
        <label for="id">Idade:</label>
        <input autocomplete="off" type="number" class="form-control" name="idade" id="id">
    </div>
    <div class="form-group">
        <label for="contribuicao">Anos de contribuição:</label>
        <input autocomplete="off" type="number" class="form-control" name="anos" id="contribuicao">
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
        <span id="msg"><?=  $_GET['result']?></span>
        <?php } ?>
</div>