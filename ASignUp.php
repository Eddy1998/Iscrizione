<?php
  include 'conn.inc.php';
$dbh = new PDO($conn,$user,$pass);
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
  
<body>
  <script type='text/javascript'>
            $('#isSelected').click(function() {
              $("#txt").toggle(this.checked);
          });
   </script>
  <a href="Signin.php">sing - in</a>
   <a href="SignOut.php">sing -out</a>
  <h1 align="center"> Iscrizione Autista</h1>
   <div class="row">
  <div class="col-sm-4">
    
    <!--
cognome, nome, email, username, password, telefono, dataNascita, sesso, nazionalita, numeroPatente, scadenzaPatente,
-->
  </div>
  <div class="col-sm-4" class="panel panel-default" position="center" >
    <form class="form-horizontal" action="Ariepilogo.php" method="POST">
      <div class="form-group">
        <legend>Cognome</legend>
        <input type="text" class="form-control" placeholder="Cognome" name="cognome" required>
      </div>
      <div class="form-group">
        <legend>Nome</legend>
        <input type="text" class="form-control" placeholder="Nome" name="nome" required>
      </div>
       <div class="form-group">
        <legend class="control-label">Email</legend>
        <div>
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Username</legend>
        <div>
          <input type="text" class="form-control" placeholder="username" name="user" required>
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Password</legend>
        <div>
          <input type="password" name="password" class="form-control" placeholder="password" required>
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Numero di Telefono</legend>
        <div>
          <input type="number" name="telefono" class="form-control" placeholder="Num. Telefono" required>
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Data di Nascita</legend>
        <div>
          <input type="date" name="nascita" class="form-control" placeholder="Data di Nascita" required>
        </div>
      </div>
      <div class="form-group">
        <legend>Sesso</legend>
        <label class="checkbox-inline">  
          <input type="radio" name="sesso" value="M" /> Maschile
        </label>
        <label class="checkbox-inline">
         <input type="radio" name="sesso" value="F" />   Femminile
        </label>
      </div>
      <div class="form-group">
        <legend>
          Nazionalita
        </legend>
           <?php 
            echo '<select name="nazionalita" class="form-group">';
            $stm=$dbh->prepare("SELECT nome_stati FROM stati");
            $stm->execute();

            while ($row=$stm->fetch()) {
                echo "<option value='".$row['nome_stati']."'>" . $row['nome_stati'] ."</option>";
            }
            echo "</select>";
          ?>
      </div>
      <div class="form-group">
       
   
        <div>
        <legend> 
          Numero della Patente:
        </legend>
        <label class="checkbox-inline"> 
          <input type="text"   maxlength="10" name="patente"></input>  
        </label>
        </div>
      </div>
    <div class="form-group">
        <legend class="control-label">Scadenza Patente</legend>
        <div>
          <input type="date" name="scadenzaPatente" class="form-control" placeholder="Scadenza Patente" required>
        </div>
      </div>
     <button type="reset" class="btn btn-danger" name="btnAnnulla">Annulla</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Conferma</button>
    </form>

  </div>
     </div>
       <div class="col-sm-4">
  </div>
     <div class="md-col-12">
       <h2 position="center">
         <buttom onclick="location='ASignin.php'" class="btn btn-info">Hai gia un Account?</buttom>
       </h2>
     </div>
  
</body>

</html>