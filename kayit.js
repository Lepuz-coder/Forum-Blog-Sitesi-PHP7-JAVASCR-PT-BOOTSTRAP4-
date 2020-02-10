// JavaScript Document

$(document).ready(function(){
	
	
	
	$('#fake_kayit_button').hide();
	$('#kayit_button').click(function(){
		
		$.ajax({
			beforeSend:function(){
				$('#kayit_button').hide();
				$('#fake_kayit_button').show();
			},
			type:"POST",
			url:"ana.php?islem=kayit",
			data:$('#kayit_form').serialize(),
			success:function(donen){
								
				donen = $.parseJSON(donen);
				
				  switch(donen.sonuc){
						
					case "true":
						  
						  $('#kapsayici').slideUp(500);
						  setTimeout(function(){
							  $('#emailonay').addClass("card-body");
						  $('#emailonay').html(donen.icerik);
						  },501)
						  
					break;
						
					case "bos":
						$('#sonuc').html('<div class="alert alert-danger mt-4">Lütfen Bilgileriniz Boş Bırakmayınız</div>');
							setTimeout(function(){
								$('#sonuc').html("");
								 $('#fake_kayit_button').hide();
								$('#kayit_button').show();
								$('#inputConfirmPassword').val("");
								$('#inputPassword').val("");
							},1000)
					break;
						
					case "ad":
						
						$('#sonuc').html('<div class="alert alert-danger mt-4">Bu kullanıcı adı kullanılıyor</div>');
							setTimeout(function(){
								$('#sonuc').html("");
								 $('#fake_kayit_button').hide();
								$('#kayit_button').show();
								$('#inputConfirmPassword').val("");
								$('#inputPassword').val("");
							},1000)
					break;
						
					case "email":
						
						$('#sonuc').html('<div class="alert alert-danger mt-4">Bu email kullanılıyor</div>');
							setTimeout(function(){
								$('#sonuc').html("");
								$('#fake_kayit_button').hide();
								$('#kayit_button').show();
								$('#inputConfirmPassword').val("");
								$('#inputPassword').val("");
							},1000)
					break;
						  
					case "notemail":
						
						$('#sonuc').html('<div class="alert alert-danger mt-4">Lütfen Geçerli Bir Email Adresi Giriniz</div>');
							setTimeout(function(){
								$('#sonuc').html("");
								$('#fake_kayit_button').hide();
								$('#kayit_button').show();
								$('#inputConfirmPassword').val("");
								$('#inputPassword').val("");
							},1000)
					break;
						
					case "sifre":
						
						$('#sonuc').html('<div class="alert alert-danger mt-4">Şifreler Eşleşmiyor</div>');
							setTimeout(function(){
								$('#sonuc').html("");
								$('#fake_kayit_button').hide();
								$('#kayit_button').show();
								$('#inputConfirmPassword').val("");
								$('#inputPassword').val("");
							},1000)
					break;
						  
					case "sifrekisa":
						
						$('#sonuc').html('<div class="alert alert-danger mt-4">Şifre uzunluğu en az 8 olmaldır</div>');
							setTimeout(function(){
								$('#sonuc').html("");
								$('#fake_kayit_button').hide();
								$('#kayit_button').show();
								$('#inputConfirmPassword').val("");
								$('#inputPassword').val("");
							},1000)
					break;
						
						
						
				}
				
				
				
			}
			
			
		})
		
	})
	
	
	
	$('#inputPassword').on("keyup",function(){
		var uzunluk = $(this).val();
		uzunluk = uzunluk.length;
			if(uzunluk<8){
				$('#sifreUzunluk').html('<span class="text-danger ml-2">*Karakter uzunluğu en az 8 olmalıdır</span>');
			}else{
				$('#sifreUzunluk').html('');
			}
	})
	
	$('#inputConfirmPassword').on("keyup",function(){
		
		if($('#inputPassword').val() != $(this).val()){
			$('#sifreKontrol').html("<span class='text-danger ml-2'>*Şifreler Eşleşmiyor</span>");
		}else{
			$('#sifreKontrol').html("");
		}
		
	})
	
	
	
	
})