<?php
require_once("ana.php");

if(!isset($_COOKIE[krypto("kulid")])):

	header('Location:giris.php');

else:

$islemler = new kullanici_ayarlari;

$bilgiler = $islemler->kullanici_bilgileri($db,$_COOKIE[krypto("kulid")]);

$kulad = $bilgiler["ad"];

$sifre = $bilgiler["sifre"];

$bildirim_mesaj = new mesaj_bildirim;

$sayi = $bildirim_mesaj->mesaj_bildirim_sayi($kulad);


endif;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dizfy</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="ayarlar.js"></script>
	<script type="text/javascript" src="ortak.js"></script>
	
	</script>
	<link rel="stylesheet" href="stil.css">
	<style>
	:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
	</style>
		<style>
		.responsive-resim{
				width: 50px;
				height: 50px;
			}
		
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
        <a class="nav-link" href="giris.php">Mesaj Kutusu
		</a>
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
          <a class="dropdown-item active" href="ayarlar">Hesap Ayarları</a>
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
    <div class="row mt-2">
      <div class="col-lg-6 col-xl-6 mx-auto">
        <div class="card card-signin flex-row my-5" >
          
          <div class="card-body" id="kapsayici">
            <h5 class="card-title text-center">&#9881;Ayarlar</h5>
              
			  <div class="container">
			  
			  
				  <div class="row">
				  
					  <img src="<?php echo $bilgiler["resim"]; ?>" class="rounded-circle col-lg-5 col-md-5 col-6" id="ayarlar_resim">
					  <div class="col-lg-7 col-md-7 col-6 mt-5">
					  <lead class="lead">Resim Değiştir<br><span id="resim_sonuc" ></span></lead>
						  <form id="resim_form">
						<input type="file" class="form-control mt-4" name="resim">
						  <input type="button" class="btn btn-primary mt-3 btn-sm float-right" id="resim_degis_buton" value="resmi değiştir"> 
							  
						  </form>
						  
							  </div>
					  
						  
				  </div>
				  <!--DİSABLED İSKELET-->
				  <div class="container mt-5" id="disabled_iskelet">
				
				<?php if($bilgiler["emailonay"] == 1): ?>
				  <div class="row">
					  <label class="lead col-12">Email :</label>
				  <input type="text" class="col-lg-12 col-md-12 col-12 form-control " value="<?php echo $bilgiler["email"]; ?>" disabled>
					</div>
				<?php else : ?>
					<div class="row">
					  <label class="lead col-12">Email :<span class="text-danger">*Email onaylanmamış</span></label>
				  <input type="text" id="disabled_ad" class="col-lg-10 col-md-10 col-9 form-control " value="<?php echo $bilgiler["email"]; ?>" disabled>
				  <button class="btn btn-danger btn-sm col-lg-2 col-md-2 col-3" id="email_onayla">Onayla</button>
					</div>  
				<?php endif; ?>
					  
				  
				  <div class="row">
					  <label class="lead mt-3  col-12">Kullanıcı adı : </label>
				  <input type="text" id="disabled_ad" class="col-lg-10 col-md-10 col-9 form-control " value="<?php echo $bilgiler["ad"]; ?>" disabled>
				  <button class="btn btn-primary btn-sm col-lg-2 col-md-2 col-3" id="ad_degis">Değiştir</button>
					</div>

					  
			      
				  <div class="row">
					  <label class="mt-3 lead col-12">Şifre :</label>
				  <input type="password" class="col-lg-10 col-md-10 col-9 form-control " value="*********" disabled>
				  <button class="btn btn-primary btn-sm col-lg-2 col-md-2 col-3" id="sifre_degis">Değiştir</button>
					</div>
					  
				 
				  </div>
				  
				  <!--İSİM DEĞİŞTİR FORMU-->
				  <div class="container mt-5 d-none" id="isim_degistir_iskelet">
				
					<form id="isim_degis_form">
				  <div class="row">
					  <label class="lead col-12" >Yeni Kullanıcı ad :</label>
				  <input type="text" class="col-lg-12 col-md-12 col-12 form-control " placeholder="Yeni kullanıcı adı" name="yeni_kulad" id="yeni_kulad_input">
					</div>
					  
			      
				  <div class="row">
					  <label class="mt-3 lead col-12" >Şifre :</label>
				  <input type="password" class="col-lg-12 col-md-12 col-12 form-control " placeholder="Şifrenizi giriniz" name="sifre" id="kulad_sifre">
					</div>
						<br>
						<span id="cevap_kulad" class="text-danger"></span>
					  </form> 
					  <div class="btn btn-primary mt-4 float-right" id="isim_degis_buton">Değiştir</div>
					  <div class="btn btn-danger mt-4 float-right mr-3 " id="iptal_buton_isim">İptal</div>
				 
				  </div>
				  
				  <div class="container mt-5 d-none" id="sifre_degistir_iskelet">
				
					  
					 <!--ŞİFRE DEĞİŞTİRME FORMU--> 
					<form id="sifre_degis_form">
				  <div class="row">
					  <label class="lead col-12" >Eski Şifreniz :</label>
				  <input type="password" class="col-lg-12 col-md-12 col-12 form-control " placeholder="Eski şifrenizi giriniz" name="eski_sifre" id="eski_sifre_input">
					</div>
					  
			      
				  <div class="row">
					  <label class="mt-3 lead col-12" >Yeni Şifre :</label>
				  <input type="password" class="col-lg-12 col-md-12 col-12 form-control " placeholder="Yeni şifrenizi giriniz" name="yeni_sifre" id="yeni_sifre" id="yeni_sifre_input">
					</div>
						
					<div class="row">
					  <label class="mt-3 lead col-12" >Yeni Şifre Tekrar :</label>
				  <input type="password" class="col-lg-12 col-md-12 col-12 form-control " placeholder="Yeni şifrenizi tekrar giriniz" name="yeni_sifre_tekrar" id="yeni_sifre_tekrar">
					</div>
						
						
						<br>
						<span id="cevap_sifre" class="text-danger"></span>
					  </form> 
					  <div class="btn btn-primary mt-4 float-right" id="sifre_degis_buton">Değiştir</div>
					  <div class="btn btn-danger mt-4 float-right mr-3 " id="iptal_buton_sifre">İptal</div>
				 
				  </div>
				  
				  <!--Email Onayla Formu-->
				  <div class="container mt-5 d-none" id="email_onay_iskelet">
				  
				<div class="alert alert-info text-center" id="ana_yazi">Emailinizdeki onay kodunu giriniz</div>
				
				
				<input type="text" class="form-control text-center" placeholder="Kodu Giriniz" id="kod">
					  <p class="text-danger text-center" id="email_cevap"></p>
				<div class="row mt-4 mx-auto" id="onayla_tekrargonder_iskelet">
					
					<div class="col-lg-5 col-md-5 col-12 btn btn-success mx-auto mt-2" id="onayla">ONAYLA</div>
					<div class="col-lg-5 col-md-5 col-12 btn btn-primary ml-2 mx-auto mt-2" href="index.php" id="tekrar_mail_gonder" data-id="<?php echo $bilgiler["email"]; ?>">TEKRAR GÖNDER</div>
										
					
				</div>
				
				<div class="row mt-4 mx-auto d-none" id="yukleniyor">
					  
				<div  class="col-12 lead mx-auto text-center" id="yukleniyor_icerik"><img src="resimler/loading.gif" width="50"> Gönderiliyor... </div>	  
					  
				</div>
				  
				  </div>
				  
			  
			  </div>

              <hr>


              


          
          </div>
			
			
        </div>
		  
		  
      </div>
    </div>
  </div>
			<footer style="margin-top: 200px;">
	
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
	
	</script>m
	
	
	
</body>
</html>