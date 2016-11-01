<?php
	$nick = $_POST['nick'];
	$komentarz = $_POST['komentarz'];
	
	$plik=fopen("dane.dat", "a");
	if(!$plik)
	{
		echo "Błąd zapisu do pliku!";
		exit;
	}
	
	fputs($plik,"$nick|$komentarz\r\n");
	fclose($plik);
	header("Location: index.php?s=ksiega");
?>