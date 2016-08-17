<meta charset='utf-8'>
<?php
$pattern= '/(?<gun> ([0-9][0-9] ) ) (?<imsak>([0-9][0-9] [0-9][0-9]))  (?<gunes>([0-9][0-9] [0-9][0-9]))  (?<ogle>([0-9][0-9] [0-9][0-9]))  (?<ikindi>([0-9][0-9] [0-9][0-9]))  (?<aksam>([0-9][0-9] [0-9][0-9]))  (?<yatsi>([0-9][0-9] [0-9][0-9]))  (?<ksaat>([0-9][0-9] [0-9][0-9]))/';

$dosya = fopen('adana.txt', 'r');
$icerik = fread($dosya, filesize('adana.txt'));

fclose($dosya);


preg_match_all($pattern, $icerik, $results);


foreach ($results[0] as $deger) {
    
	
	preg_match_all($pattern, $deger, $resultst);
	
	
	echo 'Gün : '.$gun = $resultst['gun'][0];
	echo '<br>';
	echo 'İmsak : '.$imsak = $resultst['imsak'][0];
	echo '<br>';
	echo 'Güneş : '.$gunes = $resultst['gunes'][0];
	echo '<br>';
	echo 'Öğle : '.$ogle = $resultst['ogle'][0];
	echo '<br>';
	echo 'İkindi : '.$ikindi = $resultst['ikindi'][0];
	echo '<br>';
	echo 'Aksam : '.$aksam = $resultst['aksam'][0];
	echo '<br>';
	echo 'Yatsı : '.$aksam = $resultst['yatsi'][0];
	echo '<br>';
	echo 'Kible Saat : '.$aksam = $resultst['ksaat'][0];
	echo '<br>';
	echo '<br>';
	}

?>