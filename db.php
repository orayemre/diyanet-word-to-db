<?php

        @include_once "vendors/ezsql/ez_sql_core.php";
        @include_once "vendors/ezsql/ez_sql_mysql.php";

        $db_user    	=	"root";
        $db_pass		=	"";
        $db_name		=	"namaz-vakitleri";
        $db_server		=	"localhost";

        $db = new ezSQL_mysql($db_user,$db_pass,$db_name,$db_server);

        $db->query("SET NAMES UTF8");
        $db->query("SET CHARACTER SET utf8");
        $db->query("SET COLLATION_CONNECTION = 'utf8_general_ci' ");

?>