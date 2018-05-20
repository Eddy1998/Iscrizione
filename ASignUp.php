<?php
  include 'conn.inc.php';
$dbh = new PDO($conn,$user,$pass);
?>
<html>
<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
</head>
  
<body>
  <script>


function Modulo() {
    // Variabili associate ai campi del modulo
    var nome = document.modulo.nome.value;
    var cognome = document.modulo.cognome.value;
    var nickname = document.modulo.user.value;
    var password = document.modulo.password.value;
    var conferma = document.modulo.conferma.value;
    var nascita = document.modulo.nascita.value;
    var citta = document.modulo.nazionalita.options[document.modulo.nazionalita.selectedIndex].value;
    var telefono = document.modulo.telefono.value;
    var email = document.modulo.email.value;
    var scadenzaPatente=document.modulo.scadenzaPatente.value;
      var arr = scadenzaPatente.split("/");
      var gg =arr[0];
      var mm=arr[1];
      var aaaa=arr[2];
     var preimpostata = new Date(aaaa, mm-1, gg); 
    var oggi = new Date();
     
    var diff = preimpostata.getTime()  - oggi.getTime();
     
    
 
    // Espressione regolare dell'email
    var email_reg_exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/;
      
    //Effettua il controllo sul campo NOME
    if ((nome === "") || (nome === "undefined")) {
        alert("Il campo Nome è obbligatorio.");
        document.modulo.nome.focus();
        return false;
    }
    //Effettua il controllo sul campo COGNOME
    else if ((cognome === "") || (cognome === "undefined")) {
        alert("Il campo Cognome è obbligatorio.");
        document.modulo.cognome.focus();
        return false;
    }
    //Effettua il controllo sul campo NICKNAME
    else if ((nickname === "") || (nickname === "undefined")) {
        alert("Il campo Nickname è obbligatorio.");
        document.modulo.nickname.focus();
        return false;
    }
    //Effettua il controllo sul campo PASSWORD
    else if ((password === "") || (password === "undefined")) {
        alert("Il campo Password è obbligatorio.");
        document.modulo.password.focus();
        return false;
    }
    //Effettua il controllo sul campo CONFERMA PASSWORD
    else if ((conferma === "") || (conferma === "undefined")) {
        alert("Il campo Conferma password è obbligatorio.");
        document.modulo.conferma.focus();
        return false;
    }
    //Verifica l'uguaglianza tra i campi PASSWORD e CONFERMA PASSWORD
    else if (password != conferma) {
        alert("La password confermata è diversa da quella scelta, controllare.");
        document.modulo.conferma.value = "";
        document.modulo.conferma.focus();
        return false;
    }
    //Effettua il controllo sul campo DATA DI NASCITA
    else if (document.modulo.nascita.value.substring(2,3) != "/" ||
             document.modulo.nascita.value.substring(5,6) != "/" ||
             isNaN(document.modulo.nascita.value.substring(0,2)) ||
             isNaN(document.modulo.nascita.value.substring(3,5)) ||
             isNaN(document.modulo.nascita.value.substring(6,10))) {
         
        alert("Inserire nascita in formato gg/mm/aaaa");
        document.modulo.nascita.value = "";
        document.modulo.nascita.focus();
        return false;
    }
    else if (document.modulo.nascita.value.substring(0,2) > 31) {
        alert("Impossibile utilizzare un valore superiore a 31 per i giorni");
        document.modulo.nascita.select();
        return false;
    }
    else if (document.modulo.nascita.value.substring(3,5) > 12) {
        alert("Impossibile utilizzare un valore superiore a 12 per i mesi");
        document.modulo.nascita.value = "";
        document.modulo.nascita.focus();
        return false;
    }
    else if (document.modulo.nascita.value.substring(6,10) < 1900) {
        alert("Impossibile utilizzare un valore inferiore a 1900 per l'anno");
        document.modulo.nascita.value = "";
        document.modulo.nascita.focus();
        return false;
    }
  //Controllo sulla scandenza patente

    else if (document.modulo.scadenzaPatente.value.substring(2,3) != "/" ||
             document.modulo.scadenzaPatente.value.substring(5,6) != "/" ||
             isNaN(document.modulo.scadenzaPatente.value.substring(0,2)) ||
             isNaN(document.modulo.scadenzaPatente.value.substring(3,5)) ||
             isNaN(document.modulo.scadenzaPatente.value.substring(6,10))) {
         
        alert("Inserire nascita in formato gg/mm/aaaa");
        document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
    else if (document.modulo.nascita.value.substring(0,2) > 31) {
        alert("Impossibile utilizzare un valore superiore a 31 per i giorni");
        document.modulo.scadenzaPatente.select();
        return false;
    }
    else if (document.modulo.scadenzaPatente.value.substring(3,5) > 12) {
        alert("Impossibile utilizzare un valore superiore a 12 per i mesi");
        document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
    else if (document.modulo.scadenzaPatente.value.substring(6,10) < 1900) {
        alert("Impossibile utilizzare un valore inferiore a 1900 per l'anno");
        document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
     
    //Se la data preimpostata è già passata
    else if(diff<0||diff==0){
        alert("Impossibile inserire patente scaduta");
       document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
    
    //Effettua il controllo sul campo CITTA'
    else if ((citta === "") || (citta === "undefined")) {
        alert("Il campo Città è obbligatorio.");
        document.modulo.citta.focus();
        return false;
    }
    
    //Effettua il controllo sul campo TELEFONO
    else if ((isNaN(telefono)) || (telefono === "") || (telefono == "undefined")) {
        alert("Il campo Telefono è numerico ed obbligatorio.");
        document.modulo.telefono.value = "";
        document.modulo.telefono.focus();
        return false;
    }
    else if (!email_reg_exp.test(email) || (email === "") || (email == "undefined")) {
        alert("Inserire un indirizzo email corretto.");
        document.modulo.email.select();
        return false;
    }
    
   
    //INVIA IL MODULO
  else {
        document.modulo.action = "Aesito.php";
        document.modulo.submit();
    }
}

</script>
  <a href="ASignin.php">sing - in</a>
   <a href="ASignOut.php">sing -out</a>
  <h1 align="center"> Iscrizione Autista</h1>
   <div class="row">
  <div class="col-sm-4">
    
    <!--
cognome, nome, email, username, password, telefono, dataNascita, sesso, nazionalita, numeroPatente, scadenzaPatente,
-->
  </div>
  <div class="col-sm-4" class="panel panel-default" position="center" >
    <form class="form-horizontal" method="POST" name='modulo'>
      <div class="form-group">
        <legend>Cognome</legend>
      <input type="text" class="form-control" placeholder="Cognome" name="cognome" >
      </div>
      <div class="form-group">
        <legend>Nome</legend>
        <input type="text" class="form-control" placeholder="Nome" name="nome" >
      </div>
       <div class="form-group">
        <legend class="control-label">Email</legend>
        <div>
          <input type="email" class="form-control" placeholder="Email" name="email" >
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Username</legend>
        <div>
          <input type="text" class="form-control" placeholder="username" name="user" >
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Password</legend>
        <div>
          <input type="password" name="password" class="form-control" placeholder="password" >
        </div>
      </div>
      <div class="form-group">
        <legend class="control-label">Conferma Password</legend>
        <div>
          <input type="password" name="conferma" class="form-control" placeholder="conferma password" >
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Numero di Telefono</legend>
        <div>
          <input type="number" name="telefono" class="form-control" placeholder="Num. Telefono" >
        </div>
      </div>
       <div class="form-group">
        <legend class="control-label">Data di Nascita</legend>
        <div>
          <input type="text" name="nascita" class="form-control" placeholder="gg/mm/aaaa" >
        </div>
      </div>
      <div class="form-group">
        <legend>Sesso</legend>
        <label class="checkbox-inline">  
          <input type="radio" name="sesso" value="M" /> Maschile
        </label>
        <label class="checkbox-inline">
         <input type="radio" name="sesso" value="F" />   Femminile
        </label>
      </div>
      <div class="form-group">
        <legend>
          Nazionalita
        </legend>
           <?php 
            echo '<select name="nazionalita" class="form-group">';
            $stm=$dbh->prepare("SELECT nome_stati FROM stati");
            $stm->execute();

            while ($row=$stm->fetch()) {
                echo "<option value='".$row['nome_stati']."'>" . $row['nome_stati'] ."</option>";
            }
            echo "</select>";
          ?>
      </div>
      <div class="form-group">

        <div>
        <legend> 
          Numero della Patente:
        </legend>
        <label class="checkbox-inline"> 
          <input type="text"   maxlength="10" name="patente"></input>  
        </label>
        </div>
      </div>
    <div class="form-group">
        <legend class="control-label">Scadenza Patente</legend>
        <div>
          <input type="text" name="scadenzaPatente" class="form-control" placeholder="gg/mm/aaaa">
        </div>
      </div>
     <button type="reset" class="btn btn-danger" name="btnAnnulla">Annulla</button>
      <button type="button" onClick="Modulo()" class="btn btn-success" name="btnConferma" >Conferma</button>
    </form>

  </div>
     </div>
       <div class="col-sm-4">
  </div>
     <div class="md-col-12">
       <h2 position="center">
         <buttom onclick="location='ASignin.php'" class="btn btn-info">Hai gia un Account?</buttom>
       </h2>
     </div>
  
</body>

</html>