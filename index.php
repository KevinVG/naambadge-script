<form method="post">
    <img src="image.php?naam=<?=isset($_POST['naam'])?$_POST['naam']:'demo'?>" /><br /><br /> 
    <input type="text" name="naam" placeholder="Naam voor badge" value="<?=isset($_POST['naam'])?$_POST['naam']:'demo'?>" /><br /> <br /> 
    <input type="submit" value="vernieuwen" />
</form>