<form action=test007.php>

<p>W wiadomościach radiowych mówili o tym, co dzieje się na ……………………….. .
</p>
<input type="radio" name="odp" value="1">świat 
<br>
<input type="radio" name="odp" value="2"> światem 
<br>
<input type="radio" name="odp" value="3">świecie 
<br>


<input type="hidden" name="ile" value="<?php
	if($_GET["odp"] == 3) echo $_GET["ile"] + 1;
	else echo $_GET["ile"];
?>">
<input type="submit" value="Odpowiedz">

	

</form>

<?php

	var_dump($_GET);

?>


