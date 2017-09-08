<?php
    require_once "db.php";
    require_once "function.php";
    date_default_timezone_set('Europe/Istanbul');

    /* Hicri Hesaplama */
                /*Hicri Ayların SADECE Başlangıç Tarihlerini Girelim*/
/*
                    $array_ay_gun = array(

                        array('day'=>'29','start'=>'11.9.2018', 'title'=>'Muharrem 1440',       'year'=>'1440','moon'=>'01'),
                        array('day'=>'30','start'=>'10.10.2018','title'=>'Safer 1440',          'year'=>'1440','moon'=>'02'),
                        array('day'=>'29','start'=>'9.11.2018', 'title'=>'Rebîulevvel 1440',    'year'=>'1440','moon'=>'03'),
                        array('day'=>'30','start'=>'8.12.2018', 'title'=>'Rebîulâhir 1440',     'year'=>'1440','moon'=>'04'),
                        array('day'=>'30','start'=>'18.1.2018', 'title'=>'Cemâziyelevvel 1439', 'year'=>'1439','moon'=>'05'),
                        array('day'=>'30','start'=>'17.2.2018', 'title'=>'Cemâziyelâhir 1439',  'year'=>'1439','moon'=>'06'),
                        array('day'=>'29','start'=>'19.3.2018', 'title'=>'Recep 1439',          'year'=>'1439','moon'=>'07'),
                        array('day'=>'29','start'=>'17.4.2018', 'title'=>'Şaban 1439',          'year'=>'1439','moon'=>'08'),
                        array('day'=>'30','start'=>'16.5.2018', 'title'=>'Ramazan 1439',        'year'=>'1439','moon'=>'09'),
                        array('day'=>'29','start'=>'15.6.2018', 'title'=>'Şevval 1439',         'year'=>'1439','moon'=>'10'),
                        array('day'=>'29','start'=>'14.7.2018', 'title'=>'Zilkâde 1439',        'year'=>'1439','moon'=>'11'),
                        array('day'=>'30','start'=>'12.8.2018', 'title'=>'Zilhicce 1439',       'year'=>'1439','moon'=>'12')

                    );

                /*Hicri Ayların SADECE Başlangıç Tarihlerini Girelim*/
    /* Hicri Hesaplama */
    /*İnsert*//*
        foreach ($array_ay_gun as $value){
            $daynum = 1;
            for ($i=0;$i<$value['day'];$i++){
                $dayvalue       = '+'.$i.' day';
                $startstrtotime = strtotime($value['start']);

                    $title      = $daynum.' '.$value['title'];
                    $date       = date('d.m.Y', strtotime($dayvalue,$startstrtotime));

                    $moontr     = date('m', strtotime($dayvalue,$startstrtotime));
                    $moontr     = $aylar[$moontr - 1];

                    $dayname    = date('N', strtotime($dayvalue,$startstrtotime));
                    $dayname    = $gunler[$dayname - 1];

                    $daynumber  = date('d', strtotime($dayvalue,$startstrtotime));
                    $yearnumber = date('Y', strtotime($dayvalue,$startstrtotime));

                    $datetitlename = $daynumber.' '.$moontr.' '.$yearnumber.' '.$dayname;

                    if($daynum <= 9){
                        $dateshort  = findreplacenumber($daynum).'.'.$value['moon'].'.'.$value['year'];
                    }else{
                        $dateshort  = $daynum.'.'.$value['moon'].'.'.$value['year'];
                    }

                    $db->query("INSERT INTO hicri ( hicri_date,hicri_title,hicri_dateshort,hicri_miladiuzun ) VALUES ( '{$date}','{$title}','{$dateshort}','{$datetitlename}' )");
                    echo "<br>";

                $daynum++;
            }
            echo "<br><br>";
        }

        /*İnsert*/

        /* Control *//*
        $daynum     = '31.12.2017';
        for ($i=1;$i<366;$i++){

            $dayvalue           =   '+'.$i.' day';
            $startstrtotime     =   strtotime($daynum);
            $date          =   date('d.m.Y', strtotime($dayvalue,$startstrtotime));
            $row	= $db->get_row("SELECT * FROM hicri WHERE hicri_date = '{$date}' ");
            if ( $db->num_rows == '1'){

                echo $row->hicri_date.' '.$row->hicri_title;
                echo "<br>";

            }
        }
        /* Control */

?>