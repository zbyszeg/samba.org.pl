<?php
	switch ( $dzien_cyfrowo = gmDate("w") )
	{
		case 0 : { $dzien_tygodnia="niedzielę"; break; }
		case 1 : { $dzien_tygodnia="poniedziałek"; break; }
		case 2 : { $dzien_tygodnia="wtorek"; break; }
		case 3 : { $dzien_tygodnia="środę"; break; }
		case 4 : { $dzien_tygodnia="czwartek"; break; }
		case 5 : { $dzien_tygodnia="piątek"; break; }
		case 6 : { $dzien_tygodnia="sobotę"; break; }
	}
		
	$dzien_miesiaca = date("d");
		
	switch ( $miesiac_cyfrowo = gmDate("n") )
	{
		case 1 : { $miesiac="stycznia"; break; }
		case 2 : { $miesiac="lutego"; break; }
		case 3 : { $miesiac="marca"; break; }
		case 4 : { $miesiac="kwietnia"; break; }
		case 5 : { $miesiac="maja"; break; }
		case 6 : { $miesiac="czerwca"; break; }
		case 7 : { $miesiac="lipca"; break; }
		case 8 : { $miesiac="sierpnia"; break; }
		case 9 : { $miesiac="września"; break; }
		case 10 : { $miesiac="października"; break; }
		case 11 : { $miesiac="listopada"; break; }
		case 12 : { $miesiac="grudnia"; break; }
	}
				
	$rok = gmDate("Y");
		
	$dz_roku = gmDate("z")+1;
			
	echo ("Dziś mamy $dzien_tygodnia, $dzien_miesiaca $miesiac $rok roku.");
	echo (" Od początku roku upłynęło $dz_roku dni.");
?>
<br/>
<span style="float: left">Aktualna godzina:&nbsp;</span>
<form name="clock" onsubmit="0">
	<input type="text" name="zegarek" size="6" value="" style="text-align: center">
	<script language="javascript">
		var timerID = null;
		var timerRunning = false;
			
		function zegarstop()
		{
			if(timerRunning) clearTimeout(timerID);
			timerRunning = false;
		}
					
		function pokazgodz()
		{
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds();
							
			// var timeValue = ""+((hours>12)?hours-12:hours);
			var timeValue = hours;
			timeValue += ((minutes<10)?":0":":")+minutes;
			timeValue += ((seconds<10)?":0":":")+seconds;
						
			document.clock.zegarek.value = timeValue;
							
			timerID = setTimeout("pokazgodz()",1000);
								
			timerRunning = true;
		}
						
		function zegarstart()
		{
			zegarstop();
			pokazgodz();
		}
				
		zegarstart()
					
	</script>
</form>