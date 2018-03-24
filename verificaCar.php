<!DOCTYPE html>
<html>
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
<?php
    session_start();
    $targa=$_REQUEST["targa"];
    $marca=$_REQUEST["marca"];
    $modello=$_REQUEST["modello"];
    $cilindrata=$_REQUEST["cilindrata"];
    $potenza=$_REQUEST["potenza"];
    ?> 
    <h1>
      Verifica i tuoi dati
    </h1>
    <!--targa, marca,modello, cilindrata,potenza -->
    <div>
      <form>
        
                <div class="form-group">
                  <legend>Targa Auto</legend>
                  <?php echo $targa;?>
               </div>
              <div class="form-group">
                  <legend>Marca Auto</legend>
                  <?php echo $marca;?>
              </div>
              <div class="form-group">
                  <legend>Modello</legend>
                  <?php echo $modello;?>
                </div>
              <div class="form-group">
                  <legend>Cilindrata</legend>
                  <?php echo $cilindrata;?>
                </div>
              <div class="form-group">
                  <legend>Potenza</legend>
                  <?php echo $potenza;?>
                </div>
      </form>
    </div>
      <form action="Aesito.php" method="POST">
      <div>
            <input type="hidden" name="targa" value="<?php echo $targa;?>">
            <input type="hidden" name="marca" value="<?php echo $marca;?>">
             <input type="hidden" name="modello" value="<?php echo $modello;?>">
             <input type="hidden" name="cilindrata" value="<?php echo $cilindrata;?>">
            <input type="hidden" name="potenza" value="<?php echo $potenza;?>">
        </div>
      <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Registra</button>
    </form>
  </body>
</html>