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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Ρώμη: Η Αιώνια Πόλη</h2>
      <p class="blog-post-meta">21 Απριλίου 2022, Φαίη</p>
      <img src="./assets/images/romi.jpg" class="img-fluid" alt="romi">
      <article class="blog-post">
        <p><em>Κεντρική πλατεία της πόλης Piazza Venezia. Η θέα από το Εθνικό Μνημείο του Βίκτωρα Εμμανουήλ Β΄</em></p><hr>
        <p>Λίγες πόλεις σαν την Ρώμη προσφέρουν τέτοια ποικιλία και λίγοι είναι οι επισκέπτες που φεύγοντας δεν έχουν την επιθυμία να επιστρέψουν. Δεδομένου ότι είναι η έδρα της ιταλικής κυβέρνησης και του Βατικανού, η Ρώμη είναι μια γνήσια πρωτεύουσα. Έχει όλα όσα θα θέλατε από μια μοντέρνα πόλη, η ιστορία της πόλης είναι που λειτουργεί ως πόλος έλξης για τους επισκέπτες.</p>
        <p>Πλούσια ιστορία, σπουδαία μνημεία, ατελείωτα μουσεία, νόστιμη κουζίνα και ιταλικό ταμπεραμέντο! Η Αιώνια Πόλη θα σας μαγέψει και θα θέλετε να την επισκεφθείτε ξανά και ξανά. Έχει τόσα πολλά να προσφέρει, που κάθε φορά θα την ανακαλύπτετε από την αρχή!</p>
      <h3>Τα σημαντικότερα αξιοθέατα της Ρώμης</h3>
        <h4>Επίσκεψη στο Κολοσσαίο</h4>
          <p>Σχεδόν συνώνυμο με την ιταλική πρωτεύουσα, το γιγαντιαίο αμφιθέατρο της αρχαίας ρωμαϊκής αυτοκρατορίας – όπως λέει άλλωστε και το όνομά του – προκαλεί δέος στους επισκέπτες του. Δε νοείται ταξίδι στη Ρώμη χωρίς μια στάση στο επιβλητικό Κολοσσαίο! Είναι ίσως το πιο εντυπωσιακό αρχαίο μνημείο της Ρώμης, όχι μόνο λόγω των απίστευτων διαστάσεών του, αλλά κυρίως λόγω του… βίαιου παρελθόντος του. Στην αρένα του μάχονταν μέχρι θανάτου μονομάχοι, ενώ καταδικασμένοι έρχονταν αντιμέτωποι με άγρια ζώα υπό τις κραυγές του πλήθους που διψούσε για ακόμη πιο πολύ… αίμα. Το Κολοσσαίο (Colosseo) ξεκίνησε να χτίζεται το 72 μΧ, την εποχή του Βεσπασιανού και χωρούσε περίπου 70.000 ανθρώπους.</p>
          <p>Δε χρειάζεται να μπει κανείς μέσα για να εκτιμήσει το μέγεθος του σπουδαίου αυτού μνημείου. Άλλωστε, οι τεράστιες ουρές των τουριστών που περιμένουν υπομονετικά για να μπουν μέσα είναι πολλές φορές αποτρεπτικές. Αν δεν έχετε πολύ χρόνο στη διάθεσή σας, κάντε μια βόλτα γύρω από το Κολοσσαίο και ανακαλύψτε τα σημεία που σάς επιτρέπουν να ρίξετε μερικές ματιές και στο εσωτερικό της αρένας!</p>
          <figure><img src="./assets/images/romi2.jpg" class="img-fluid" alt="romi2"><figcaption>Το Κολοσσαίο εσωτερικά</figcaption></figure>
        <h4>Κάντε κι εσείς μία ευχή στη Φοντάνα ντι Τρέβι</h4>
          <p>Βγάλτε ένα κέρμα, κάντε μια ευχή, γυρίστε πλάτη στο πασίγνωστο σιντριβάνι Φοντάνα ντι Τρέβι (Fontana di Trevi) και ρίξτε το κέρμα στο νερό. Σύμφωνα με την παράδοση, αν ρίξετε κέρμα στο σιντριβάνι θα επιστρέψετε κάποια στιγμή στη Ρώμη.Το μεγαλύτερο μπαρόκ σιντριβάνι της Ρώμης σχεδιάστηκε από τον ιταλό αρχιτέκτονα Νικόλα Σάλβι. Είναι ένα από τα ομορφότερα αξιοθέατα της Ρώμης και μπορείτε να το απολαύσετε οποιαδήποτε ώρα της ημέρας, χωρίς να χρειαστεί να ξοδέψετε τίποτα… εκτός από το κέρμα που θα ρίξετε για την ευχή σας!</p>
          <figure><img src="./assets/images/romi3.jpg" class="img-fluid" alt="romi3"><figcaption>Το συντριβάνι Φοντάνα ντι Τρέβι</figcaption></figure>
        <h4>Ρωμαϊκή Αγορά και Παλατινός Λόφος – Ταξίδι στον χρόνο</h4>
          <p>Περπατήστε στη Ρωμαϊκή Αγορά και τον Παλατινό Λόφο (έναν από τους επτά λόφους της Ρώμης) και ταξιδέψτε νοερά σε άλλες εποχές. Σύμφωνα με το μύθο, ο Ρωμύλος δολοφόνησε το δίδυμο αδερφό του Ρώμο σε αυτό το σημείο και ίδρυσε τη Ρώμη το 753 πΧ.</p>
          <p>Η Ρωμαϊκή Αγορά είναι ένα από τα δημοφιλέστερα αξιοθέατα της Ρώμης. Περιπλανηθείτε ανάμεσα στα αρχαία μνημεία με φόντο το επιβλητικό Κολοσσαίο και φανταστείτε πώς ήταν κάποτε η «καρδιά» της αρχαίας Ρώμης. Καταλήξτε στον Καπιτωλίνο Λόφο για να απολαύσετε την υπέροχη θέα, με τη Ρωμαϊκή Αγορά «πιάτο» μπροστά σας.</p>
          <figure><img src="./assets/images/romi4.jpg" class="img-fluid" alt="romi4"><figcaption>Καπιτωλινός Λόφος</figcaption></figure>
        <h4>Ανεβείτε στον τρούλο της Βασιλικής του Αγίου Πέτρου</h4>
          <p>Ο τρούλος της βασιλικής του Αγίου Πέτρου δεσπόζει στον ουρανό της Ρώμης. Η εκκλησία του Αγίου Πέτρου βρίσκεται στην Πόλη του Βατικανού και υποδέχεται χιλιάδες επισκέπτες κάθε μέρα. Θα σας εντυπωσιάσει το μέγεθος του ναού, ο πλούσιος διάκοσμός του και τα αριστουργήματα που φιλοξενεί, όπως η περίφημη Πιετά (Pietà), ένα μαρμάρινο γλυπτό, έργο του Μιχαήλ Αγγέλου (Μικελάντζελο).</p>
          <p>Αν δεν υποφέρετε από υψοφοβία… τολμήστε να ανεβείτε στον τρούλο του Αγίου Πέτρου, για να θαυμάσετε την πανοραμική θέα στην πόλη. Με το ασανσέρ θα γλιτώσετε γύρω στα 320 σκαλοπάτια, αλλά θα χρειαστεί να πάρετε βαθιές ανάσες, καθώς ακολουθούν άλλα… 231 (551 στο σύνολο) σκαλοπάτια μέχρι την κορυφή.</p>
          <figure><img src="./assets/images/romi5.jpg" class="img-fluid" alt="romi5"><figcaption>Η Βασιλική του Αγίου Πέτρου</figcaption></figure>
        <h4>Σηκώστε το βλέμμα ψηλά στο Πάνθεον</h4>
          <p>Αφιερωμένο σε όλους τους θεούς, το Πάνθεον σού μεταδίδει ένα αίσθημα ηρεμίας και γαλήνης. Αρμονικό και μυστηριώδες, θεωρείται από πολλούς ως το πιο τέλειο κτίριο στον κόσμο. Κατασκευάστηκε τον 1ο αιώνα πΧ και ανακατασκευάστηκε από τον Αδριανό το 125 μΧ. Αποτελεί ένα «θαύμα της μηχανικής», με τον τεράστιο θόλο του να αποτελεί το μεγαλύτερο θόλο από μη ενισχυμένο σκυρόδεμα στον κόσμο. Σηκώστε το βλέμμα σας ψηλά και ακολουθήστε με αυτό τις ακτίνες του ήλιου, που μπαίνουν από το στρογγυλό άνοιγμα της οροφής και φωτίζουν το εσωτερικού του ναού.</p>
          <figure><img src="./assets/images/romi6.jpg" class="img-fluid" alt="romi6"><figcaption>Το Πάνθεον</figcaption></figure>
        <h4>Η καλλιτεχνική… πιάτσα Ναβόνα</h4>
          <p>Μια από τις πιο όμορφες πλατείες της Ρώμης, με ιστορία πολλών χιλιάδων ετών. Είχε κατασκευαστεί τον 1ο αιώνα μ.Χ. από το Δομιτιανό. Εδώ παρακολουθούσαν αγώνες οι αρχαίοι Ρωμαίοι και σε αυτό οφείλει το ιδιαίτερο οβάλ σχήμα της.</p>
          <p>Σήμερα, θα μπορούσε να πει κανείς ότι η πιάτσα Ναβόνα αποτελεί έναν «ύμνο» στο μπαρόκ και έναν μικρό παράδεισο για καλλιτέχνες του δρόμου. Κατά μήκος της πλατείας θα συναντήσετε πολλούς ζωγράφους και μουσικούς, ενώ τα περίφημα σιντριβάνια της προσθέτουν μια επιπλέον νότα ομορφιάς στο ήδη ρομαντικό σκηνικό. Στο κέντρο της βρίσκεται και η Κρήνη των Τεσσάρων Ποταμών (Fontana dei Quattro Fiumi) του Μπερνίνι, ενώ στα δύο άκρα της πλατείας υπάρχουν δύο ακόμη σιντριβάνια: το σιντριβάνι του Ποσειδώνα και το σιντριβάνι του Μαυριτανού.</p>
          <figure><img src="./assets/images/romi7.jpg" class="img-fluid" alt="romi7"><figcaption>Η πλατεία Ναβόνα</figcaption></figure>
        <h4>Για φωτογραφίες στη Σκαλινάτα της Πιάτσα ντι Σπάνια</h4>
          <p>Ίσως η πιο διάσημη πλατεία της Ρώμης. Βρίσκεται στην «καρδιά» της ιταλικής πρωτεύουσας και είναι τόσο όμορφη, που δε θα ξέρετε πού να πρωτοκοιτάξετε για να φωτογραφηθείτε. Τα περίφημα Ισπανικά Σκαλιά αποτελούν πόλο συνάντησης για μικρούς και μεγάλους.</p>
          <p>Πανέμορφα κτίρια δεξιά κι αριστερά, χρωματιστά λουλούδια να «στολίζουν» τα σκαλοπάτια μέχρι την εκκλησία Τρινιτά ντέι Μόντι (Scalinata della Trinità dei Monti) και το σιντριβάνι Fontana della Bracaccia του Μπερνίνι εκεί που καταλήγουν τα σκαλιά. Πώς να μην ερωτευτεί μετά κανείς τη Ρώμη;</p>
          <figure><img src="./assets/images/romi8.jpg" class="img-fluid" alt="romi8"><figcaption>Πιάτσα ντι Σπάνια</figcaption></figure>
      <h3>Που να φάς στη Ρώμη</h3>
        <p>Πολλοί θα έλεγαν ότι πρέπει να γευτείτε τον πολιτισμό για να τον καταλάβετε, και συμφωνούμε απόλυτα. Η Ιταλία είναι πολύ διάσημη για την εξαιρετική γαστρονομία της και τα παγκοσμίου φήμης πιάτα που όλοι έχουμε ξανακούσει. Και το ρωμαϊκό φαγητό δεν αποτελεί εξαίρεση σε αυτό. Ένα μεγάλο μέρος κάθε ταξιδιού είναι τα αυθεντικά πιάτα και η τοπική κουζίνα που μπορείτε να δοκιμάσετε. Τι να φάτε λοιπόν όταν βρίσκεστε στη Ρώμη; Λοιπόν, κάντε ό,τι κάνουν οι Ρωμαίοι!</p>
        <h4>Sphaeristerium</h4>
          <p>Τα ζυμαρικά είναι ίσως το πιο διάσημο ιταλικό, καθώς και το ρωμαϊκό φαγητό. Η σύγχρονη κουζίνα και η διακόσμηση έρχονται σε αντίθεση με τους αρχαίους τοίχους αυτού του μοντέρνου εστιατορίου και μπαρ. Λίγα βήματα μολις απο την Φοντάνα ντι Τρέβι, μπορείτε να απολαύσετε φρέσκα ζυμαρικά της επιλογής σας.</p>
          <figure><img src="./assets/images/romi9.jpg" class="img-fluid" alt="romi9"><figcaption>Καρμπονάρα</figcaption></figure>
        <h4>"DOC" Cruderia EnoBistrot</h4>
          <p>Αξίζει να το επισκεφτείτε για να δοκιμάσετε το εξαιρετικής ποιότητας tartare. Πολύ ισορροπημένες γεύσεις που φτιάχνουν ένα φανταστικό αποτέλεσμα.Ένα μικρό bistro έκπληξη για τους λάτρεις του ποιοτικου φαγητού. </p>
          <figure><img src="./assets/images/romi10.jpg" class="img-fluid" alt="romi10"><figcaption>Ταρταρ</figcaption></figure>
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