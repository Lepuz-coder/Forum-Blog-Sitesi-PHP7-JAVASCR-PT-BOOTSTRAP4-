// JavaScript Document
$(document).ready(function(){
	$('.devambuton1').click(function(){
		
		var buton = $(this);
		
		var sayfa = $(this).attr("data-id");
		
		var div = $(this).parent().next();
		
		var tur = $(this).attr("data-title");
		
		$.post("ana.php?islem=yazilari_yazdir",{"yazi":"tumyazilar","sayfa":sayfa,"tur":tur,"aranan":null},function(donen){
			
			div.html(donen);
			
			buton.parent().hide();
			
		})
		
	})
	
	$('.devambuton2').click(function(){
		
		var buton = $(this);
		
		var sayfa = $(this).attr("data-id");
		
		var div = $(this).parent().next();
		
		var tur = $(this).attr("data-title");
		
		$.post("ana.php?islem=yazilari_yazdir",{"yazi":"populeryazilar","sayfa":sayfa,"tur":tur,"aranan":null},function(donen){
			
			div.html(donen);
			
			buton.parent().hide();
			
		})
		
	})
	
	$('.devambuton3').click(function(){
		
		var buton = $(this);
		
		var sayfa = $(this).attr("data-id");
		
		var div = $(this).parent().next();
		
		var tur = $(this).attr("data-title");
		
		$.post("ana.php?islem=yazilari_yazdir",{"yazi":"takip-edilen-yazilar","sayfa":sayfa,"tur":tur,"aranan":null},function(donen){
			
			div.html(donen);
			
			buton.parent().hide();
			
		})
		
		
	})
	
	$('.kullanicibuton').click(function(){
		
		var buton = $(this);
		
		var sayfa = $(this).attr("data-id");
				
		var id = $(this).attr("data-title");
		
		
		$.post("ana.php?islem=kullanici_yazilari_cek",{"sayfa":sayfa,"id":id},function(donen){
			
			$('#kullanici_yazilari').append(donen);
			
			buton.hide();
			
		})
		
	})
	
	
	
})