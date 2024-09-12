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
        <a class="nav-item nav-link link-body-emphasis" href="ellada.php">ΕΛΛΑΔΑ</a>
        <a class="nav-item nav-link link-body-emphasis" href="kosmos.php">ΚΟΣΜΟΣ</a>
        <a class="nav-item nav-link link-body-emphasis active" href="traveltips.php">TRAVEL TIPS</a>
        <a class="nav-item nav-link link-body-emphasis" href="contact.php">CONTACT</a>
      </nav>
    </div>
  </div>
  
<main class="container">
  <!--Blog Post -->
  <div class="row g-5">
    <div class="col-md-8">
      <h2 class="display-6 mb-1" style="color:#9A482E;">Πως να κλείσετε από τώρα οικονομικά αεροπορικά εισιτήρια για διακοπές τα Χριστούγεννα</h2>
      <p class="blog-post-meta">26 Σεπτεμβρίου 2021, Φαίη</p>
      <img src="./assets/images/ftinaeis1.jpg" class="img-fluid" alt="ftinaeis1">
      <article class="blog-post" style="text-align:justify">
        <hr>
        <p>Είναι πολύ νωρίς για να σκεφτείτε τα Χριστούγεννα; Ίσως και όχι! Εάν θέλετε οι διακοπές σας να είναι οικονομικές – τουλάχιστον όσο αφορά τα αεροπορικά εισιτήρια– πρέπει να ακολουθήσετε κάποια βήματα! Δείτε αναλυτικά παρακάτω…</p>
        <p>Αν σκοπεύετε να ταξιδέψετε στο εξωτερικό προλαβαίνετε για το σαφάρι των φθηνών πτήσεων. Για να μην χάνετε χρόνο δείτε όλα τα tips για τις εορταστικές αποδράσεις και καλό ταξίδι!</p>
      <h3>Η κατάλληλη στιγμή για κράτηση</h3>
          <p>Προλαβαίνετε μέχρι τις αρχές Νοεμβρίου. Ξεκινήστε όμως την αναζήτηση από τώρα και μην ξεχάσετε να… σβήσετε τα cookies! Επίσης, μπορεί να σας βολεύει το Σαββατοκύριακο για να κάνετε αναζήτηση, αλλά ξεχάστε το. Έχετε περισσότερες πιθανότητες να βρείτε φθηνό ναύλο τις υπόλοιπες μέρες. Την Δευτέρα για παράδειγμα θα βρείτε φθηνά αεροπορικά εισιτήρια, ενώ υπάρχουν πολλές πιθανότητες οι τιμές να πέσουν την Τρίτη τα ξημερώματα. Επίσης, αν μπορείτε, διαλέξτε μία ημερομηνία και ώρα που η πτήση σας δεν θα έχει πολλή ζήτηση. Πτήσεις στην διάρκεια της εβδομάδας, νωρίς το πρωί και αργά το βράδυ θα σας εξασφαλίσουν τα πιο φθηνά αεροπορικά εισιτήρια!</p>
          <figure><img src="./assets/images/ftinaeis2.jpg" class="img-fluid" alt="ftinaeis2"></figure>
      <h3>Συγκρίνετε μηχανές αναζήτησης</h3>
          <p>Μην επαναπαυθείτε στις υπηρεσίες μίας μόνο μηχανής αναζήτησης, αλλά συγκρίνετε τις τιμές σε πολλές διαφορετικές. Μερικές φορές συμφέρει καλύτερα να μπείτε κατευθείαν στο site της αεροπορικής εταιρείας.</p>
          <figure><img src="./assets/images/ftinaeis3.jpg" class="img-fluid" alt="ftinaeis3"></figure>
      <h3>Εύρεση της καλύτερης προσφοράς</h3>
          <p>Για ταξίδια μακρινών αποστάσεων ξεκίνησε την αναζήτηση με την Google Flights – το απόλυτο εργαλείο ημερολογίου που θα σας βοηθήσει να βρείτε τις φθηνότερες ημερομηνίες ταξιδιού. Εάν θέλετε να ταξιδέψετε σε συγκεκριμένο προορισμό για δύο εβδομάδες τα Χριστούγεννα, ας πούμε, θα δείξει αμέσως τις φτηνότερες ημερομηνίες που πρέπει να αναχωρήσετε και να επιστρέψετε. Μάλιστα τo CNBC αποκάλυψε πως πρόσφατα ενημερώθηκε η υπηρεσία Google Flights με περισσότερες πληροφορίες οι οποίες μπορούν να σας βοηθήσουν να εξοικονομήσετε χρήματα κάνοντας κράτηση για ένα ταξίδι κατά τη διάρκεια συγκεκριμένων χρονικών περιόδων.</p>
          <p>Για παράδειγμα, οι μετακινήσεις από τις 19 Δεκεμβρίου έως τις 2 Ιανουαρίου ενδέχεται να είναι σημαντικά φθηνότερες από τις 21 Δεκεμβρίου έως τις 4 Ιανουαρίου. Με το Google Flights εντοπίζετε εύκολα τις ημερομηνίες που θα σας εξοικονομήσουν χρήματα.</p>
          <p>Στο Google Flights συγκρίνονται μόνο τις τιμές που προσφέρονται από τις ίδιες τις αεροπορικές εταιρείες και όχι από τους ταξιδιωτικούς πράκτορες μέσω διαδικτύου. Με ελάχιστες εξαιρέσεις οι καλύτερες προσφορές σε μεγάλες αεροπορικές εταιρείες εντοπίζονται σπάνια με κράτηση απευθείας μέσω της ίδιας της αεροπορικής εταιρείας. Με την κράτηση μέσω Online Travel Agency (ΟΤΑ), θα βρείτε φθηνά αεροπορικά εισιτήρια. Ο καλύτερος τρόπος για να συγκρίνετε μαζικά τις τιμές που έχετε εντοπίσει σε Google Flights είναι Expedia και Kayak.</p>
          <p>Και ναι, μπορείς να εμπιστευθτείτε τα OTAs -γνωστούς και σημαντικούς ιστότοπους – απλά να γνωρίζετε ότι χρεώνουν υψηλά τέλη αν χρειαστεί αλλαγή στην κράτησή σας.</p>
          <figure><img src="./assets/images/ftinaeis4.jpg" class="img-fluid" alt="ftinaeis4"></figure>
      <h3>Το τρικ με τα γειτονικά αεροδρόμια</h3>
          <p>Η πτήση από/προς αεροδρόμια κοντά στον προορισμό σας μπορεί συχνά να κάνει ακόμα πιο φθηνό το αεροπορικό εισιτήριο και το κόστος ταξιδιού. Για παράδειγμα αν θέλετε να πάτε Νέα Υόρκη τα Χριστούγεννα και το εισιτήριο είναι πανάκριβο, αναζητήστε επιλογές και σε κοντινούς κόμβους όπως η Φιλαδέλφεια. Το ταξίδι από Νέα Υόρκη έως Φιλαδέλφεια με τρένο είναι 129,6 χλμ. και διαρκεί μόλις 57 λεπτά. Υπάρχουν 7 συνδέσεις ανά ημέρα, με την πρώτη αναχώρηση στο 01:09 και την τελευταία στο 00:58. Θα ταξιδέψετε από Νέα Υόρκη στη Φιλαδέλφεια με τρένο μόλις με 12,66€ (αν και η τιμή μπορεί να φτάσει μέχρι και 134,86€!). Η καλύτερη τιμή πάντως για αυτή τη διαδρομή είναι 12,66€.</p>
          <figure><img src="./assets/images/ftinaeis5.jpg" class="img-fluid" alt="ftinaeis5"></figure>
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