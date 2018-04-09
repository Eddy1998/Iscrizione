<!--riepilogo dei dati del viaggio, inseriti dall'autista-->
<!--idViaggio(AI),data,oraPartenza,oraArrivo,importo,durata,bagagli,animali -->
<html>
<?php
    session_start();
    $data=$_REQUEST["data"];
    $oraPartenza=$_REQUEST["oraPartenza"];
    $oraArrivo=$_REQUEST["oraArrivo"];
    $importo=$_REQUEST["importo"];
    $durata=$_REQUEST["durata"];
    $bagagli=$_REQUEST["bagagli"];
    $animali=$_REQUEST["animali"];
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
        <legend>Data</legend>
       <?php echo $data;?>
      </div>
      <div class="form-group">
        <legend>Ora Partenza</legend>
        <?php echo $oraPartenza;?>
      </div>
     <div class="form-group">
        <legend>Ora Arrivo</legend>
        <?php echo $oraArrivo;?>
      </div>
      <div class="form-group">
        <legend class="control-label">Importo</legend>
         <?php echo  $importo;?> 
      </div>
       <div class="form-group">
        <legend class="control-label">Durata</legend>
         <?php echo   $durata;?>
      </div>
      <div class="form-group">
        <legend class="control-label">Bagagli</legend>
        <?php echo $bagagli;?>
      </div>
      <div class="form-group">
        <legend>animali</legend>
       <?php echo $animali;?>
      </div>
    </form>
    <form action="Uesito.php" method="POST">
      <div>
         <input type="hidden" name="data" value="<?php echo $data;?>">
        <input type="hidden" name="oraPartenza" value="<?php echo $oraPartenza;?>">
         <input type="hidden" name="oraArrivo" value="<?php echo $oraArrivo;?>">
         <input type="hidden" name="importo" value="<?php echo $importo;?>">
        <input type="hidden" name="durata" value="<?php echo $durata;?>">
        <input type="hidden" name="bagagli" value="<?php echo $bagagli;?>">
        <input type="hidden" name="animali" value="<?php echo $animali;?>">
        
      </div>
     <button type="button"  class="btn btn-danger" onclick="goBack()">Correggi</button>
      <button type="submit" class="btn btn-success" name="btnConferma">Inserisci</button>
    </form>

  </div>
</body>
</html>