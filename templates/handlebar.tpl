<script id="entry-template" type="text/x-handlebars-template">
    <div id="weather_wrapper">
	<div class="weatherCard">
		<div class="currentTemp">
			<span class="temp">{{temp}}&deg;</span>
			<span class="location">{{info.name}}</span>
		</div>
		<div class="currentWeather">
			<span class="conditions"><i class="{{icon}}"></i></span>
			<div class="info">
				<span class="rain">{{info.humidity}} %</span>
				<span class="wind">{{info.wind}} m/h</span>
			</div>
		</div>
	</div>
</div>
</script>
<div id="content-placeholder"></div>
