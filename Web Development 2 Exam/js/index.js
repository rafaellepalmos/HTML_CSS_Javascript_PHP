$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
		
		$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
	$('#captcha').focus(function() {
		$('label[for="captcha"]').addClass('selected');
	});
	$('#captcha').blur(function() {
		$('label[for="captcha"]').removeClass('selected');
	});
	$("#captcha").focusout(function(){
        if($(this).val() == '1mznsp'){
			$("#wrongcaptcha").text("Correct Captcha!");			
		} else{
			$("#wrongcaptcha").html("Wrong Captcha!");	
		}
    });
});