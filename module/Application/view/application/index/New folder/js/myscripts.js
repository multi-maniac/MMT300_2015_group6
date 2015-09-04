
	/*
	mandv
	boardmem
	history
	services
	*/
/*$('.boardmem').click(function(){
	$('.part1, .part3, .part4').hide(2000);
	$('.part2').show(5000);
});*/

$('.part3, .part4, .part2').hide();

$('.boardmem').click(function(){
	$('.part2').show(5000);
$('.part1, .part3, .part4').hide(2000);
});

$('.services').click(function(){
	$('.part4').show(5000);
$('.part1, .part3, .part2').hide(2000);
});

$('.history').click(function(){
	$('.part3').show(5000);
$('.part2, .part1, .part4').hide(2000);
});

$('.mandv').click(function(){
	$('.part1').show(5000);
$('.part2, .part3, .part4').hide(2000);
});