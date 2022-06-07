<form action=test004.php>

<p>Olga dobrze czuje się w Polsce. Jej przyjaciele są bardzo …………………………….. .
</p>
<input type="radio" name="odp" value="1">życzliwe 
<br>
<input type="radio" name="odp" value="2">życzliwymi 
<br>
<input type="radio" name="odp" value="3">życzliwi 
<br>


<input type="hidden" name="ile" value="<?php
	if($_GET["odp"] == 1) echo $_GET["ile"] + 1;
	else echo $_GET["ile"];
?>">
<input type="submit" value="Odpowiedz">

	

</form>

<?php

	var_dump($_GET);

?>


