 <?php
  include 'conn.inc.php'; 
    $nome=$_REQUEST["nome"];
    $cognome=$_REQUEST["cognome"];
    $nascita=$_REQUEST["nascita"];
    $nazionalita=$_REQUEST["nazionalita"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["user"];
    $password=$_REQUEST["password"];
    $telefono=$_REQUEST["telefono"];
    $sesso=$_REQUEST['sesso'];
  
 
  ?>
<html>
  <?php
  try{
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $query=$dbh->prepare("INSERT INTO Passeggero(cognome,nome,email,username,password,telefono,dataNascita,sesso,nazionalita) VALUES(:cognome,:nome,:email,:username,MD5(:password),:telefono,:dataNascita,:sesso,:nazionalita)");
      $query->bindValue(":cognome",$cognome);
      $query->bindValue(":nome",$nome);
      $query->bindValue(":email",$email);
      $query->bindValue(":username",$username);
      $query->bindValue(":password",$password);
      $query->bindValue(":telefono",$telefono);
      $query->bindValue(":dataNascita",$nascita);
      $query->bindValue(":sesso",$sesso); 
      $query->bindValue(":nazionalita",$nazionalita);
  
      if(!$query->execute())
        echo "impossibile registrarsi";
      else
        echo "Grazie per la tua registrazione, utente passeggero!";
  } 
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  ?>  
</html>