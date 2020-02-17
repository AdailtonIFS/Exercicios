    <form action="../Controller/mediaponderada.php" method="POST">

        <input type="text" name="first">
        <input type="text" name="second">
        <input type="text" name="third">
        <button type="submit" class="btn btn-primary">Média ponderada</button>

    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span><?= $_GET['result']?></span>
    <?php } ?>