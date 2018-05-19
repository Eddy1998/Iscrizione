<!DOCTYPE html>
<?php
  include 'conn.inc.php';
  session_start();
$dbh = new PDO($conn, $user, $pass);
?>

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
        <?php
          if(isset($_SESSION["userid"]))
          {
            
            $stm = $dbh->prepare("SELECT * FROM Autista WHERE idAutista=:id");
            $stm->bindValue(":id", $_SESSION["userid"]);
            $stm->execute();
            if($stm->rowCount()>0)
            {
              $row = $stm->fetch();
            }
              echo "
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
                      <a href='index.php'>Home <i class='icon-home'></i></a>
                    </li>

                    <li>
                      <a class='fh5co-sub-ddown'>".$row['nome']." </a>
                      <ul class='fh5co-sub-menu'>
                        <div>
                          <p><b>".$row['nome']."</b></p>
                          <p><b>".$row['cognome']."</b> </p><br>
                        </div>
                        <div class='img-circle'>
                          <img alt='Immagine' src='http://www.newdesignfile.com/postpic/2009/09/great-west-door-of-st-paul_354180.jpg' style='width: 100px;height: 100px;'>
                          <!--class='img-circle img-responsive'-->

                        </div>
                         <div>
                          <p>
                            <a href='#'><b>Il tuo profilo</b></a>
                           </p>
                        </div>
                         <div>
                          <a href='dashboard.php'><b>Dashboard</b></a>
                        </div>
                        <div>
                          <a href='ASignOut.php'><b>Sign Out</b></a>
                        </div>
                       

                      </ul>
                    </li>

                  </ul>
                </nav>
              </div>
            </div>
          </header>

        </div>
              
              ";
          }
             if(isset($_SESSION["passid"]))
              {
                
                $stm = $dbh->prepare("SELECT * FROM Passeggero WHERE idPasseggero=:id");
                $stm->bindValue(":id", $_SESSION["passid"]);
                $stm->execute();
                if($stm->rowCount()>0)
                {
                  $row = $stm->fetch();
                }
                echo "
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
                      <a href='index.php'>Home <i class='icon-home'></i></a>
                    </li>

                    <li>
                      <a class='fh5co-sub-ddown'>".$row['nome']." </a>
                      <ul class='fh5co-sub-menu'>
                        <div>
                          <p><b>".$row['nome']."</b></p>
                          <p><b>".$row['cognome']."</b> </p><br>
                        </div>
                        <div class='img-circle'>
                          <img alt='Immagine' src='http://www.newdesignfile.com/postpic/2009/09/great-west-door-of-st-paul_354180.jpg' style='width: 100px;height: 100px;'>
                          <!--class='img-circle img-responsive'-->

                        </div>
                         <div>
                          <p>
                            <a href='#'><b>Il tuo profilo</b></a>
                           </p>
                        </div>
                         <div>
                          <a href='dashboard.php'><b>Dashboard</b></a>
                        </div>
                        <div>
                          <a href='USignOut.php'><b>Sign Out</b></a>
                        </div>
                       

                      </ul>
                    </li>

                  </ul>
                </nav>
              </div>
            </div>
          </header>

        </div>
                ";
            }
          if(!isset($_SESSION["userid"]) && !isset($_SESSION["passid"]))
             {
             echo "
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
             ";}
            ?>

          <div class='fh5co-hero'>
            <div class='fh5co-overlay'></div>
            <div class='fh5co-cover text-center' data-stellar-background-ratio='0.5' style='background-image: url(http://videobackground.online/upload/iblock/5cb/5cbf31ba3c94707e2588a96081fb7d35.webm);'>
              <div class='desc animate-box'>
                <?php
          if(isset($_SESSION["userid"]))
          {
            
              echo "
              <h2><strong>Benvenuto</strong> ".$row['nome']." ".$row['cognome']."</h2>
              <span>Crea. Guida. Guadagna.</span>
              <span><a class='btn btn-primary btn-lg' href='#'>Profilo</a></span><!--Link al profilo-->
              
              ";
          }
          if(isset($_SESSION["passid"]))
              {
                echo "
                 <h2><strong>Benvenuto</strong> ".$row['nome']." ".$row['cognome']."</h2>
              <span>Cerca. Prenota. Viaggia.</span>
              <span><a class='btn btn-primary btn-lg' href='#'>Profilo</a></span><!--Link al profilo-->
              
                ";
          }
                 
         if(!isset($_SESSION["userid"]) && !isset($_SESSION["passid"]))
              {
                echo "
                <h2><strong>hub car</strong></h2>
              <span>Prenota. Viaggia. Conosci.</span>
              <span><a class='btn btn-primary btn-lg' href='#Registrazione'>Inizia ora</a></span>
                ";
         }
              ?>

              </div>
            </div>

          </div>
         
             <?php
          
          if(isset($_SESSION["passid"]))//passeggero
           {
               
                 echo " 
                 <div id='fh5co-services-section' class='fh5co-section-gray' style='padding-bottom: 1px;'>
            <div class='container'>
              <div class='row text-center'>
                <div class='row'>
                  <div class='col-md-4'>

                  </div>
                  <div class='col-md-4'>
                    <div class='feature-left'>
                      <h2>Qui puoi trovare la tua citt&#224; di <b>destinazione</b></h2><br>


                      <h1>
                        <i class='icon-location' style='color: #66D37E;'></i>
                      </h1>
                    </div>
                  </div>
                  <div class='col-md-4'>

                  </div>
                </div>

                <div class='col-md-12 text-center heading-section'>
                  <h3><b>Cerca la tua destinazione</b></h3>
          <form action='#' method='POST'>
            <!--Link a cerca viaggi-->


            <div id='fh5co-contact' class='animate-box'>

              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>
                    <h3>Citt&#224; di Partenza<h3><select id='form-control' class='form-control'>
                     <option>--Scegli una citt&#224;--</option>";
                    
                           
                      
                      $stm=$dbh->prepare('SELECT * FROM province');
                      $stm->execute();
                      if($stm->rowCount()>0)
                      {
                        $counter = 0;
                        while($counter != $stm->rowCount())
                        {
                          $row = $stm->fetch();
                          console.log($row);
                            echo "<option name='" . $row['nome_province'] . "'>" . $row['nome_province'] . "</option>";
                          $counter++;
                        }
                      } 
                              
                       echo "
                  </select>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-4'>

                </div>
                <div class='col-md-4'>
                  <div>
                    <h3>Citt&#224; di Destinazione<h3><select id='form-control' class='form-control'>
                     <option>--Scegli una citt&#224;--</option>";
                    
                           
                       
                      $stm=$dbh->prepare('SELECT * FROM province');
                      $stm->execute();
                      if($stm->rowCount()>0)
                      {
                        $counter = 0;
                        while($counter != $stm->rowCount())
                        {
                          $row = $stm->fetch();
                       
                            echo "<option name='" . $row['nome_province'] . "'>" . $row['nome_province'] . "</option>";
                          $counter++;
                        }
                      } 
                        
                  echo "</select>

                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>
                    <input type='submit' value='Cerca' class='btn btn-primary'>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
            </div>
          </form>

                </div>
              </div>



            </div>
          </div>

                 
                ";
          }
                 
              if(!isset($_SESSION["userid"]) && !isset($_SESSION["passid"]))
              {
                echo "
                <div id='fh5co-services-section' class='fh5co-section-gray' style='padding-bottom: 1px;'>
            <div class='container'>
              <div class='row text-center'>
                <div class='row'>
                  <div class='col-md-4'>

                  </div>
                  <div class='col-md-4'>
                    <div class='feature-left'>
                      <h2>Qui puoi trovare la tua citt&#224; di <b>destinazione</b></h2><br>


                      <h1>
                        <i class='icon-location' style='color: #66D37E;'></i>
                      </h1>
                    </div>
                  </div>
                  <div class='col-md-4'>

                  </div>
                </div>

                <div class='col-md-12 text-center heading-section'>
                 <h3><b>Cerca la tua destinazione</b></h3>
          <form action='#' method='POST'>
            <!--Link a cerca viaggi-->


            <div id='fh5co-contact' class='animate-box'>

              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>
                    <h3>Citt&#224; di Partenza<h3><select id='form-control' class='form-control'>
                    <option>--Scegli una citt&#224;--</option>";
                     
                           
                      
                      $stm=$dbh->prepare('SELECT * FROM province');
                      $stm->execute();
                      if($stm->rowCount()>0)
                      {
                        $counter = 0;
                        while($counter != $stm->rowCount())
                        {
                          $row = $stm->fetch();
                          console.log($row);
                            echo "<option name='" . $row['nome_province'] . "'>" . $row['nome_province'] . "</option>";
                          $counter++;
                        }
                      } 
                              
                        echo "
                  </select>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-4'>

                </div>
                <div class='col-md-4'>
                  <div>
                    <h3>Citt&#224; di Destinazione<h3><select id='form-control' class='form-control'>
                     <option>--Scegli una citt&#224;--</option>";
                     
                           
                       
                      $stm=$dbh->prepare('SELECT * FROM province');
                      $stm->execute();
                      if($stm->rowCount()>0)
                      {
                        $counter = 0;
                        while($counter != $stm->rowCount())
                        {
                          $row = $stm->fetch();
                       
                            echo "<option name='" . $row['nome_province'] . "'>" . $row['nome_province'] . "</option>";
                          $counter++;
                        }
                      } 
                        echo "
                  </select>

                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>
                    <input type='submit' value='Cerca' class='btn btn-primary'>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
            </div>
          </form>


                </div>
                
              </div>



            </div>
          </div>
           <!--Registrazione-->
          <div id='Registrazione' id='fh5co-feature-product' class='fh5co-section-gray'>
            <div class='container'>
              <div class='row row-bottom-padded-md'>
                <div class='row'>
                  <h1 class='text-center'>
                    <b>Registrati</b>
                  </h1>
                </div>
                <div class='row'>
                  <div class='col-md-3'>
                    <div class='feature-text'>
                      <h3><span class='number'></span> </h3>

                    </div>
                  </div>
                  <div class='col-md-3'>
                    <div class='feature-text'>
                      <div class='text-center  heading-section'>
                        <h2>Diventa autista e guida con noi</h2>
                        <span><a class='btn btn-primary btn-lg' href='ASignUp.php'>Autista</a></span>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-3'>
                    <div class='feature-text'>
                      <div class='text-center heading-section'>
                        <h2>Registrati e viaggia utilizzando Hub Car</h2>
                        <span><a class='btn btn-primary btn-lg' href='USignUp.php'>Passeggero</a></span>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-3'>
                    <div class='feature-text'>
                      <h3><span class='number'></span></h3>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                
                ";}
              ?>



            
         
        
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
                      <h3>Guadagna</h3>
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
                    <p>Cerca il viaggio pi&#249; adatto a te e prenotalo, assicurandoti un posto </p>
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