 <?php
  include 'conn.inc.php';
  ?>
<html>
  <?php
  try{
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query=$dbh->prepare("INSERT INTO Utenti(cognome,nome,sesso,nazionalita,patente1,patente2,email,password) VALUES(:cognome,:nome,:sesso,:nazionalita,:patente1,:patente2,:email,:password)");
  $query->bind(":cognome",$_POST['Cognome']);
  $query->bind(":nome",$_POST['Nome']); 
  $query->bind(":sesso",$_POST['sesso']); 
  $query->bind(":nazionalita",$_POST['nazionalita']);
  $vero=true;
  $falso=false;
    if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])!=false)
        {
           $query->bind(":patente1",$vero); 
           $query->bind(":patente2",$vero); 
        }
        else if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])==false)
        {
          $query->bind(":patente1",$vero); 
          $query->bind(":patente2",$falso); 
        }
         else if(isset($_POST["patente1"])==false && isset($_POST["patente2"])!=false)
        {
          $query->bind(":patente1",$falso); 
           $query->bind(":patente2",$vero);  
         }
        else
        {
          $query->bind(":patente1",$falso); 
           $query->bind(":patente2",$falso); 
        }
  $query->bind(":email",$_POST['email']); 
  $query->bind(":password",$_POST['email']); 
  
  if(!$query->execute())
    echo "impossibile registrarsi";
  else
    echo "Registrazione OKI";
     } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  
  ?>
  
  
</html>