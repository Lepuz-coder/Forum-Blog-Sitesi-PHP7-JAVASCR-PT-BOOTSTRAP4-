<?php
//Populer_dizileri ve populer filmleri otomatik olarak yazilar listesine tur_populer kısmını 1 yapan sistem
$db = new PDO("mysql::host=localhost;dbname=dizi_forum;charset=utf8","root","");

$sec = $db->prepare("select * from populer_diziler");
$sec->execute();

	while($sonuc = $sec->fetch(PDO::FETCH_ASSOC)):

		$upd = $db->prepare("update yazilar set tur_populer=1 where dizi_film_ad=?");
		$upd->execute(array($sonuc["dizi_ad"]));
		
		echo $sonuc["dizi_ad"]."-".$upd->rowCount() . "<br>";

	endwhile;


$sec = $db->prepare("select * from populer_filmler");
$sec->execute();

	while($sonuc = $sec->fetch(PDO::FETCH_ASSOC)):

		$upd = $db->prepare("update yazilar set tur_populer=1 where dizi_film_ad=?");
		$upd->execute(array($sonuc["film_ad"]));
		
		echo $sonuc["film_ad"]."-".$upd->rowCount() . "<br>";

	endwhile;


?>