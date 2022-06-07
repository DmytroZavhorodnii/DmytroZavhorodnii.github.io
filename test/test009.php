<form action=test010.php>

<p>Sławku, bardzo cię proszę, żebyś ……………………………………… ze mną do teatru.
</p>
<input type="radio" name="odp" value="1">poszliśmy 
<br>
<input type="radio" name="odp" value="2">poszedł 
<br>
<input type="radio" name="odp" value="3">poszedłbyś 
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


