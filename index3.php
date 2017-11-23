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

  <link rel="stylesheet" type="text/css" href="static/stylesheet/libraries/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="static/stylesheet/libraries/bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="static/stylesheet/main.css">
  <!-- leafletjs map css -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
   integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
   crossorigin=""/>


  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
   integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
   crossorigin=""></script>
  
  <!-- leafletjs map javascript -->
  <script type="text/javascript" src="../../static/javascript/app.js"></script>
  
  <!-- scripts -->

  <title>Denuncia Mais Detalhes</title>
  
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
      </header>
    

      <nav>

        <a href="#" class="navbar-toggle-btn"></a>

        <ul class="sub-menu">

               
          
      </nav>
      <div class="container">
       <div class="row">
        <div class="col-sm-6">
          <h2>Formulario de Registo de Violencia</h2>
          <br>
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

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descreva o que aconteceu</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <div class="row">
            <div class="form-group col-md-4">
              <label for="inputState">Sua Provincia</label>
                <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">Localidade</label>
                <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">Seu Bairro</label>
                <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">Seu Contacto</label>
              <input type="input" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
        
            <button type="submit" class="btn btn-success" name="violencia">Enviar</button>
      </form>
    </div>
        <div class="col-sm-6">
          <!-- <h2>Faca parte do grupo de Chat</h2>

          <br>

            <div class="card text-center">
            <div class="card-header">
              <i>Grupo Chat</i>
            </div>
            <div class="card-body">
              <h4 class="card-title">Troque ideias, partilhe a sua historia</h4>
              <p class="card-text">Ajude-nos a ...</p>
              <a href="#" class="btn btn-warning">Registe-se aqui</a>
              <br>
              <br>

            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div> -->
          
     </div>
      </div>
      
      </div>




</body>
</html>