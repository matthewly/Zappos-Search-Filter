/**
 * 
 */

	
	$("#zipCode_submit").click(function() {
		var zipCode = $("#zipCode").val();
		if (zipCode.length != 5)
		{
			$('#weather').html("Invalid input! Zip code must be 5 digits.");
			
		} else {
			 $.ajax({
			 type: 'GET',
		     url : "http://api.wunderground.com/api/0ec92fe577458c9e/conditions/q/" + zipCode + ".json",
			 dataType : "jsonp",
			 success : function(parsed_json) {
			 var location = parsed_json['current_observation']['display_location']['full'];
			 var temp_f = parsed_json['current_observation']['temp_f'];
			 var feelsLike = parsed_json['current_observation']['feelslike_f'];
			 $('#weather').html("Current temperature in " + location + " is: " + temp_f + " degrees Fahrenheit."
					 + "<br> It feels like " + feelsLike + " degrees Fahrenheit.");
			 }
			 });
		}
		  
	});
	
	function userSubmit() {
		
		return false;
	}
