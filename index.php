<?php
require_once("ana.php");


//setcookie(krypto("kulid"),"",time()-10);


$islemler = new kayit_islemleri;

 $islemler->db_kullanicilar_cek($db);

$kullanicilar = $islemler->kullanicilar;


@$kulad = $kullanicilar[$_COOKIE[krypto("kulid")]]["kullanici_ad"];

if(isset($_COOKIE[krypto("kulid")])):

$bildirim_mesaj = new mesaj_bildirim;

$sayi = $bildirim_mesaj->mesaj_bildirim_sayi($kulad);

endif;



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ana Sayfa</title>
	<base href="http://localhost/php/Bireyselu/forum/">
	 <meta charset="utf-8">

	<link rel="shortcut icon" href="resimler/crysis.jpg"  />

	<meta name="title" content="Dizfy Resmi Yorum Sitesi"><!-- Title'ın gözükmeyen fakat arama motorlarında önemli olan kısmı  -->
    <meta name="description" content="Dizi ve filmlerin en kapsamlı yorumlarının bulunduğu en güncel yorum sitesi.Aradığınız dizilerin kapsamlı incelemesini burada bulabilir dilerseniz kendi bakış açısnızdan yazı ekleyebilirsiniz"><!-- Websitesi hakkında arama motoru için açıklama -->
    <meta name="keywords" content="Dizi,Film,Dizi yorum,Film yorum,Güncel dizi yorumları,Güncel dizi eleştirileri,Güncel film yorumları,güncel film eleştirileri,popüler diziler,popüler filmler,en iyi filmler,haftanın filmleri,haftanın dizileri,en iyi diziler,dizi ve fil sitesi,forum sitesi,dizi forum sitesi,film forum sitesi,dizi ve forum sitesi,dizi incelemeleri,film incelemeleri"><!-- Arama motorları için websitesi hakkında anahtar sözcükler 

-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stil.css">
	<script type="text/javascript" src="ortak.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

	<style>
	
		@media (max-width: 767.98px) {
	
			.ustten_buton{
				margin-top: 20px;
			}
			
			.responsiveheight{
				height: 120px;
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

<body style="background-color:#E8E5E3">
	
	<div class="container-fluid">
	
	
	<div class="row">
		
	      <img src="resimler/crysis.jpg" class=" w-100" alt="..." style="z-index: 1; position: absolute;" >

		
	</div>
	<!--Ana Kısım-->
	<div class="row"> 
		
		<div class="w-100 h-100 destkopnavtop" style=" z-index:10; position: absolute;  background-color:#E8E5E3 ">
		
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
		<?php elseif(@$_GET["link"] == "populeryazilar"): ?>
		<li class="nav-item">
		<?php elseif(@$_GET["link"] != "takip-edilen-yazilar" && !isset($_GET['aranan'])) : ?>
		<li class="nav-item active">
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
		
		<?php if(@$_GET["link"] == "takip-edilen-yazilar") : ?>
		<li class="nav-item active">
        <a class="nav-link" href="yazılar/takip-edilen-yazilar/dizi">Takip Ettiklerim</a>
		<?php else : ?>	
		<li class="nav-item">
        <a class="nav-link" href="yazılar/takip-edilen-yazilar/dizi">Takip Ettiklerim</a>	
		<?php endif; ?>	
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
	  	<button class="btn btn-info btn-block" id="yeni_yazi_ekle">Yeni Yazı Ekle</button>
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
			
		<div class="container border-danger" style="margin-top:75px;">
			
			<div class="row mt-2" >
				<!--Sol Kısım-->
				<div class="col-md-8 col-lg-8 col-12" >
              <!--BREADCRUMB-->
			
					<!--Her Bir Alert'i veritabanından alıp buraya yerleştireceksin-->
				
					<div class="row mt-3 mx-auto">
							
						<?php if(@$_GET['tur'] == "film" && $_GET['link'] == "tumyazilar"): ?>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white " href="yazılar/tumyazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white active" href="yazılar/tumyazilar/film" >Film</a>
						<?php elseif(@$_GET['tur'] == "dizi" && $_GET['link'] == "tumyazilar"): ?>
						<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white active" href="yazılar/tumyazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white" href="yazılar/tumyazilar/film" >Film</a>
						
						<?php elseif(@$_GET['tur'] == "film" && $_GET['link'] == "populeryazilar"): ?>
						
						<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white " href="yazılar/populeryazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white active" href="yazılar/populeryazilar/film" >Film</a>
						
						
						<?php elseif(@$_GET['tur'] == "dizi" && $_GET['link'] == "populeryazilar"): ?>
						
						<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white active" href="yazılar/populeryazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white" href="yazılar/populeryazilar/film" >Film</a>
						
						
						<?php elseif(@$_GET['tur'] == "film" && $_GET['link'] == "takip-edilen-yazilar"): ?>
						
						<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white " href="yazılar/takip-edilen-yazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white active" href="yazılar/takip-edilen-yazilar/film" >Film</a>
						
						
						<?php elseif(@$_GET['tur'] == "dizi" && $_GET['link'] == "takip-edilen-yazilar"): ?>
						
						<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white active" href="yazılar/takip-edilen-yazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white" href="yazılar/takip-edilen-yazilar/film" >Film</a>
						
						
						<?php elseif(!isset($_GET['aranan']) && !isset($_GET['tip'])) : ?>
						
						<a class="col-md-5 col-lg-5 col-12 btn btn-dark text-white active" href="yazılar/tumyazilar/dizi" >Dizi</a>
							<a class="col-md-5 col-lg-5 col-12 btn btn-dark ml-auto ustten_buton text-white" href="yazılar/tumyazilar/film" >Film</a>
						
						
						<?php endif; ?>
							</div>
			

<?php
				
					$islem = new veri_cek_islemleri;
					
					if(isset($_GET['aranan'])):
					
					$islem->yazilari_cek($db,"keşfet",1,null,$_GET['aranan']);
					
					elseif(isset($_GET['tip'])):
					
					$islem->yazilari_cek($db,"populer",1,$_GET['tip'],$_GET['isim']);
					
					elseif(isset($_GET['link']) && ($_GET['tur'] == "dizi" || $_GET['tur'] == "film") && ($_GET['link'] == "populeryazilar" || $_GET['link'] == "tumyazilar" || $_GET['link'] == "takip-edilen-yazilar")):
					
					
					
					$islem->yazilari_cek($db,$_GET['link'],1,$_GET['tur'],null);
					
					else:
					
					
					$islem->yazilari_cek($db,"tumyazilar",1,"dizi",null);
					
					
					endif;
					?>
				
				</div>
				<!--Sağ Kısım-->
				<div class="col-md-4 col-lg-4 col-12 mt-4">
					
					<?php if(isset($_GET['aranan'])): ?>
					
					<ul class="list-group w-100  mb-5" style="margin-top: 55px;">
					<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto " style="font-size: 28px;">Kullanıcılar</h3>
				  </li>
				 
						<?php
						
							$kullanici_arama = new arama_islemleri;
						
							$kullanici_arama->kullanicilarda_ara($_GET['aranan'],$db);
						
						?>
						
					</ul>
					
					
					<?php endif; ?>
					<!--POPÜLER DİZİLER-->
						<!--Veritabanından Popüler Diziler Kateogerisini alıp teker teker 5 tane olmak üzere buraya yerleştireceksin -->
									
					<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto lead" style="font-size: 28px;">Popüler diziler</h3>
				  </li>
				  
						<?php
						$islem->populer_yazilari_cek($db,"select * from populer_diziler","dizi_ad","dizi");
					?>
										
				</ul>
					
					<ul class="list-group w-100  mt-5">
					<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto lead" style="font-size: 28px;">Popüler filmler</h3>
				  </li>
				  <?php
						$islem->populer_yazilari_cek($db,"select * from populer_filmler","film_ad","film");
					?>
				</ul>
					
					

			
					<ul class="list-group w-100 mt-5">
						<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto lead" style="font-size: 28px;">Beğenilen Yazılar</h3>
				  </li>
						
						<?php $islem->begenilen_yazilari_cek($db); ?>
						
					</ul>
					
					
				</div>
			
			</div>
			
		</div>
		<footer >
	
		<hr>
		<p class="text-dark text-center">© Dizfy Resmi Sitesi</p>
		
	</footer>
		</div>
		
		
		
	</div>
	
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