<?php
require_once("ana.php");

//setcookie(krypto("kulid"),"",time()-10);


$inceleme = new yazilar_islemleri;

$inceleme->inceleme_ekle($db,$_GET['yazi_id']);


$islemler = new kayit_islemleri;

 $islemler->db_kullanicilar_cek($db);

$kullanicilar = $islemler->kullanicilar;


@$kulad = $kullanicilar[$_COOKIE[krypto("kulid")]]["kullanici_ad"];

$veriler = new veri_cek_islemleri;

$yaziv=$veriler->yazi_bilgileri_al($db);

$bildirim_mesaj = new mesaj_bildirim;

$sayi = $bildirim_mesaj->mesaj_bildirim_sayi($kulad);


if(!isset($_GET['baslik']) || !isset($_GET['kulad']) || !isset($_GET['tur']) || !isset($_GET['ad']) ):
 
$baslik = seo($yaziv["baslik"]);
$ad = seo($yaziv["ad"]);

header("Location:yazilar/".$yaziv["tur"]."/".$ad."/".$baslik."/".$yaziv["kulad"]."/".$_GET["yazi_id"]);

endif;



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>İnceleme : <?php echo $yaziv["ad"]; ?> | Dizfy</title>
	<base href="http://localhost/php/Bireyselu/forum/">
	 <meta charset="utf-8">
	
	<meta name="title" content="İnceleme : <?php echo $yaziv["ad"]; ?> | Dizfy"><!-- Title'ın gözükmeyen fakat arama motorlarında önemli olan kısmı  -->
	<?php if($yaziv["tur"] == "dizi"): ?>
    <meta name="description" content="<?php echo $yaziv["ad"]; ?> dizi incelemesi. Yazan kullanıcı : <?php echo $yaziv["kulad"]; ?>; Yayınlanma :<?php echo $yaziv["tarih"]; ?>; <?php echo $yaziv["baslik"]; ?>">
	<?php else: ?><!-- Websitesi hakkında arama motoru için açıklama -->
	<meta name="description" content="<?php echo $yaziv["ad"]; ?> film incelemesi. Yazan kullanıcı : <?php echo $yaziv["kulad"]; ?>; Posted :<?php echo $yaziv["tarih"]; ?>; <?php echo $yaziv["baslik"]; ?>">
	<?php endif; ?>
	
	
	<?php if($yaziv["tur"] == "dizi"): ?>
    <meta name="keywords" content="<?php echo $yaziv["ad"]; ?> inceleme, <?php echo $yaziv["ad"]; ?> yorumu, <?php echo $yaziv["ad"]; ?> detaylı inceleme,<?php echo $yaziv["ad"]; ?> güncel inceleme,<?php echo $yaziv["ad"]; ?> dizi incelemesi,<?php echo $yaziv["ad"]; ?> dizi yorumları,<?php echo $yaziv["ad"]; ?> dizi yorumu,dizi inceleme">
	<?php else: ?>
	<meta name="keywords" content="<?php echo $yaziv["ad"]; ?> inceleme, <?php echo $yaziv["ad"]; ?> yorumu, <?php echo $yaziv["ad"]; ?> detaylı inceleme,<?php echo $yaziv["ad"]; ?> güncel inceleme,<?php echo $yaziv["ad"]; ?> film incelemesi,<?php echo $yaziv["ad"]; ?> film yorumları,<?php echo $yaziv["ad"]; ?> film yorumu,film inceleme">
	<?php endif; ?>
	
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stil.css">
	<script type="text/javascript" src="ortak.js"></script>
	<script type="text/javascript" src="yazilar.js"></script>
	<style>
	
		@media (max-width: 767.98px) {
	
			.ustten_buton{
				margin-top: 20px;
			}
			
			.responsiveheight{
				height: 90px;
			}
			
			.responsive-resim{
				width: 50px;
				height: 50px;
			}

}
		
		@media (min-width: 992px) {
			
			.responsiveheight{
				height: 60px;
			}
			
			.responsive-resim{
				width: 50px;
				height: 50px;
			}
			
		}
	
	</style>
	<style>
	#style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #343a40;
}

		
	</style>
	<style>
	
		.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
  background-color: #17A2B8;
}
.dropdown-menu1{
  top: 60px;
  right: 0px;
  left: unset;
  width: 460px;
  padding-bottom: 0px;
  padding: 0px;
}
.dropdown-menu:before{
  content: "";
  position: absolute;
  top: -20px;
  right: 12px;
  border:10px solid #343A40;
  border-color: transparent transparent #343A40 transparent;
}
.head{
  padding:5px 15px;
  border-radius: 3px 3px 0px 0px;
}
.footer{
  padding:5px 15px;
  border-radius: 0px 0px 3px 3px; 
}
.notification-box{
  padding: 10px 0px; 
}
.bg-gray{
  background-color: #eee;
}
@media (max-width: 640px) {
    .dropdown-menu1{
      top: 50px;
      left: -16px;  
      width: 100%;
    } 
    .nav{
      display: block;
    }
    .nav .nav-item,.nav .nav-item a{
      padding-left: 0px;
    }
    .message{
      font-size: 13px;
    }
}
	
	</style>
</head>

<body class="bg-white">
	
	<div class="container-fluid">
	
	
	<div class="row">
		
	      <img src="resimler/crysis.jpg	" class=" w-100" alt="..." style="z-index: 1; position: absolute;" >

		
	</div>
	<!--Ana Kısım-->
	<div class="row"> 
		
		<div class="w-100 h-100 destkopnavtop bg-white" style=" z-index:10; position: absolute;">
		
		<!--NAVİGASYON-->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow w-100 sticky-top" style="min-height: 70px; z-index: 100; position: absolute;" >
  <a class="navbar-brand" href="#" style="margin-left: 150px;">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
		<?php if(@$_GET['link'] == "tumyazilar"): ?>
		<li class="nav-item active">
		<?php else: ?>
		<li class="nav-item">
    	<?php endif; ?>
		<a class="nav-link" href="yazılar/tumyazilar/dizi">Tüm Yazılar</a>
      </li>
		
		<?php if(@$_GET['link'] == "populeryazilar"): ?>
		<li class="nav-item active">
		<?php else: ?>
		<li class="nav-item">
    	<?php endif; ?>
        <a class="nav-link" href="yazılar/populeryazilar/dizi">Popüler Yazılar</a>
      </li>
		
		
		
		
		
		
	<!--Giriş Yapıldıysa : -->
		<?php if(isset($_COOKIE[krypto('kulid')])): ?>
		<li class="nav-item">
        <a class="nav-link" href="yazılar/takip-edilen-yazilar/dizi">Takip Ettiklerim</a>
      </li>
				<li class="nav-item">
			<?php if($sayi == 0): ?>
        <a class="nav-link " href="mesaj-kutusu">Mesajlar
		  <span class="badge badge-danger "><?php echo $sayi; ?></span>	
			<?php else: ?>
			<a class="nav-link text-light" href="mesaj-kutusu">Mesajlar
			<span class="badge badge-success"><?php echo $sayi; ?></span>
			<?php endif; ?>
		</a>
      </li>
		<?php
			$bildirim = new bildirimler;
			
			$sayi = $bildirim->bildirim_sayi($db);
			
			?>
			
		<li class="nav-item dropdown" >
			<?php if($sayi == 0): ?>
			 <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i> Bildirim 	<span class="badge badge-danger" id="bildirim_sayi_1"> <?php echo $sayi; ?></span>
			<?php else : ?>
                  <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i> Bildirim 	<span class="badge badge-success" id="bildirim_sayi_1"> <?php echo $sayi; ?></span>
			<?php endif; ?>		  
                  </a>
                    <ul class="dropdown-menu dropdown-menu1" style="max-height: 420px; overflow-x: hidden;" class="scrollbar" id="style-1">
                      <li class="head text-light bg-dark">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
							  <span>Bildirimler (<span id="bildirim_sayi_2"><?php echo $sayi; ?></span>)</span>
							  <?php if($sayi != 0): ?>
                            <span class="float-right text-light" style="cursor: pointer;" id="tumunu_sil">Hepsini okundu işaretle</span>
							  <?php endif; ?>
                          </div>
                      </li>
             
						  
						 <?php
						  
						  
						 $bildirim->bildirimleri_al($db);
						  
						  ?> 
                      
                    </ul>
                </li>	

	<?php else : ?>
		<li class="nav-item">
        <a class="nav-link disabled" href="giris.php">Takip Ettiklerim</a>
      </li>
		<li class="nav-item">
        <a class="nav-link disabled" href="giris.php">Yazılarım</a>
      </li>
		<li class="nav-item">
        <a class="nav-link disabled" href="giris.php">Mesaj Kutusu</a>
      </li>
		
	<?php endif; ?>
		
    </ul>
      <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Ara"  id="aranan_deger">
      <button class="btn btn-outline-success my-2 my-sm-0" id="ara_buton">Ara</button>
    </div>
	  
	  <script>
	 
		  $('#ara_buton').click(function(){
			  
			  				  var aranan = $('#aranan_deger').val();
				  aranan = aranan.trim();
			   	 if(aranan.length !=0){
			   window.location.href="keşfet/"+aranan;
			  }
			  
		  })
		  $('#aranan_deger').on("keyup",function(e){
			  
			  if(e.keyCode == 13){
				  				  var aranan = $('#aranan_deger').val();
				  aranan = aranan.trim();
			   	 if(aranan.length !=0){
			   window.location.href="keşfet/"+aranan;
			  }
			  }
			  
		  })
	  
	  </script>
	 
	 
	  <!--Giriş Yapmışsa bunu göster-->
	  
	  <ul class="navbar-nav">
		  <?php
	  	if(isset($_COOKIE[krypto("kulid")])):
	  	   ?>
	  <li class="nav-item dropdown  soldandstkp ">
	  	<button class="btn btn-info btn-block " style="margin-top: 2px;" id="yeni_yazi_ekle">Yeni Yazı Ekle</button>
	  </li>
		  
		   <li class="nav-item dropdown navkonum  soldandstkp">
        <div class="nav-link dropdown-toggle btn btn-outline-dark" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $kulad; ?>
			   </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="kullanici/<?php echo $kulad; ?>">Profil</a>
          <a class="dropdown-item" href="ayarlar">Hesap Ayarları</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" onClick="cikis()" href="giris.php" style="cursor: pointer;">Çıkış yap</a>
			<script>
				
				function cikis(){
					$.post("ana.php?islem=cikis_yap");
					
				}
			
			</script>
        </div>
      </li>
		  
		  <?php else: ?>
	 <!--Giriş Yapmamışsa Bunu Göster-->
	  <li class="nav-item dropdown soldandstkp">
	  	<a class="btn btn-success btn-block text-white" href="kayit.php">Üye Ol </a>
	  </li>
	  <li class="nav-item dropdown navkonum soldandstkp">
	  	<a class="btn btn-primary btn-block text-white" href="giris.php">Giriş Yap</a>
	  </li>
		  <?php endif; ?>
	  </ul>
  </div>
</nav>
			
		
			
					<div class="container" style="margin-top: 70px;">
					<?php if(!empty($yaziv["icerik"])) : ?>	
						

    <div class="row">
	
      <!-- İçerik Başlangıcı -->
		<?php ob_start(); 
		
		if(file_exists("yazılar_depo/".$_GET['yazi_id'].".html")):

		include("yazılar_depo/".$_GET['yazi_id'].".html");
		
		else:
		
		?>
       <div class="col-lg-10 col-md-10 col-12 mx-auto">

        <!-- Title -->
		   <h1 class=" mt-4 lead" style="font-size: 34px;">İnceleme :  <a href="keşfet/<?php echo $yaziv["ad"]; ?>" id="ad" title="Dizinin yazılarına git"><?php echo $yaziv["ad"]; ?></a></h1>
        

        <!-- Author -->
        <p class="lead d-none" id="tur_isim">
          <?php echo ucfirst($yaziv["tur"]); ?> :
          <a href="keşfet/<?php echo $yaziv["ad"]; ?>" id="ad" title="Dizinin yazılarına git"><?php echo $yaziv["ad"]; ?></a>
        </p>
		<hr>
		  

        <!-- Yazının Yayınlandığı Tarih-->
      <p id="tarih" class="lead"><?php echo $yaziv["tarih"]; ?></p>
	<hr>
		   
        <!-- Kullanıcı Resim Koymak İsterse -->
        <?php if(!empty($yaziv["resim"])): ?>
		   
		   <img class="img-fluid rounded w-100" style="max-height: 500px;" src="<?php echo $yaziv["resim"]; ?>" alt="" id="resim" style="width: 100%; ">
		   <hr>
		  <?php endif; ?>
			<h2 class="mt-4 display-4 text-center" id="baslik" style="word-break: break-normal; overflow: hidden; min-height: 80px;"><?php echo $yaziv["baslik"]; ?> </h2><br>
        <span id="cizgi"></span>

		   <pre id="icerik" style="white-space: pre-wrap; white-space: -moz-pre-wrap; word-wrap: break-word;  white-space: -pre-wrap;  white-space: -o-pre-wrap;line-height: 33px ;font-family: 'Montserrat', sans-serif; font-size: 16px;"><?php echo $yaziv["icerik"]; ?></pre>
			
		   

           <?php
		   
		  	$sec = $db->prepare("select * from kullanicilar where kullanici_ad=?");
		   	$sec->execute(array($yaziv["kulad"]));
		   	$sonuc = $sec->fetch(PDO::FETCH_ASSOC);
		   
		   ?>
		   <h3 class="lead" style="font-size: 20px"><b>Yazan Kullanıcı :</b> <a href="kullanici/<?php echo $yaziv["kulad"]; ?>" title="Kullanıcı hesabına git"><img src="<?php echo $sonuc["resim"] ?>" width="33" height="30" class="rounded-circle ml-2"></a> <a href="kullanici/<?php echo $yaziv["kulad"]; ?>" class="ml-1 text-info" title="<?php echo $sonuc["rütbe"]; ?>"><?php echo $yaziv["kulad"]; ?> </a></h3>
		   
          <br>
			<div>
            
				
				<button class="btn btn-light btn-sm" id="begen_buton" data-id="<?php echo $_GET['yazi_id'] ?>" >&#10084;</button>
				
				<span class="text-danger" id="begeni_sayisi" data-id="<?php echo $yaziv["begeni_sayisi"]; ?>"><?php echo $yaziv["begeni_sayisi"]; ?> kişi beğendi</span>
				
				<br>
				
				<?php for($i=1;$i<=$yaziv["puan"];$i++): ?>
				
				<div class="btn btn-sm btn-warning mt-3 d-inline-block yıldız-buton" >&#9733;</div>
				
				<?php endfor;
					for($i=1;$i<=5-$yaziv["puan"];$i++):
				?>

				<div class="btn btn-sm btn-dark mt-3 d-inline-block yıldız-buton" >&#9733;</div>
				
				<?php endfor; ?><br>
				
				
				<?php
				
				if($_GET['tur'] == "film"):
				echo '<p class="text-muted mt-2 d-none yıldız-info">Kullanıcının filme verdiği puan : '.$yaziv["puan"].'/5</p>';
				else:
				echo '<p class="text-muted mt-2 d-none yıldız-info">Kullanıcının diziye verdiği puan : '.$yaziv["puan"].'/5</p>';
				endif;
				
				?>
				
				<script>
				
					$('.yıldız-buton').mouseover(function(){
						$('.yıldız-info').removeClass("d-none");
					})
					
					$('.yıldız-buton').mouseout(function(){
						$('.yıldız-info').addClass("d-none");
					})
				
				</script>
				
            </div>
        </p>
		  
		<?php
		
		$dosya = fopen("yazılar_depo/".$_GET['yazi_id'].".html","w");
		fwrite($dosya,ob_get_contents());
		fclose($dosya);
		ob_flush();
		
		endif;
		?>
        
		  <!--Yorumların başladığı yer-->
        <hr>

        <!-- Yorum Atmak için -->
        <div class="card my-4">
          <h5 class="card-header">Yorum Yaz:</h5>
          <div class="card-body">
            <form id="yorum_gonderme_form">
              <div class="form-group">
                <textarea class="form-control" rows="3" name="yorum_icerik" id="yorum_icerik"></textarea>
              </div>
              <button type="button" class="btn btn-info" id="yorum_gonder">Gönder</button>
				<span class="text-danger" id="yorum_gonderme_uyari"></span>
				<input type="hidden" name="yazi_id" value="<?php echo $_GET['yazi_id']; ?>" >
            </form>
          </div>
        </div>

     		<h3 class="text-secondary">Yorumlar</h3>
		<br>
            <div id="yorumlar_yeri" data-id="<?php echo $_GET['yazi_id']; ?>" style="word-break: break-all;"  ></div>

      </div>
						
    		  </div>
			
			<?php else : ?>
						
						<div class="row">
						
							<p class="mx-auto mt-4 text-muted">Aradığınız şey bulunamadı üzgünüz..</p>
							
						</div>
						<hr>
			<?php endif; ?>			
			</div>
			
					<div class="container-fluid">
			
				<div class="row mt-5">
					
				
							<!--İlgini Çekebilecek Yazılar-->
							<div class="col-md-8 col-lg-8 col-12 mx-auto" >
							
								<div class="text-dark text-center mb-3" style="font-size: 26px;">İlgini Çekebilecek Yazılar</div>
								
							
					
								
 <!--Carousel İçerisindeki yazıları otomatik olarak veritabanından kullanıcının okuduğu yazının türüne göre çekip getireceksin(UNUTMA CAROUSELLERİN İD'LERİ FARKLI OLMALI-->
								
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="5000" style="border: 0px solid #E8E5E3; border-radius: 5px; box-shadow: 5px 5px 2px #E8E5E3;">
  <div class="carousel-inner">
	  
	  <?php
	  $islem = new veri_cek_islemleri;
	  
	  $islem->onerilen_yazilari_cek($db,$yaziv["tur"],$yaziv["ad"],1,$_GET['yazi_id']);
	  
	  ?>
 
  </div>
	 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

<div id="carouselExampleIndicators1" class="carousel slide mt-5" data-ride="carousel"  data-interval="5000" style="border: 0px solid #E8E5E3; border-radius: 5px;box-shadow: 5px 5px 2px #E8E5E3;">
  <div class="carousel-inner">
    
	  <?php
	  
	  $islem->onerilen_yazilari_cek($db,$yaziv["tur"],$yaziv["ad"],2,$_GET['yazi_id']);
	  
	  ?>
	  
  </div>
	 <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

<div id="carouselExampleIndicators2" class="carousel slide mt-5" data-ride="carousel"  data-interval="5000" style="border: 0px solid #E8E5E3; border-radius: 5px; box-shadow: 5px 5px 2px #E8E5E3;">
  <div class="carousel-inner">
   <?php
	  
	  $islem->onerilen_yazilari_cek($db,$yaziv["tur"],$yaziv["ad"],3,$_GET['yazi_id']);
	  
	  ?>
  </div>
	 <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
								
					<ul class="list-group w-100 mt-5">
						<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto lead" style="font-size: 28px;">Beğenilen Yazılar</h3>
				  </li>
						
						<?php $islem->begenilen_yazilari_cek($db); ?>
						
					</ul>
								
								<ul class="list-group w-100 mt-5">
						<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto lead" style="font-size: 28px;">Çok İncelenen Yazılar</h3>
				  </li>
						
						<?php $islem->populer_yazilari_li_cek($db); ?>
						
					</ul>
								

							</div>
						
							
					
						</div>
			<footer>
	
		<hr>
		<p class="text-dark text-center">© Dizfy Resmi Sitesi</p>
		
	</footer>
					</div>
			
		
		</div>
		
	
	<div class="alert alert-success col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="begenildi_alert">
		<b>Beğenildi &#10004;</b>
		</div>
		
		<div class="alert alert-danger col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="uyari_begen_alert">
		<b>Beğeni Geri Çekildi	&#10008;</b>
		</div>
		
		<div class="alert alert-success col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="yorum_gonderildi_alert">
		<b>Yorum Gönderildi &#10004;</b>
		</div>
		
		<div class="alert alert-danger col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="giris_yapilmadi_begen_alert">
		<b>Beğenmek için giriş yapınız</b>
		</div>
		
		
		<div class="alert alert-success col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="cevap_gonderildi_alert">
		<b>Cevap Gönderildi &#10004;</b>
		</div>
		
		<div class="alert alert-danger col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="genel_alert">
		
		</div>
	<script>
	$('.dropdown-menu').click(function(e) {
    e.stopPropagation();
});
		
		$('#tumunu_sil').click(function(){
					
				$.post("ana.php?islem=tum_bildirimleri_sil");

				$('.notification-box').fadeOut(200);
					$('#bildirim_sayi_1').html(0);
					$('#bildirim_sayi_2').html(0);
				})
	
	</script>
		
</body>
	
</html>