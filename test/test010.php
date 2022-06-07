<form action=test011.php>

<p>Maria ………………………… Sławkowi na urodziny nowy zegarek.
</p>
<input type="radio" name="odp" value="1"> kupił
<br>
<input type="radio" name="odp" value="2">kupiła 
<br>
<input type="radio" name="odp" value="3">kupowała 
<br>


<input type="hidden" name="ile" value="<?php
	if($_GET["odp"] == 2) echo $_GET["ile"] + 1;
	else echo $_GET["ile"];
?>">
<input type="submit" value="Odpowiedz">

	

</form>

<?php

	var_dump($_GET);

?>


