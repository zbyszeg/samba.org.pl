<?php
	include("pokazwpisy.php");
?>
<br /><br />
<form action="dodajwpis.php" method="POST">
	Nick<br>
	<input name="nick"><br>
	Komentarz<br>
	<textarea name="komentarz"></textarea><br>
	<input type="submit" value="Wyślij">	
</form>