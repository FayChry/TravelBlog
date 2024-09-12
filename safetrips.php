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
      <h2 class="display-6 mb-1" style="color:#9A482E;">10 συμβουλές για ασφαλή ταξίδια</h2>
      <p class="blog-post-meta">6 Φεβρουαρίου 2019, Φαίη</p>
      <img src="./assets/images/safetrips1.jpg" class="img-fluid" alt="safetrips1">
      <article class="blog-post" style="text-align:justify">
        <hr>
        <p>Τι πιο σημαντικό από την ασφάλεια σε ένα ταξίδι; Και τι καλύτερο από το να ακούς τις κατάλληλες συμβουλές για αυτό από κάποιον που έχει ταξιδέψει σε όλο τον κόσμο! Σας δίνω 10 συμβουλές για ασφάλεια στα ταξίδια που πιθανόν να μην γνωρίζετε!</p>
        <p>Είναι γεγονός, ότι πολλοί Έλληνες αγνοούν βασικούς κανόνες ασφάλειας στο ταξίδι με αποτέλεσμα να έχουν δυσάρεστα απρόοπτα. Πολλοί γυρνάνε από το ταξίδι τους χωρίς κινητά, χρήματα, διαβατήρια, βαλίτσες κ.λπ. Κρίμα δεν είναι; Το παρακάτω κείμενο περιέχει κανόνες ασφάλειας για να μάθετε τι πρέπει να προσέχετε!</p>
      <h3>10 συμβουλές για ασφάλεια στα ταξίδια</h3>
          <p><b>1. Μέσα στις βαλίτσες σας, που δίνετε στο αεροπλάνο, δεν θα έχετε ποτέ χρήματα ή σημαντικά έγγραφα, </b>συμβόλαια, ταυτότητες, ιδιωτικά συμφωνητικά και άλλα τέτοιου είδους σημαντικά.  Στις βαλίτσες σας, πάντα θα γράφετε όλα τα στοιχεία σας και καλό θα ήταν πριν τις παραδώσετε να βγάλετε μία φωτογραφία τους. Ναι μη γελάτε. Όταν καταστραφούν ή χαθούν θα δείτε πόσο χρήσιμη θα είναι αυτή η φωτογραφία, για να πάρετε την αποζημίωσή σας.</p>
          <p><b>2. Μην κυκλοφορείτε σαν τουρίστες.</b> Μη δίνετε στόχο και μην ξεχωρίζετε σαν την μύγα μες το γάλα, προσπαθήστε να κυκλοφορείτε σαν τους ντόπιους χαλαροί και άνετοι. Δεν χρειάζεται κάθε τρεις και λίγο να σταματάτε και να κοιτάτε τον χάρτη, ιδιαιτέρως σε επικίνδυνες περιοχές.</p>
          <p><b>3. Στο ταξίδι ποτέ δεν πρέπει να χαλαρώνετε,</b> τα μάτια σας δεκατέσσερα, διότι οι απατεώνες εσάς περιμένουν για να ζήσουν. Πάντα να παίρνετε ταξί με ραντεβού. Ποτέ μη σταματάτε στον δρόμο αυτοκίνητα και οδηγούς που είναι πρόθυμοι να σας πάνε στον προορισμό σας. Ποτέ δεν μπαίνετε σε ταξί-μαϊμού που δεν έχουν τηλέφωνο απέξω για να γνωρίζετε τα στοιχεία της εταιρείας.</p>
          <p><b>4. Κάντε εκτενή έρευνα στο διαδίκτυο</b> πριν την επιλογή προορισμού ή την απόρριψή του, για αξιόπιστη ενημέρωση όσον αφορά την ασφάλεια του προορισμού.</p>
          <p><b>5. Ψηφιοποιήστε τα σημαντικά έγγραφα και φέρετέ τα μαζί σας σε ένα ασφαλές στικ.</b> Αντίγραφα του διπλώματος οδήγησης, του διαβατηρίου, της ασφάλεια ταξιδιού, των κρατήσεων του ξενοδοχείου, των πληροφοριών πτήσης και τηλέφωνα πρεσβειών καθώς και οτιδήποτε άλλο πιστεύετε ότι θα χρειαστείτε. Έχετε το στικ αυτό μαζί σας ανά πάσα στιγμή.</p>
          <figure><img src="./assets/images/safetrips2.jpg" class="img-fluid" alt="safetrips2"></figure>
          <p><b>6. Αποφύγετε το πορτοφόλι που κρέμεται από το λαιμό.</b> Μην το προτιμήσετε καθώς είναι τόσο αναγνωρίσιμο που οι κλέφτες μπορούν και το ξεχωρίζουν μέσα από το πλήθος αφαιρώντας το. Αντ’ αυτού, χρησιμοποιήστε ένα κρυφό πορτοφόλι που μπορεί να προσαρτάται στη ζώνη και να κρύβεται στη μέσα μεριά του παντελονιού.</p>
          <p><b>7. Κρατήστε το στόμα σας κλειστό όσον αφορά τα ταξιδιωτικά σχέδια. </b>Αυτό προτείνεται γιατί ποτέ δεν ξέρεις ποιος ακούει, ή διαβάζει. Οι κακοποιοί παρακολουθούν τα social media και τα περισσότερα αδικήματα προέρχονται από ανθρώπους που γνωρίζετε είτε άμεσα είτε είναι φίλοι φίλων. Αν δημοσιεύσετε οτι θα πάτε στη Ντίσνειλαντ, τότε ο κόσμος ξέρει ότι το σπίτι σας θα είναι άδειο!</p>
          <p><b>8. Κλείστε δωμάτιο σε ψηλό όροφο και έχετε ένα επιπλέον κλειδί. </b>Ένας εύκολος τρόπος να ξεγελάσετε τους τρίτους ότι δεν είστε ένας εύκολος στόχος, επειδή ταξιδεύετε μόνος είναι να ζητήσετε ένα επιπλέον κλειδί  από τη ρεσεψιόν. Επίσης, εφόσον τα περισσότερα αδικήματα συμβαίνουν στους χαμηλούς ορόφους, καλύτερα να κλείνουμε δωμάτιο από τον τρίτο όροφο κι επάνω.</p>
          <p><b>9. Μη χρησιμοποιείτε το χρηματοκιβώτιο του ξενοδοχείου. </b>«Ποτέ δεν αφήνω διαβατήριο ή οτιδήποτε αξίας στο δωμάτιο του ξενοδοχείου. Τα χρηματοκιβώρια δεν έχουν υψηλό επίπεδο ασφάλειας και σχεδόν οποιοσδήποτε εργαζόμενος στο ξενοδοχείο μπορεί να παρακάμψει τον κωδικό και να τα ξεκλειδώσει»!</p>
          <p><b>10. Να συμπεριφέρεστε όπως οι ντόπιοι. </b>Είναι σημαντικό να δείχνετε και να λειτουργείτε όπως ένας ντόπιος, σεβόμενοι τα έθιμα και την κουλτούρα του προορισμού. Μην προκαλείτε φασαρία, να ντύνεστε κατάλληλα, να είστε ευγενικοί και να περπατάτε με αυτοπεποίθηση.</p>
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