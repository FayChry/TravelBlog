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
      font-size: 15px;
      font-style: italic;
      font-weight: 400;
      }

      .aplolink:hover, .aplolink:active {
        color: #E5CAC1;
        text-decoration: underline;
      }
      /*Proti foto*/
      .photo1 { 
              position: relative;
              height: 400px;
              width: 100%;  /* This means "100% of the width of its container", the .col-md-8 */
            }
      h3 {
        color:#9A482E;
        font-weight:bold;
      }
      h4 {
        font-style: italic;
        color:#9A482E;
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
        <a class="nav-item nav-link link-body-emphasis active" href="ellada.php">ΕΛΛΑΔΑ</a>
        <a class="nav-item nav-link link-body-emphasis" href="kosmos.php">ΚΟΣΜΟΣ</a>
        <a class="nav-item nav-link link-body-emphasis" href="traveltips.php">TRAVEL TIPS</a>
        <a class="nav-item nav-link link-body-emphasis" href="contact.php">CONTACT</a>
      </nav>
    </div>
  </div>
  
<main class="container">
  <!--Blog Post -->
  <div class="row g-5">
    <div class="col-md-8" style="text-align:justify">
      <h2 class="display-6 mb-1" style="color:#9A482E;">Μονεμβασιά: η μεσαιωνική Καστροπολιτεία</h2>
      <p class="blog-post-meta">5 Νοεμβρίου 2022, Φαίη</p>
      <img src="./assets/images/monemvasia169.jpg" class="img-fluid" alt="monemvasia169">
      <article class="blog-post">
        <p><em>Πλατεία Χρυσαφίτισσας στη Μονεμβασιά</em></p><hr>
        <p>Στη Μονεμβασιά, γνωστή και ως Γιβραλτάρ της Ελλάδας, δεν χρειάζεται κανείς χάρτη! Mέσα στα μεσαιωνικά τείχη της Μονεμβασιάς βρίσκεται μια από τις πιο καλοδιατηρημένες και ζωντανές καστροπολιτείες στην Ελλάδα. Το όνομα «Μονεμβασιά» εξηγείται ξεκάθαρα στο «Χρονικό του Μορέως » ένα ιστορικό έγγραφο της ύστερης Βυζαντινής περιόδου που περιγράφει τη «μόνη έμβαση», δηλαδή τη μοναδική είσοδο στο νησί πάνω από τη γέφυρα.</p>
        <p>Επισκεφθείτε τη μαγευτική βυζαντινή καστροπολιτεία της νοτιοανατολικής Πελοποννήσου και γίνετε πρωταγωνιστές ενός μεσαιωνικού παραμυθιού με φόντο πέτρινα πυργόσπιτα, στενά λιθόστρωτα και δαιδαλώδη σοκάκια! Ακολουθήστε τα πλακόστρωτα δρομάκια και αφεθείτε στη μαγεία της ιστορίας ενός οικισμού που κάποτε «φιλοξενούσε» όλους τους αυτοκράτορες του Βυζαντίου!</p>
        <p>Περιηγηθείτε στην Καστροπολιτεία, η οποία χωρίζεται στην Άνω και στην Κάτω Πόλη, και θαυμάστε τα καλοδιατηρημένα πέτρινα κτίσματα που τώρα στην πλειοψηφία τους λειτουργούν ως καταλύματα και εστιατόρια. Αυτό σημαίνει ότι στη Μονεμβασιά έχετε την μοναδική ευκαιρία να διανυκτερεύσετε σε κάποιο μεσαιωνικό πύργο ή να απολαύσετε ένα ρομαντικό δείπνο στην οροφή κάποιου πυργόσπιτου!</p>
      <h3>Τι αξίζει να δείτε και να κάνετε στη Μονεμβασιά</h3>        
        <h4>Η Κάτω Πόλη</h4>
          <p>Το κεντρικό καλντερίμι που ξεκινά από την πύλη του Κάστρου οδηγεί στην κεντρική πλατεία με το κανόνι, που μοιάζει με ένα μεγάλο μπαλκόνι που βλέπει στη θάλασσα. Εκεί βρίσκεται η εκκλησία του Ελκόμενου Χριστού με σπάνιες εικόνες, μοναδικά έργα τέχνης, από τις οποίες ξεχωρίζει εκείνη της Σταύρωσης η οποία είχε κλαπεί και επέστρεψε πρόσφατα στην εκκλησία μετά από ένα μεγάλο περιπετειώδες ταξίδι. Τώρα φυλάσσεται κάτω από αυστηρά μέτρα ασφαλείας.</p>
          <figure><img src="./assets/images/monemvasia2.jpg" class="img-fluid" alt="monemvasia2"><figcaption>Εικόνες απο τα δρομάκια της κάτω πόλης</figcaption></figure>
          <p>Στην κεντρική πλατεία βρίσκεται και το Αρχαιολογικό Μουσείο, το οποίο χτίστηκε τον 16ο αιώνα και λειτουργούσε αρχικά ως τζαμί. Τέλος στην Κάτω Πόλη αξίζει μια επίσκεψη στο σπίτι του μεγάλου ποιητή Γιάννη Ρίτσου, όπου βρίσκεται και η προτομή του, ακριβώς μετά την πύλη. Ο Ρίτσος γεννήθηκε στην Μονεμβασιά και ο κεντρικός δρόμος φέρει το όνομά του.</p>
          <figure><img src="./assets/images/monemvasia3.jpg" class="img-fluid" alt="monemvasia3"><figcaption>Εικόνες απο τα δρομάκια της κάτω πόλης</figcaption></figure>
        <h4>Ο Φάρος της Μονεμβασιάς</h4>
          <p>Το κτηριακό συγκρότημα του φάρου περιλαμβάνει την παλαιά πέτρινη κατοικία του φαροφύλακα, δηλαδή το φαρόσπιτο, συνοδευόμενη από τον πύργο του φάρου, μικρότερα βοηθητικά κτίσματα στη βορειοανατολική γωνία του καθώς και παρακολουθήματα της κατοικίας όπως η στέρνα και ο πέτρινος φούρνος.</p>
          <figure><img src="./assets/images/monemvasia4.jpg" class="img-fluid" alt="monemvasia4"><figcaption>Εικόνες απο τον φάρο της Μοναβασιάς</figcaption></figure>
        <h4>Το επάνω Κάστρο</h4>
          <p>Από την Κάτω πόλη ξεκινά το ανηφορικό καλντερίμι που οδηγεί στο Επάνω Κάστρο ή Γουλά, το δεύτερο οικισμό που δεν κατοικείται. Η θέα από το Επάνω Κάστρο είναι μαγευτική, ενώ αξίζει μια επίσκεψη στην επιβλητική εκκλησία της Αγίας Σοφίας, που ορθώνεται στο χείλος του γκρεμού, 300 μέτρα πάνω από το Μυρτώο πέλαγος. Η εκκλησία αποτελεί έναν από τους πιο σημαντικούς ναούς της μεσοβυζαντινής περιόδου σε ολόκληρη την Πελοπόννησο. Χτίστηκε το 12ο αιώνα και θεωρείται αντίγραφο της Αγίας Σοφίας της Κωνσταντινούπολης.</p>
          <figure><img src="./assets/images/monemvasia5.jpg" class="img-fluid" alt="monemvasia5"><figcaption>Εικόνες από το κάστρο και την Αγία Σοφία.</figcaption></figure>
      <h3>Πού να φάτε και πού να πιείτε</h3>
        <h4>Εστιατόριο 'Βόλτες'</h4>
          <p>Ένα υπέροχο εστιατόριο όπου θα γευθείτε τοπικές συνταγές όπως γλίνα της γιαγιάς, καπνιστή μοσχαρίσια μπριζόλα, φέτα Μονεμβασιάς στον φούρνο με μέλι, σουτζούκι και παστουρμαδοπιτάκια.</p>
          <figure><img src="./assets/images/monemvasia6.jpg" class="img-fluid" alt="monemvasia6"><figcaption>Τα προαναφερόμενα πιάτα. Διεύθυνση: Γιάννη Ρίτσου, Μονεμβασιά 230 70</figcaption></figure>
        <h4>Malvasia Cafe</h4>
        <p>Πιείτε τον καφέ σας ή και την μπύρα σας με θέα την θάλασσα. Στην άκρη της καστροπολιτείας θα συναντήσετε αυτό το απλό παραδοσιακό καφέ με την εκπληκτική θέα. Προτιμήστε να πάτε όταν δεν έχει πολύ ήλιο καθώς δεν έχει τέντες.</p>
        <figure><img src="./assets/images/monemvasia7.jpg" class="img-fluid" alt="monemvasia7"><figcaption>Η θέα απο το τραπέζι</figcaption></figure>
        </article>
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