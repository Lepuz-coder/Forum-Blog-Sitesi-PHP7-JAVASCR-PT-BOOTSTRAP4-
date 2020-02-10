// JavaScript Document

$(document).ready(function(){
	
	function enter(){
		
		
		if($('#inputUsername').val() == "" || $('#inputPassword').val() == ""){
			
			$('#sonuc').html('<div class = "text-danger text-center mt-3">Bilgileri boş bırakmayınız !</div>');
			
		}else{
			
			$.ajax({
			//beforeSend eklenecek
			type:"POST",
			url:"ana.php?islem=giris",
			data:$('#giris_form').serialize(),
			success:function(donen){
				
				var cevap = $.parseJSON(donen);
				
					if(cevap.sonuc == "true"){
						$('#giris_button').hide();
						$('#sonuc').html('<div class="text-success text-center">Giriş Başarılı</div>');
							setTimeout(function(){
								window.location.reload();
							},1000)
					}else{
						
						switch(cevap.hata){
								
							case "email":
							
								$('#sonuc').html('<div class = "text-danger text-center mt-3">*Hatalı email </div>');
								$('#inputPassword').val("");
								
							break;
								
							case "kulad":
								
								$('#sonuc').html('<div class = "text-danger text-center mt-3">*Hatalı kullanıcı adı </div>');
								$('#inputPassword').val("");
								
							break;
							
							case "sifre":
								
								$('#sonuc').html('<div class = "text-danger text-center mt-3">*Hatalı şifre </div>');
								$('#inputPassword').val("");
								
							break;
								
								
						}
						
					}
				
			}
			
		})
			
		}
		
		
		
	}
	
	$('#inputUsername').on("keyup",function(e){
		
		var veri = $('#inputUsername').val();
		var uzunluk = veri.length;
		
		var son = veri.substr(uzunluk-1);
	if(son == "*" || son == "}" || son == "{" || son == "/" || son == "]" || son == "[" || son == "%" || son == "$" || son == "," || son == "-" || son == "|" || son == "~"){
			veri = veri.substr(0,uzunluk-1);
			$('#inputUsername').val(veri);
			$('#kuladUyari').html("<span class='text-danger'> *($,%..) gibi şekiller kullanmayınız</span>");

	}else if(son == " "){
		veri = veri.substr(0,uzunluk-1);
			$('#inputUsername').val(veri);
			$('#kuladUyari').html("<span class='text-danger'> *Boşluk bırakmayınız.</span>");
	}
	
		
			if(uzunluk == 0){
				$('#kuladUyari').html("");
			}
		
		if(e.keyCode == 13){
			enter();
		}
			
		
	})
	
	$('#inputPassword').on("keyup",function(e){
		
		if(e.keyCode == 13){
			enter();
		}
		
	})
	
	$('#fake_giris_button').hide();
	
	$('#giris_button').click(enter);
	
	
	
})