$(function(){

	$('input[name=valor]').mask('000.000.000.000.000,00', {reverse:true, placeholder:'0,00'});
	$('input[name=data]').mask('99/99/9999', {reverse:true, placeholder:'99/99/9999'});
	$('input[name=dataini]').mask('99/99/9999', {reverse:true, placeholder:'99/99/9999'});
	$('input[name=datafim]').mask('99/99/9999', {reverse:true, placeholder:'99/99/9999'});

});