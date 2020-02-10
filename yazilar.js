// JavaScript Document
$(document).ready(function(){
	
	$.post("ana.php?islem=yorumlari_getir",{"yazi_id":$('#yorumlar_yeri').attr("data-id")},function(donen){

		$('#yorumlar_yeri').html(donen);
	})
	
	$('#begen_buton').click(function(){
		
		$.post("ana.php?islem=yazi_begen",{"id":$(this).attr("data-id")},function(donen){
			donen = $.parseJSON(donen);
			
			var sayi = $('#begeni_sayisi').attr("data-id");
			
			if(donen.cevap == "true"){
				
				
			sayi++;
			
				$('#begeni_sayisi').attr("data-id",sayi);
				
			$('#begeni_sayisi').html(sayi + " kişi beğendi");
			
				$('#begenildi_alert').removeClass("d-none");
				setTimeout(function(){
					$('#begenildi_alert').addClass("d-none");
				},1000)
			
			}else if(donen.cevap == "false"){
				
			sayi--;
			
				$('#begeni_sayisi').attr("data-id",sayi);
				
			$('#begeni_sayisi').html(sayi + " kişi beğendi");
				
				$('#uyari_begen_alert').removeClass("d-none");
				setTimeout(function(){
					$('#uyari_begen_alert').addClass("d-none");
				},1000)
			}else{
				
				
				$('#giris_yapilmadi_begen_alert').removeClass("d-none");
				setTimeout(function(){
					$('#giris_yapilmadi_begen_alert').addClass("d-none");
				},1000)
				
			}
			
			
			
		})
		
	})
	
	$('#yorum_gonder').click(function(){
				
		
		if($('#yorum_icerik').val().length < 5){
			
			$('#yorum_gonderme_uyari').html("*En az 5 karakter olmalıdır");
			setTimeout(function(){
				$('#yorum_gonderme_uyari').html("");
			},2000)
		}else{
			
			$.ajax({
			
			type:"POST",
			url:"ana.php?islem=yorum_gonder",
			data:$('#yorum_gonderme_form').serialize(),
			success:function(donen){
					
				donen = $.parseJSON(donen);
				
				if(donen.cevap == "true"){
				
				$('#yorum_gonderme_form').trigger("reset");
				
				$('#yorum_gonderildi_alert').removeClass("d-none");
				
				setTimeout(function(){
				
					$('#yorum_gonderildi_alert').addClass("d-none");
					
					$.post("ana.php?islem=yorumlari_getir",{"yazi_id":$('#yorumlar_yeri').attr("data-id")},function(donen){

		$('#yorumlar_yeri').html(donen);
	})
					
				},1000)
				
				}else if(donen.hata == "giris"){
							
					$('#yorum_gonderme_form').trigger("reset");
					
					$('#genel_alert').html("<b>Yorum atmak için giriş yapınız</b>");
					$('#genel_alert').removeClass("d-none");
					
					setTimeout(function(){
						
						$('#genel_alert').addClass("d-none");
						
					},3000)
					
				}else if(donen.hata == "onay"){
					
					$('#yorum_gonderme_form').trigger("reset");
					
					$('#genel_alert').html("<b>Yorum atmak için emailinizi onaylayınız</b>");
					$('#genel_alert').removeClass("d-none");
					
					setTimeout(function(){
						
						$('#genel_alert').addClass("d-none");
						
					},3000)
					
				}
			}
			
			
		})
			
		
			
		}
		
		
		
	})
	
	
	
})