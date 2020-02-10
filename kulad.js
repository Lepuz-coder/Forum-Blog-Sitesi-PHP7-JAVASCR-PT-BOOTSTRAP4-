// JavaScript Document

$(document).ready(function(){
	
	$('#inputUserame').on("keyup",function(){
		
		var veri = $('#inputUserame').val();
		var uzunluk = veri.length;
		
		var son = veri.substr(uzunluk-1);
	if(son == "*" || son == "@" || son == "}" || son == "{" || son == "/" || son == "]" || son == "[" || son == "%" || son == "$" || son == "," || son == "-" || son == "|" || son == "~"){
			veri = veri.substr(0,uzunluk-1);
			$('#inputUserame').val(veri);
			$('#kuladuzunluk').html("<span class='text-danger'> *(@,$,%..]) gibi şekiller kullanmayınız</span>");

	}else if(son == " "){
		veri = veri.substr(0,uzunluk-1);
			$('#inputUserame').val(veri);
			$('#kuladuzunluk').html("<span class='text-danger'> *Boşluk bırakmayınız</span>");
	}
		
			if(uzunluk >= 10){
				
				veri = veri.substr(0,10);
				$('#inputUserame').val(veri);
				$('#kuladuzunluk').html("<span class='text-danger'> *Kullanıcı en fazla ad 10 karakter olabilir</span>");
			}
		
			
		
	})
	
})