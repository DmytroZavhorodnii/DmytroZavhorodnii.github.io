<form action=test013.php>

<p>Od …………………… pożyczyłeś pieniądze?
</p>
<input type="radio" name="odp" value="1">kto<br>
<input type="radio" name="odp" value="2">komu<br>
<input type="radio" name="odp" value="3">kogo<br>


<input type="hidden" name="ile" value="<?php
	if($_GET["odp"] == 1) echo $_GET["ile"] + 1;
	else echo $_GET["ile"];
?>">
<input type="submit" value="Odpowiedz">

	

</form>

<?php

	var_dump($_GET);

?>


