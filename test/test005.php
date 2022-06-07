<form action=test006.php>

<p>Przesyłamy serdeczne pozdrowienia ……………………… morza.
</p>
<input type="radio" name="odp" value="1">z<br>
<input type="radio" name="odp" value="2">od<br>
<input type="radio" name="odp" value="3">znad<br>


<input type="hidden" name="ile" value="<?php
	if($_GET["odp"] == 3) echo $_GET["ile"] + 1;
	else echo $_GET["ile"];
?>">
<input type="submit" value="Odpowiedz">

	

</form>

<?php

	var_dump($_GET);

?>


