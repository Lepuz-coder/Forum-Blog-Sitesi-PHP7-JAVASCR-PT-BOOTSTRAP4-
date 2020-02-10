<?php
require_once("ana.php");
if(isset($_COOKIE[krypto('kulid')])):

	header('Location:index.php');

endif;


?>
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
  background: scroll center url('https://images7.alphacoders.com/391/391553.jpg');
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
	<script type="text/javascript" src="kayit.js"></script>
	<script type="text/javascript" src="kulad.js"></script>
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
        <a class="nav-link" href="#">Takip Ettiklerim</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#">Yazılarım</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#">Mesaj Kutusu</a>
      </li>
	<?php else : ?>
		<li class="nav-item">
        <a class="nav-link disabled text-muted" href="giris.php">Takip Ettiklerim</a>
      </li>
		<li class="nav-item">
        <a class="nav-link disabled text-muted" href="giris.php">Yazılarım</a>
      </li>
		<li class="nav-item">
        <a class="nav-link disabled text-muted" href="giris.php">Mesaj Kutusu</a>
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
	  	<a class="btn btn-success btn-block text-white active" href="kayit.php">Üye Ol </a>
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
            <h5 class="card-title text-center">Üye Ol</h5>
            <form class="form-signin" id="kayit_form">
              <div class="form-label-group">
                <input type="text" name="inputUserame" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Kullanıcı Ad</label>
				  <span id="kuladuzunluk"></span>
              </div>

              <div class="form-label-group">
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email Adresi</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Şifre</label>
				  <span id="sifreUzunluk"></span>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="inputConfirmPassword" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Şifre Onayla</label>
				  <span id="sifreKontrol"></span>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button" id="kayit_button">Üye Ol</button>
				              <button class="btn btn-lg btn-primary btn-block text-uppercase disabled" type="button" id="fake_kayit_button">Yükleniyor...</button>

				<div id="sonuc"></div>
              <hr class="my-4">
              <!--<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Google ile üye ol</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Facebook ile üye ol</button>-->
            </form>
          </div>
			
			<div  id="emailonay" >
			
				
				
			</div>
        </div>
		  
		  
      </div>
    </div>
  </div>
			<footer>
	
		<hr>
		<p class="text-dark text-center">© Dizfy Resmi Sitesi</p>
		
	</footer>
			</div>
			
		</div>
		
		</div>
		
	
	
	
	
</body>
</html>