<?php
error_reporting(E_ERROR);
$json = file_get_contents("http://yourwebsite.com/yourfolder/files/intelsoftware_a.php"); 
$t_query  = json_decode($json,true);   

foreach ($t_query as $key => $value) {
	foreach ($value as $key2 => $value2){
		if ($key2 == "id_str"){
			echo $value2;
		}
		foreach ($value2 as $key3 => $value3){
		}
	}
}
?>
