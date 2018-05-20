 <?php
  include 'conn.inc.php';
session_start();
  if(isset($_SESSION['userid'])||isset($_SESSION['passid'])) header('location: index.php');
  
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
  ?>
  <!DOCTYPE html>

  <html>

  <head>


    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hub Car </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/icomoon/style.css'>
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

    <!-- Animate.css -->
    <link rel='stylesheet' href='css/animate.css'>
    <!-- Icomoon Icon Fonts-->
    <!--<link rel='stylesheet' href='css/icomoon.css'>-->
    <!-- Bootstrap  -->
    <link rel='stylesheet' href='css/bootstrap.css'>
    <!-- Superfish -->
    <link rel='stylesheet' href='css/superfish.css'>

    <link rel='stylesheet' href='css/style.css'>


    <!-- Modernizr JS -->
    <script src='js/modernizr-2.6.2.min.js'></script>
  </head>

  <body>
    <div id='fh5co-wrapper'>
      <div id='fh5co-page'>
        <div id='fh5co-header'>
			<header id='fh5co-header-section'>
				<div class='container'>
					<div class='nav-header'>
						<a href='#' class='js-fh5co-nav-toggle fh5co-nav-toggle'><i></i></a>
						<h1 id='fh5co-logo'><a href='index.php'>Hub Car</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id='fh5co-menu-wrap' role='navigation'>
							<ul class='sf-menu' id='fh5co-primary-menu'>
								<li class='active'>
									<a href='index.php'>Home</a>
								</li>
								<li>
									<a class='fh5co-sub-ddown'>Accedi   </a>
									<ul class='fh5co-sub-menu'>
										<li><a href='ASignin.php' >Autista</a></li>
										<li><a href='USignin.php' >Passeggero</a></li>
									</ul>
								</li>
								<li>
									<a  class='fh5co-sub-ddown'>Registrati</a>
									 <ul class='fh5co-sub-menu'>
									 	<li><a href='USignUp.php'>Viaggia con noi</a></li>
									 	<li><a href='ASignUp.php'>Diventa Autista</a></li>
									</ul>
								</li>
								<li><a href='#'>Come Funziona</a></li><!-- pagina riguardo la descrizione della pagina-->
								<li><a href='#'>Cerca <i class='icon-search'></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
        <div class='fh5co-hero'>
            <div class='fh5co-overlay'></div>
            <div class='fh5co-cover text-center' data-stellar-background-ratio='0.5' style='background-image: url(http://videobackground.online/upload/iblock/5cb/5cbf31ba3c94707e2588a96081fb7d35.webm);'>
              <div class='desc animate-box'>
                <h2><strong>Grazie per la tua registrazione</strong></h2>
              <span>Effettua il Login per continuare</span>
              <span><a class='btn btn-primary btn-lg' href='ASignin.php'>Login</a></span>
       </div>
            </div>

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



    <script src='js/jquery.min.js'></script>
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
  <?php
        
        
      }
  } 
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
  ?>  
</html>