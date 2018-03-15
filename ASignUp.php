<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <a href="Signin.php">sing - in</a>
   <a href="SignOut.php">sing -out</a>
  <h1 align="center"> Iscrizione Autista</h1>
   <div class="row">
  <div class="col-sm-4">
    
    
  </div>
  <div class="col-sm-4" class="panel panel-default" position="center" >
    <form class="form-horizontal" action="riepilogo.php" method="POST">
      <div class="form-group">
        <legend>Cognome</legend>
        <input type="text" class="form-control" placeholder="Cognome" name="Cognome" required>
      </div>
      <div class="form-group">
        <legend>Nome</legend>
        <input type="text" class="form-control" placeholder="Nome" name="Nome" required>
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
        <select class="form-control" name="nazionalita">     
          <option value="Italiana">Italiana</option>
          <option value="Francese">Francese</option>
          <option value="Tedesca">Tedesca</option>
          <option value="Inglese">Inglese</option>
          <option value="Americana">Americana</option>
          <option value="Altro">Altro</option>
      </select>
<!--       <select name="nazionalita">
           <?php 
          //$sql = mysqli_query($connection, "SELECT nome_stati FROM stati ");
          //while ($row = $sql->fetch_assoc()){
          //echo "<option value=\"owner1\">" . $row['nome_stati'] . "</option>";
         // }
          ?> -->
        </select> -->
      </div>
      <div class="form-group">
        <legend>
          Patente:
        </legend>
        <label class="checkbox-inline"> 
            <input type="checkbox" name="patente1" value="Cat. A"> cat. A  
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox2" name="patente2" value="Cat. B"> cat. B 
        </label>
      </div>
      <div class="form-group">
        <legend class="control-label">Email</legend>
        <div>
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
      </div>
      <div class="form-group">
        <legend class="control-label">Password</legend>
        <div>
          <input type="password" name=password class="form-control" placeholder="Password" required>
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