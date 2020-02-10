// JavaScript Document

$('.kisi_mesaj').click(function(){
	
	var id = $(this).attr("data-id");
	
	
	$.post("ana.php?islem=mesajlajan_bilgileri_setle",{"id":id},function(donen){
		
		donen = $.parseJSON(donen);
		
		$('#konusulan_kullanici').html('<img class="responsive-resim-boyut3" src="'+donen.resim+'" alt="" /><p>'+donen.ad+'</p>');
		
	});
	
	$('#kapat_2').trigger("click");
	
	setTimeout(function(){
					//$(".messages").animate({ scrollTop: $(document).height()+50 }, "fast");
					$('.messages').scrollTop($('.content')[0].scrollHeight+120000000);
				},200)
})