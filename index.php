
<?php
	echo "Muthiana";

	echo "qualquer coisa";

	echo "Shelia";
echo "hello testing";

<!-- 
	/*
* Author:muthiana coder's
* Author URI: http://coders.muthiana.org
* Company:Muthiana;
* Company URI:http://muthiana.org
* Description:Application for domestic violence
* Copyright:2017 (c)


*/

?>

 -->

<!DOCTYPE html>
<html  lang="pt">
<head>
	<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible", content="IE=edge">
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

	<link rel="stylesheet" type="text/css" href="static/stylesheet/libraries/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/stylesheet/main.css">
	<!-- leafletjs map css -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
   integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
   crossorigin=""/>
	<!-- leafletjs map css -->


	<!-- stylesheets -->	


	<!-- scripts -->
	<!-- leafletjs map javascript -->

	<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
   integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
   crossorigin=""></script>
	
	<!-- leafletjs map javascript -->
	<script type="text/javascript" src="../../static/javascript/app.js"></script>
	
	<!-- scripts -->

	<title>Home</title>
	
</head>
<body>
			<header>
				<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <a class="navbar-brand" href="#">Muthianas</a>
				  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				    <ul class="nav navbar-nav navbar-right">
				      <li class="nav-item">
				        <a class="nav-link" href="#">ajuda</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">sobre</a>
				      </li>
				   
				    </ul>
				  </div>
				</nav>
			</header>
		

			<nav>
				<ul class="sub-menu">
					<button type="button" class="float-left btn btn-primary"><a href="">denucia</a></button>
					<button type="button" class="float-right btn btn-primary"><a href="views/pages/violencia.php">ver violencia</a></button>
					
			</nav>
			 <div id="mapid"></div>




</body>
</html>