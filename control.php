<?php
		header("Refresh: 60; url=http://localhost/diyanet-word-to-db/control.php");
		
		error_reporting(E_ALL);
        ini_set('display_errors', '0');
        set_time_limit(0);
		
        require_once "db.php";
        $row = $db->get_row("SELECT vakit_id FROM vakitler WHERE vakit_id > 0");
		echo "Toplam Vakit Gün = ".$db->num_rows;
		echo "<br>";
		
		$row = $db->get_row("SELECT * FROM ilce ");
        echo "Toplam İlçe = ".$db->num_rows;
        echo "<br>";
        echo 'Toplam İlçe * 365 Gün = '.$db->num_rows*365;
        echo "<br>";
		$sehir	= $db->get_row("SELECT * FROM sehir ORDER BY sehir_id DESC ");
		echo $sehir->sehir_title;
				/*
				$results	=	$db->get_results("SELECT * FROM ilce");
				foreach ( $results as $db_rows ){
					
						$row	= $db->get_row("SELECT * FROM vakitler WHERE vakit_ilce = '$db_rows->ilce_id' ");
						$vakitlertoplam = $db->num_rows;
						
							if ($vakitlertoplam != 365){
								
								$sehir	= $db->get_row("SELECT * FROM sehir WHERE sehir_id = '$db_rows->ilce_sehir' ");
								echo $sehir->sehir_title.' '.$db_rows->ilce_title.' ( '.$db_rows->ilce_id.')'." Toplam Vakit Gün = ".$vakitlertoplam;
								echo "<br>";
							
							}					
					
				}*/
?>