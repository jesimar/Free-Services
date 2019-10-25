$(document).ready(function(){
	$('#btn-hide').click(function(){
		$('h3').hide();
	});
	$('#btn-show').click(function(){
		$('h3').show();
	});
	$('#text-green').click(function(){
		$('h3').css("color", "green");
	});
	$('#text-red').click(function(){
		$('h3').css("color", "red");
	});
	$('#text-bg-blue').click(function(){
		$('h3').css("background-color", "blue");
	});
	$('#text-bg-remove').click(function(){
		$('h3').css("background-color", "white");
	});
	$('#text-fade').click(function(){
		$('h3').fadeOut(); //oculta um objeto lentamente
		$('h3').delay(2000); //tempo de espera do método em milisegundos.
		$('h3').fadeIn(); //mostra um objeto lentamente
		
		$('#msg-text').text("Efeito aplicado com sucesso!");
		$('#msg-text').css("color", "red");
		$('#msg-text').css("border", "1px solid red");
		$('#msg-text').fadeOut(4000);
	});
});
