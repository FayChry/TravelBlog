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
      /*Polaroid photo*/
     .polaroidphoto{
      display: inline-block;
      margin: 32px;
      padding: 10px;
      background-color: #FFF9F0;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: rotate(12deg);
      position: relative;
      left: 20%;
      top: 5%;
     }
     .polaroidphoto img {
      object-fit: cover;
     }
     .polaroidphoto figcaption {
      font-family: 'Brush Script MT', cursive;
      font-size: 25px;
      text-align: center;
      margin-top: 6px;
      letter-spacing: 2px;
      margin-top: 22px;
     }
     .polaroidphoto:before {
      content: "";
      display: block;
      background-color: rgba(222, 220, 200, 0.66);
      width: 100px;
      height: 25px;
      transform: translate(-30px, -25px) rotate(-24deg);
     }
      /*Custom xroma links*/ 
      .faylink:link, .faylink:visited {
        background: linear-gradient(to bottom, #9a482e 0%, #e5cac1 100%);
      color: #1a1a1a;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 10px;
      font-size: 20px;
      font-style: italic;
      font-weight: 400;
      }

      .faylink:hover, .faylink:active {
        background: linear-gradient(to bottom, #e5cac1 38%, #fff9f0 100%);
        color: #404040;
      }

      .aplolink:link, .aplolink:visited {
      color: #B2CCE3;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
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
        <a class="nav-item nav-link link-body-emphasis" href="index.php"><img src="./assets/images/homepage.png" alt="homepage" width="30" height="24" class="d-inline-block align-text-top">HOME</a>
        <a class="nav-item nav-link link-body-emphasis" href="ellada.php">ΕΛΛΑΔΑ</a>
        <a class="nav-item nav-link link-body-emphasis active" href="kosmos.php">ΚΟΣΜΟΣ</a>
        <a class="nav-item nav-link link-body-emphasis" href="traveltips.php">TRAVEL TIPS</a>
        <a class="nav-item nav-link link-body-emphasis" href="contact.php">CONTACT</a>
      </nav>
    </div>
  </div>
  
<main class="container">
  <!-- Wide Post -->
  <div class="row g-0 p-4 p-md-5 mb-4 rounded" style="background-color:#E5CAC150;">
    <div class="col-lg-6 px-0">
      <h2 class="display-4 fst-italic" style="color:#9A482E;">Μόναχο: H αρχοντική πρωτεύουσα της Βαυαρίας</h2>
      <p class="lead my-3" >Τεράστιοι ποδηλατόδρομοι, όμορφοι πεζόδρομοι στολισμένοι με ολάνθιστες ζαρντινιέρες και καταπράσινα πάρκα. Ο ποταμός Ίσαρ να κυλά πλάι σε ιστορικά κτήρια και μία από τις ωραιότερες μεσαιωνικές πλατείες της Ευρώπης. </p>
      <p class="lead mb-0"><a href="munich.php" class="faylink">Συνεχίστε την ανάγνωση...</a></p>
    </div>
    <div class="col-lg-6 px-0">
      <figure class="polaroidphoto">
        <img src="./assets/images/munich.jpg" class="img-fluid" width="300px" height="250px" alt="munich">
        <figcaption>Munich</figcaption>
      </figure>
    </div>
  </div>
  <!--Card Posts -->
  <div class="row g-5">
    <div class="col-md-8">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0" style="color:#9A482E;">Μπολόνια: Η κόκκινη πόλη της Ιταλίας</h3><br>
            <p class="blog-post-meta"><b>Φαίη</b> 25.09.2023</p>
            <p class="card-text mb-auto" style="text-align:justify">Είναι μια πόλη με ιδιαίτερη ταυτότητα, ξεχωριστή και με έναν τρόπο πρωτότυπη ανάμεσα στις δεκάδες πανέμορφες πόλεις και κωμοπόλεις της Ιταλίας. Το κόκκινο-πορφυρό (ενίοτε και πορτοκαλοκίτρινο) χρώμα που έχουν τα περισσότερα σπίτια στο ιστορικό κέντρο της Μπολόνια είναι το κυριότερο χαρακτηριστικό που την κάνει μοναδική.</p>
            <a href="bologna.php" class="aplolink icon-link gap-1 icon-link-hover stretched-link">Συνεχίστε την ανάγνωση <svg class="bi"><use xlink:href="#chevron-right"/></svg></a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img src="./assets/images/bologna1.jpg" class="img-fluid" style="border-left-style: ridge;" width="300px" height="250px" alt="bologna1">
          </div>
      </div>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0" style="color:#9A482E;">Ρώμη: Η Αιώνια Πόλη</h3><br>
            <p class="blog-post-meta"><b>Φαίη</b> 21.04.2022</p>
            <p class="card-text mb-auto" style="text-align:justify">Λίγες πόλεις σαν την Ρώμη προσφέρουν τέτοια ποικιλία και λίγοι είναι οι επισκέπτες που φεύγοντας δεν έχουν την επιθυμία να επιστρέψουν. Δεδομένου ότι είναι η έδρα της ιταλικής κυβέρνησης και του Βατικανού, η Ρώμη είναι μια γνήσια πρωτεύουσα. Έχει όλα όσα θα θέλατε από μια μοντέρνα πόλη, η ιστορία της πόλης είναι που λειτουργεί ως πόλος έλξης για τους επισκέπτες.</p>
            <a href="romi.php" class="aplolink icon-link gap-1 icon-link-hover stretched-link">Συνεχίστε την ανάγνωση <svg class="bi"><use xlink:href="#chevron-right"/></svg></a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img src="./assets/images/romi1.jpg" class="img-fluid" style="border-left-style: ridge;" width="300px" height="250px" alt="romi1">
          </div>
      </div>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0" style="color:#9A482E;">Φλωρεντία: Στη γοητευτική πρωτεύουσα της Τοσκάνης</h3><br>
            <p class="blog-post-meta"><b>Φαίη</b> 10.04.2022</p>
            <p class="card-text mb-auto" style="text-align:justify">Η Φλωρεντία είναι ένας τόπος ευλογημένος από κάθε άποψη: φυσικού τοπίου, αρχιτεκτονικής, γαστρονομίας, τέχνης – ιδίως, αυτής. Για να ακριβολογούμε είναι το λίκνο της ιταλικής Αναγέννησης. Μία παραμυθένια πόλη, η πιο παραμυθένια της Ιταλίας με την ανείπωτη ομορφιά και την υψηλή τέχνη που τη χαρακτηρίζουν να προκαλεί κάθε φορά εκστατικό δέος στον επισκέπτη.</p>
            <a href="florentia.php" class="aplolink icon-link gap-1 icon-link-hover stretched-link">Συνεχίστε την ανάγνωση <svg class="bi"><use xlink:href="#chevron-right"/></svg></a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img src="./assets/images/florentia1.jpg" class="img-fluid" style="border-left-style: ridge;" width="300px" height="250px" alt="florentia1">
          </div>
      </div>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0" style="color:#9A482E;">Παρίσι: Η πόλη του Φωτός</h3><br>
            <p class="blog-post-meta"><b>Φαίη</b> 20.02.2020</p>
            <p class="card-text mb-auto" style="text-align:justify">Το Παρίσι, γνωστό και ως η πόλη του Φωτός, είναι ένας από τους πιο δημοφιλής προορισμούς του κόσμου και ενδεχομένως, η πόλη με τα περισσότερα αξιοθέατα. Το Παρίσι διασχίζει ο περίφημος ποταμός Σηκουάνας που έχει συμβάλλει σημαντικά στην οικονομική ανάπτυξη της πόλης. Ο καλύτερος τρόπος για να γνωρίσετε μια ζωντανή κοσμοπολίτικη μητρόπολη σαν Παρίσι είναι να το περπατήσετε φυσικά.</p>
            <a href="paris.php" class="aplolink icon-link gap-1 icon-link-hover stretched-link">Συνεχίστε την ανάγνωση <svg class="bi"><use xlink:href="#chevron-right"/></svg></a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img src="./assets/images/paris1.jpg" class="img-fluid" style="border-left-style: ridge;" width="300px" height="250px" alt="paris1">
          </div>
      </div>
    </div>
    <!--Deksia stili -->
    <div class="col-md-4">
      <div class="position-sticky rounded" style="top: 2rem; background-color:#E5CAC150; padding: 10px;">
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