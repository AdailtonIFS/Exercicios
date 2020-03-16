<div class="container">
    <form action="Controller/atividade02.php" method="POST">
    
    <h1 id="titulo">Calcular IMC</h1>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input autocomplete="off" type="text" class="form-control" name="n" id="nome">
        </div>

        <div class="form-group">

            <select name="sexo" class="custom-select">
                <option value="false" selected>
                    Escolha seu sexo:
                </option>
                <option value="M">
                    Masculino
                </option>
                <option value="F">
                    Feminino
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="peso">Peso</label>
            <input autocomplete="off" type="number" step="0.01" class="form-control" name="p" id="peso">
        </div>

        <div class="form-group">
            <label for="altura">Altura</label>
            <input autocomplete="off" type="number" step="0.01" class="form-control" name="a" id="altura">
        </div>

       
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= 'O seu IMC é'.$_GET['result']?></span>
        <?php } ?>
</div>