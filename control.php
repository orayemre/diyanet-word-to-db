<?php

        require_once "db.php";
        $row	= $db->get_row("SELECT * FROM ilce ");
        echo "Toplam İlçe = ".$db->num_rows;
        echo "<br>";
        echo 'Toplam İlçe * 365 Gün = '.$db->num_rows*365;
        echo "<br>";
        $row	= $db->get_row("SELECT * FROM vakitler ");
        echo 'Toplam Vakit Gün = '.$db->num_rows;



?>