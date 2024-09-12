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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Χριστούγεννα στα Ιωάννινα: όλη η πόλη, μια γιορτή</h2>
      <p class="blog-post-meta">2 Ιανουαρίου 2024, Φαίη</p>
      <img src="./assets/images/ioannina2_32.jpg" class="img-fluid" alt="ioannina2_32">
      <article class="blog-post">
        <p><em>Η στολισμένη πλατεία Πύρρου στα Ιωάννινα</em></p><hr>
        <p>Στα Γιάννενα τις παραμονές των Χριστουγέννων και της Πρωτοχρονιάς η πόλη γεμίζει ασφυκτικά από κόσμο, αφού από νωρίς το πρωί όλα τα μαγαζιά εστίασης ξεκινούν να προσφέρουν ψητά και ποτό σε όλους. Στους δρόμους ηχούν παραδοσιακές μουσικές ενώ την τιμητική του έχει το τσίπουρο για τ’ οποίο η πόλη φημίζεται.</p>
        <p>Μια βόλτα στους πεζόδρομους της πόλης είναι αρκετή για να σε βάλουν στο κλίμα. Οι Γιαννιώτες έχουν φαντασία και δημιουργούν διαφορετικό φωτισμό και στολισμό σε κάθε πλάτος και μήκος της πόλης. Όλα ξεκινούν από τους κεντρικούς δρόμους για να φτάσουμε στη πλατεία Πάργης και στην κεντρική πλατεία όπου κορυφώνεται ο συνδυασμός γούστου και τεχνολογίας. Μια ατμόσφαιρα βγαλμένη από παραμύθι περιμένει μικρούς και μεγάλους να χαμογελάσουν και να διασκεδάσουν γιορτάζοντας την γέννηση του Θεανθρώπου και τον ερχομό του νέου έτους. Τα καταστήματα βάζουν τα γιορτινά τους και προσφέρουν τις υπηρεσίες τους στους Γιαννιώτες και στους επισκέπτες τους.</p>
      <h3>Τι να δείτε/ να κάνετε τα Χριστούγεννα στα Γιάννενα</h3>
        <h4>Βόλτα στη λίμνη</h4>
          <p>Μία βόλτα στη λίμνη θεωρείται απαραίτητη όποια εποχή και να επισκεφθείτε την πόλη. Ωστόσο τα Χριστούγεννα το Παραλίμνιο Fun Park στα Ιωάννινα μετατρέπεται σε χριστουγεννιάτικο χωριό. Θα δείτε το σπίτι του Ασημάκη, της Ασημένιας, το εργαστήρι του Ασημοχέρη και θα κάνετε πατινάζ. Τα μικρά σας θ’ ανέβουν στο γιορτινό καρουζέλ και θα συμμετέχουν σε δράσεις που θα τα ενθουσιάσουν.</p>
          <figure><img src="./assets/images/ioannina3.jpg" class="img-fluid" alt="ioannina3"><figcaption>Η λίμνη Παμβώτιδα</figcaption></figure>
        <h4>Βόλτα στο νησάκι</h4>
          <p>Το νησάκι της Παμβώτιδας, στο οποίο μπορείς να πας με καραβάκια που φεύγουν από τον Μόλο, είναι ένα από τα ελάχιστα νησιά λιμνών στον κόσμο που κατοικούνται. Έχει τα δικά του σπίτια και παραδοσιακά μαγαζιά, καθώς και μοναστήρια με εξαιρετικό ενδιαφέρον, όπως η Μονή Αγίου Νικολάου Φιλανθρωπηνών και η Μονή Αγίου Παντελεήμονα, όπου στεγάζεται το Μουσείο Αλή Πασά και Επαναστατικής Περιόδου.</p>
          <figure><img src="./assets/images/ioannina4.jpg" class="img-fluid" alt="ioannina4"><figcaption>Ο δρόμος που βρίσκεται περιμετρικά του νησιού.</figcaption></figure>
        <h4>Περιπλανηθείτε στο κάστρο και στο ιστορικό κέντρο</h4>
          <p>Η περιήγηση στο εσωτερικό του φέρνει τον επισκέπτη σε επαφή με την ιστορία. Από όποια πύλη κι αν διαβεί κάποιος με την είσοδο του, η φασαρία της πόλης μένει απ’ έξω. Ένας παραδοσιακός οικισμός, ένα σταυροδρόμι πολιτισμών και θρησκειών. Επάνω ψηλά, το Ιτς Καλέ, η Ακρόπολη.</p>
          <figure><img src="./assets/images/ioannina5.jpg" class="img-fluid" alt="ioannina5"><figcaption>Επάνω αριστερά: Ρολόι της πλατείας απέναντι από το δημαρχείο. Στη μέση: η είσοδος του κάστρου.</figcaption></figure>
          <p>Όσο για το κέντρο της πόλης, μια καλή αφετηρία είναι το Ρολόι της πλατείας απέναντι από το δημαρχείο. Ο κεντρικός δρόμος, γεμάτος χρυσοχοεία και καταστήματα με είδη λαϊκής τέχνης και σουβενίρ. Ένας μικρός λαβύρινθος από διατηρητέα κτίρια, παλιές εμπορικές στοές, χάνια και παλιά λαϊκά σπίτια.</p>
        <h4>Ρεβεγιόν Χριστουγγένων και Πρωτοχρονιάς</h4>
          <p>Γλεντήστε και βιώστε την ηπειρώτικη βερσιον του ρεβεγιόν. Ένα μεγάλο γλέντι στήνεται την παραμονή σε ολόκληρη την πόλη των Ιωαννίνων. Ντόπιοι και επισκέπτες γίνονται μία τεράστια παρέα. Μουσικές, κλαρίνα, χάλκινα, ψησταριές στήνονται σχεδόν σε κάθε μαγαζί, το κρασί και το τσίπουρο να ρέει άφθονο!</p> 
          <p>Οι ψησταριές και τα αυτοσχέδια γλέντια αποτέλεσαν μία συνήθεια των τελευταίων ετών που όμως αγκαλιάστηκε και αγαπήθηκε από όλους με αποτέλεσμα χρόνο με τον χρόνο να καθιερώνονται και να αποτελούν πλέον… έθιμο σε όλες τις μεγάλες γιορτές.</p>
          <figure><img src="./assets/images/ioannina6.jpg" class="img-fluid" alt="ioannina6"><figcaption>Οι δρόμοι των Ιωαννίνων στο ρεβεγιόν</figcaption></figure>
        <h4>Εκδρομές στα Ζαγοροχώρια</h4>
          <p>Φυσικά μη παραλείψετε εκδρομές στα πέριξ. Γνωρίστε τα παραδοσιακά χωριά των Ιωαννίνων. Μέτσοβο, Ζαγόρι, Κόνιτσα, Τζουμέρκα, Δωδώνη και πολλά άλλα ντύνονται στα λευκά γοητεύοντας κάθε ταξιδιώτη. Τα μοναδικά φαράγγια, οι εντυπωσιακές λίμνες, η απαράμιλλη φύση, τα γραφικά χωριά, το φαγητό, η φιλοξενία των ανθρώπων κάνουν την περιοχή του Ζαγορίου να φιγουράρει στους αγαπημένους ορεινούς προορισμούς των Ελλήνων. Ένας προορισμός για όλες τις εποχές σε περιμένει.</p>
          <figure><img src="./assets/images/ioannina7.jpg" class="img-fluid" alt="ioannina7"><figcaption>Εικόνες απο τα Ζαγοροχώρια</figcaption></figure>
      <h3>Δοκιμάστε ντόπιο φαγητό</h3>
          <p>Γενικά η Ήπειρος συνδυάζει βουνό και θάλασσα, και έτσι αυτή η ιδιομορφία του εδάφους της προσφέρει αμέτρητα γευστικά πιάτα, που θα κάνουν την επίσκεψή σας εκεί, μια μοναδική γαστρονομική εμπειρία!  Διαθέτει ποικιλία γαλακτομικών προϊόντων, ντόπιο κρέας, λιμνίσια και ποταμίσια ψάρια, εξαιρετικά κρασιά και αποστάγματα, λαχταριστά σιροπιαστά γλυκά και φυσικά πεντανόστιμες… πίτες!</p>
        <h4>Μπουγάτσα στο Select</h4>
          <p>Tο Select είναι ένα αυθεντικό σημείο αναφοράς για τα Γιάννενα. Δεν υπάρχει περίπτωση να τα επισκεφθείς και να μη δοκιμάσεις τη διάσημη μπουγάτσα του, είτε με κρέμα είτε με τυρί. Απέναντι από το κτίριο της ηρωικής 8η Μεραρχίας, δύο μεγάλα στρογγυλά χάλκινα ταψιά αποτελούν το σήμα-κατατεθέν του.</p>
          <figure><img src="./assets/images/ioannina8.jpg" class="img-fluid" alt="ioannina8"><figcaption>Η μπουγάτσα του μαγαζιού. Διεύθυνση: Αβέρωφ 2, Ιωάννινα 452 21.</figcaption></figure>
        <h4>Χασαποταβέρνα Λισγάρας</h4>
          <p>Δε γίνεται κάποιος να πάει στα Ιωάννινα και να μην επισκεφθεί τον Λισγάρα, οπού θα βρει κάποια από τα καλύτερα παιδάκια που έχει φάει.</p>
          <figure><img src="./assets/images/ioannina9.jpg" class="img-fluid" alt="ioannina9"><figcaption>Τα παϊδάκια του. Διεύθυνση: Εθ. Αντίστασης 148, Κατσικάς 452 21</figcaption></figure>          
        <h4>Εστιατόριο - Καφέ 'Κουκουβάγια'</h4>
         <p>Η κουκουβάγια είναι ένα εξαιρετικό εστιατόριο στο χωριό Λιγκιάδες, με την καλύτερη θέα προς τα Ιωάννινα και την λίμνη. Εμείς όταν το επισκεφθήκαμε είχαμε την τύχη να απολάυσουμε ένα σπάνιο φαινόμενο που η ομορφιά του προκαλούσε δέος. Το σύννεφο της ομίχλης είχε καλύψει τη λίμνη των Ιωαννίνων και την πόλη, μετατράποντάς την ολόκληρη σε κινηματογραφικό σκηνικό. Έτσι εμείς απολαύσαμε τον καφέ μας πάνω απο τα σύννεφο ομίχλης, φυσικά με ήλιο.</p>
         <figure><img src="./assets/images/ioannina10.jpg" class="img-fluid" alt="ioannina10"><figcaption>Η θέα απο το εστιατόριο. Διεύθυνση: Λιγκιάδες 455 00</figcaption></figure>          
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