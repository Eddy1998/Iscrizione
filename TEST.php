<!DOCTYPE html>
<?php
include 'conn.inc.php';
session_start();
if(isset($_SESSION['userid'])||isset($_SESSION['passid']))
header('location: index.php');
?>

<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HUB CAR</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>






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
    <link rel='stylesheet' href='css/icomoon/style.css'>
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
                <h1 id='fh5co-logo'><a href='index.html'>HUB CAR</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id='fh5co-menu-wrap' role='navigation'>
                  <ul class='sf-menu' id='fh5co-primary-menu'>
                    <li class='active'>
                      <a href='index.html'>Home</a>
                    </li>

                  </ul>
                </nav>
              </div>
            </div>
          </header>

        </div>

        <div class='fh5co-hero' style='height: 400px;'>
          <div class='fh5co-overlay'></div>
          <div class='fh5co-cover text-center' data-stellar-background-ratio='0.5'>
            <div class="desc animate-box fadeInUp animated" style="top: 250px;">
              <h2>Registrazione</h2>
              Autista
            </div>
          </div>

        </div>

        
        <div>
            
          <form action='#' method='POST'>
            <!--Link a cerca viaggi-->


            <div id='fh5co-contact' class='animate-box'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                    <div class='form-group'>
										  <input type='text' class='form-control' placeholder='Nome' name='nome'>
									  </div>
                  <div class='form-group'>
										  <input type='text' class='form-control' placeholder='Cognome' name='cognome'>
									  </div>
                  <div class='form-group'>
										  <legend>
                        Data di Nascita
                    </legend><input type='text' class='form-control' placeholder='gg/mm/aaaa' name='nascita'>
									  </div>
                  <div class='form-group'>
										  <legend>Sesso</legend>
                           
                            <input  type="radio" name="sesso" value="M" /> Maschile
                          
                          
                           <input  type="radio" name="sesso" value="F" />   Femminile
                        
                    </div>
                  <div class="form-group ">
                    <legend>Nazionali&#224;</legend>
                    <select class='form-control' name='nazionalita' >
                      <option>--Nazionalit&#224;--</option>
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
                  
                  <div class='form-group'>
										  <input type='text' class='form-control' placeholder='E-mail' name='email'>
									  </div>
                  <div class='form-group'>
										  <input type='text' class='form-control' placeholder='Username' name='user'>
									  </div>
                  <div class='form-group'>
										  <input type='password' class='form-control' placeholder='Password' name='password'>
									  </div>
                  <div class='form-group '>
										  <input type='password' class='form-control' placeholder='Conferma Password' name='conferma'>
									  </div>
                  <div class='form-group'>
										  <input type='number' class='form-control' placeholder='Num. di Telefono' name='telefono'>
									  </div>
                  <div class='form-group'>
										  <input type='text' class='form-control' placeholder='Num. della Patente' maxlength="10" name='patente'>
									  </div>
                   <div class='form-group '>
                     <legend>Scadenza della Patente</legend>
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
                    <input type='submit' value='Registra' class='btn btn-primary'>
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