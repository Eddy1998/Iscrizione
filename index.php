<?php
  include("conn.inc.php");
  session_start()
?>
  <!DOCTYPE html>
  <html>

  <head>
   
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hub Car </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel='stylesheet' href='css/icomoon/style.css'>
    
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
    <?php
    
   if(!isset($_SESSION["userid"]) && !isset($_SESSION["passid"]))
  {
   echo "
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
									 	<li><a href='ASignUp.php'>Dievanta Autista</a></li>
									</ul>
								</li>
								<li><a href='#'>About</a></li><!-- pagina riguardo la descrizione della pagina-->
								<li><a href='contact.html'>Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
    <div class='fh5co-hero'>
			<div class='fh5co-overlay'></div>
			<div class='fh5co-cover text-center' data-stellar-background-ratio='0.5' style='background-image: url(images/cover_bg_1.jpg);'>
				<div class='desc animate-box'>
					<h2><strong>Benvenuto</strong></h2>
					<span>Arriva prima alla tua destinazione con Hub Car</span>
					<span><a class='btn btn-primary btn-lg' href='#'>Registrati</a></span>
				</div>
			</div>

		</div>
    <!--about-->
    <div id='fh5co-features'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-4'>

						<div class='feature-left'>
							<span class='icon'>
								<i class='icon-briefcase'></i>
							</span>
							<div class='feature-copy'>
								<h3>Viaggia</h3>
								<p>Con gli altri utenti per risparmiare carburante e soldi</p>
							</div>
						</div>

					</div>

					<div class='col-md-4'>
						<div class='feature-left'>
							<span class='icon'>
								<i class='icon-road'></i>
							</span>
							<div class='feature-copy'>
								<h3>Guida</h3>
								<p>Con la tua propria macchina e porta con te passeggeri con la tua stessa destinazione</p>
							</div>
						</div>

					</div>
					<div class='col-md-4'>
						<div class='feature-left'>
							<span class='icon'>
								<i class='icon-coin-euro'></i>
							</span>
							<div class='feature-copy'>
								<h3>Guardagna</h3>
								<p>Portando con te altri passeggeri e facendo risparmiare anche loro</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--dati-->
     <div id='fh5co-services-section'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-8 col-md-offset-2 text-center heading-section animate-box'>
						<h3>Come Funziona?</h3>
						<p>Viaggia grazie alla disposizione di altre persone che hanno la tua stessa destinazione</p>
            <p>Segui i seguenti semplici passaggi:</p>
					</div>
				</div>
			</div>
			<div class='container'>
				<div class='row text-center'>
					<div class='col-md-4 col-sm-4'>
						<div class='services animate-box'>
							<span><i class='icon-mobile'></i></span>
							<h3>Registrati</h3>
							<p>Per usufruire del servizio devi essere registrato, se disponi di un'account, accedi. </p>
						</div>
					</div>
					<div class='col-md-4 col-sm-4'>
						<div class='services animate-box'>
							<span><i class='icon-clipboard'></i></span>
							<h3>Prenota</h3>
							<p>Cerca il viaggio a te e prenotalo, assicurandoti un posto </p>
						</div>
					</div>
					<div class='col-md-4 col-sm-4'>
						<div class='services animate-box'>
							<span><i class='icon-briefcase'></i></span>
							<h3>Viaggia</h3>
							<p>Aspetta l'ora del tuo viaggio, preparati e viaggia!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    ";
   }
?>
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