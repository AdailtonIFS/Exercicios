<div class="container">
    <form action="Controller/radiobutton.php" method="POST">
    
    <h1 id="titulo">RadioButton</h1>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sistema" id="radiobutton1" value="Windows98">
            <label class="form-check-label" for="radiobutton1">
                Win 98
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sistema" id="radiobutton2" value="WindowsXP" >
                <label class="form-check-label" for="radiobutton2">
                    Win XP
                </label>
            </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sistema" id="radiobutton3" value="Linux">
                <label class="form-check-label" for="radiobutton3">
                    Linux
                </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sistema" id="radiobutton4" value="MAC">
                <label class="form-check-label" for="radiobutton4">
                    Mac
                </label>
        </div>
    
    <button type="submit" id="button" class="btn btn-primary">Enviar</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= 'O seu sistema operacional é '.$_GET['result']?></span>
        <?php } ?>
</div>