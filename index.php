<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>

<body>

  <br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <a href="ASignin.php">sing - in</a>
  <a href="ASignOut.php">sing -out</a>
  <div class="col-sm-12" align="center">
    <h1>
      <b>Welcome to Hub Car</b><br> Share your car with <b>everyone</b>
    </h1>

  </div>
  <div class="row">
    <div class="grid-example col s12 m6">

      <div class="col-sm-4">


      </div>
      <div class="col-sm-4" class="panel panel-default" position="center">

        <button onclick="location.href='ASignin.php'" type="submit" class="btn btn-info" name="btnAnnulla"><b>Accedi come Autista</b></button>
        <button onclick="location.href='USignin.php'" type="submit" class="btn btn-success" name="btnConferma"><b>Accedi come Utente</b></button>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
  </div>
  </div>


</body>

</html>
<!--https://bootswatch.com/lux/-->