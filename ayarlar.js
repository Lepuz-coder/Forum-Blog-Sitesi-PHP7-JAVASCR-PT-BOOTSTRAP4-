// JavaScript Document
$(document).ready(function(){
	
	$('#resim_degis_buton').click(function(e){
		e.preventDefault;
		var formData = new FormData($('#resim_form')[0]);
		
		$.ajax({
			type:"POST",
			url:"ana.php?islem=resim_degistir",
			enctype: 'multipart/form-data',
			data:formData,
			processData:false,
			contentType:false,
		}).done(function(donen){
			
			var donen = $.parseJSON(donen);
			
				if(donen.sonuc == "false"){
					
					switch(donen.hata){
							
						case "bos":
							
							$('#resim_sonuc').html("<span class='text-danger'>*Resim seçiniz</span>");
							
						break;
							
						case "boyut":
							
							$('#resim_sonuc').html("<span class='text-danger'>*5mb'dan büyük olamaz</span>");
							
						break;
							
						case "tip":
							
							$('#resim_sonuc').html("<span class='text-danger'>*Sadece jpg ve png</span>");
							
						break;
							
					}
					
					setTimeout(function(){
						$('#resim_sonuc').html("");
					},3000)
					
				}else{
					
					$('#resim_sonuc').html("<span class='text-success'>Resim Değiştirildi.</span>");
					
					$('#ayarlar_resim').attr("src",donen.resim);
					
					setTimeout(function(){
						$('#resim_sonuc').html("");
					},3000)
					
				}
			
		})
		
	})
	
	$('#ad_degis').click(function(){
		
		$('#disabled_iskelet').slideUp(500);
		$('#isim_degistir_iskelet').removeClass("d-none");
		
	})
	
	$('#iptal_buton_isim').click(function(){
		
		$('#isim_degistir_iskelet').addClass("d-none");
		$('#disabled_iskelet').show();
		
	})
	
	$('#yeni_kulad_input').on("keyup",function(){
		
		var veri = $('#yeni_kulad_input').val();
		var uzunluk = veri.length;
		
		var son = veri.substr(uzunluk-1);
	if(son == "*" || son == "@" || son == "}" || son == "{" || son == "/" || son == "]" || son == "[" || son == "%" || son == "$" || son == "," || son == "-" || son == "|" || son == "~" || son == "'" || son == "<" || son == "?" || son == ">"){
			veri = veri.substr(0,uzunluk-1);
			$('#yeni_kulad_input').val(veri);
			$('#cevap_kulad').html("<span class='text-danger'> *(@,$,%..]) gibi şekiller kullanmayınız</span>");
		

	}else if(son == " "){
		veri = veri.substr(0,uzunluk-1);
			$('#yeni_kulad_input').val(veri);
			$('#cevap_kulad').html("<span class='text-danger'> *Boşluk bırakmayınız</span>");
		
	}
		
			if(uzunluk >= 10){
				
				veri = veri.substr(0,10);
				$('#yeni_kulad_input').val(veri);
				$('#cevap_kulad').html("<span class='text-danger'> *Kullanıcı adı en fazla 10 karakter olabilir</span>");
				
			}
		
			
		
	})
	
	$('#isim_degis_buton').click(function(){
		
		
		if($('#yeni_kulad_input').val() == "" || $('#kulad_sifre').val == ""){
			$('#cevap_kulad').html("<span class='text-danger'> *Bilgileri boş bırakmayınız</span>")	
		}else{
			
			$.ajax({
			
			type:"POST",
			url:"ana.php?islem=isim_degis",
			data:$('#isim_degis_form').serialize(),
			success:function(donen){
				
				var donen = $.parseJSON(donen);
				
				if(donen.sonuc == "false"){
					
					switch(donen.hata){
							
						case "ad":
							
							$('#cevap_kulad').html("<span class='text-danger'> *Kullanıcı adı zaten kullanılıyor</span>");
							$('#yeni_kulad_input').val("");
							setTimeout(function(){
								$('#cevap_kulad').html("");
							},2000)
						break;
							
						case "sifre":
							
							$('#cevap_kulad').html("<span class='text-danger'> *Şifreniz Hatalı</span>");
							$('#kulad_sifre').val("");
							setTimeout(function(){
								$('#cevap_kulad').html("");
							},2000)
						break;
							
					}
					
				}else{
						
						$('#cevap_kulad').html("<div class='alert alert-success w-100'>Kullanıcı adınız değiştirildi</div>");
						setTimeout(function(){
							
							$('#disabled_ad').val(donen.ad);
							$('#isim_degistir_iskelet').addClass("d-none");
							$('#disabled_iskelet').show();
							$('#cevap_kulad').html("");
						},1000)
					
						$('#isim_degis_form').trigger("reset");
					}
				
			}
			
		})
			
		}
		
		
		
		
	})
	
	$('#sifre_degis').click(function(){
		
		$('#disabled_iskelet').slideUp(500);
		$('#sifre_degistir_iskelet').removeClass("d-none");
		
	})
	
	$('#iptal_buton_sifre').click(function(){
		
		$('#sifre_degistir_iskelet').addClass("d-none");
		$('#disabled_iskelet').show();
		
	})
	
	$('#sifre_degis_buton').click(function(){
		
		$.ajax({
			type:"POST",
			url:"ana.php?islem=sifre_degis",
			data:$('#sifre_degis_form').serialize(),
			success:function(donen){
				
				donen = $.parseJSON(donen);
				
				if(donen.sonuc == "false"){
					
					switch(donen.hata){
							
						case "bos":
							
							$('#cevap_sifre').html("<span class='text-danger'>*Bilgileri boş bırakmayınız</span>");
							setTimeout(function(){
								$('#cevap_sifre').html("");
							},1500)
						break;
							
						case "sifre":
							
							$('#cevap_sifre').html("<span class='text-danger'>*Şifrenizi yanlış girdiniz</span>");
							$('#eski_sifre_input').val("");
							setTimeout(function(){
								$('#cevap_sifre').html("");
							},1500)
						break;
							
						case "uzunluk":
							
							$('#cevap_sifre').html("<span class='text-danger'>*Şifre uzunluğunuz en az 8 karakter olmalıdır</span>");
								$('#yeni_sifre_input').val("");
							setTimeout(function(){
								$('#cevap_sifre').html("");
							},1500)
						break;
							
						case "sifretekrar":
							
							$('#cevap_sifre').html("<span class='text-danger'>*Şifreler uyuşmuyor</span>");
								$('#yeni_sifre_input').val("");
								$('#yeni_sifre_tekrar').val("");
							setTimeout(function(){
								$('#cevap_sifre').html("");
							},1500)
						break;
					}
					
				}else{
					
					
					$('#cevap_sifre').html("<div class='alert alert-success w-100'>Şifreniz değiştirildi</div>");
						setTimeout(function(){
							
							$('#sifre_degistir_iskelet').addClass("d-none");
							$('#disabled_iskelet').show();
							$('#cevap_sifre').html("");
						},1000)
					
						$('#sifre_degis_form').trigger("reset");
					
					
				}
				
			}
			
			
		})
		
	})
	
	$('#email_onayla').click(function(){
		
		$('#disabled_iskelet').slideUp(500);
		$('#email_onay_iskelet').removeClass("d-none");
		
	})
	
	$('#onayla').click(function(){
		
		var kod = $('#kod').val();
		
		$.post("ana.php?islem=email_tekrar_onay",{"kod":kod},function(donen){
			donen = $.parseJSON(donen);
			
			if(donen.sonuc == "false"){
				
				$('#email_cevap').html("Yanlış Kod !");
				$('#kod').val("");
				
				setTimeout(function(){
					$('#email_cevap').html("");
				},3000)
			
			}else{
				$('#ana_yazi').removeClass("alert-info").addClass("alert-success");
				$('#ana_yazi').html("Email Onaylandı !");
				
				setTimeout(function(){
					window.location.reload();
				},2000)
				
			}
			
		})
		
	})
	
	$('#tekrar_mail_gonder').click(function(){
		
		var email = $(this).attr("data-id");
		
		
		$.ajax({
			beforeSend:function(){
				$('#onayla_tekrargonder_iskelet').hide();
				$('#yukleniyor').removeClass("d-none");
			},
			type:"POST",
			url:"ana.php?islem=email_tekrar_gonder",
			data : {"email":email},
		
			
		}).done(function(donen){
						
			donen = $.parseJSON(donen);
			
				if(donen.sonuc == "false"){
					
					$('#yukleniyor_icerik').html("<span class='text-danger'>3 Dakika içinde 1 tane mail gönderilebilir !</span>");
					
					setTimeout(function(){
				$('#yukleniyor_icerik').html('<img src="resimler/loading.gif" width="50"> Gönderiliyor... ');
				$('#onayla_tekrargonder_iskelet').show();
				$('#yukleniyor').addClass("d-none");
			},3000)
					
				}else{
					
					$('#yukleniyor_icerik').html("Gönderildi !");
			
			setTimeout(function(){
				$('#yukleniyor_icerik').html('<img src="resimler/loading.gif" width="50"> Gönderiliyor... ');
				$('#onayla_tekrargonder_iskelet').show();
				$('#yukleniyor').addClass("d-none");
			},1500)
					
				}
			
		})
		
	})
	
})