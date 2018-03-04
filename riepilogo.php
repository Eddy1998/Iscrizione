<html>
  <?php
  $Cognome=$_REQUEST["Cognome"];
  $nome=$_REQUEST["Nome"];
  $sesso=$_REQUEST["sesso"];
  $nazionalita=$_REQUEST["nazionalita"];
  $email=$_REQUEST["email"];
  $password=$_REQUEST["password"];
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
    <form class="form-horizontal" >
      <div class="form-group">
        <legend>Cognome</legend>
       <?php echo $Cognome;?>
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
    </form>
    <form action="esito.php" method="POST">
      <div>
        <input type="hidden" name="Cognome" value="<?php echo $Cognome;?>">
        <input type="hidden" name="Nome" value="<?php echo $nome;?>">
        <input type="hidden" name="sesso" value=" <?php echo $sesso;?>">
        <input type="hidden" name="nazionalita" value="<?php echo $nazionalita;?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="password" value="<?php echo $password;?>">
        <input type="hidden" name="patenteA" value="<?php  echo $patenteA;?>">
        <input type="hidden" name="patenteB" value="<?php  echo $patenteB; ?>">
        
      </div>
     <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Registra</button>
    </form>

  </div>
</body>
</html>