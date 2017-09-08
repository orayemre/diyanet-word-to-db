<?php
            function findreplace ($par){
                return str_replace(
                    array( ".docx" ),
                    array(""),
                    $par

                );
            }
            function findreplacenumber ($par){
                return str_replace(
                    array( "1","2","3","4","5","6","7","8","9"),
                    array("01","02","03","04","05","06","07","08","09"),
                    $par

                );
            }
                $gunler = array(
                                'Pazartesi',
                                'Salı',
                                'Çarşamba',
                                'Perşembe',
                                'Cuma',
                                'Cumartesi',
                                'Pazar'
                            );

                $aylar = array(
                    'Ocak',
                    'Şubat',
                    'Mart',
                    'Nisan',
                    'Mayıs',
                    'Haziran',
                    'Temmuz',
                    'Ağustos',
                    'Eylül',
                    'Ekim',
                    'Kasım',
                    'Aralık'
                );
            function findreplacedocxname ($par){
													return str_replace( 
													array("Ç","Ğ","İ","Ö","Q","Ş","Ü","I"),
													array("A","A","A","A","A","A","A","A"),
													$par
                );
            }

?>