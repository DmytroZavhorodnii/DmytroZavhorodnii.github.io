<form action=test002.php >

<p>Marek i Agata mają ………………………… dzieci
</p>
<input type="radio" name="odp" value="1">cztery
<br>
<input type="radio" name="odp" value="2">czworo<br>
<input type="radio" name="odp" value="3">czterech<br>


<input type="hidden" name="ile" value="0">
<input type="submit" value="Odpowiedz">


</form>

<?php

	var_dump($_GET);

?>


