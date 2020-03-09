<div class="container">
    <form action="Controller/select.php" method="POST">
    
    <h1 id="titulo">Select</h1>

    <select name = "processador" class="custom-select">
        <option value="false" selected>
            Qual o seu processador?
        </option>
        <option value="AMD">
            AMD
        </option>
        <option value="Celeron">
            Celeron
        </option>
        <option value="Pentium">
            Pentium
        </option>
    </select>
            <button type="submit" id="button" class="btn btn-primary">Escolher</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>