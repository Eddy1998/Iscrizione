 <?php
  include 'conn.inc.php';
      $cognome=$_REQUEST["cognome"];
      $nome=$_REQUEST["nome"];
      $email=$_REQUEST["email"];
      $username=$_REQUEST["user"];
      $password=$_REQUEST["password"];
      $telefono=$_REQUEST["telefono"];
      $nascita=$_REQUEST["nascita"];
      $sesso=$_REQUEST["sesso"];
      $nazionalita=$_REQUEST["nazionalita"];
      $numeropatente=$_REQUEST["patente"];
      $scadenzapatente=$_REQUEST["scadenzaPatente"];
  ?>
<html>
  <?php
  try{
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query=$dbh->prepare("INSERT INTO Autista(cognome,nome,email,username,password,telefono,dataNascita,sesso,nazionalita,numeroPatente,scadenzaPatente) VALUES(:cognome,:nome,:email,:username,MD5(:password),:telefono,:dataNascita,:sesso,:nazionalita,:numeroPatente,:scadenzaPatente)");
      $query->bindValue(":cognome",$cognome);
      $query->bindValue(":nome",$nome);
      $query->bindValue(":email",$email);
      $query->bindValue(":username",$username);
      $query->bindValue(":password",$password);
      $query->bindValue(":telefono",$telefono);
      $query->bindValue(":dataNascita",$nascita);
      $query->bindValue(":sesso",$sesso); 
      $query->bindValue(":nazionalita",$nazionalita);
      $query->bindValue(":numeroPatente",$numeropatente);
      $query->bindValue(":scadenzaPatente",$scadenzapatente);  
      if(!$query->execute())
        echo "impossibile registrarsi";
      else{
        echo "Registrato";
         header("Location: dashboard.php");//indirizzamento altra pagina
        
      }
  } 
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  ?>  
</html>