<html>
  <?php
  
  ?> 
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <script>
    function goBack()
    {
      window.history.back()
    }
  </script>
  <h1 align="center"> Riepilogo Dati</h1>
  <div class="container" class="panel panel-default">
    <form class="form-horizontal" action="esito.php" method="POST">
      <div class="form-group">
        <legend>Cognome</legend>
       <?php echo $_POST["Cognome"];?>
      </div>
      <div class="form-group">
        <legend>Nome</legend>
        <?php echo $_POST["Nome"];?>
      </div>
      <div class="form-group">
        <legend>Sesso</legend>
       <?php echo $_POST["sesso"];?>
      
      </div>
      <div class="form-group">
        <legend>
          Nazionalita
        </legend>
        <?php echo $_POST["nazionalita"];?>
      </div>
      <div class="form-group">
        <legend>
          Patente:
        </legend>
        <?php
        if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])!=false)
        {
          echo $_POST["patente1"].", ". $_POST["patente2"];
        }
        else if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])==false)
        {
          echo $_POST["patente1"];
        }
         else if(isset($_POST["patente1"])==false && isset($_POST["patente2"])!=false)
        {
          echo $_POST["patente2"];
        }
        else
        {
          echo "nessuna";
        }
        ?>
      </div>
      <div class="form-group">
        <legend class="control-label">Email</legend>
        <div font="bold">
          <?php echo $_POST["email"];?>
        </div>
      </div>
      <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Registra</button>
    </form>

  </div>
</body>

</html>