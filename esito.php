 <?php
  include 'conn.inc.php';
    $Cognome=$_POST['Cognome'];
    $Nome=$_POST['Nome']; 
    $sesso=$_POST['sesso']; 
    $nazionalita=$_POST['nazionalita'];
    $email=$_POST['email']; 
    $password=$_POST['password']; 
    $vero=true;
    $falso=false;
  ?>
<html>
  <?php
  try{
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query=$dbh->prepare("INSERT INTO Utenti(cognome,nome,sesso,nazionalita,patente1,patente2,email,password) VALUES(:cognome,:nome,:sesso,:nazionalita,:patente1,:patente2,:email,:password)");
    $query->bindValue(":cognome",$Cognome);
    $query->bindValue(":nome",$Nome); 
    $query->bindValue(":sesso",$sesso); 
    $query->bindValue(":nazionalita",$nazionalita);
   
    if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])!=false)
        {
           $query->bindValue(":patente1",$vero); 
           $query->bindValue(":patente2",$vero); 
        }
        else if(isset($_POST["patente1"])!=false && isset($_POST["patente2"])==false)
        {
          $query->bindValue(":patente1",$vero); 
          $query->bindValue(":patente2",$falso); 
        }
         else if(isset($_POST["patente1"])==false && isset($_POST["patente2"])!=false)
        {
          $query->bindValue(":patente1",$falso); 
           $query->bindValue(":patente2",$vero);  
         }
        else
        {
          $query->bindValue(":patente1",$falso); 
           $query->bindValue(":patente2",$falso); 
        }
  $query->bindValue(":email",email); 
  $query->bindValue(":password",$password); 
  
  if(!$query->execute())
    echo "impossibile registrarsi";
  else
    echo "Registrazione OKI";
     } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  
  ?>
  
  
</html>