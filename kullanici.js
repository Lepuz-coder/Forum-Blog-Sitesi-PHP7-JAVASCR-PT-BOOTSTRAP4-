// JavaScript Document
$(document).ready(function(){
	
	$('#takip_et_buton').click(function(){
		
		var ad = $(this).attr("data-id");
		
		$.post("ana.php?islem=takip_et",{"ad":ad},function(donen){
			
			donen = $.parseJSON(donen);
			
			if(donen.cevap == "true"){
				
				$('#bilgi_alert_positiv').html("<b>Takip Edildi &#10004;</b>");
				$('#bilgi_alert_positiv').removeClass("d-none");
				
				
				
				setTimeout(function(){
					$('#bilgi_alert_positiv').addClass("d-none");
					window.location.reload();
				},500)
				
			}else if(donen.cevap == "false"){
				
				$('#bilgi_alert_negativ').html("<b>Zaten takip ediliyor &#10008;</b>");
				$('#bilgi_alert_negativ').removeClass("d-none");
				
				setTimeout(function(){
					$('#bilgi_alert_negativ').addClass("d-none");
				},500)
				
			}
			
		})
		
	})
	
	$('#takip_birak_buton').click(function(){
		
		var ad = $(this).attr("data-id");
		
		$.post("ana.php?islem=takip_birak",{"ad":ad},function(donen){
			
			donen = $.parseJSON(donen);
			
				if(donen.cevap == "true"){
					
					$('#bilgi_alert_negativ').html("<b>Takip bırakıldı &#10008;</b>");
				$('#bilgi_alert_negativ').removeClass("d-none");
				
				setTimeout(function(){
					$('#bilgi_alert_negativ').addClass("d-none");
					window.location.reload();
				},500)
					
					
					
				}else{
					
					$('#bilgi_alert_negativ').html("<b>Bir hata oluştu ! &#10008;</b>");
				$('#bilgi_alert_negativ').removeClass("d-none");
				
				setTimeout(function(){
					$('#bilgi_alert_negativ').addClass("d-none");
				},500)
					
				}
			
		})
		
	})
	
	$('#mesaj_at').click(function(){
		
		var ad = $(this).attr("data-id")
		
		$.post("ana.php?islem=mesaj_kutu_uzaktan_olustur",{"ad":ad},function(){
			window.location.href = "mesaj-kutusu";
		})
		
	})
	
})