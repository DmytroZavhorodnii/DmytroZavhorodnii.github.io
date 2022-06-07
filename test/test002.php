<form action=test003.php>

<p>W nowym miejscu zamieszkania brakowało mi ……………………………………… .
</p>
<input type="radio" name="odp" value="1">przyjaciółmi 
<br>
<input type="radio" name="odp" value="2">przyjaciele 
<br>
<input type="radio" name="odp" value="3">przyjaciół 
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


