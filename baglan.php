<?php 

//Çoklu Dil Mantığı if/else

//$_SESSION['tr'];
//veya
////$_SESSION['eng'];

try {

	$db=new PDO("mysql:host=localhost;dbname=personal;charset=utf8",'root','123456789');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>