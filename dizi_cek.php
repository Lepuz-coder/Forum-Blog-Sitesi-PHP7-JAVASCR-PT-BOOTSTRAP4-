<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ana Sayfa</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="stil.css">
</head>
</head>

<body>
	
	
	<?php
	set_time_limit(0);
	
	$db = new PDO("mysql:host=localhost;dbname=dizi_forum;charset=utf8","root","");
	
	$ch = curl_init();
	
	curl_setopt($ch,CURLOPT_URL,"https://www.dizibox.pw");
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.2) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.168 Safari/535.19");
	curl_setopt($ch,CURLOPT_REFERER,"https://www.google.com");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	
	$sonuc = curl_exec($ch);
	
	$desen = "@<ul class='alphabetical-category-list list-unstyled' data-index='#A(.*?)<div id=\"sub-menu\" class=\"ff-2\">@si";
	preg_match_all($desen,$sonuc,$cikti);
	
	$desen2 = '@<li><a title="(.*?)" href="(.*?)"><i class="(.*?)"></i>(.*?)</a></li>@si';
	
	preg_match_all($desen2,$cikti[1][0],$cikti2);
	
	
	//-----------------------------------------------
	
	
	$dizi_isimler = $cikti2[4];//Dizi isimlerini içerisinde tutan array
	
	echo count($dizi_isimler);
	
	for($i=0;$i<count($dizi_isimler);$i++):
	
	$dizinin_ismi = $cikti2[4][$i];
	
	$dizinin_linki = $cikti2[2][$i];
	
	curl_close($ch);
	
	$ch = curl_init();
	
	curl_setopt($ch,CURLOPT_URL,$dizinin_linki);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.2) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.168 Safari/535.19");
	curl_setopt($ch,CURLOPT_REFERER,"https://www.google.com");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	
	$sonuc3 = curl_exec($ch);
	
	$desen3 = '@<a href="https://www.dizibox.pw/tur(.*?) rel="tag">(.*?)</a>@si';
	
	preg_match_all($desen3,$sonuc3,$sonuc4);
	
	echo $dizinin_ismi . "Eklendi--";
	$dizi_tur = $sonuc4[2][0];
	
	$dizinin_ismi = trim($dizinin_ismi);
	$dizi_tur = trim($dizi_tur);
	
	$ekle = $db->prepare("insert into diziler(dizi_ad,tur) VALUES('$dizinin_ismi','$dizi_tur')");
	$ekle->execute();
	
	endfor;
	?>
	
	
</body>
</html>