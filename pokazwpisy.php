<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<h1>Księga gości</h1>
<table>
	<tr>
		<td style="width: 100px"><span style="font-size: 14px; font-weight: 700">Nick</span></td>
		<td style="width: 300px"><span style="font-size: 14px; font-weight: 700">Komentarz</span></td>
	</tr>
	<?php
		$plik = file("dane.dat");
		for($i = 0; $i<count($plik); $i++)
		{
			$wpis = explode("|",$plik[$i]);
			echo "<tr>";
			echo "<td>$wpis[0]</td>";
			echo "<td>$wpis[1]</td>";
			echo "</tr>";
		}
	?>
</table>
</body>
</html>

