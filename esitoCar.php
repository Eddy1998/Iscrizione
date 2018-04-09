<?php
    include 'conn.inc.php'; 
   
    session_start();
    $targa=$_REQUEST["targa"];
    $marca=$_REQUEST["marca"];
    $modello=$_REQUEST["modello"];
    $cilindrata=$_REQUEST["cilindrata"];
    $potenza=$_REQUEST["potenza"];
    $id=$_SESSION['userid'];
?> 
<html>
  <?php
  try{
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $query=$dbh->prepare("INSERT INTO Auto(targa,marca,modello,cilindrata,potenza,idAutista) VALUES(:targa,:marca,:modello,:cilindrata,:potenza,:idAutista)");
      $query->bindValue(":targa",$targa);
      $query->bindValue(":marca",$marca);
      $query->bindValue(":modello",$modello);
      $query->bindValue(":cilindrata",$cilindrata);
      $query->bindValue(":potenza",$potenza);
      $query->bindValue(":idAutista",$id);
      
      if(!$query->execute())
        echo "Impossibile aggiungere Auto";
      else
        echo "Auto aggiunta alla tua lista";
  } 
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  ?>  
</html>