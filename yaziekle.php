<?php
require_once("ana.php");

if(!isset($_COOKIE[krypto('kulid')])):

	header('Location:kayit.php');

endif;

//setcookie(krypto("kulid"),"",time()-10);

$islemler = new kayit_islemleri;

 $islemler->db_kullanicilar_cek($db);

$kullanicilar = $islemler->kullanicilar;

//setcookie(krypto('dizi_isim'),"",time()-10);


@$kulad = $kullanicilar[$_COOKIE[krypto("kulid")]]["kullanici_ad"];
$emailonay = $kullanicilar[$_COOKIE[krypto("kulid")]]["email_onay"];

$bildirim_mesaj = new mesaj_bildirim;

$sayi = $bildirim_mesaj->mesaj_bildirim_sayi($kulad);



?>
<!doctype html>
<html><head>
<meta charset="utf-8">
	<base href="http://localhost/php/Bireyselu/forum/">
<title>Ana Sayfa</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	
	
	<link rel="stylesheet" href="stil.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="yaziekle.js"></script>
	<!--Dışarıdan Eklenenler : -->
	<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
<script >$(function() {

	// tinymce directive
	Vue.directive('tinymce-editor',{ 
  	twoWay: true,
    bind: function() {
    	var self = this;
      tinymce.init({
      	selector: '#editor',
        setup: function(editor) {
        
        	// init tinymce
        	editor.on('init', function() {
 						tinymce.get('editor').setContent(self.value);
          });
          
          // when typing keyup event
          editor.on('keyup', function() {
          	
            // get new value
          	var new_value = tinymce.get('editor').getContent(self.value);
            
            // set model value
            self.set(new_value)
          });
        }
      });
    },
    update: function(newVal, oldVal) {
    	// set val and trigger event
    	$(this.el).val(newVal).trigger('keyup');
    }
  
  })

	new Vue({
  	el: '#tinymce-form',
    data: {
    	content: ''
    }
  })


})
//# sourceURL=pen.js
</script>
	<style>
		
.stepwizard-step p {
    margin-top: 10px;    
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
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

<body class="bg-white">
	
	<div class="container-fluid">
	
	
	<div class="row">
		
	      <img src="resimler/crysis.jpg" class=" w-100" alt="..." style="z-index: 1; position: absolute;" >

		
	</div>
	<!--Ana Kısım-->


	<div class="row"> 
		
		<div class="w-100 h-100 destkopnavtop bg-white" style=" z-index:10; position: absolute; ">
		
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
        <a class="nav-link disabled text-muted" href="giris.php">Takip Ettiklerim</a>
      </li>
		<li class="nav-item">
        <a class="nav-link disabled text-muted" href="giris.php">Yazılarım</a>
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
	  	<a class="btn btn-success btn-block text-white active" href="kayit.php">Üye Ol </a>
	  </li>
	  <li class="nav-item dropdown navkonum soldandstkp">
	  	<a class="btn btn-primary btn-block text-white" href="giris.php">Giriş Yap</a>
	  </li>
		  <?php endif; ?>
	  </ul>
  </div>
</nav>
			
		
		<?php if(!$emailonay): ?>
			<style>
			
				.bItem:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
height: 400px;
  background:#000000;
				z-index: 100;
	border-radius: 5px;
 opacity: 0.9;
				}
			
			</style>
			
			<div class="alert alert-danger mx-auto col-lg-5 col-md-5 col-12" style="margin-top: 100px;">
				<b>Oops! Bir sorun var !</b><br>
				Yazı Eklemek İçin Emailinizi Onaylamanız gereklidir	<br>
				<a class="btn btn-danger mt-3 text-white" href="index.php">Ana Sayfa</a>
				<a class="btn btn-success mt-3" href="ayarlar">Onayla</a>
				
				</div>
			
			<div class="container col-lg-7 col-md-7 col-10 mx-auto mt-5"  >
			
				
			
			<div class="row">
			
				<h1 class="mx-auto mt-3">Kendi Yazınızı Oluşturun</h1>
				
			
			</div>
			<div class="row mt-5 bItem">
			
			<div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-primary btn-circle" >1</button>
            <p>Diziyi/Filmi Seçiniz</p>
        </div>
		
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle ml-2"  >2</button>
            <p class="ml-2">Yazınızı yazınız</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled" >3</button>
            <p >Yazıyı Gönderin</p>
        </div> 
    </div>
</div>
				</div>
				<div class="row mt-5" id="dizi_secim_iskelet">
								
				<button class="btn btn-outline-primary col-4 mx-auto">Dizi</button>
				<button class="btn  btn-outline-primary col-4 ml-2 mx-auto">Film</button>
				
				
					
			</div>
				
				
				
			</div>
			
			
			
			
		<?php else: ?>	
		<div class="container col-lg-7 col-md-7 col-10 mx-auto mt-5"  >
			
			
			<div class="row" style="margin-top: 100px;">
			
				<h1 class="mx-auto">Kendi Yazınızı Oluşturun</h1>
			
			</div>
			
			<div class="row mt-5">
			
			<div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-primary btn-circle" id="dizi_isim_secimi">1</button>
            <p>Diziyi/Filmi Seçiniz</p>
        </div>
		
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle ml-2" id="yazi_yazim" >2</button>
            <p class="ml-2">Yazınızı yazınız</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled" id="yazi_gonderim">3</button>
            <p >Yazıyı Gönderin</p>
        </div> 
    </div>
</div>
			
			</div>
			
			<div class="row mt-5" id="dizi_secim_iskelet">
				
				
				
				<?php
				if(@$_COOKIE[krypto('tur_isim')] == "dizi"):
				?>
				
				<button class="btn btn-primary col-4 mx-auto disabled" id="secim_dizi">Dizi</button>
				<button class="btn  btn-outline-primary col-4 ml-2 mx-auto" id="secim_film">Film</button>
				
				<label class="lead col-12 mt-5">Dizi seçiniz :<span id="cevap_dizi"></span> </label>
				<input type="text" class="form-control col-8" placeholder="Dizi adını giriniz" id="dizi_ara">
				<input type="button" class="btn btn-info col-3 ml-2" value="Seç" id="dizi_sec">
				<?php elseif(@$_COOKIE[krypto('tur_isim')] == "film"): ?>
				<script>
				

			
				
				</script>
				<button class="btn btn-outline-primary col-4 mx-auto" id="secim_dizi">Dizi</button>
				<button class="btn btn-primary col-4 mx-auto disabled" id="secim_film">Film</button>
				
				<label class="lead col-12 mt-5">Film seçiniz :<span id="cevap_film"></span> </label>
				<input type="text" class="form-control col-8" placeholder="Film adını giriniz" id="film_ara">
				<input type="button" class="btn btn-info col-3 ml-2" value="Seç" id="film_sec">
				
				<?php else : ?>
				<button class="btn btn-outline-primary col-4 mx-auto" id="secim_dizi">Dizi</button>
				<button class="btn  btn-outline-primary col-4 ml-2 mx-auto" id="secim_film">Film</button>
				<?php endif;?>
				
			</div>
			
			<div class="row mt-3">
			
				<div class="col-lg-8 col-md-8 col-12" id="sonuc">
				
				
				</div>
			
			</div>
			<!--Yazının yazıldığı yer-->
			<div class="row mt-5" id="yazi_yazim_iskelet">
				<div style="float: left;" id="ana_sonuc" class="text-danger ml-2"></div>
				<h3 class="float-left ml-2 d-inline" id="secilen_isim">How I Met Your Mother</h3>
				<div class="btn btn-outline-secondary ml-auto" style="float: right;" id="onizle_buton">Önizle</div>
				<img src="eye.png" width="70" style="float: right;">
				
				
				<form class="col-12 mt-5" id="yazi_form">
			<label class="lead mb-2">Puan veriniz :</label><br>

	<div class="btn btn-sm btn-dark puan mt-2" data-id="1">&#9733;</div>
	<div class="btn btn-sm btn-dark puan mt-2" data-id="2">&#9733;</div>
	<div class="btn btn-sm btn-dark puan mt-2" data-id="3">&#9733;</div>
	<div class="btn btn-sm btn-dark puan mt-2" data-id="4">&#9733;</div>
	<div class="btn btn-sm btn-dark puan mt-2" data-id="5">&#9733;</div>
	<input type="hidden" name="puan_sonuc" id="puan_sonuc" value=""></input><br>
	<script>
	
	$('.puan').mouseover(function(){
		
		$('.puan').removeClass("btn-warning").addClass("btn-dark");
		
		var sayi = $(this).attr("data-id");
		var i;
		$('#puan_sonuc').val(sayi);
			for(i=1;i<=sayi;i++){
				
				$('.puan[data-id="'+i+'"]').removeClass("btn-dark").addClass("btn-warning");
				
				
			}
		
	})
	
	</script>
					
				<label class="lead mt-5">Yazı başlığını giriniz :<br><span id="yazi_baslik_uyari" class="text-danger" style="font-size:18px; "></span></label>
					<!--YAZI BAŞLIK-->
				<input type="text" class="form-control col-12" name="yazi_baslik" id="yazi_baslik">
					
					<br>
					
				<label class="lead mt-3 d-none">Giriş paragrafı yazınız :<br><span id="yazi_baslangic_uyari" class="text-danger" style="font-size:18px; "></span> 
					</label>
					<div class="btn-group dropright float-right mt-3 d-none" >
  <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    &#8520;
  </button>
  <div class="dropdown-menu">
   
	  <p class="text-muted text-center">Kullanıcıların yazıya girmeden önce görecekleri kısımdır.<br>Yazınızı özetleyen ya da ilgi çekici kılan bir <b>giriş paragrafı</b> yazabilirsiniz</p>
	  
  </div>
</div>			<!--YAZI BAŞLANGIÇ-->
				<textarea class="form-control col-12 d-none" name="yazi_baslangic" id="yazi_baslangic"></textarea>
					
					<label class="lead mt-5">Yazınızı yazın :
						
						
						
						<br><span id="yazi_icerik_uyari" class="text-danger" style="font-size:18px; "></span></label>
					
					<div class="btn-group dropright float-right mt-5" >
  <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModalCenter">
  &#8520;
</button>
  
					
</div>
			
					<!--YAZI İÇERİK-->
					<style class="cp-pen-styles"></style></head><body>
<div id="tinymce-form">
<fieldset class="form-group">
    <textarea 
            class="form-control" 
            id="editor"
            rows="10" 
            placeholder="Content"
            v-tinymce-editor="content">          
    </textarea>
</fieldset>
	<textarea id="yazi_icerik" name="yazi_icerik" class="d-none">{{ content }}</textarea>
	
	<p>Karakter Sayısı : <span id="karakter_sayi"></span></p>
		
	
					</div>				
				<label class="lead mt-5">Yazının kapak resmi:</label>
					<div class="btn-group dropright float-right mt-5" >
  <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    &#8520;
  </button>
  <div class="dropdown-menu">
   
	  <p class="text-muted text-center">Yazınızın en başında gözüken resimdir.<br>Eklemek zorunda değilsiniz.</p><hr>
	  <p class="text-muted text-center">Yüksek çözünürlüklü bir resim seçmeye özen gösteriniz</p>
	  
  </div>
</div>
				<input type="file" class="form-control" name="yazi_resim">
					
				<input type="button" class="btn btn-success mt-3 float-right" style="margin-bottom: 100px;" value="Gönder" id="yazi_gonder_buton">
				
				</form>
			</div> 
			
					
					
						
			</div>
			
			<div class="col-12 d-none" id="yazi_önizleme">
			<!--Yazı önizleme için gözükecek iskelet-->
				
			
			<div class="container">
						
						

    <div class="row">
<div class="col-lg-4 col-md-4 col-12 btn btn-outline-secondary mx-auto" id="yazi_devam_et">Devam Et</div>

		

      <!-- Post Content Column -->
      <div class="col-lg-10 col-md-10 col-12 mx-auto">

 <p class="mx-auto text-center text-danger mt-4"><b>Kullanıcıların Yazınıza Girdiklerinde Görecekleri Kısım :  </b></p>
		  
        <!-- Title -->
      

        <!-- Author -->
        
		

        <!-- Yazının Yayınlandığı Tarih-->
		  <h1 class=" mt-3 lead" style="font-size: 45px;">İnceleme :  <a href="#" id="dizi_ön_ad"></a></h1>
		  <hr>
      <p id="onizle_tarih"></p>
	<hr>
        <!-- Kullanıcı Resim Koymak İsterse -->
        <img class="img-fluid rounded d-none w-100" src="" alt="" id="on_resim" style="max-height: 500px;" style="width: 100%; height: 400px;">
			
        <span id="cizgi"></span>
		<p id="dizi_ön_giris" class="lead" style=""></p>
		  
		  <h2 class="mt-4 display-4 text-center" id="dizi_ön_baslik" style="word-break: break-normal; overflow: hidden; min-height: 80px;"><?php echo $yaziv["baslik"]; ?> </h2><br>
        <!-- Sönük Yazi-->
        <pre id="ön_yazi_kisim" style="white-space: pre-wrap; white-space: -moz-pre-wrap; word-wrap: break-word;  white-space: -pre-wrap;  white-space: -o-pre-wrap;line-height: 30px ;font-family: 'Montserrat', sans-serif; font-size: 16px;"></pre>
			

		  <p class="lead">
          <i>Yazan Kullanıcı:</i>
          <a href="#"><?php echo $kulad; ?></a>
        </p>
		  <button class="btn btn-light btn-sm">&#10084;</button>
				<span class="text-danger" id="begeni_sayisi">0 kişi beğendi</span>
		  <br>
		  
		  <div id="puan_yeri"></div>
		  <br><br>
        <hr>
		<br>
        <p class="mx-auto text-center text-danger"><b>Kullanıcıların Yazınıza Girmeden Önce Görecekleri Kısım :  </b></p>

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
		  
      	<div class="alert alert-light mt-4 w-100" >
					
						<div class="container " style="word-break: break-all;">
							
							<div class="row">
							
									<div class="col-md-8 col-lg-8 col-12 mx-auto">
								
									<h3 style="word-break: normal; overflow: hidden;"> <span class="text-dark" id="önizle_ana_baslik">Başlık</span></h3>
										<div  style=" overflow: hidden;" class="responsiveheight">
										<p class="lead" style="word-break:normal;" id="önizle_ana_text"></p>	
										</div><p class="mt-2 text-dark" style="font-size: 20px;">Yazan kullanıcı :<span class="text-info" > <?php echo $kulad; ?></span></p>	
									<hr class="destkopcizgihide">
									<h3 class="text-info" id="önizle_ana_ad"></h3>
									
								</div>
							
								<div class="col-2 col-md-2 col-12" class="text-responsive-boyut">
									<hr class="destkopcizgihide">
								<p style="font-size: 15px;" class="text-dark">şimdi</p>
								<hr>
								<p style="font-size: 15px;" class="text-dark">0 İnceleme</p>
								<hr>
								<p style="font-size: 15px;" class="text-dark">0 beğenme</p>
								<hr>
									<span class="btn btn-primary btn-block text-white" >Oku</span>
								</div>
							</div>
													
						</div>
					
					</div>
		  
		
          </div>
			
        </div>

      </div>
						
    		
			
			</div>
			
			</div>
			
		</div>
			

			
		
		</div>
		
	
	
	

</body>
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">İpuçları</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  
		<p>1-)Yazı stillerinizi editorden seçerek kalın yazı ya da italik yazı şeklinde kullanabilirsiniz</p>
		 <p>2-)Alt Başlık atmak isterseniz formatlar'dan başlık seçeneğinden başlığı atayabilirsiniz</p>
		  <p>3-)Bir özelliği kullanmayı bırakmak için 'enter' ya da kullandığınız özelliğe tekrar basarak özelliği kullanmayı bırakabilirsiniz</p>
		  <p>4-)Yazınızı göndermeden önce önizleyerek nasıl gözüktüğüne bakabilirsiniz</p>
		  <p>5-)Yazınıza kapak resmi eklemek kullanıcıların göz zevki ve takipçi sayınızı artırmak için bir avantaj olucaktır</p>
		  İYİ YAZILAR :)
		  
		        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>	
		<?php endif; ?>
	
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
	
	
</html>