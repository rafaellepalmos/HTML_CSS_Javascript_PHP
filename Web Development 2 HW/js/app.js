//Rafaelle Palmos 214210055
$(function(){
	var changeUnit = "";
	var unit = " F";
	var city = "";
	function ajaxcall(){
		$.ajax({
			type: 'GET',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + changeUnit + '&appid=2de143494c0b295cca9337e1e96b00e0',
			success: function(data){
				console.log(data.name);
				$("#container").html("Temperature: " + data.main.temp + unit + "<br>Pressure: " + data.main.pressure + " hPa<br>Humidity: " + data.main.humidity + "%" + "<br>Weather: " + data.weather[0].description);	
			}
		});
	}
	$("#cities>a").on("click", function(e){
		e.preventDefault();
		//alert(this.text);
		city = this.text.toLowerCase();
		/*$.ajax({
			type: 'GET',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + changeUnit + '&appid=2de143494c0b295cca9337e1e96b00e0',
			success: function(data){
				console.log(data.name);
				$("#container").html(data.name + ": " + data.main.temp + unit);	
			}
		});*/
		ajaxcall();
	});
	$("#fahrenheit").on("click", function(){
		changeUnit = "";
		unit = " F";
		if(city != ""){
			ajaxcall();
		} else{
			sweetAlert("Oops", "please choose a city", "error");
		}
	});
	$("#celsius").on("click", function(){
		changeUnit = "&units=metric";
		unit = " C";
		if(city != ""){
			ajaxcall();
		} else{
			sweetAlert("Oops", "please choose a city", "error");
		}
	});
});