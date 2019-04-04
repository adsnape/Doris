<?php
function fetchpic($imgno, $ind){#function to return one image
	$getimg = "D_img".$imgno;
	$qry = mysql_query("SELECT ".$getimg." FROM dorispages WHERE D_id = ".$ind);
		$ret = "";
		while ($row = mysql_fetch_assoc($qry)){
		 $ret = $row[$getimg];
		 }
		 return $ret;	
	}

function fetchtxt($imgno, $ind){#function to return one text file pass column then row
	$getimg = "D_txt".$imgno;
	$qry = mysql_query("SELECT ".$getimg." FROM dorispages WHERE D_id = ".$ind);
		$ret = "";
		while ($row = mysql_fetch_assoc($qry)){
		 $ret = $row[$getimg];
		 }
		 return $ret;	
}
function fetchtit($ind){#function to return one image
	$qry = mysql_query("SELECT D_title FROM dorispages WHERE D_id = ".$ind);
		$ret = "";
		while ($row = mysql_fetch_assoc($qry)){
		 $ret = $row['D_title'];
		 }
		 return $ret;	
	}
	?>