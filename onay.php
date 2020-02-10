<?php

require_once("ana.php");

if(isset($_GET['kod']) && isset($_COOKIE[krypto("kulid")])):

$kod = $_GET['kod'];

$islemler = new kayit_islemleri;

$sonuc = $islemler->kod_kontrol($kod,$db);

$sonuc = json_decode($sonuc,true);

if($sonuc["sonuc"]):

echo "ONAYLANDI";

else:

echo "LİNK HATALI !";

endif;

header( "Refresh:1; url=http://localhost/php/Bireyselu/forum/index.php", true, 303);

else:

header("Location:http://localhost/php/Bireyselu/forum/index.php");

endif;

?>