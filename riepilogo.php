<html>
  <?php
 $cognome= $_POST["Cognome"];
   $nome=$_POST["Nome"];
   $sesso=$_POST["sesso"];
   $nazionalita=$_POST["nazionalita"];
  $password=$_POST["password"];
  if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])!=false)
  {
    $b=2;
    $patente1= $_POST["patente1"];
    $patente2= $_POST["patente2"];
  }
  else if(isset($_POST["patente1"])==false && isset($_POST["patente2"])!=false)
  {
    $b=1;
    $patente=$_POST["patente2"];
  }
   else if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])==false)
   {
     $b=1;
     $patente=$_POST["patente1"];
   }
  else
    $b=0;
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
       <?php echo $cognome;?>
      </div>
      <div class="form-group">
        <legend>Nome</legend>
        <?php echo $nome;?>
      </div>
      <div class="form-group">
        <legend>Sesso</legend>
       <?php echo $sesso;?>
      
      </div>
      <div class="form-group">
        <legend>
          Nazionalita
        </legend>
        <?php echo $nazionalita?>
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
      <div>
        <label type=hidden name=Cognome value=<?php echo $cognome;?>></label>
        <label type=hidden name=Nome value=  <?php echo $nome;?>></label>
        <label type=hidden name=sesso value= <?php echo $sesso;?>></label>
        <label type=hidden name=nazionalita value=<?php echo $nazionalita;?>></label>
        <label type=hidden name=email value=<?php echo $email;?>></label>
        <label type=hidden name=password value=<?php echo $password;?>></label>
        <label type=hidden name=patente1 value=<?php if($b=2){ echo $patente1 '.' $patente2;}?>></label>
        <label type=hidden name=patente2 value=<?php if($b=1){ echo $patente ?>></label>
      </div>
      <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Registra</button>
    </form>

  </div>
</body>

</html>