<form action=test008.php >

<p>Niech państwo ………………………………………… na resztę gości.
</p>
<input type="radio" name="odp" value="1">zaczekali 
<br>
<input type="radio" name="odp" value="2">zaczekać 
<br>
<input type="radio" name="odp" value="3">zaczekają 
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


