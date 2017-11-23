<!-- 
	/*
* Author:muthiana coder's
* Author URI: http://coders.muthiana.org
* Company:Muthiana;
* Company URI:http://muthiana.org
* Description:Application for domestic violence
* Copyright:2017 (c)

*/

 -->

<!DOCTYPE html>
<html  lang="pt">
<head>
	<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible", content="IE=edge">
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

	<link rel="stylesheet" type="text/css" href="../../static/stylesheet/libraries/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../static/stylesheet/main.css">
	<!-- leafletjs map css -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
   integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
   crossorigin=""/>
	<!-- leafletjs map css -->

	<style>
      
      #map {
        width: 100%;
		height: 600px; 
      }
    </style>
	<!-- stylesheets -->	


	<!-- scripts -->
	<!-- leafletjs map javascript -->

	<!-- <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
   integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
   crossorigin=""></script> -->
	
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
		  <form class="form-inline my-6 my-lg-6 justify-content-center">
      	  <input class="form-control mr-sm-6" type="text" placeholder="Pesquisar" style="margin-right: 10px; ">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Pesquisar</button>
      		<br>
      		<br>
      		<br>
      		<br>
      		
      		<div id="map"></div><br><br>
	<a href="cadastrar.php">Registar</a>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
//          center: new google.maps.LatLng(-25.494938, -49.294372),
//          center: new google.maps.LatLng(-15,1167, 39,2667),
          center: new google.maps.LatLng(-25.920474, 32.573981),
          zoom: 13
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('resultado.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqmbkg2zP9qpSLowVm8A3FgI7balbdhdI&callback=initMap">
    </script>
    	  </form>		
	      <div id="mapid"></div>




</body>
</html>