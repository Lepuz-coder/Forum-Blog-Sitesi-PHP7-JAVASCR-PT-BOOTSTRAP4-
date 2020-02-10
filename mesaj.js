// JavaScript Document
$(document).ready(function(){
	
	$.post("ana.php?islem=mesaj_kisi_guncelle",{},function(donen){
		
		
		donen = JSON.parse(donen);
		
		
		var sayi = donen.length;
		
			if(sayi != 0){
				
				for(var i=0;i<sayi;i++){
					
					$('#mesaj_kisi_'+donen[i]).html("yeni mesaj");
					
				}
				
			}
		
	})
	
	setTimeout(function(){
					//$(".messages").animate({ scrollTop: $(document).height()+50 }, "fast");
					$('.messages').scrollTop($('.content')[0].scrollHeight+120000000);
				},500)
	
	setInterval(function(){
		
		$.post("ana.php?islem=mesaj_kutusu_oku",{},function(donen){
			
			$('#mesajlar_yeri').html(donen);
			
		})
		
		$.post("ana.php?islem=mesaj_durum_kontrol",{},function(donen){
				donen = $.parseJSON(donen);
			
				if(donen.cevap == "true"){
					
					setTimeout(function(){
					//$(".messages").animate({ scrollTop: $(document).height()+50 }, "fast");
					$('.messages').scrollTop($('.content')[0].scrollHeight+120000000);
				},50)
			setTimeout(function(){
					//$(".messages").animate({ scrollTop: $(document).height()+50 }, "fast");
					$('.messages').scrollTop($('.content')[0].scrollHeight+120000000);
				},100)
					
				}

		})
		
	},50)
	
	setInterval(function(){
		$.post("ana.php?islem=mesaj_kisi_guncelle",{},function(donen){
		
		
		donen = JSON.parse(donen);
		
			$('.icerik_sifirla').html("");
		
		var sayi = donen.length;
		
			if(sayi != 0){
				
				for(var i=0;i<sayi;i++){
					
					$('#mesaj_kisi_'+donen[i]).html("+1 Yeni Mesaj ");
					$('#mobil_kisi_'+donen[i]).html("+1 Yeni Mesaj ");
					
				}
				
			}
		
			$.post("ana.php?islem=bildirim_cikar",{},function(donen){
	})
			
	})
	},500)
	
	function mesaj_gonder(){
		
		var mesaj = $('#mesaj').val();
		
		if(mesaj.length != 0){
			
			$.post("ana.php?islem=mesaj_gonder",{"mesaj":mesaj});
			
			$('#mesaj').val("");
			
				setTimeout(function(){
					//$(".messages").animate({ scrollTop: $(document).height()+50 }, "fast");
					$('.messages').scrollTop($('.content')[0].scrollHeight+120000000);
				},50)
			setTimeout(function(){
					//$(".messages").animate({ scrollTop: $(document).height()+50 }, "fast");
					$('.messages').scrollTop($('.content')[0].scrollHeight+120000000);
				},100)
		}
	}
	
	$('#mesaj_gonder').click(function(){
		
		mesaj_gonder();
		
	})
	
	$('#mesaj').on("keyup",function(e){
		
		if(e.keyCode == 13){
			mesaj_gonder();
		}
		
	})
	
	$('#istek_isim').on("keyup",function(){
		
		var deger = $(this).val();
		
		if(deger.length != 0){
			
			$.post("ana.php?islem=db_isim_ara",{"deger":deger},function(donen){
			
				$('#istek_sonuc').html(donen);
			
		})
			
		}else{
			$('#istek_sonuc').html("");
		}
		
	})
	
	$('#mesaj_olustur').click(function(){
	
		if($('#istek_isim').length == 0){
			
			$('#uyari_mesaj_gonder').html("*Geçerli kullanıcı seçiniz");
			setTimeout(function(){
								$('#uyari_mesaj_gonder').html("");
							},2000)
		}else{
			
			var deger = $('#istek_isim').val();
			
			$.post("ana.php?islem=mesaj_kutu_olustur",{"isim":deger},function(donen){

				donen = $.parseJSON(donen);
				
					if(donen.cevap == "true"){
						
						$('#kapat').trigger("click");
						$('#mesaj_kisileri').load("ana.php?islem=mesaj_kisileri_cek");
						
						setTimeout(function(){
							$('.kisi_mesaj[name="'+deger+'"]').trigger("click");
						},500)
						
					}else if(donen.cevap == "false"){
						
						if(donen.hata == "var"){
							
							$('#kapat').trigger("click");
							$('.kisi_mesaj[name="'+deger+'"]').trigger("click");
							
						}else if(donen.hata == "yok"){
							$('#uyari_mesaj_gonder').html("*Böyle bir kullanıcı yok");
							setTimeout(function(){
								$('#uyari_mesaj_gonder').html("");
							},2000);
						}else if(donen.hata == "kendi"){
							$('#uyari_mesaj_gonder').html("*Kendinize mesaj atamazsınız :(");
							setTimeout(function(){
								$('#uyari_mesaj_gonder').html("");
							},2000);
						}
						
					}
				$('#istek_isim').val("");
				
			})
			
		}
		
	})
	
	$('#mesajlarda_ara').on("keyup",function(){
		
		var deger = $(this).val();
		
			if(deger.length !=0){
				
				$.post("ana.php?islem=mesajlarda_ara",{"aranan":deger},function(donen){
					
					$('#mesaj_kisileri').html(donen);
					
				})
				
			}else{
				$.post("ana.php?islem=tum_mesaj_kisileri_cek",{"aranan":deger},function(donen){
					
					$('#mesaj_kisileri').html(donen);
					
				})
			}
		
	})
	
	$('#kisilerde_ara_2').on("keyup",function(){
		
		var deger = $(this).val();
		
			if(deger.length !=0){
				
				$.post("ana.php?islem=mesajlarda_ara_mobil",{"aranan":deger},function(donen){
					
					$('#mesaj_kisileri_mobil').html(donen);
					
				})
				
			}else{
				$.post("ana.php?islem=mesaj_kisileri_cek_mobil",{"aranan":deger},function(donen){
					
					$('#mesaj_kisileri_mobil').html(donen);
					
				})
			}
		
	})
})