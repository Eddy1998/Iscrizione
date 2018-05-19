<!DOCTYPE html>
<?php
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
              <h2>Login</h2><span>
              passeggero
              </span>
              <span>Accedi. Prenota. Viaggia.</span>
            </div>
          </div>

        </div>

        
        <div>
              <?php 
  
             include "conn.inc.php";
              $dbh = new PDO($conn, $user, $pass);
               if(isset($_POST['btnConferma'])){
      
               $dbh = new PDO($conn,$user,$pass);
               $stm=$dbh->prepare("SELECT * FROM carpool.Passeggero WHERE (email=:u||username=:u) AND password=MD5(:p);");
               $stm->bindValue(":u",$_POST['email']);
               $stm->bindValue(":p",$_POST['password']);
               $stm->execute();
              if($stm->rowCount()>0)
              { 
                $row=$stm->fetch();
               $_SESSION['passid']=$row['idPasseggero'];
              header('location: index.php');
              }
               else {
                 ?>  
               <form action='#' method='POST'>
                  <!--Link a cerca viaggi-->


            <div id='fh5co-contact' class='animate-box'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>
                        <p style='font-size: 25px; color:#ff0000;'>
                          <b>Dati inseriti non corretti. Riprova</b>
                    </p>
										  <input type='text' class='form-control' placeholder='Username o Email' name='email'>
									
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
                    <div class='form-group'>
										  <input type='password' class='form-control' placeholder='Password' name='password'>
									  </div>

                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group' >
                    <input type='submit' value='Cerca' class='btn btn-primary' name='btnConferma'>
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
                    <h3>
                      Non sei registrato? <a href='USignUp.php'>Registrati ora</a>
                    </h3>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
            </div>
            </div>
          </form>
          <?php
                    }
          }
          else {
              ?>
          <form action='#' method='POST'>
            <!--Link a cerca viaggi-->


            <div id='fh5co-contact' class='animate-box'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>

										  <input type='text' class='form-control' placeholder='Username o Email' name='email'>
									
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
                    <div class='form-group'>
										  <input type='password' class='form-control' placeholder='Password' name='password'>
									  </div>

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
                    <input type='submit' value='Cerca' class='btn btn-primary' name='btnConferma'>
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
                    <h3>
                      Non sei registrato? <a href='USignUp.php'>Registrati ora</a>
                    </h3>
                  </div>
                </div>
                <div class='col-md-4'>
                </div>
              </div>
            </div>
            </div>
          </form>
          <?php }?>
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