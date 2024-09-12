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
        <a class="nav-item nav-link link-body-emphasis active" href="kosmos.php">ΚΟΣΜΟΣ</a>
        <a class="nav-item nav-link link-body-emphasis" href="traveltips.php">TRAVEL TIPS</a>
        <a class="nav-item nav-link link-body-emphasis" href="contact.php">CONTACT</a>
      </nav>
    </div>
  </div>
  
<main class="container">
  <!--Blog Post -->
  <div class="row g-5">
    <div class="col-md-8" style="text-align:justify">
      <h2 class="display-6 mb-1" style="color:#9A482E;">Μπολόνια: Η κόκκινη πόλη της Ιταλίας</h2>
      <p class="blog-post-meta">25 Σεπτεμβρίου 2023, Φαίη</p>
      <img src="./assets/images/bologna.jpg" class="img-fluid" alt="bologna">
      <article class="blog-post">
        <p><em>Κεντρική πλατεία της πόλης Piazza Maggiore</em></p><hr>
        <p>Είναι μια πόλη με ιδιαίτερη ταυτότητα, ξεχωριστή και με έναν τρόπο πρωτότυπη ανάμεσα στις δεκάδες πανέμορφες πόλεις και κωμοπόλεις της Ιταλίας. Το κόκκινο-πορφυρό (ενίοτε και πορτοκαλοκίτρινο) χρώμα που έχουν τα περισσότερα σπίτια στο ιστορικό κέντρο της Μπολόνια είναι το κυριότερο χαρακτηριστικό που την κάνει μοναδική.</p>
        <p>Όταν κάποιος σκέφτεται την Ιταλία, σίγουρα η Μπολόνια δε θα είναι μέσα στις πρώτες τρεις πόλεις που θα του έρθουν στο μυαλό, καθώς σίγουρα η πρωτεύουσα της χώρας η Ρώμη, η «πρωτεύουσα» της μόδας το Μιλάνο και η «πρωτεύουσα» του έρωτα η Βενετία, έχουν τραβήξει με το πέρασμα των χρόνων όλα τα μάτια και τα φώτα της δημοσιότητας επάνω τους. Οι λάτρεις του καλού φαγητού γνωρίζουν πως η «πρωτεύουσα» του φαγητού δεν είναι άλλη από την Μπολόνια ενώ αν είσαι από αυτούς που δεν το ήξεραν ή δεν το είχαν ακούσει ποτέ μέχρι σήμερα, ένα ταξίδι εκεί θα σε πείσει.</p>
      <h3>Tι να δείτε στη Μπολόνια</h3>
        <h4>Οι δύο πύργοι, τα πιο εμβληματικά σύμβολα της πόλης</h4>
          <p>Σύμβολο κατατεθέν της πόλης είναι οι δύο πύργοι, Torre Asinelli και Torre Garisenda. Οι πύργοι ανήκαν στις πλούσιες οικογένειες της πόλης και το ύψος τους δήλωνε το πόσο ισχυροί ήτανε και πόσοι δύναμη κατείχαν. Σκεφτείτε ότι κάποτε υπήρχαν πάνω από 100 πύργοι στη Μπολόνια!  Εάν αντέχετε μπορείτε να ανεβείτε τα  498 σκαλιά και να θαυμάσετε την υπέροχη θέα. Λένε ότι φαίνεται μέχρι και η Αδριατική, εγώ δυστυχώς δεν ανέβηκα.</p>
          <figure><img src="./assets/images/bologna2.jpg" class="img-fluid" alt="bologna2"><figcaption>Οι πύργοι της Μπολόνια</figcaption></figure>
        <h4>Basilica di San Petronio</h4>
          <p>Γοτθική βασιλική με ημιτελή πρόσοψη από τούβλο και μάρμαρο, που στεγάζει 22 παρεκκλήσια με έργα τέχνης. Ο San Petronio, προστάτης της πόλης, θα σου τραβήξει σίγουρα την προσοχή με την μισοτελειωμένη πρόσοψή του αλλά και λόγω του μεγέθους του, καθώς είναι η 4η μεγαλύτερη εκκλησία της Ιταλίας! Παρατήρησε την υπέροχη κεντρική είσοδο «Porta Magna» και αφιέρωσε λίγο χρόνο να επισκεφτείς τον ναό, η είσοδος ειναι δωρεάν. Περπατώντας αριστερά του ναού, στην Via dell’Archiginnasio, φτάνεις στο πίσω μέρος του San Petronio, όπου βρίσκεται ένα ασανσέρ και σκάλες για να ανέβεις στην ταράτσα του και να απολαύσεις πανοραμική θέα.</p>
          <figure><img src="./assets/images/bologna3.jpg" class="img-fluid" alt="bologna3"><figcaption>Η εκκλησία του Αγίου Πετρονίου</figcaption></figure>
        <h4>Piazza Maggiore</h4>
          <p>Κεντρική πλατεία της πόλης, γεμάτη με μεσαιωνικά και αναγεννησιακά κτίρια, σειρές με καφετέριες και πλανόδιους μουσικούς. Εδώ θα βρεις το συντριβάνι του Ποσειδώνα (Fontana dell Nettuno) μπροστά από το  Palazzo Comunale.</p>
          <p>Η είσοδος στην πλατεία γίνεται εκεί που συναντιούνται οι 3 δρόμοι που σχηματίζουν το «Τ» της Μπολόνια. Via Rizzoli, Via Ugo Bassi και η μεγαλύτερη Via dell’Indipendenza που τις τέμνει. Η τελευταία είναι ο πιο κεντρικός δρόμος γεμάτος με εμπορικά, που οδηγεί από το κέντρο, στον σταθμό των τρένων. Το πρώτο που σου τραβά την προσοχή είναι το συντριβάνι του Nettuno, στην μικρή Piazza del Nettuno . Δεξιά η Biblioteca Salaborsa με ελεύθερη είσοδο και αριστερά το Palazzo Re Enzo, ένα παλάτι του 13ου αιώνα και το Palazzo del Podestà δημόσιο κτίριο του ίδιου αιώνα σε αναγεννησιακό στυλ.</p>
          <p>Προχωρώντας στην πλατεία, στο βάθος δεξιά βρίσκεται το Palazzo d’Accursio, το δημαρχείο της πόλης από τον 14ο αιώνα με τον χαρακτηριστικό πύργο-ρολόι. Εκεί υπάρχει και ένα παρεκκλήσι γεμάτο με νωπογραφίες και ένα μουσείο καλών τεχνών.</p>
          <figure><img src="./assets/images/bologna4.jpg" class="img-fluid" alt="bologna4"><figcaption>Η πλατεία Maggiore και το συντριβάνι του Ποσειδώνα</figcaption></figure>
        <h4>Teatro Anatomico</h4>
          <p>Αίθουσα του 16ου αιώνα που φιλοξενούσε διαλέξεις ανατομίας και μαθήματα ανατομής πτωμάτων και διαθέτει περίτεχνα ξύλινα γλυπτά. Με μόλις 3€ μπες στο  Μουσείο επιστημών, στην πρώτη έδρα του πανεπιστημίου της Μπολόνια που χρονολογείται από το 1088. Εκπληκτική είναι η αίθουσα της ανατομίας. Οι εγχειρήσεις γίνονταν δημόσια: ναι μπροστά στο πλήθος κόσμου και στον ιερέα.  Η βιβλιοθήκη έχει παραπάνω από 500,000 κείμενα και 12,000 χειρόγραφα, όλα μεσαιωνικά!</p>
          <figure><img src="./assets/images/bologna5.jpg" class="img-fluid" alt="bologna5"><figcaption>Το Μουσείο επιστημών και η αίθουσα της ανατομίας</figcaption></figure>
        <h4>Canali di Bologna</h4>
          <p>Ήξερες ότι και η Μπολόνια έχει κανάλια; Κι όμως μια «μικρή Βενετία» είναι κρυμμένη στην πόλη! Στην via Piella θα βρεις το γνωστό πια παράθυρο Finestrella που σου δίνει την δυνατότητα ανοίγοντάς το να δεις ένα από τα κανάλια της Μπολόνια, το Canale delle Moline. Το ίδιο κανάλι μπορείς να δεις και από την την παράλληλη Via Malcontenti, αποφεύγοντας την μεγάλη ουρά που θέλει να φωτογραφίσει το παράθυρο. Ακριβώς απέναντι από το παράθυρο, ένα μπαλκόνι με θέα στο Canale di Reno, το οποίο μπορείς να θαυμάσεις και από την παράλληλη Via Guglielmo Oberdan όπου θα βρεις και τις χαρακτηριστικές κλειδωνιές αγάπης!</p>
          <figure><img src="./assets/images/bologna6.jpg" class="img-fluid" alt="bologna6"><figcaption>Finestrella – Παράθυρο στα κανάλια της Μπολόνια</figcaption></figure>
        <h4>Portici ή Στοές & Via Farini</h4>
          <p>Portici ονομάζονται οι στοές της Μπολόνιας που φτάνουν τα 38 χιλιόμετρα στο ιστορικό κέντρο και την κάνουν μοναδική πόλη στον κόσμο με το κέντρο να αποτελείται εξ ολοκλήρου από στοές, ανάμεσα στις οποίες περιλαμβάνεται η μακρύτερη στον κόσμο στοά του San Luca.</p>
          <p>Στις στοές αυτές που σε προστατεύουν από τη βροχή ενώ κοιτάς τις βιτρίνες ή κάνεις τη βόλτα σου. Ανάμεσα τους βρίσκεται και η αγαπημένη μου υπέρκομψη Via Farini. Η μια πλευρά αυτής της οδού είναι υπέροχα διακοσμημένη με περίτεχνα σχέδια στις καμάρες της, κάτι που δεν πρέπει να χάσεις. Εκεί δίπλα βρίσκεται και η Piazza Cavour με το μπρούτζινο άγαλμα του Lucio Dalla καθισμένο σε ένα παγκάκι. Ο σπουδαίος μουσικός ήταν από την Μπολόνια και έζησε κοντά σε εκείνη τη γειτονιά.</p>
          <figure><img src="./assets/images/bologna7.jpg" class="img-fluid" alt="bologna7"><figcaption>Οι στοές της Μπολόνια</figcaption></figure>
      <h3>Τι να φάς στη Μπολόνια</h3>
        <p>Οι ίδιοι οι Ιταλοί επιμένουν ότι η γαστρονομική κουλτούρα της Μπολόνια είναι η κορυφαία της χώρας, κάτι που πιστοποιείται από τα πολλά εδέσματα της ευρύτερης περιοχής όπως το προσούτο Πάρμας και η παρμεζάνα, η μορταδέλα και το μπαλσάμικο ξύδι, το κρασί Prosecco αλλά και πλήθος δημοφιλών πιάτων όπως, ασφαλώς, η Bolognese, τα Tortellini in Brodo, τα Tortelloni και η piadina, το ίσως πιο αυθεντικό street food της Ιταλίας.</p>
        <h4>Mò Mortadella Lab</h4>
          <p>Αφράτα μαλακά panini με μορταδέλα, Andria burrata και αποξηραμένες ντομάτες που θα κάνουν τον ουρανίσκο σου να βιώσει μια ξεχωριστή γαστρονομική εμπειρία. Αυτό εδώ το μαγαζί σημείωσε και πέρνα σίγουρα μια βόλτα από εκεί. Το μόνο που πρέπει να προετοιμαστείς είναι η ουρά που έχει απέξω. Κάνε υπομονή και να είσαι σίγουρος ότι αξίζει.</p>
          <figure><img src="./assets/images/bologna8.jpg" class="img-fluid" alt="bologna8"><figcaption>Panini με μορταδέλα</figcaption></figure>
        <h4>Sette Chiese Bistrot</h4>
          <p>Για τιραμισού στην Piazza Santo Stefano. Η τοποθεσία είναι καταπληκτική. Τραπέζια στην πλατεία με θέα το συγκρότημα των Επτά Εκκλησιών. </p>
          <figure><img src="./assets/images/bologna9.jpg" class="img-fluid" alt="bologna9"><figcaption>Η Τιραμισού</figcaption></figure>
        <h4>Trattoria da Me</h4>
          <p>Δοκιμάστε tagliatelli ragu (μην την ζητήσετε ως μπολονέζ) και θυμηθείτε οτι το ταξίδι σας στην Μπολόνια δεν μπορεί να κλείσει χωρίς να δοκιμάσετε αυθεντικά χειροποίητα tortellini στην Trattoria da Me, σε ένα όμορφο περιβάλλον που θυμίζει πολύ ελληνική ταβέρνα.</p>
          <figure><img src="./assets/images/bologna10.jpg" class="img-fluid" alt="bologna10"><figcaption>Tagliatelli ragu</figcaption></figure>
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