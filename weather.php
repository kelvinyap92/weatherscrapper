
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Scraper</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">


	<style>

		html, body {
			height:100%;
		}

		.container {
			background-image: url("weatherfield.jpg");
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			padding-top: 160px;
		}

		.center {
			text-align: center;
		}

		p {
			padding-top:15px;
			padding-bottom:15px;
		}

		button {
			margin-top:15px;
		}

		.black {
			color:black;
		}

		.alert {
			margin-top:100px;
			opacity: 0.75; /* opacity [0-1] */
    		-moz-opacity: 0.75; /* opacity [0-1] */
    		-webkit-opacity: 0.75; /* opacity [0-1] */
    		display: none;
		}
	</style>

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 black center">
				<h1 class="black center">How's the Weather?</h1>
				<p class="lead center">Enter your city below to get a forecast for your area</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Your City (eg. New York, St. Louis, San Francisco...)"/>
					</div>
					<button id="findMyWeather" class="btn btn-success btn-large">Get Forecast</button>
				</form>
				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again.</div>
			</div>
		</div>
	</div>


	<!-- jQuery CDN and minified js for bootstrap -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script>
    	$("#findMyWeather").click(function(event) {

    		event.preventDefault();

    		if ($("#city").val()!="") {

    			$.get("scraper.php?city="+$("#city").val(), function(data) {

    				if (data=="") {
    					$("#fail").fadeIn();
    				} else {
    					$("#success").html(data).fadeIn();
    				}
    			});
    		} else {
    			alert("Please enter a city");
    		}
    	});
    </script>

 

</body>
</html>