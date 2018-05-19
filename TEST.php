<!DOCTYPE html>
<?php
  session_start();
  
  include "conn.inc.php";
$dbh = new PDO($conn, $user, $pass);

?>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HUB CAR</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>






    <link rel='shortcut icon' href='favicon.ico'>


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

        <div class='fh5co-hero'>
          <div class='fh5co-overlay'></div>
          <div class='fh5co-cover text-center' data-stellar-background-ratio='0.5'>
            <div class='desc animate-box'>
              <h2>Registrazione</h2>
              <span>Diventa autista o diventa passeggero</span>
              <i class='icon-pencil2'></i>
            </div>
          </div>

        </div>

        <div id='fh5co-feature-product' class='fh5co-section-gray'>
          <div class='container'>
            <div class='row row-bottom-padded-md'>
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
        <div>
          <h3>Cerca la tua destinazione</h3>
          <form action='#' method='POST'>
            <!--Link a cerca viaggi-->


            <div id='fh5co-contact' class='animate-box'>

              <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4'>
                  <div class='form-group'>
                    <select id='form-control' class='form-control'>
                    <?php 
                           
                      
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
                              
                        ?>
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
                    <select id='form-control' class='form-control'>
                    <?php 
                           
                       
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
                        ?>
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