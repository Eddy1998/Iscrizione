<?php
session_start();
if(isset($_SESSION['userid']));
header('dashboard.php');
?>
<!DOCTYPE html>
<html>
  <?php
  include 'conn.inc.php';
  try{
    if(isset($_POST['btnConferma'])){
     $dbh = new PDO($conn,$user,$pass);
     $stm=$dbh->prepare("SELECT * FROM Registro.Utenti WHERE email=:u AND password=MD5(:p);");
     $stm->bindValue(":u",$_POST['email']);
     $stm->bindValue(":p",$_POST['password']);
     $stm->execute();
    if($stm->rowCount()>0)
    {
      $row=$stm->fetch();
      $_SESSION['userid']=$row['email'];
      echo "<h2>Connesso come".$row['nome']." ".$row['cognome']."</h2";
      echo "<a href=\"dashboard.php".">Dashboard</a>";
    }
    else
    {
      echo "401 Dati Inseriti non corretti, riprova di nuovo";
    }
    }
  }
   catch (PDOException $e)
   {
    echo 'Connection failed: ' . $e->getMessage();
   }
  ?>
  <h2>LOGIN</h2>
  <form class="form-horizontal" action="" method="POST">
   <div class="form-group">
        <legend class="control-label">Inserisci Email</legend>
        <div>
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
   </div>
   <div class="form-group">
        <legend class="control-label">Inserisci Password</legend>
        <div>
          <input type="password" name=password class="form-control" placeholder="Password" required>
        </div>
    </div>
  <button type="submit" class="btn btn-success" name="btnConferma">Sign In</button>
  </form>
</html>
  