<?php  	$hostname = "localhost";
       	$user="root";
        $password="usbw";
        $database="Doris";
		
		#$hostname = "sdesbertiesun.db.4793274.hostedresource.com";
       	#$user="sdesbertiesun";
        #$password="sd3sBertiesun";
        #$database="sdesbertiesun";
		
        mysql_connect($hostname,$user,$password) or die (mysql_error());
        mysql_select_db($database) or die(mysql_error());
		?>