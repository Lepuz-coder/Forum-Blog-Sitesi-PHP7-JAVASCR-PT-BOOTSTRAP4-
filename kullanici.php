<?php
require_once("ana.php");


//setcookie(krypto("kulid"),"",time()-10);


$islemler = new kayit_islemleri;

 $islemler->db_kullanicilar_cek($db);

$kullanicilar = $islemler->kullanicilar;


@$kulad = $kullanicilar[$_COOKIE[krypto("kulid")]]["kullanici_ad"];

$bilgi = new veri_cek_islemleri;

$kveri = $bilgi->kullanici_tum_bilgileri_cek($db,$_GET['kulad']);

$bildirim_mesaj = new mesaj_bildirim;

$sayi = $bildirim_mesaj->mesaj_bildirim_sayi($kulad);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $kveri["ad"]; ?> | Kullanıcı Hesabı | Dizfy</title>
	<base href="http://localhost/php/Bireyselu/forum/">
	 <meta charset="utf-8">
	
	
	<meta name="title" content="<?php echo $kveri["ad"]; ?> | Kullanıcı Hesabı | Dizfy"><!-- Title'ın gözükmeyen fakat arama motorlarında önemli olan kısmı  -->
    <meta name="description" content="<?php echo $kveri["ad"]; ?> kulanıcının profil hesabı"><!-- Websitesi hakkında arama motoru için açıklama -->
    <meta name="keywords" content="<?php echo $kveri["ad"]; ?> hesabı, <?php echo $kveri["ad"]; ?> kullanıcı hesabı, <?php echo $kveri["ad"]; ?> dizfy, <?php echo $kveri["ad"]; ?> dizzfy"><!-- Arama motorları için websitesi hakkında anahtar sözcükler -->
	
	
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stil.css">
	<script type="text/javascript" src="ortak.js"></script>
	<script type="text/javascript" src="kullanici.js"></script>
	<style>
	
		@media (max-width: 767.98px) {
	
			.ustten_buton{
				margin-top: 20px;
			}
			
			.responsiveheight{
				height: 120px;
			}
			
			.responsivetoptanittir{
				margin-top: 70px !important;
			}

}
		
		@media (min-width: 992px) {
			
			.responsiveheight{
				height: 60px;
			}
			
			.responsivetoptanittir{
				margin-top: 90px !important;
			}
			
		}
		

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h3{
    color: #333;
}
.profile-head h4{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
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
        <a class="nav-link disabled" href="giris.php">Mesajlar</a>
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
		  <a class="dropdown-item active" href="kullanici/<?php echo $kulad; ?>">Profil</a>
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
			
		<div class="container emp-profile responsivetoptanittir" >
			<?php if(!empty($kveri["ad"])): ?>
                <div class="row">
                    <div class="col-md-4" >
                        <div class="profile-img" style="height: 250px;">
                            <img src="<?php echo $kveri["resim"]; ?>" alt="" class="img-fluid rounded-circle"/>
                            <div class="file btn btn-lg btn-primary d-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="profile-head">
                                    <h1>
                                        <?php echo $kveri["ad"]; ?>
										
										<?php if(isset($_COOKIE[krypto("kulid")])): ?>
										<?php if($kveri["currentTakip"] && $_COOKIE[krypto("kulid")] != $kveri["id"]): ?>
										<button class="btn btn-danger btn-sm ml-3" id="takip_birak_buton" data-id="<?php echo $_GET['kulad']; ?>">Takibi Bırak</button>
										<button class="btn btn-success btn-sm " id="mesaj_at" data-id="<?php echo $kveri["ad"]; ?>">Mesaj at</button>
										<?php elseif($_COOKIE[krypto("kulid")] != $kveri["id"]): ?>
										<button class="btn btn-dark btn-sm ml-3" id="takip_et_buton" data-id="<?php echo $_GET['kulad']; ?>">Takip et</button>
										<button class="btn btn-success btn-sm " id="mesaj_at" data-id="<?php echo $kveri["ad"]; ?>">Mesaj at</button>
										<?php endif; ?> 
										<?php endif; ?>
                                    </h1>
							<span class="lead"><b><?php echo $kveri["yazi"]; ?></b> Yazı <b><?php echo $kveri["takipçi"]; ?></b> Takipçi <b><?php echo $kveri["takip"]; ?></b> Takip</span><br>
                                    <h4 class="mt-2">
                                        <?php echo ucfirst($kveri["rütbe"]); ?> 
                                    </h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active d-none" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Yazıları</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-none" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bilgileri</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
					
                    
                    <div class="col-md-10 col-lg-10 col-12 mx-auto mt-3">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       
								<div class="row" id="kullanici_yazilari">
								
																	
									<h2 class="text-center mx-auto display-4">Yazıları</h2>
									<?php 
									$bilgi->kullanicinin_yazilari_cek($db,$_GET['kulad'],1);
									?>
									
								
									</div>
								
								
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       <div class="row">
                                            <div class="col-md-6">
                                                <label>Takipçi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kveri["takipçi"] - 1; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Takip</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kveri["takip"] - 1; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Toplam Yazı</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kveri["yazi"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>İnstagram</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kveri["instagram"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Twitter</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kveri["twitter"]; ?></p>
                                            </div>
                                        </div> 
                            </div>
                        </div>
                    </div>
                </div>
			<?php else : ?>
			
				<h2 class="mx-auto text-center">Böyle bir kullanıcı yok</h2>
			
			<?php endif; ?>
        </div>
		
			<footer class="footer">
      <div class="container">
        <hr>
		<p class="text-dark text-center">© Dizfy Resmi Sitesi</p>
      </div>
    </footer>
		</div>
		
		
		
	</div>
	
	</div>
	
	<div class="alert alert-success col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="bilgi_alert_positiv">
		
		</div>
	<div class="alert alert-danger col-lg-4 col-md-4 col-10 fixed-bottom text-center mt-auto mx-auto d-none " style="z-index: 1000;" id="bilgi_alert_negativ">
		
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