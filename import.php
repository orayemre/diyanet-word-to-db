<?php
        error_reporting(E_ALL);
        ini_set('display_errors', '0');
        set_time_limit(0);

        require_once "class.php";
        require_once "function.php";
        require_once "db.php";

        $source             = "source/";
        $array              = opendir($source);
        while($filevalue    = readdir($array)) {

            if ($filevalue == '.' or $filevalue == '..') { } else {

                echo $cityname  = strtoupper(strtolower(iconv('','UTF-8',$filevalue)));
                echo "<br><br>";

                /*City İnsert*/
                    $db->query("INSERT INTO sehir ( sehir_title  ) VALUES ( '{$cityname}' )");
                    $cityid     = $db->insert_id;
                /*City İnsert*/

                $districtfile   = $source.$filevalue;
                $districtarray  = opendir($districtfile);

                while($districtvalue = readdir($districtarray)) {

                    if ($districtvalue == '.' or $districtvalue == '..') { } else {

                        $day                = strtotime('01/01/2018');
                        $district           = iconv('', 'UTF-8', $districtvalue);
                        $districtdocx       = $districtfile.'/'.$district;

                        echo $districtname  = findreplace($district);
                        echo "<br>";
                        /*District*/
                        $db->query("INSERT INTO ilce ( ilce_sehir,ilce_title  ) VALUES ( '{$cityid}','{$districtname}' )");
                        $districtid     = $db->insert_id;
                        /*District*/

                        $docObj     = new DocxConversion($districtdocx);
                        $docText    = $docObj->convertToText();
                        $pattern    = '/(?<gun> ([0-9][0-9] ) ) (?<imsak>([0-9][0-9] [0-9][0-9]))  (?<gunes>([0-9][0-9] [0-9][0-9]))  (?<ogle>([0-9][0-9] [0-9][0-9]))  (?<ikindi>([0-9][0-9] [0-9][0-9]))  (?<aksam>([0-9][0-9] [0-9][0-9]))  (?<yatsi>([0-9][0-9] [0-9][0-9]))  (?<ksaat>([0-9][0-9] [0-9][0-9]))/';
                        preg_match_all($pattern, $docText, $results);
                        $daycounter = 0;
                        foreach ($results[0] as $value) {
                            preg_match_all($pattern, $value, $resultst);
                            $dayvalue   =   '+'.$daycounter.' day';
                            $gun        =   date('Y.m.d',strtotime($dayvalue,$day));
                            $imsak      =   $resultst['imsak'][0];
                            $gunes      =   $resultst['gunes'][0];
                            $ogle       =   $resultst['ogle'][0];
                            $ikindi     =   $resultst['ikindi'][0];
                            $aksam      =   $resultst['aksam'][0];
                            $yatsi      =   $resultst['yatsi'][0];
                            $ksaat      =   $resultst['ksaat'][0];
                            /**/
                            $db->query("INSERT INTO vakitler ( 
                                                                  vakit_sehir,
                                                                  vakit_ilce,
                                                                  vakit_gun,
                                                                  vakit_imsak,
                                                                  vakit_gunes,
                                                                  vakit_ogle,
                                                                  vakit_ikindi,
                                                                  vakit_aksam,
                                                                  vakit_yatsi,
                                                                  vakit_kible 
                                                                  ) VALUES ( 
                                                                  '{$cityid}',
                                                                  '{$districtid}',
                                                                  '{$gun}',
                                                                  '{$imsak}',
                                                                  '{$gunes}',
                                                                  '{$ogle}',
                                                                  '{$ikindi}',
                                                                  '{$aksam}',
                                                                  '{$yatsi}',
                                                                  '{$ksaat}'
                                                                   )");
                            /**/
                            $daycounter++;
                        }


                    }

                }

                echo "+++<br>";
            }

        }



?>