<html>
  <?php
  $cognome=$_REQUEST["cognome"];
  $nome=$_REQUEST["nome"];
  $email=$_REQUEST["email"];
  $username=$_REQUEST["user"];
  $password=$_REQUEST["password"];
  $telefono=$_REQUEST["telefono"];
  $nascita=$_REQUEST["nascita"];
  $sesso=$_REQUEST["sesso"];
  $nazionalita=$_REQUEST["nazionalita"];
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
       <?php echo $cognome;?>
      </div>
      <div class="form-group">
        <legend>Nome</legend>
        <?php echo $nome;?>
      </div>
      <div class="form-group">
        <legend class="control-label">Email</legend>
       <?php echo  $email;?>
      </div>
      <div class="form-group">
        <legend class="control-label">Username</legend>
         <?php echo  $username;?>
      </div>
       <div class="form-group">
        <legend class="control-label">Numero di Telefono</legend>
         <?php echo   $telefono;?>
      </div>
      <div class="form-group">
        <legend class="control-label">Data di Nascita</legend>
        <?php echo $nascita;?>
      </div>
      <div class="form-group">
        <legend>Sesso</legend>
       <?php echo $sesso;?>
      </div>
      <div class="form-group">
        <legend>Nazionalita</legend>
        <?php echo $nazionalita;?>
      </div>
    </form>
    <form action="Uesito.php" method="POST">
      <div>
         <input type="hidden" name="cognome" value="<?php echo $cognome;?>">
        <input type="hidden" name="nome" value="<?php echo $nome;?>">
         <input type="hidden" name="email" value="<?php echo $email;?>">
         <input type="hidden" name="user" value="<?php echo $username;?>">
        <input type="hidden" name="password" value="<?php echo $password;?>">
        <input type="hidden" name="telefono" value="<?php echo $telefono;?>">
        <input type="hidden" name="nascita" value="<?php echo $nascita;?>">
        <input type="hidden" name="sesso" value=" <?php echo $sesso;?>">
        <input type="hidden" name="nazionalita" value="<?php echo $nazionalita;?>"> 
        
      </div>
     <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Registra</button>
    </form>

  </div>
</body>
</html>