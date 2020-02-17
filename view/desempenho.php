<form action="../Controller/desempenho.php" method="post">

    <input type="text" name="nota">
    <button type="submit" class="btn btn-primary">Verificar Desempenho</button>

</form>

<?php if(isset($_GET['result'])){ ?>
<span><?= $_GET['result']?></span>
<?php } ?>