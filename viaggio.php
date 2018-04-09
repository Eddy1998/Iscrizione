<!--form per l'inserimento dei dati del nuovo viaggio-->
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
      Inserimento di un nuovo viaggio
   </h3>
   <!--idViaggio(AI),data,oraPartenza,oraArrivo,importo,durata,bagagli,animali -->
    <div>
          <form method="POST" action="Rviaggio.php">
              
              <div class="form-group">
                <legend class="control-label">Data viaggio</legend>
                <div>
                  <input type="date" name="data" class="form-control" placeholder="data del viaggio" required>
                </div>
              </div>
              <div class="form-group">
                  <legend>ora Partenza</legend>
                  <input type="time" class="form-control" placeholder="partenza" name="oraPartenza" required>
               </div>
              <div class="form-group">
                  <legend>ora Arrivo</legend>
                  <input type="time" class="form-control" placeholder="Marca" name="oraArrivo" required>
                </div>
              <div class="form-group">
                  <legend>Importo</legend>
                  <input type="number" class="form-control" placeholder="Importo" name="importo" required>
                </div>
              <div class="form-group">
                  <legend>Durata</legend>
                  <input type="number" class="form-control" placeholder="durata" name="durata" required>
                </div>
              <div class="form-group">
                  <legend>
                    Bagagli
                  </legend>
                  <label class="checkbox-inline"> 
                      <input type="checkbox" name="bagagli" value="1"> Si  
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" name="bagagli" value="0"> No 
                  </label>
              </div>
             <div class="form-group">
                  <legend>
                    Animali
                  </legend>
                  <label class="checkbox-inline"> 
                      <input type="checkbox" name="animali" value="1"> Si  
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" name="animali" value="0"> No 
                  </label>
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
      Effettua il login per effettuare quest'operazione
      <a href="ASignin.php">Log In</a>
    </h3>
<?php
}
?>
  </body>
</html>