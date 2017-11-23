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
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="static/stylesheet/libraries/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="static/stylesheet/libraries/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/stylesheet/main.css">
	<!-- leafletjs map css -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
   integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
   crossorigin=""/>

	
	<!-- scripts -->
	 
<script type="text/javascript">
		window.onload = function (){
			var formulario = document.getElementById('formulario');
			var mapid = document.getElementById('mapid');
			formulario.style.display = "none";
			document.getElementById("denucia").addEventListener("click", function(){
	   			    if (formulario.style.display === "none") {
			        formulario.style.display = "block";
			        mapid.style.width = "60vw"
			      } else {
			      	 mapid.style.width = "100vw"
			        formulario.style.display = "none";
			    	}
				});
		};

		
	</script>
	<style type="text/css">
		.content{
			    margin-top: 50px;
		}
	</style>
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
				        <a class="nav-link" href="views/pages/ajuda.php">ajuda</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="views/pages/sobre.php">sobre</a>
				      </li>
				   
				    </ul>
				  </div>
				</nav>

					<button type="button" id="denucia" ss class="float-left btn btn-danger"><a  href="">Denucia</a></button>
					<button type="button" id="violencia" class="float-right btn btn-success"><a href="views/pages/violencia.php">Ver Violencia</a></button>

			</header>
     <div class="container-fuild content">
       <div class="row">
        <div class="col-sm-4" id="formulario">
          <h2>Formulario</h2>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Tipo de Violencia</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="tipo de violencia">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">O que aconteceu?</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="o que aconteceu">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Localizacao</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Localizacao">
            </div>
        
            <button type="submit" class="btn btn-primary" name="violencia">Enviar</button>
      </form>

      <a href="detalhes.php">Mais detalhes</a>
    </div>
        <div class="col-sm-8">
          <div class="embed-responsive embed-responsive-16by9" id="mapid">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14350.058044596017!2d32.59947065!3d-25.9511612!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2smz!4v1511187861843" width="0" height="0" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
     </div>
      </div>
      
      </div>


</body>
</html>