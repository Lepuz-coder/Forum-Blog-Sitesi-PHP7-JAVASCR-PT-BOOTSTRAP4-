<?php

//Veriler vikipediadan alınıyor

	$db = new PDO("mysql:host=localhost;dbname=dizi_forum;charset=utf8","root","");
	
	$ch = curl_init();
		
	set_time_limit(10000);

	curl_setopt($ch,CURLOPT_URL,"http://localhost/php/Bireyselu/forum/film_veri.php");	
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	
	$sonuc = curl_exec($ch);

	$desen = '@<h2><span class="mw-headline" id="(.*?)">(.*?)</span><span class="mw-editsection">(.*?)<p><b>Previous:</b>&#160;&#160;@si';

	preg_match_all($desen,$sonuc,$veriler1);
	
	//print_r($veriler1[1][0]);

	$desen2 = '@<li><i><a href="(.*?)" title="(.*?)">(.*?)</a></i> (.*?)</li>@si';
	
	preg_match_all($desen2,$veriler1[3][0],$veriler2);
		for($i=0;$i<count($veriler2[3]);$i++):

			$isim = $veriler2[3][$i];
			$isim = htmlspecialchars(strip_tags($isim));			

			if($isim != "edit"):
			$ekle = $db->prepare("insert into filmler(film_ad) VALUES(?)");
			//$ekle = $db->prepare("delete from filmler where film_ad = ?");
			$ekle->bindParam(1,$isim,PDO::PARAM_STR);
			$ekle->execute();

			if($ekle->rowCount() == 0):
				echo $isim . "<br>";
				$db->errorInfo();

			endif;

			endif;

		endfor;
		

?>