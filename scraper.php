<?php

    /* The $_GET['city'] is recieving the city name as na input from the user via AJAX. The
	str_replace is deleting the blank spaces between a city name (New York). The $contents variable
	stores the data for the giving city from a remote weather website. preg_match is a php regex
	function. It is searching for the given pattern in a website's source code. The (.*?) notation
	save everything in between the frist pattern and the ">" sign in a second array. The second
	array with the weather information is then being echoed and used by the AJAX $.get function. */
			
	$city = $_GET['city'];

	$city = str_replace(" ", "", $city);

	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

	preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

	echo $matches[1];

?>