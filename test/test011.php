<form action=test012.php>

<p>Kiedy go poprosiłam, zaraz ……………………………… mi herbatę.
</p>
<input type="radio" name="odp" value="1">zrobić 
<br>
<input type="radio" name="odp" value="2">zrobił 
<br>
<input type="radio" name="odp" value="3">zrobiła 
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


