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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Ύδρα: Η Αρχόντισσα του Αργοσαρωνικού</h2>
      <p class="blog-post-meta">15 Ιουνίου 2019, Φαίη</p>
      <img src="./assets/images/hydra.jpg" class="img-fluid" alt="hydra">
      <article class="blog-post">
        <p><em>Το κέντρο της Ύδρας στο λιμάνι</em></p><hr>
        <p>Η Ύδρα είναι ένας από τους πιο κοσμοπολίτικους προορισμούς της νησιωτικής Ελλάδας. Η μακραίωνη ναυτική παράδοση λάμπει μέχρι σήμερα στα επιβλητικά αρχοντικά Υδραίων καπεταναίων ενώ η ένδοξη συμβολή του νησιού στην Ελληνική Επανάσταση αναβιώνει στα σημαντικά μουσεία του.</p>
        <p>Με το που πατάτε το πόδι σας στα πλακόστρωτα του λιμανιού το καταλαβαίνετε. Η καθημερινότητα των Υδραίων θυμίζει ελάχιστα τον 21ο αιώνα. Τα πάντα σε αυτό το νησί (και οι βαλίτσες σου!) κουβαλιούνται με τα χέρια, με μουλάρια ή με τα καρότσια. Αυτοκίνητα δεν υπάρχουν και δεν επιτρέπονται. Η ταχύτητα πέφτει. Στο φόντο τα καλοδιατηρημένα αρχοντικά και τα επιβλητικά δημόσια κτήρια. Στις διακοπές στην Ύδρα, το ρολόι του χρόνου γυρίζει πολλά χρόνια πίσω.</p>
      <h3>Ανακαλύψτε τα αξιοθέατα της Ύδρας</h3>
        <h4>Περιηγηθείτε στο κοσμοπολίτικο νησί των διασήμων</h4>
          <p>Σε κάθε σημείο του λιμανιού, η μακραίωνη ναυτική ιστορία της Ύδρας. Κανόνια που ακόμη σημαδεύουν το Αιγαίο, προτομές ναυάρχων, σπίτια καπεταναίων. Εδώ έζησαν επαναστάτες, όπως ο Μιαούλης και ο Κουντουριώτης. Πλάι σε αυτή την ιστορία, εκείνη του κοσμοπολιτισμού. Στο νησί αυτό του Αργοσαρωνικού έγιναν τα γυρίσματα της ταινίας «Το παιδί και το Δελφίνι» με τη Σοφία Λώρεν. Από εδώ πέρασαν οι: Ωνάσης, Κάλλας, Ρεξ Χάρισον, Πήτερ Ουστίνωφ, Λέοναρντ Κοέν, Έρικ Κλάπτον, Ρόλινγκ Στόουνς… Μαζί και οι μεγάλοι των Γραμμάτων και των Τεχνών: Πικάσο, Σαγκάλ, Μίλλερ.</p>
          <figure><img src="./assets/images/hydra2.jpg" class="img-fluid" alt="hydra2"><figcaption>Το λιμάνι της Ύδρας</figcaption></figure>
        <h4>Κοντοσταθείτε σε τρία σημαντικά αξιοθέατα</h4>
          <p>Το Περίπτερο, η Σπηλιά και η Υδρονέτα. Τρία αξιοθέατα της Ύδρας που πρέπει να απολαύσετε. Στο Περίπτερο (σήμερα λειτουργεί ως εστιατόριο) θα κάνετε στάση, για να χαζέψετε τη θέα και τα τεράστια κανόνια. Στην προβλήτα της Υδρονέτας θα στριμώξετε την πετσέτα σας και θα βιαστείτε να πιάσετε τραπέζι για το ηλιοβασίλεμα. Από εκεί θα απολαύσετε τον ήλιο να κάνει βουτιά στο Αιγαίο. Στη Σπηλιά θα πιείτε καφέ ή θα χαρείτε το μπάνιο σας.</p>
          <figure><img src="./assets/images/hydra4.jpg" class="img-fluid" alt="hydra4"><figcaption>Η Υδρονέτα</figcaption></figure>
        <h4>Το φαρμακείο-μουσείο</h4>
          <p>Θα το βρείτε μέσα στα σοκάκια της πόλης της Ύδρας. Διατηρεί τη μορφή που είχε από το 1890, όταν και άνοιξε! Αποτελεί ένα από τα αξιοθέατα της Ύδρας και σημείο αναφοράς για τους Υδραίους που από πάππου προς πάππου έπαιρναν από εκεί τα φάρμακά τους.</p>
          <figure><img src="./assets/images/hydra3.jpg" class="img-fluid" alt="hydra3"><figcaption>Το φαρμακείο</figcaption></figure>
        <h4>Διασχίστε τα καμίνια, το μικρό λιμάνι της τέχνης</h4>
          <p>Περπατήστε από την πόλη προς τα Καμίνια, με θέα τη θάλασσα. Στο πανέμορφο μικρό λιμάνι των Καμινιών, ανακαλύψτε το «Κόκκινο σπίτι». Σημαντικό αξιοθέατο της Ύδρας, χτίστηκε το 1786, κατοικήθηκε από τον ναύαρχο Μιαούλη και σήμερα φιλοξενεί εκθέσεις.</p>
          <figure><img src="./assets/images/hydra5.jpg" class="img-fluid" alt="hydra5"><figcaption>Το λιμάνι των Καμινιών</figcaption></figure>
      <h3>Οι παραλίες της Ύδρας</h3>
        <p>Οι παραλίες δεν είναι το δυνατό σημείο της Ύδρας, ωστόσο, δεν θα μείνετε εντελώς παραπονεμένοι. Σε αυτές που είναι κοντά στην πόλη θα πάτε περπατώντας. Μονοπάτια οδηγούν στις υπόλοιπες, ωστόσο υπάρχει η εναλλακτική να πάρετε καραβάκια, ή θαλάσσια ταξί.</p>        
        <h4>Παραλία Αυλάκι</h4>
          <p>Είναι μια πανέμορφη μικρή παραλία γεμάτη βότσαλα, η οποία το βράδυ φωταγωγείται προσφέροντας θαυμάσιο θέαμα. Κατεβαίνεις από σκαλάκια αμέσως μετά την Υδρονέτα, έχει πρασινογάλαζα νερά και ένα μώλο στον οποίο μπορεί να κάνει κάποιος ηλιοθεραπεία.</p>
          <figure><img src="./assets/images/hydra6.jpg" class="img-fluid" alt="hydra6"><figcaption>Παραλία Αυλάκι</figcaption></figure>
        <h4>Πλάκες Βλυχού</h4>
        <p>Ίσως η πιο δημοφιλής, οργανωμένη και οικογενειακή παραλία της Ύδρας, με γκρίζο βότσαλο και ωραία νερά. Αν βρεθείτε στο νησί στη διάρκεια της υψηλής καλοκαιρινής σεζόν, προετοιμαστείτε να στριμωχτείτε μαζί με πολλούς άλλους στις ομπρέλες-ξαπλώστρες της. Θα δυσκολευτείτε επίσης να μπείτε στη θάλασσα, γιατί οι πέτρες γλιστράνε. Στον ωραίο μικρό οικισμό του Βλυχού υπάρχουν και ταβερνάκια.</p>
          <figure><img src="./assets/images/hydra7.jpg" class="img-fluid" alt="hydra7"><figcaption>Παραλία Βλυχού</figcaption></figure>
        <h4>Μπίστη (ή Μπίστι)</h4>
          <p>Μικρή βοτσαλωτή παραλία με θέα στη βραχονησίδα Πέτασι. Tο Μπίστι είναι ο νοτιότερος όρμος του νησιού και περιβάλλεται από ψηλά βράχια. Είναι οργανωμένη παραλία και προσφέρεται για θαλάσσια παιχνίδια, μακροβούτια από τα βράχια και ψαροντούφεκο, δίπλα σε κατάφυτο πευκοδάσος, στο οποίο υπάρχει άλλη μία αρχαία Πρωτοελλαδική εγκατάσταση.</p>
          <figure><img src="./assets/images/hydra8.jpg" class="img-fluid" alt="hydra8"><figcaption>Παραλία Μπίστι</figcaption></figure>
      <h3>Προτάσεις για φαγητό</h3>
        <h4>Téchnē Restaurant & Social</h4>
          <p>Το Téchnē Restaurant & Social στεγάζεται σε ένα πέτρινο κτήριο στην Ύδρα που χρονολογείται το 1870 και τα τελευταία 3 χρόνια προάγει την… τέχνη της γαστρονοµίας!</p>
          <figure><img src="./assets/images/hydra9.jpg" class="img-fluid" alt="hydra9"><figcaption>Ο χώρος του εστιατορίου Téchnē</figcaption></figure>
          <p>Αρκεί να διανύσετε τα 500µ. που το χωρίζουν από το λιµάνι για να βρεθείτε στην ολάνθιστη αυλή του όπου θα γευτείτε εκτός από… ονειρική θέα, τις à la minute συνταγές του chef και συνιδιοκτήτη Γιάννη Μιχαλόπουλου. Φόρο τιµής σε µια new age ελληνική κουζίνα που αναδεικνύει τοπικές πρώτες ύλες.</p>
          <figure><img src="./assets/images/hydra10.jpg" class="img-fluid" alt="hydra10"><figcaption>Πιάτα του εστιατορίου Téchnē <a class="aplolink" href="https://techne-hydra.com/" target="_blank">Επισκεφθείτε την σελίδα του εστιατορίου εδώ</a></figcaption></figure>
        <h4>Veranda Restaurant</h4>
          <p>Το Restaurant "Veranda" βρίσκεται στην άκρη του λιμανιού της Ύδρας, ανεβασμένο στη ταράτσα ενός παλιού Υδραίϊκου σπιτιού, έχοντας μαγευτική θέα στο λιμάνι και στην παραλία της Ύδρας. Με εκλεπτισμένη ευγένεια, ατμοσφαιρικό ντεκόρ, στυλάτο περιβάλλον, ιδιαίτερες γεύσεις, "φρεσκάδα" και γρήγορο service, η πιο γευστική Βεράντα της Ύδρας, αποτελεί την απόλυτη πρόταση για ένα ιδιαίτερο δείπνο.</p>
          <figure><img src="./assets/images/hydra11.jpg" class="img-fluid" alt="hydra11"><figcaption>Η θέα απο την ταβέρνα</figcaption></figure>          
          <p>Στο Restaurant "Veranda" χάρη στη φροντίδα και στα πρώτης ποιότητας φρέσκα υλικά που χρησιμοποιεί εδώ και χρόνια ο ιδιοκτήτης και chef του μαγαζιού Κώστας, δημιουργούνται εξαιρετικά πιάτα με κλασσικές ιταλικές και ελληνικές γεύσεις που "απογειώνονται".</p>
          <figure><img src="./assets/images/hydra12.jpg" class="img-fluid" alt="hydra12"><figcaption>Πιάτα του εστιατορίου "Veranda"</figcaption></figure>
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