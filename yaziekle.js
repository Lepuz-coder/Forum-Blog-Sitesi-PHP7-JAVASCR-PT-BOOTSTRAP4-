// JavaScript Document
$(document).ready(function(){
	$('#mceu_22').trigger("click");
	$('#yazi_yazim_iskelet').hide();
	
	setTimeout(function(){
		
		$('#mceu_14-body').hide();
		$('#mceu_29').hide();
		$('#mceu_5').hide();
		$('#mceu_6').hide();
		$('#mceu_7').hide();
		$('#mceu_8').hide();
		$('#mceu_11').hide();
		$('#mceu_12').hide();
		$('#editor_ifr').attr("style","height:350px;width:100%;font-size:54px;");
		
	},1000)
	
	setInterval(function(){
		$('#mceu_33').hide();
		$('#mceu_34').hide();
		$('#mceu_35').hide();
		$('#mceu_39').hide();
		$('#mceu_40').hide();
		$('#mceu_41').hide();
		$('#mceu_42').hide();
		$('#mceu_43').hide();
		$('#mceu_2').find(".mce-txt").html("Formatlar");
		$('#mceu_32-text').html("Başlıklar");
		$('#mceu_37-text').html("Başlık 1");
		$('#mceu_38-text').html("Başlık 2");
		
	},100)
	
	$.post("ana.php?islem=session_isim_kontrol",{"veri":"kontrol"},function(donen){
			 donen = $.parseJSON(donen);
			
				if(donen.cevap == "true"){
										
					if(donen.tur == "dizi"){
						$('#dizi_ara').val(donen.isim);
						
					}else{
						$('#film_ara').val(donen.isim);
					}
					
					$('#yazi_yazim').removeClass("btn-default").addClass("btn-primary");
					$('#dizi_isim_secimi').removeClass("btn-primary").addClass("btn-success");
					
				}else{
					$('#yazi_yazim_iskelet').hide();
				}
			
		})
	
	
	$('#dizi_ara').on("keyup",function(){
		
		if($(this).val() == ""){
			
			$('#sonuc').html("");
			
			
		}else{
			
			$.post("ana.php?islem=dizi_ara",{"aranan":$(this).val()},function(donen){
			$('#sonuc').html(donen);
			
		})
			
		}
		
		
		
	})
	
	$('#film_ara').on("keyup",function(){
		if($(this).val() == ""){
			
			$('#sonuc').html("");
			
			
		}else{
			
			$.post("ana.php?islem=film_ara",{"aranan":$(this).val()},function(donen){
			$('#sonuc').html(donen);
			
		})
			
		}
	})
	
	$('#dizi_sec').click(function(){
		
		var dizi = $('#dizi_ara').val();
		
		$.post("ana.php?islem=dizi_secildi",{"dizi":dizi},function(donen){
			
			var sonuc = $.parseJSON(donen);
			
			
				if(sonuc.sonuc == "false"){
					
					$('#cevap_dizi').html("<span class='text-danger'>*Lütfen Geçerli Bir Dizi Seçiniz</span>");
					
				}else{
					$('.tikla_sakla').hide();
					$('#dizi_secim_iskelet').hide();
					$('#yazi_yazim').removeClass("btn-default").addClass("btn-primary");
					$('#dizi_isim_secimi').removeClass("btn-primary").addClass("btn-success");
					$('#yazi_yazim_iskelet').show();
					$('#secilen_isim').html(sonuc.isim);
					$('#mceu_2').trigger("click");
					$('#mceu_2').trigger("click");
				}
		})
		
	})
	
	$('#film_sec').click(function(){
		
		$.post("ana.php?islem=film_secildi",{"film":$('#film_ara').val()},function(donen){
			
			var sonuc = $.parseJSON(donen);
			
			
				if(sonuc.sonuc == "false"){
					
					$('#cevap_film').html("<span class='text-danger'>*Lütfen Geçerli Bir Film Seçiniz</span>");
					
				}else{
					$('.tikla_sakla').hide();
					$('#sonuc').html("");
					$('#dizi_secim_iskelet').hide();
					$('#yazi_yazim').removeClass("btn-default").addClass("btn-primary");
					$('#dizi_isim_secimi').removeClass("btn-primary").addClass("btn-success");
					$('#yazi_yazim_iskelet').show();
					$('#secilen_isim').html(sonuc.isim);
					$('#mceu_2').trigger("click");
					$('#mceu_2').trigger("click");
				}
		})
		
	})
	
	$('#dizi_isim_secimi').click(function(){
		
		$('#dizi_secim_iskelet').show();
		$('#yazi_yazim_iskelet').hide();
		$('#yazi_önizleme').addClass("d-none");
	})
	
	$('#yazi_yazim').click(function(){

		$.post("ana.php?islem=session_isim_kontrol",{"veri":"kontrol"},function(donen){
			 donen = $.parseJSON(donen);
			
				if(donen.cevap == "false"){
					
					$('#cevap_dizi').html("<span class = 'text-danger'>*Önce dizi seçiniz</span>");
					$('#cevap_film').html("<span class = 'text-danger'>*Önce film seçiniz</span>");
					
				}else{
					$('#yazi_önizleme').addClass("d-none");
					$('#dizi_secim_iskelet').hide();
					$('#yazi_yazim_iskelet').show();
					
				}
			
		})
		
	})
	
	$('#secim_dizi').click(function(){
		
		$.post("ana.php?islem=tur_secimi",{"tur":"dizi"},function(){
			window.location.reload();
			
		})
		
	})
	
	$('#secim_film').click(function(){
		
		$.post("ana.php?islem=tur_secimi",{"tur":"film"},function(){
			window.location.reload();
			
		})
		
	})
	
	function kontroller(){
		
		var flag = true;
		
		if($('#yazi_baslik').val() == ""){
			
			$('#yazi_baslik_uyari').html("*Doldurulması zorunludur");
			
			flag = false;
			
		}else if($('#yazi_baslik').val().length < 5){
			
			$('#yazi_baslik_uyari').html("*En az 5 karakter olmalıdır");
			
			flag = false;
		}else if($('#yazi_baslik').val().length > 45){
			$('#yazi_baslik_uyari').html("*En fazla 45 karakter olmalıdır");
			flag = false;
		}
		
		
		
		if($('#yazi_icerik').val() == ""){
			
			$('#yazi_icerik_uyari').html("*Doldurulması zorunludur");
			
			flag = false;
			
		}else if($('#yazi_icerik').val().length < 200){
			
			$('#yazi_icerik_uyari').html("*En az 200 karakter olmalıdır");
			
			flag = false;
		}else if($('#yazi_icerik').val().length > 50000){
			$('#yazi_icerik_uyari').html("*En fazla 50000 karakter olmalıdır");
			flag = false;
		}
		
		return flag;
		
		
		}
	
	
	$('#onizle_buton').click(function(){
		
		if(kontroller()){
			var formData = new FormData($('#yazi_form')[0]);
			$.ajax({
				type:"POST",
				url:"ana.php?islem=yazi_onizle",
				data:formData,
				processData:false,
				contentType:false,
			}).done(function(donen){

				donen = $.parseJSON(donen);
				if(donen.sonuc == "false"){
					
					$('#ana_sonuc').html(donen.hata);
					
				}else{
					
					
					$('#yazi_yazim_iskelet').hide();
					
					$('#dizi_ön_baslik').html(donen.baslik);
					
					$('#önizle_ana_baslik').html(donen.baslik);
					
					$('#dizi_ön_ad').html(donen.diziad);
					
					$('#önizle_ana_ad').html(donen.diziad);
					
					$('#ön_yazi_kisim').html(donen.icerik);
					
					$('#önizle_ana_text').html(donen.stripicerik);
					
					$('#dizi_ön_giris').html(donen.giris);
					
					$('#onizle_tarih').html(donen.tarih);
					
					$.post("ana.php?islem=onizle_puan_al",{"puan":donen.puan},function(donen){
						
						$('#puan_yeri').html(donen);
						
					});
					
					if(donen.resim != ""){
						$('#on_resim').attr("src",donen.resim);
						$('#on_resim').removeClass("d-none");
						$('#cizgi').html("<hr>");
					}else{
						$('#on_resim').addClass("d-none");
						$('#cizgi').html("");
					}
					
					
					$('#yazi_önizleme').removeClass("d-none");
				}
				
			})
			
			
		}
		
	
		
	})
	
	$('#yazi_devam_et').click(function(){
		
		$('#yazi_yazim_iskelet').show();
		
		$('#yazi_önizleme').addClass("d-none");
		
	})
	
	$('#yazi_gonder_buton').click(function(){
		
			
			if(kontroller()){
			var formData = new FormData($('#yazi_form')[0]);
			$.ajax({
				type:"POST",
				url:"ana.php?islem=yazi_gonder",
				data:formData,
				processData:false,
				contentType:false,
			}).done(function(donen){

				$('#yazi_yazim').removeClass("btn-primary").addClass("btn-success");
				$('#yazi_gonderim').removeClass("btn-default").addClass("btn-primary");
				$('#yazi_önizleme').hide();
				$('#yazi_yazim_iskelet').html('<div class="alert alert-success col-12">Yazınız eklenmiştir !</div>');
				donen = $.parseJSON(donen);
				
					if(donen.level == "true"){
						
						var rutbe = donen.rutbe;
						
					$('#yazi_yazim_iskelet').html('<div class="jumbotron"><h1 class="display-4">Tebrikler <span class="text-info">'+rutbe+' </span>seviyesine ulaştınız !</h1><p class="lead">Her yazı ekledikçe puan eklenir ve eklenen puanlara göre rütbeniz yenilenir.</p><hr class="my-4"><p>Başka kullanıcıların rütbelerini görebilir ya da başka kullanıcılar da sizin rütbenizi görebilir.Böylelikle kimin daha tecrübeli kimin acemi olduğunu kolaylıkla anlaşılabilir ;)</p><p class="lead"> <a class="btn btn-primary btn-lg" href="yazilar.php?yazi_id='+donen.id+'" role="button">Yazıya Git </a></</div>  ');
						
					}else{
						setTimeout(function(){
					window.location = "yazilar.php?yazi_id=" +  donen.id ;
					},2000)
					}
				
				
				
			})
			
			
		}
			
		
	})
	
	setInterval(function(){
		
		var icerik = $('#yazi_icerik').val();
		
		$.post("ana.php?islem=karakter_sayisi_bul",{"icerik":icerik},function(donen){
			
			$('#karakter_sayi').html(donen);
			
		})
		
	},1000)
})