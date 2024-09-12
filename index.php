<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Travel Memoirs - Useful tips and memos for travelling</title>
    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon2.ico" sizes="32x32" type="image/ico">
    
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
 
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
 
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
 
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
 
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }
      
      body {
        background-color: #FFFDFD;
      }
      
      /*Top Button*/
      #topBtn {
        display: none;
        position: fixed;
        bottom: 30px; 
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #9A482E;
        color: #E5CAC1;
        cursor: pointer;
        padding: 10px;
        border-radius: 30px; 
        font-size: 18px;
      }

      #topBtn:hover {
          background-color: #555;
        }
      /*Carousel caption idiotites*/  
      .carousel-caption {
        position: absolute;
        top: 65%;
        left: 60%;
        right: 0%;
        bottom: 0%;
        width: auto;
        height: auto;
        z-index: 2;
        background-color:#9A482E90;
        border-radius: 25px 0px 0px 0px;
        }
        /*xartis taxidion*/
        #map { 
              position: relative;
              border: 1px solid darkred;
              border-radius: 8px;
              height: 500px;
              width: 100%;  /* This means "100% of the width of its container", the .col-md-8 */
            }
        /*custom link*/
        .aplolink:link, .aplolink:visited {
        color: #B2CCE3;
        text-decoration: none;
        display: inline-block;
        font-style: italic;
        font-weight: 400;
        }
        .aplolink:hover, .aplolink:active {
        color: #E5CAC1;
        text-decoration: underline;
        }            
    </style>
 
    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <!-- Style gia Maps -->
    <link rel="stylesheet" 
          href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""
    />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin="">
    </script>
  </head>
  <body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10"/>
        <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
      </symbol>
      <symbol id="cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
      <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </symbol>
    </svg>


    <!-- Back To Top button-->
    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <script>
      let mybutton = document.getElementById("topBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
     
  <!-- Header -->
  <div class="container">

    <header class="border-bottom lh-1 py-3">
      <div class="row flex-nowrap justify-content-center align-items-center">
        <div class="col-4">
          <a class="blog-header-logo" href="index.php">
            <img src="./assets/images/logo2.png" class="img-fluid" alt="hrlogo">
          </a>
        </div>
      </div>
    </header>
    
    <div class="nav-scroller py-1 mb-3 border-bottom" style="background-color: #E5CAC1;">
      <nav class="nav nav-underline justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-xl-center">
        <a class="nav-item nav-link link-body-emphasis active" href="index.php"><img src="./assets/images/homepage.png" alt="homepage" width="30" height="24" class="d-inline-block align-text-top">HOME</a>
        <a class="nav-item nav-link link-body-emphasis" href="ellada.php">ΕΛΛΑΔΑ</a>
        <a class="nav-item nav-link link-body-emphasis" href="kosmos.php">ΚΟΣΜΟΣ</a>
        <a class="nav-item nav-link link-body-emphasis" href="traveltips.php">TRAVEL TIPS</a>
        <a class="nav-item nav-link link-body-emphasis" href="contact.php">CONTACT</a>
      </nav>
    </div>
  </div>
 
<main class="container">
  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
      <div class="carousel-item active">
        <img style="width: 800px; height: 500px; object-fit: cover;" src="./assets/images/santorini169.jpg" class="d-block w-100" alt="santorini">
        <div class="carousel-caption">
          <h2>Σαντορίνη</h2>
          <p>Βόλτες με θέα την καλδέρα</p>
          <p><a class="btn btn-md btn-light" href="santorini.php">Δείτε εδώ...</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: 800px; height: 500px; object-fit: cover;" src="./assets/images/florentia169.jpg" class="d-block w-100" alt="florentia">
        <div class="carousel-caption">
          <h2>Φλωρεντία</h2>
          <p>Στην γοητευτική πρωτεύουσα της Τοσκάνης</p>
          <p><a class="btn btn-md btn-light" href="florentia.php">Δείτε εδώ...</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: 800px; height: 500px; object-fit: cover;" src="./assets/images/monemvasia169.jpg" class="d-block w-100" alt="monemvasia">
        <div class="carousel-caption">
          <h2>Μονεμβασιά</h2>
          <p>Η μεσαιωνική Καστροπολιτεία</p>
          <p><a class="btn btn-md btn-light" href="monemvasia.php">Δείτε εδώ...</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <br>
  <!-- Εναρξη content -->
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
        <h2 class="display-5 mb-1" style="color:#9A482E;">Τα ταξίδια μου</h2>
        <p style="text-align:justify;">Στον πίνακα που ακολουθεί έχω συγκεντρώσει όλα τα μέρη που έχω επισκεφτεί με κάποιες απαραίτητες πληροφορίες. Έτσι, μπορείς να έχεις μια σύντομη πλήρη εικόνα ώστε να ανατρέξεις στο ταξίδι που σε ενδιαφέρει και να μάθεις περισσότερα για αυτό.</p>
         <!-- πίνακας με ταξίδια-->
        <?php
          $pass='root';
          $user_name='root';
          $db_host='localhost';
          $database='blog';
          $dbc = mysqli_connect($db_host, $user_name, $pass,$database)OR die ('Η σύνδεση στη Βάση Δεδομένων δεν είναι εφικτή. ' . mysqli_connect_error() );
          $query =  "SELECT * FROM trips ";

          $sql = mysqli_query ($dbc, $query);
          if ($sql) {
          echo "Η εγγραφή ολοκληρώθηκε με επιτυχία<br>";
          } else {
          echo "Error: " . $query. "<br>" . mysqli_error($dbc);
          }
          $num_aff =mysqli_affected_rows($dbc);
          echo "Επηρεάστηκαν $num_aff γραμμές";

          if ($num_aff > 0) { 
	        echo "<p>Υπάρχουν $num_aff εγγραφές.</p>\n";
        ?>
          <div class="table-responsive">
            <table class="table table-danger table-striped-columns table-hover table-bordered table-sm">
              <thead class="table-dark">
                <tr>
                  <th>Προορισμός</th>
                  <th>Χώρα</th>
                  <th>Πόλη</th>
                  <th>Εποχή</th>
                  <th>Ημερομηνία</th>
                  <th>Ημέρες</th>
                </tr>
              </thead>
              <tboby>
                <?php
                    while ($row = mysqli_fetch_array($sql, MYSQLI_BOTH)) {
                    echo '<tr>'."<td>".$row['Προορισμός']."</td>"."<td>". $row['Χώρα']."</td>"."<td>".$row['Πόλη']."</td>"."<td>".$row['Εποχή']."</td>"."<td>".$row['Ημερομηνία']."</td>"."<td>".$row['Ημέρες']."</td>"."</tr>";
                    } 
                    
                    mysqli_free_result ($sql);//ελευθέρωση resources 
                    }
                    else { 
                    echo '';
                    mysqli_free_result($sql);//ελευθέρωση resources 
                    }

                    mysqli_close($dbc);
                ?>
              </tbody>
            </table>
          </div>
      </article>

      <article class="blog-post">
        <h2 class="display-5 mb-1" style="color:#9A482E;">Τι καιρό έχει εκεί;</h2>
        <p style="text-align:justify;">Σε περίπτωση που σκέφτεσαι να επισκεφθείς κάποιον από τους παραπάνω προορισμούς, σε προετοιμάζω! Δες στον πίνακα που ακολουθεί την μέση θερμοκρασία που έχει κάθε πόλη ανά μήνα. Έτσι δεν χρειάζεται να σκεφτείς πολύ τι ρούχα να βάλεις στην βαλίτσα. Οι τιμές αυτές έχουν ληφθεί από ένα αρκετά ικανοποιητικό εύρος 30 ετών, από το έτος 1991 έως το 2021. Ελπίζω η κλιματική αλλαγή να μην έχει αλλάξει πολύ τα δεδομένα των τελευταίων ετών.</p>
          <!-- πίνακας με θερμοκρασίες-->
          <?php
            $pass='root';
            $user_name='root';
            $db_host='localhost';
            $database='blog';
            $dbc = mysqli_connect($db_host, $user_name, $pass,$database)OR die ('Η σύνδεση στη Βάση Δεδομένων δεν είναι εφικτή. ' . mysqli_connect_error() );
            $query =  "SELECT * FROM avr_temperatures ";

            $sql = mysqli_query ($dbc, $query);
            if ($sql) {
            echo "Η εγγραφή ολοκληρώθηκε με επιτυχία<br>";
            } else {
            echo "Error: " . $query. "<br>" . mysqli_error($dbc);
            }
            $num_aff =mysqli_affected_rows($dbc);
            echo "Επηρεάστηκαν $num_aff γραμμές";

            if ($num_aff > 0) { 
            echo "<p>Υπάρχουν $num_aff εγγραφές.</p>\n";
          ?>
            <h4 class="text-center">Οι μέσες θερμοκρασίες ανά πόλη</h4><hr>
            <div class="table-responsive">
              <table class="table table-danger table-striped-columns table-hover table-bordered table-sm ">
                <caption><b>Πηγή: </b><a class="aplolink" href="https://en.climate-data.org/" target="_blank">Επισκεφθείτε την σελίδα Climate-data.org</a></caption>
                <thead class="table-dark">
                  <tr>
                    <th>Πόλη</th>
                    <th>Ιανουάριος</th>
                    <th>Φεβρουάριος</th>
                    <th>Μάρτιος</th>
                    <th>Απρίλιος</th>
                    <th>&nbsp;Μάιος&nbsp;</th>
                    <th>Ιούνιος</th>
                    <th>Ιούλιος</th>
                    <th>Αύγουστος</th>
                    <th>Σεπτέμβριος</th>
                    <th>Οκτώβριος</th>
                    <th>Νοέμβριος</th>
                    <th>Δεκέμβριος</th>
                  </tr>
                </thead>
                <tboby>
                  <?php
                    while ($row = mysqli_fetch_array($sql, MYSQLI_BOTH)) {
                    echo '<tr>'."<td>".$row['Πόλη']."</td>"."<td>". $row['Ιανουάριος']."</td>"."<td>".$row['Φεβρουάριος']."</td>"."<td>".$row['Μάρτιος']."</td>"."<td>".$row['Απρίλιος']."</td>"."<td>".$row['Μάιος']."</td>"."<td>".$row['Ιούνιος']."</td>"."<td>".$row['Ιούλιος']."</td>"."<td>".$row['Αύγουστος']."</td>"."<td>".$row['Σεπτέμβριος']."</td>"."<td>".$row['Οκτώβριος']."</td>"."<td>".$row['Νοέμβριος']."</td>"."<td>".$row['Δεκέμβριος']."</td>"."</tr>";
                    } 
                    echo "</table>";	
                    mysqli_free_result ($sql);//ελευθέρωση resources 
                    }
                    else { 
                    echo '';
                    mysqli_free_result($sql);//ελευθέρωση resources 
                    }

                    mysqli_close($dbc);
                  ?>
                </tbody>
              </table>
            </div>
      </article>
      <!-- Χάρτης ταξιδίων-->
      <article class="blog-post">
        <h2 class="display-5 mb-1" style="color:#9A482E;">Χάρτης ταξιδίων</h2><br>
        <p style="text-align:justify;">Εδώ μπορείς να επιλέξεις το ταξίδι που σε ενδιαφέρει απευθείας απο τον χάρτη και να ανατρέξεις στο αντίστοιχο post για να διαβάσεις περισσότερα για αυτό.</p>
          <div class="col-auto">
            <div id="map">
              <script>
                var map = L.map('map').setView([47.0000, 10.0000], 4);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(map);
                var marker = L.marker([48.864716, 2.349014],{alt: 'Paris'}).addTo(map); marker.bindPopup("<img src='./assets/images/parismikro.jpg'+<br><h6>Παρίσι: Η πόλη του Φωτός</h6><a class=\"aplolink\" href=\"http://localhost/blog/paris.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([41.902782, 12.496366],{alt: 'Rome'}).addTo(map); marker.bindPopup("<img src='./assets/images/romimikro.jpg'+<br><h6>Ρώμη: Η Αιώνια Πόλη</h6><a class=\"aplolink\" href=\"http://localhost/blog/romi.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([36.41999832, 25.43166494],{alt: 'Santorini'}).addTo(map); marker.bindPopup("<img src='./assets/images/santorinimikro.jpg'+<br><h6>Σαντορίνη: βόλτες με θέα την καλδέρα</h6><a class=\"aplolink\" href=\"http://localhost/blog/santorini.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([35.20783, 26.10467],{alt: 'Sitia'}).addTo(map); marker.bindPopup("<img src='./assets/images/sitiamikro.jpg'+<br><h6>Σητεία: μια όαση ηρεμίας</h6><a class=\"aplolink\" href=\"http://localhost/blog/sitia.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([48.13711, 11.57538],{alt: 'Munich'}).addTo(map); marker.bindPopup("<img src='./assets/images/munichmikro.jpg'+<br><h6>Μόναχο: H αρχοντική πρωτεύουσα της Βαυαρίας</h6><a class=\"aplolink\" href=\"http://localhost/blog/munich.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([37.33209, 23.46646],{alt: 'Hydra'}).addTo(map); marker.bindPopup("<img src='./assets/images/hydramikro.jpg'+<br><h6>Ύδρα: Η Αρχόντισσα του Αργοσαρωνικού</h6><a class=\"aplolink\" href=\"http://localhost/blog/hydra.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([43.76987, 11.25558],{alt: 'Florence'}).addTo(map); marker.bindPopup("<img src='./assets/images/florentiamikro.jpg'+<br><h6>Φλωρεντία: Στη γοητευτική πρωτεύουσα της Τοσκάνης</h6><a class=\"aplolink\" href=\"http://localhost/blog/florentia.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([36.68846, 23.05169],{alt: 'Monemvasia'}).addTo(map); marker.bindPopup("<img src='./assets/images/monemvasiamikro.jpg'+<br><h6>Μονεμβασιά: η μεσαιωνική Καστροπολιτεία</h6><a class=\"aplolink\" href=\"http://localhost/blog/monemvasia.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([44.49382, 11.34263],{alt: 'Bologna'}).addTo(map); marker.bindPopup("<img src='./assets/images/bolognamikro.jpg'+<br><h6>Μπολόνια: Η κόκκινη πόλη της Ιταλίας</h6><a class=\"aplolink\" href=\"http://localhost/blog/bologna.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
                var marker = L.marker([39.66398, 20.85228],{alt: 'Ioannina'}).addTo(map); marker.bindPopup("<img src='./assets/images/ioanninamikro.jpg'+<br><h6>Χριστούγεννα στα Ιωάννινα: όλη η πόλη, μια γιορτή</h6><a class=\"aplolink\" href=\"http://localhost/blog/ioannina.php\" target=\"_blank\">Διαβάστε περισσότερα...</a>",{minWidth : 205, maxWidth : 210, autoPan: true});
              </script>
            </div>
          </div>
      </article>
    </div>

    <!-- Βιογραφικό-->
    <div class="col-md-4">
      <div class="position-sticky rounded" style="top: 2rem; background-color:#E5CAC180;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic text-center" style="color:#9A482E;">About Me</h4>
          <img class="rounded-circle mx-auto d-block border border-secondary img-fluid" style="width: 200px; height: 200px; object-fit: cover;" src="./assets/images/bio.jpg" alt="bio"><br>
          <h5>Γεια σου!</h5>
          <p class="mb-0" style="text-align:justify;">Είμαι η Φαίη. Μισή Αθηναία, μισή Κρητικιά μοιράζω την ζωή μου και στα δύο αυτά μέρη της Ελλάδας. Η αδυναμία μου είναι φυσικά τα ταξίδια...</p><br>
          <h5>Τι θα βρεις στο Travel Memoirs;</h5>
          <p class="mb-0" style="text-align:justify;">Αυτό το blog απευθύνεται σε κάθε ταξιδιώτη που αναζητά συμβουλές και πληροφορίες για ταξίδια. Στο Travel Memoirs θα βρεις στιγμές από προορισμούς που επισκέπτομαι η ίδια, δραστηριότητες που έκανα, όπως και εστιατόρια που έφαγα και έμεινα ικανοποιημένη. <br>Σε ευχαριστώ που είσαι εδώ!</p>
          
        </div>
 
        <div>
          <h4 class="fst-italic" style="color:#9A482E;">Πρόσφατα άρθρα</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="http://localhost/blog/ioannina.php">
              <div class="col-lg-4">
                <img src="./assets/images/ioannina2_32.jpg" class="img-fluid" width="100%" height="100%" alt="ioannina2_32">
              </div>
              <div class="col-lg-8">
                <h6 class="me-2 p-2">Χριστούγεννα στα Ιωάννινα: όλη η πόλη, μια γιορτή</h6>
                <small class="text-body-secondary me-2 p-2">2 Ιανουαρίου, 2024</small>
              </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="http://localhost/blog/bologna.php">
              <div class="col-lg-4">
                <img src="./assets/images/bologna.jpg" class="img-fluid" width="100%" height="100%" alt="bologna">
              </div>
              <div class="col-lg-8">
                <h6 class="me-2 p-2">Μπολόνια: Η κόκκινη πόλη της Ιταλίας</h6>
                <small class="text-body-secondary me-2 p-2">25 Σεπτεμβρίου, 2023</small>
              </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="http://localhost/blog/monemvasia.php">
              <div class="col-lg-4">
                <img src="./assets/images/monemvasia32.jpg" class="img-fluid" width="100%" height="100%" alt="monemvasia32">
              </div>
              <div class="col-lg-8">
                <h6 class="me-2 p-2">Μονεμβασιά: η μεσαιωνική Καστροπολιτεία</h6>
                <small class="text-body-secondary me-2 p-2">5 Νοεμβρίου, 2022</small>
              </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 
</main>

<footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Travel Memoirs</p>

</footer>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>