<?php
	header("Pragma: no-cache");
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<title>Active Directory pod kontrolą Linuksa</title>
	
	<meta name="keywords" content="kontoler, domeny, Samba, Samba4, Active Directory, Linux, Debian, serwer" />
	<meta name="description" content="Skonfiguruj kontroler domeny Active Directory w systemie Linux poprzez uzycie serwera Samba4" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700|Inconsolata:400,700|Lato:400,700&subset=latin-ext" rel="stylesheet">
	
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	
	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/sticky.js"></script>

</head>
<body>
	<div id="menu">
		<div id="nav">
			<div id="dom"><a href="http://localhost/samba.org.pl"><i class="icon-home"></i></a></div>
			<div id="mail"><a href="mailto:zbyszek.gora@gmail.com"><i class="icon-mail-squared"></i></a></div>
		</div>
		<div id="social">
			<div id="fb"><a href="https://www.facebook.com/zbyszek.gora" target="_blank"><i class="icon-facebook-squared"></i></a></div>
			<div id="tw"><a href="https://twitter.com/zbyszek_gora" target="_blank"><i class="icon-twitter-squared"></i></a></div>
			<div id="gp"><a href="https://plus.google.com/+ZbyszekG%C3%B3ra" target="_blank"><i class="icon-gplus-squared"></i></a></div>
			<div id="ln"><a href="https://www.linkedin.com/in/zbigniewgora" target="_blank"><i class="icon-linkedin-squared"></i></a></div>
		</div>
		<div id="samba"><a href="https://wiki.samba.org/index.php/Main_Page" target="=blank"><img src="img/samba.png" alt="Oficjalny podręcznik" /></a></div>
		<div style="clear: both;"></div>
	</div>
	<div id="kontener">
		<nav id="lewy">
			<a href="KontrolerDomeny">Kontorler AD w systemie Debian</a><br />
			<a href="KleintWindows">Dodanie Windows do domeny</a><br />
			<a href="ProfileWędrujące">Profile wędrujące</a><br />
			<a href="KlientLinux">Dodanie Linuxa do domeny</a><br />
			<a href="NTP">Serwer czsu NTP</a><br />
			<a href="Autor">O autorze</a><br />
			<a href="KsięgaGości">Księga gości</a><br />
		</nav>
		<section id="main">
			<?php
				$page = isset($_GET['s']) ? basename($_GET['s']) : 'glowna';
 
				$file = 'main/' . $page . '.php';
 
				if(file_exists($file))
					include $file;
				else
					include("czas.php");
			?>
		</section>
		<div style="clear: both;"></div>
	</div>
	<div id="stopka">
		<div id="cpr" style="float: left; margin-left: 5px">Copyright &copy; Zbigniew Góra</div>
		<div id="licznik" style="float: right; margin-right: 5px">
			Liczba wejść na stronę:&nbsp;
			<?php
				$adres = strval($_SERVER['REMOTE_ADDR']);
				$adres = strtr($adres,".",":");
				$adresy = explode(":",$adres);
				
				$file= @fopen("count.dat", "c+");
				
				if ( $adresy[0]!=127 && $adresy[1]!=0 )
				{
					fscanf($file, "%d", $count);
					$count++;
					rewind($file);
					fputs($file, $count);
					fclose($file);
				}
				else
				{	
					fscanf($file, "%d", $count);
					echo $count;
				}
			?>
		</div>
		<div style="clear: both"></div>
	</div>
	
	<div style="margin-top: 5px; margin-left: 5px">
		<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
			<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Poprawny CSS!" />
		</a>
	</div>
</body>
</html>
