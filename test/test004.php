<form action=test005.php>

<p>Wczoraj cały dzień bolał mnie ząb. Wieczorem pojechałam ………………. dentysty.
</p>
<input type="radio" name="odp" value="1">u<br>
<input type="radio" name="odp" value="2">do<br>
<input type="radio" name="odp" value="3">z<br>


<input type="hidden" name="ile" value="<?php
	if($_GET["odp"] == 3) echo $_GET["ile"] + 1;
	else echo $_GET["ile"];
?>">
<input type="submit" value="Odpowiedz">

	

</form>

<?php

	var_dump($_GET);

?>


