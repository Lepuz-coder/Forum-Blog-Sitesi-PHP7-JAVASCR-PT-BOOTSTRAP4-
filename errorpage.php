<?php
require_once("ana.php");


//setcookie(krypto("kulid"),"",time()-10);


$islemler = new kayit_islemleri;

 $islemler->db_kullanicilar_cek($db);

$kullanicilar = $islemler->kullanicilar;


@$kulad = $kullanicilar[$_COOKIE[krypto("kulid")]]["kullanici_ad"];



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ana Sayfa</title>
	<base href="http://localhost/php/Bireyselu/forum/">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="stil.css">
	<script type="text/javascript" src="ortak.js"></script>
	<style>
	
		@media (max-width: 767.98px) {
	
			.ustten_buton{
				margin-top: 20px;
			}
			
			.responsiveheight{
				height: 90px;
			}

}
		
		@media (min-width: 992px) {
			
			.responsiveheight{
				height: 60px;
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
        <a class="nav-link" href="#">Mesaj Kutusu</a>
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
		  
	  <li class="nav-item dropdown navkonum  soldandstkp ">
	  	<div class="btn btn-outline-primary btn-block disabled "><?php echo $kulad; ?></div>
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
			
		<div class="container border-danger" style="margin-top:70px;">
			
			<div class="row mt-2" >
				<!--Sol Kısım-->
				<div class="col-md-8 col-lg-8 col-12 mt-4" >
				
					<!--Her Bir Alert'i veritabanından alıp buraya yerleştireceksin-->
				
		
									
					<div class="jumbotron ">
				  <h2 class="text-danger text-center">404 Not Found</h2>
				  <hr class="my-4">
				  
					<img src="tenor.gif" class="w-100" height="100" alt="uzay kaybolma gifi"><br><br>
						<p>Sanırsam sitemizde kayboldunuz size yardımcı olmak isteriz.</p>
						
						<div class="mt-3">
      <input class="form-control col-10 float-left" placeholder="Ara"  id="aranan_deger1">
      <button class="btn btn-dark mx-auto col-2  ml-4" id="ara_buton1">Ara</button>
    </div>
	  
	  <script>
	 
		  $('#ara_buton1').click(function(){
			  
			  var aranan = $('#aranan_deger1').val();
			   window.location.href="keşfet/"+aranan;
			  
		  })
		  $('#aranan_deger1').on("keyup",function(e){
			  
			  if(e.keyCode == 13){
				  var aranan = $('#aranan_deger1').val();
			   	  window.location.href="keşfet/"+aranan;
			  }
			  
		  })
	  
	  </script>
						
				</div>
					
				</div>
				<!--Sağ Kısım-->
				<div class="col-md-4 col-lg-4 col-12 mt-4">
					<!--POPÜLER DİZİLER-->
						<!--Veritabanından Popüler Diziler Kateogerisini alıp teker teker 5 tane olmak üzere buraya yerleştireceksin -->
									<li class="list-group-item d-flex justify-content-between align-items-center">
					<h3 class="mx-auto lead" style="font-size: 28px;">Popüler diziler</h3>
				  </li>
				  
						<?php
					$islem = new veri_cek_islemleri;
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
	
	
	
</body>
</html>