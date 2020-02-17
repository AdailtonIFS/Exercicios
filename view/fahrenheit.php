<form action="../Controller/fahr.php" method="post">

    <input type="text" name="F">
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php if(isset($_GET['result'])){ ?>
<span><?= "C = ".$_GET['result']?></span>
<?php } ?>