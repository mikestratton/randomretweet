<?php 
	 //variables created to pass into array
	 $a = 'http://yourwebsite.com/yourfolder/files/intelsoftware_b.php';//twitter user account
	 $b = 'http://yourwebsite.com/yourfolder/files/java_b.php'; //twitter user account
	 $c = 'http://yourwebsite.com/yourfolder/files/my_quotes_b.php'; //my personal quotes
	 $d = 'http://yourwebsite.com/yourfolder/files/nasa_technology_b.php'; //twitter user account
	 $e = 'http://yourwebsite.com/yourfolder/files/newscientist_b.php'; //twitter user account
 
	//create array of variables
	$data = array($a,$b,$c,$d,$e,);
	
	//randomly choose one variable from array
	$dkey = array_rand($data);
	$filecontents = file_get_contents($data[$dkey]);
	echo $filecontents;     
?>
