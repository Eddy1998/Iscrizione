<html>
  <?php
  $cognome= $_POST["Cognome"];
  $nome=$_POST["Nome"];
  $sesso=$_POST["sesso"];
  $nazionalita=$_POST["nazionalita"];
  $email=$_POST["email"];
  $password=$_POST["password"];
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
        if(isset($_POST["patente1"])==true && isset($_POST["patente2"])==true)
        {
          echo $_POST["patente1"].", ". $_POST["patente2"];
          $patenteA=true;
          $patenteB=true;
        }
        else if(isset($_POST["patente1"])==true && isset($_POST["patente2"])==false)
        {
          echo $_POST["patente1"];
          $patenteA=true;
          $patenteB=false;
        }
         else if(isset($_POST["patente1"])==false && isset($_POST["patente2"])==true)
        {
          echo $_POST["patente2"];
          $patenteA=false;
          $patenteB=true;
        }
        else
        {
          echo "nessuna patente registrata";
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
        <label type="text" name="Cognome" value=<?php echo $cognome;?>></label>
        <label type="text" name="Nome" value=<?php echo $nome;?>></label>
        <label type="text" name="sesso" value= <?php echo $sesso;?>></label>
        <label type="text" name="nazionalita" value=<?php echo $nazionalita;?>></label>
        <label type="text" name="email" value=<?php echo $email;?>></label>
        <label type="text" name="password" value=<?php echo $password;?>></label>
        <label type="text" name="patenteA" value=<?php  echo $patenteA;?>></label>
        <label type="text" name="patenteB" value=<?php  echo $patenteB; ?>></label>
      </div>
      <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Registra</button>
    </form>

  </div>
</body>
</html>