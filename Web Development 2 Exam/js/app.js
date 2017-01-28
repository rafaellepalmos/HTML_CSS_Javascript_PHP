//Rafaelle Palmos 214210055
$(function(){
	var changeUnit = "";
	var unit = " F";
	var city = "bangkok";
	
	ajaxcall();
	
	function ajaxcall(){
		$.ajax({
			type: 'GET',
			url: 'http://api.openweathermap.org/data/2.5/forecast/daily?q=' + city + '&mode=json&units=metric&cnt=7&appid=79a44fec3638d984ebf18acbece11620',
			success: function(data){
				console.log(data.name);
				var str = city.toUpperCase() + "<br>";
				for (i = 0; i < data.list.length; i++){
					str += "Date: " + timeConverter(data.list[i].dt) + "<br>Temperature: " + data.list[i].temp.day +"</br>";
				//$("#container").html("Temperature: " + data.main.temp + unit + "<br>Pressure: " + data.main.pressure + " hPa<br>Humidity: " + data.main.humidity + "%" + "<br>Weather: " + data.weather[0].description);	
				}
				$("#container").html(str);	
			}
		});
	}
	
	function timeConverter(UNIX_timestamp){
		var a = new Date(UNIX_timestamp * 1000);
		var months =['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		var year = a.getFullYear();
		var month = months[a.getMonth()];
		var date = a.getDate();
		var hour = a.getHours();
		var min = a.getMinutes();
		var sec = a.getSeconds();
		var time = date + ' ' + month + ' ' + year ;
		return time;
		}
	$("#cities>a").on("click", function(e){
		e.preventDefault();
		//alert(this.text);
		city = this.text.toLowerCase();
		/*$.ajax({
			type: 'GET',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + changeUnit + '&appid=79a44fec3638d984ebf18acbece11620',
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