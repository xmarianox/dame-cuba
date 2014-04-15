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
	
});