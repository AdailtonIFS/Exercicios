
<form action="../Controller/maior.php" method="POST">

<input type="text" name="firstnumber">
<input type="text" name="secondnumber">

<button type="submit" class="btn btn-primary">Verificar maior</button>


</form>
<?php if(isset($_GET['result'])){ ?>
<span><?= "Maior = ".$_GET['result']?></span>
<?php } ?>