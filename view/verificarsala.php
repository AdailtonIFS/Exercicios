<div class="container">
    <form action="Controller/verificarsala.php" method="POST">
    
    <h1 id="titulo">Verificar Sala</h1>

    <div class="form-group">
        <label for="nomep">Nome:</label>
        <input autocomplete="off" type="text" class="form-control" name="nome" id="nomep">
    </div>

    <div class="form-check">
            <input class="form-check-input" type="radio" name="curso" id="radiobutton1" value="Informatica">
            <label class="form-check-label" for="radiobutton1">
                Curso Técnico em Informática
            </label>
        </div>
       
        <div class="form-check">    
            <input class="form-check-input" type="radio" name="curso" id="radiobutton2" value="Alimentos">
            <label class="form-check-label" for="radiobutton2">
                Curso Técnico em Alimentos
            </label>
        </div>
     
        <div class="form-check">
            <input class="form-check-input" type="radio" name="curso" id="radiobutton3" value="Agropecuaria">
            <label class="form-check-label" for="radiobutton3">
                Curso Técnico em Agropecuária
            </label>
        </div>
    
    
    <button type="submit" id="button" class="btn btn-primary">Ver sala</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>