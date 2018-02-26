 <?php
  include 'conn.inc.php';
    $Cognome=$_POST["Cognome"];
    $Nome=$_POST['Nome']; 
    $sesso=$_POST['sesso']; 
    $nazionalita=$_POST['nazionalita'];
    $email=$_POST['email']; 
    $password=$_POST['password'];
    $patenteA=$_POST["patenteA"];
    $patenteB=$_POST["patenteB"];
  ?>
<html>
  <?php
  try{
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query=$dbh->prepare("INSERT INTO Utenti(cognome,nome,sesso,nazionalita,patente1,patente2,email,password) VALUES(:cognome,:nome,:sesso,:nazionalita,:patente1,:patente2,:email,MD5(:password)");
      $query->bindValue(":cognome",$Cognome);
      $query->bindValue(":nome",$Nome); 
      $query->bindValue(":sesso",$sesso); 
      $query->bindValue(":nazionalita",$nazionalita);
      $query->bindValue(":patente1",$patenteA);
      $query->bindValue(":patente2",$patenteB);  
      $query->bindValue(":email",$email); 
      $query->bindValue(":password",$password); 
  
      if(!$query->execute())
        echo "impossibile registrarsi";
      else
        echo "Registrazione OKI";
  } 
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  ?>  
</html>