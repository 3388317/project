<?php 




try {
$pdo= new PDO('mysql:host=localhost;dbname=system01','root','');
	
} catch (Exception $f) {

	echo $f->getmessage();
	
}




 ?>