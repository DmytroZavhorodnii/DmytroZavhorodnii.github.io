<form action=test009.php>

<p>Marysiu, ………………………… czapkę, bo jest zimno.
</p>
<input type="radio" name="odp" value="1">ubiera 
<br>
<input type="radio" name="odp" value="2"> ubierz
<br>
<input type="radio" name="odp" value="3">ubrała 
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


