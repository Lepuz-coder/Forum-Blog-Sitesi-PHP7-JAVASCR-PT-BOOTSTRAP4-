// JavaScript Document

$(document).ready(function(){
					
					$('.sakla').hide();
					
						$('.cevapla_buton').click(function(){
						
							var id = $(this).attr("data-id");
						
							$('#cevap_iskelet_'+id).slideToggle(400);
						
						
						})
						
					$('.iptal_cevap').click(function(){
					
						var id = $(this).attr("data-id");
						
							$('#cevap_iskelet_'+id).slideToggle(400);
					
					})
	
					$('.cevap_gonder').click(function(){
						
						var id = $(this).attr("data-id");
						
						var icerik = $('#yorum_icerik_'+id).val();
												
						if(icerik.length <= 0){
							
							$('#cevap_uyari_'+id).html("*Boş olamaz");
							
							setTimeout(function(){
								
								$('#cevap_uyari_'+id).html("");
								
							},2000)
							
						}else{
																		
						$.post("ana.php?islem=cevap_gonder",{"yorum_id":id,"icerik":icerik},function(donen){
							
							donen = $.parseJSON(donen);
						
							$('#yorum_icerik_'+id).val("");
							
							if(donen.cevap == "true"){
							
							$.post("ana.php?islem=yorumlari_getir",{"yazi_id":$('#yorumlar_yeri').attr("data-id")},function(donen){

								$('#cevap_gonderildi_alert').removeClass("d-none");
				
						setTimeout(function(){

							$('#cevap_gonderildi_alert').addClass("d-none");

						},1000)
								
							$('#yorumlar_yeri').html(donen);
								
								
						})
	
						}else if(donen.hata == "giris"){
							
							$('#genel_alert').html("<b>Cevap atmak için giriş yapınız</b>");
							$('#genel_alert').removeClass("d-none");

							setTimeout(function(){

								$('#genel_alert').addClass("d-none");

							},3000)
						}else if(donen.hata == "onay"){
							
							$('#genel_alert').html("<b>Cevap atmak için emaili onaylayın</b>");
							$('#genel_alert').removeClass("d-none");

							setTimeout(function(){

								$('#genel_alert').addClass("d-none");

							},3000)
							
						}
							
						})
						
						}
						
					})
					
					$('.cevap_textarea').on("keyup",function(e){
						if(e.keyCode == 13){
							
							var id = $(this).attr("data-id");
						
						var icerik = $('#yorum_icerik_'+id).val();
												
						if(icerik.length <= 0){
							
							$('#cevap_uyari_'+id).html("*Boş olamaz");
							
							setTimeout(function(){
								
								$('#cevap_uyari_'+id).html("");
								
							},2000)
							
						}else{
																		
						$.post("ana.php?islem=cevap_gonder",{"yorum_id":id,"icerik":icerik},function(donen){
							
							donen = $.parseJSON(donen);
						
							$('#yorum_icerik_'+id).val("");
							
							if(donen.cevap == "true"){
							
							$.post("ana.php?islem=yorumlari_getir",{"yazi_id":$('#yorumlar_yeri').attr("data-id")},function(donen){

								$('#cevap_gonderildi_alert').removeClass("d-none");
				
						setTimeout(function(){

							$('#cevap_gonderildi_alert').addClass("d-none");

						},1000)
								
							$('#yorumlar_yeri').html(donen);
								
								
						})
	
						}else if(donen.hata == "giris"){
							
							$('#genel_alert').html("<b>Cevap atmak için giriş yapınız</b>");
							$('#genel_alert').removeClass("d-none");

							setTimeout(function(){

								$('#genel_alert').addClass("d-none");

							},3000)
						}else if(donen.hata == "onay"){
							
							$('#genel_alert').html("<b>Cevap atmak için emaili onaylayın</b>");
							$('#genel_alert').removeClass("d-none");

							setTimeout(function(){

								$('#genel_alert').addClass("d-none");

							},3000)
							
						}
							
						})
						
						}
							
						}
						
					})
})