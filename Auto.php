<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
<?php
session_start();
if(isset($_SESSION['userid']))
{?> 
  <h3>
      Inserimento di un macchina
   </h3>
   <!--targa, marca,modello, cilindrata,potenza -->
    <div>
          <form method="POST" action="verificaCar.php">

              <div class="form-group">
                  <legend>Targa Auto</legend>
                  <input type="text" class="form-control" placeholder="n. targa" name="targa" required>
               </div>
              <div class="form-group">
                  <legend>Marca Auto</legend>
                  <input type="text" class="form-control" placeholder="Marca" name="marca" required>
                </div>
              <div class="form-group">
                  <legend>Modello</legend>
                  <input type="text" class="form-control" placeholder="modello" name="modello" required>
                </div>
              <div class="form-group">
                  <legend>Cilindrata</legend>
                  <input type="text" class="form-control" placeholder="cilindrata" name="cilindrata" required>
                </div>
              <div class="form-group">
                  <legend>Potenza</legend>
                  <input type="text" class="form-control" placeholder="potenza" name="potenza" required>
                </div>
             <button type="reset" class="btn btn-danger" name="btnAnnulla">Annulla</button>
              <button type="submit" class="btn btn-success" name="btnConferma">Conferma</button>
          </form>
      </div>
<?php    
}
else
{
  ?>
    <h3>
      Effettua il login per accedre
      <a href="ASignin.php">Log In</a>
    </h3>
<?php
}
?>

    
  </body>
</html>