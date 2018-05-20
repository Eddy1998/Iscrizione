<!DOCTYPE html>
<?php
include 'conn.inc.php';
session_start();
if(isset($_SESSION['userid'])||isset($_SESSION['passid']))
header('location: index.php');
?>

<html>
<head>
     <link rel='shortcut icon' href='icons/favicon.ico'>
    <!-- To support old sizes -->
    <link rel='apple-touch-icon' sizes='57x57' href='icons/logo57.png'>
    <link rel='apple-touch-icon' sizes='72x72' href='icons/logo72.png'>
    <link rel='apple-touch-icon' sizes='114x114' href='icons/logo114.png'>
    <link rel='apple-touch-icon' sizes='144x144' href='icons/logo144.png'>

    <!-- To support new sizes -->
    <link rel='apple-touch-icon' sizes='60×60' href='icons/logo60.png'>
    <link rel='apple-touch-icon' sizes='76×76' href='icons/logo76.png'>
    <link rel='apple-touch-icon' sizes='120×120' href='icons/logo120.png'>
    <link rel='apple-touch-icon' sizes='152×152' href='icons/logo152.png'>
    <link rel='apple-touch-icon' sizes='180×180' href='icons/logo180.png'>

    <!-- To support Android -->
    <link rel='icon' sizes='192×192' href='icons/logo192.png'>
    <link rel='icon' sizes='128×128' href='icons/logo128.png'>

    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

   
     <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Animate.css -->
    
    <!-- Icomoon Icon Fonts-->
    <link rel='stylesheet' href='css/icomoon/style.css'>
    <!-- Bootstrap  -->
    <link rel='stylesheet' href='css/bootstrap.css'>
    <!-- Superfish -->
    <link rel='stylesheet' href='css/superfish.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>HUB CAR</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.YIWpasswordStrongTester.js"></script>
    <!-- Modernizr JS -->
 	<script type="text/javascript">

		$(document).ready(function(){
		$('#password').YIWpasswordStrongTester();
	});
     function Modulo() {
    // Variabili associate ai campi del modulo
    var nome = document.modulo.nome.value;
    var cognome = document.modulo.cognome.value;
    var user = document.modulo.user.value;
    var password = document.modulo.password.value;
    var conferma = document.modulo.conferma.value;
    var nascita = document.modulo.nascita.value;
    var nazionalita = document.modulo.nazionalita.options[document.modulo.nazionalita.selectedIndex].value;
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
       $('.correct').remove();
      $('#nome').append("<div class='correct' class='row text-center' ><p style='color:red;'>Inserire un nome</p></div>");
        document.modulo.nome.focus();
        return false;
    }
    //Effettua il controllo sul campo COGNOME
    else if ((cognome === "") || (cognome === "undefined")) {
        $('.correct').remove();
      
          $('#cognome').append("<div class='correct' class='row text-center' ><p style='color:red;'>Inserire un cognome</p></div>");
        document.modulo.cognome.focus();
        return false;
    }
   //Effettua il controllo sul campo DATA DI NASCITA
    else if (document.modulo.nascita.value.substring(2,3) != "/" ||
             document.modulo.nascita.value.substring(5,6) != "/" ||
             isNaN(document.modulo.nascita.value.substring(0,2)) ||
             isNaN(document.modulo.nascita.value.substring(3,5)) ||
             isNaN(document.modulo.nascita.value.substring(6,10))) {
         
     $('.correct').remove();
        $('#nascita').append("<div  class='correct' class='row text-center' ><p style='color:red;'>Inserire data in formato gg/mm/aaaa</p></div>");
        document.modulo.nascita.value = "";
        document.modulo.nascita.focus();
        return false;
    }
    else if (document.modulo.nascita.value.substring(0,2) > 31) {
          $('#correct').remove();
         $('#nascita').append("<div class='correct' class='row text-center' ><p style='color:red;'>Impossibile utilizzare un valore superiore a 31 per i giorni</p></div>");
        document.modulo.nascita.select();
        return false;
    }
    else if (document.modulo.nascita.value.substring(3,5) > 12) {
          $('.correct').remove();
      $('#nascita').append("<div class='correct' class='row text-center' ><p style='color:red;'>Impossibile utilizzare un valore superiore a 12 per i mesi</p></div>");
        document.modulo.nascita.value = "";
        document.modulo.nascita.focus();
        return false;
    }
    else if (document.modulo.nascita.value.substring(6,10) < 1900) {
        $('.correct').remove();
       $('#nascita').append("<div class='correct' class='row text-center'><p style='color:red;'>Impossibile utilizzare un valore inferiore a 1900 per l'anno</p></div>");
        document.modulo.nascita.value = "";
        document.modulo.nascita.focus();
        return false;
    }
   //Effettua il controllo sul campo Nazionalita
    else if ((nazionalita === "") || (nazionalita === "undefined")) {
        $('.correct').remove();
      $('#nazionalita').append("<div class='correct' class='row text-center' ><p style='color:red;'>Selezionare una nazionalitNazionali&#224;</p></div>");
        document.modulo.nazionalita.focus();
        return false;
    }
  //effettua il controllo sul campo email
  else if (!email_reg_exp.test(email) || (email === "") || (email == "undefined")) {
          $('.correct').remove();
     $('#email').append("<div class='correct' class='row text-center'><p id='correct' style='color:red;'>Inserire un indirizzo email corretto.</p></div>");
        document.modulo.email.focus();
        return false;
    }
    //Effettua il controllo sul campo username
    else if ((user === "") || (user === "undefined")) {
         $('.correct').remove();
       $('#username').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Inserire un username</p></div>");
        document.modulo.user.focus();
        return false;
    }
    //Effettua il controllo sul campo PASSWORD
    else if ((password === "") || (password === "undefined")) {
        $('.correct').remove();
       $('#senha').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Inserire una password</p></div>");
        document.modulo.password.focus();
        return false;
    }
    //Effettua il controllo sul campo CONFERMA PASSWORD
    else if ((conferma === "") || (conferma === "undefined")) {
        $('.correct').remove();
        $('#confsenha').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Inserire la password di conferma</p></div>");
        document.modulo.conferma.focus();
        return false;
    }
    //Verifica l'uguaglianza tra i campi PASSWORD e CONFERMA PASSWORD
    else if (password != conferma) {
  $('.correct').remove();
       $('#confsenha').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Le password non coincidono</p></div>");
        document.modulo.conferma.focus();
        document.modulo.conferma.value = "";
        document.modulo.conferma.focus();
        return false;
    }
   //Effettua il controllo sul campo TELEFONO
    else if ((isNaN(telefono)) || (telefono === "") || (telefono == "undefined")) {
        $('.correct').remove();
         $('#telefono').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Inserire un numero telefonico</p></div>");
        document.modulo.telefono.value = "";
        document.modulo.telefono.focus();
        return false;
    }
   else if (((telefono.length)<10)||((telefono.length)>10)) {
          $('.correct').remove();
      $('#telefono').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Il telefono deve contenere 10 numeri</p></div>");
        document.modulo.telefono.value = "";
        document.modulo.telefono.focus();
        return false;
    }
  //Controllo sulla scandenza patente
    else if (document.modulo.scadenzaPatente.value.substring(2,3) != "/" ||
             document.modulo.scadenzaPatente.value.substring(5,6) != "/" ||
             isNaN(document.modulo.scadenzaPatente.value.substring(0,2)) ||
             isNaN(document.modulo.scadenzaPatente.value.substring(3,5)) ||
             isNaN(document.modulo.scadenzaPatente.value.substring(6,10))) {
        $('.correct').remove();
          $('#scandenza').append("<div class='correct' class='row text-center'><p id='correct' style='color:red;'>Inserire la Scadenza della Patente in formato gg/mm/aaaa</p></div>");
        document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
    else if (document.modulo.nascita.value.substring(0,2) > 31) {
        $('.correct').remove();
       $('#scadenza').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Impossibile utilizzare un valore superiore a 31 per i giorni</p></div>");
        
        document.modulo.scadenzaPatente.select();
        return false;
    }
    else if (document.modulo.scadenzaPatente.value.substring(3,5) > 12) {
        $('.correct').remove();
         $('#scadenza').append("<div class='correct' class='row text-center'><p id='correct' style='color:red;'>Impossibile utilizzare un valore superiore a 12 per i mesi</p></div>");
        document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
    else if (document.modulo.scadenzaPatente.value.substring(6,10) < 1900) {
        $('.correct').remove();
       $('#scadenza').append("<div class='correct' class='row text-center' ><p id='correct' style='color:red;'>Impossibile utilizzare un valore inferiore a 1900 per l'anno</p></div>");
        document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
     
    //Se la data preimpostata è già passata
    else if(diff<0||diff==0){
        $('.correct').remove();
      $('#scadenza').append("<div class='correct' class='row text-center'><p id='correct' style='color:red;'>Impossibile inserire patente scaduta</p></div>");
       document.modulo.scadenzaPatente.value = "";
        document.modulo.scadenzaPatente.focus();
        return false;
    }
   //INVIA IL MODULO
  else {
        document.modulo.action = "Aesito.php";
        document.modulo.submit();
    }
}	
	</script>
      <style>
		#result
		{
			border: 1px solid green;
			padding: 2px;
			width: auto;
			height: 8px;
		}

		.radius{
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px; 
			border-radius: 6px;
		}
	</style>
  </head>
  <body>
    
    <div id='fh5co-wrapper'>
      <div id='fh5co-page'>
        <div id='fh5co-header'>
          <header id='fh5co-header-section'>
            <div class='container'>
              <div class='nav-header'>
                <a href='#' class='js-fh5co-nav-toggle fh5co-nav-toggle'><i></i></a>
                <h1 id='fh5co-logo'><a href='index.php'>HUB CAR</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id='fh5co-menu-wrap' role='navigation'>
                  <ul class='sf-menu' id='fh5co-primary-menu'>
                    <li class='active'>
                      <a href='index.php'>Home</a>
                    </li>

                  </ul>
                </nav>
              </div>
            </div>
          </header>

        </div>

        <div class='fh5co-hero ' style='height: 450px;'>
          <div class='fh5co-overlay'></div>
          <div class='fh5co-cover text-center' data-stellar-background-ratio='0.5'>
            <div class="desc animate-box fadeInUp animated" style="top: 250px;">
              <h2>Registrazione</h2>
              Autista
              <span>Sei registrato?</span>
              <span><a class='btn btn-primary btn-lg' href='ASignin.php'>Accedi</a></span>
            </div>
          </div>

        </div>

        
        <div>
            
          <form  method='POST' name='modulo'>
            <div id='fh5co-contact' class='animate-box'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                     <div class='form-group' id='nome'>
                      <legend>
                        Nome:
                    </legend>
										  <input autocomplete='given-name' type='text' class='form-control' placeholder='Nome' name='nome'>
									  </div>
                  <div class='form-group' id='cognome'>
                    <legend>
                        Cognome:
                    </legend>
										  <input autocomplete='family-name' type='text' class='form-control' placeholder='Cognome' name='cognome'>
									  </div>
                  <div class='form-group' id='nascita'>
										  <legend>
                        Data di Nascita:
                    </legend>
                    <input type='text' class='form-control' placeholder='gg/mm/aaaa' maxlength="10" name='nascita'>
									 </div>
                  <div class='form-group' id='sesso'>
										  <legend>Sesso:</legend>                      
                            <input  type="radio" name="sesso" value="M"  checked="checked"/> Maschile
                           <input   type="radio" name="sesso" value="F" />   Femminile                 
                    </div>
                  <div class="form-group" id='nazionalita'>
                    <legend>Nazionali&#224;:</legend>
                    <select autocomplete='country-name' class='form-control' name='nazionalita' >
                      <option></option>
                    <?php 
                          $dbh = new PDO($conn,$user,$pass);
                          $stm=$dbh->prepare('SELECT nome_stati FROM stati');
                          $stm->execute();

                          while ($row=$stm->fetch()) {
                              echo "<option value='".$row['nome_stati']."'>" . $row['nome_stati'] ."</option>";
                          }
                        
                        ?>
                      </select>
                  </div>
                  
                  <div class='form-group' id='email'>
                    <legend>
                        Email:
                    </legend>
										  <input autocomplete='email' type='text' class='form-control' placeholder='Email' name='email'>
									  </div>
                  <div class='form-group' id='username'>
                    <legend>
                        Username:
                    </legend>
										  <input  autocomplete="username" type='text' class='form-control' placeholder='Username' name='user'>
									  </div>
                  <div class='form-group' id='senha'>
                    <div class='form-group' style="margin-bottom: 10px;">
                      <legend>
                        Password:
                    </legend>
										  <input autocomplete="new-password" id='password' type='password' class='form-control' placeholder='Password' name='password'>
                    </div>
                    <div class='form-group'>
                        <div id="result" class="radius">
				                  <div id="bar" class="radius"></div>
			                  </div>
                    </div>
									  </div>
                  
                  <div class='form-group' id='confsenha'>
                    <legend>
                        Conferma Password:
                    </legend>
										  <input autocomplete="new-password" type='password' class='form-control' placeholder='Conferma Password' name='conferma'>
									  </div>
                  <div class='form-group' id='telefono'>
                    <legend>
                        Numero di telefono:
                    </legend>
										  <input autocomplete='tel-national' type='number' class='form-control' placeholder='Num. di Telefono' name='telefono'>
									  </div>
                  <div class='form-group' id='patente'>
                    <legend>
                        Patente:
                    </legend>
										  <input type='text' class='form-control' placeholder='Num. della Patente' maxlength="10" name='patente'>
									  </div>
                   <div class='form-group' id='scadenza'>
                     <legend>Scadenza della Patente:</legend>
                     <input type='text' class='form-control' placeholder='gg/mm/aaaa' name='scadenzaPatente'>
									  </div>
                 
                  
                  
                </div>
                <div class='col-md-4'>
                </div>
              </div>
              
            
              
               <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group text-center heading-section'>
                    <div class='form-group'>
                    <input type='button' value='Registra' onClick="Modulo()" class='btn btn-primary'>
                  </div>
                  <div class='form-group'>
                    <input type='reset' value='Annulla' class='btn btn-danger'>
                  </div>
                    <div class='form-group'>
                    <input type='button' value='Home' onclick="window.location='index.php';" class='btn btn-default'>
                  </div>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
            </div>
            </div>
          </form>
          
        </div>


       

        <footer>
          <div id='footer'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-6 col-md-offset-3 text-center'>
                  <p class='fh5co-social-icons'>
                    <a href='#'><i class='icon-twitter2'></i></a>
                    <a href='#'><i class='icon-facebook2'></i></a>
                    <a href='#'><i class='icon-instagram'></i></a>
                    <a href='#'><i class='icon-youtube'></i></a>
                  </p>
                  <p>Copyright &#x24B8; 2018 All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </footer>

      </div>
    </div>
    
    <!-- jQuery Easing -->
    <script src='js/jquery.easing.1.3.js'></script>
    <!-- Bootstrap -->
    <script src='js/bootstrap.min.js'></script>
    <!-- Waypoints -->
    <script src='js/jquery.waypoints.min.js'></script>
    <!-- Stellar -->
    <script src='js/jquery.stellar.min.js'></script>
    <!-- Superfish -->
    <script src='js/hoverIntent.js'></script>
    <script src='js/superfish.js'></script>

    <!-- Main JS -->
    <script src='js/main.js'></script>

  </body>

  </html>