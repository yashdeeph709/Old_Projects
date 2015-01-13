// JavaScript Document
function transition()
{
	$('#slide1').show();
	$('#slide2').hide();
	$('#slide3').hide();
}
$('document').ready(
function(){
setTimeout('transition()',10000);
});
