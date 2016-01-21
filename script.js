// When the button is clicked the default submit event is prevented. If the user has entered a city the AJAX $.get
// function will send that data to the php file and return the result for the sent city. Then the returned value is 
// used in the function(data). Deppending on the result it will fadeIn() a message.

$("#findMyWeather").click(function(event) {

	event.preventDefault();

	$(".alert").hide();

	if($("#city").val()!=="") {
		
	$.get("scraper.php?city="+$("#city").val(), function(data) {

		if (data == "") {

			$("#fail").fadeIn();

		} else {

			$("#success").html(data).fadeIn();

		}
	
	}); 

	} else {

		$("#noCity").fadeIn();

	}

});