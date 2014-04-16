/*
*   Funciones
*/
$(document).ready(function () {

	// Accordion Alertas
	$("#alertas #btn_open_accordion").click(function(){
		$("#alertas .body_accordion").toggle('blind');
	});
	
	$("#alertas .header_accordion h3").click(function(){
		$("#alertas .body_accordion").toggle('blind');
	});
	
	// Tabs Alertas
	$("#alertas .body_accordion").tabs();

	// Custom Scrollbars
	$(".scrollbar-chrome").scrollbar();
	
	// Tabs Descongelar Saldo
	$("#tabs_descongelar_saldo").tabs();

	// Spinner
	$('#spinner').spinner();
	
	// Accordion Historial
	$("#accodion_historial #btn_open_accordion_hist").click(function(){
		$("#accodion_historial .body_accordion").toggle('blind');
	});
	
	$("#accodion_historial .header_accordion h3").click(function(){
		$("#accodion_historial .body_accordion").toggle('blind');
	});

	// Datepicker Historial
	$('#datepicker_desde').datepicker();	
	
	$('#datepicker_hasta').datepicker();

	/* tooltips
	$('.mini_icon.nota').click(function(){
		$('.mini_icon.nota').tooltip({ tooltipClass: "custom_tooltip" });
	});
	*/
	$('.mini_icon.nota').tooltip({ tooltipClass: "custom_tooltip" });

	// modal
	$('#btn_invitar').click(function(){
		$('.overlay').toggle('fade');
	});

	$('#btn_aceptar').click(function(){
		$('.overlay').toggle('fade');
	});

});