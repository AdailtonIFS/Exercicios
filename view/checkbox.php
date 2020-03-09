<div class="container">
    <form action="" method="POST">
        <div class="form-check">
        <input class="form-check-input" name="numeros[]" type="checkbox" value="90" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            90
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" name="numeros[]" type="checkbox" value="50" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            50
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" name="numeros[]" type="checkbox" value="30" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            30
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" name="numeros[]" type="checkbox" value="15" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            15
        </label>
        </div>
        <button type="submit" id="button" class="btn btn-primary">Enviar</button>

        </form>

        <?php
        foreach($_POST['numeros'] as $valor){
        echo $valor ."<br>";
    }
    ?>
</div>