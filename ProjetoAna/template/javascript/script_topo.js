$(function() {
	$('#menu li').bind('mouseenter',function(){
		var $elemento = $(this);
		$submenu = $elemento.find('.sub_menu');
		$submenu.css('border','solid 1px #CCCCCC');
		$submenu
		.stop(true)
		.animate({
			'width':'150px',
			'height':'150px',
			'left':'0px'
		},1000,'easeOutBack');
	}).bind('mouseleave',function(){
		var $elemento = $(this);
		$submenu = $elemento.find('.sub_menu');
		$submenu
		.stop(true)
		.animate({
			'width':'150px',
			'height':'0px',
			'left':'0px'
		},500,'easeOutBack');
		$submenu.css('border','none');
	});
});

function submeter() {
	var dig = document.getElementById('txt_busca').value;
	alert(dig.lenght);
	if(dig!=""){
		form_busca.submit();
	}else{
		document.getElementById('txt_busca').focus();
	}
}
