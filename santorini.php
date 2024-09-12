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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Σαντορίνη: βόλτες με θέα την καλδέρα</h2>
      <p class="blog-post-meta">9 Αυγούστου 2020, Φαίη</p>
      <img src="./assets/images/santorini169.jpg" class="img-fluid" alt="santorini169">
      <article class="blog-post">
        <p><em>Η καλδέρα της Σαντορίνης και τα Φηρά</em></p><hr>
        <p>Το νησί είναι παγκοσμίως διάσημο για την απαράμιλλη φυσική του ομορφιά, το μαγευτικό ηλιοβασίλεμα, το ηφαίστειο με την εντυπωσιακή καλντέρα και τη μοναδική θέα στο Αιγαίο. Ο πολιτισμός της ξεκινάει από τα προϊστορικά χρόνια. Η καλντέρα της είναι από τις πιο επιβλητικές στην Ευρώπη. Έχει κηρυχθεί ως Ιδιαίτερου Φυσικού Κάλλους, όπως και όλη η Θήρα.</p>
        <p>Η Σαντορίνη είναι ουσιαστικά αυτό που έμεινε μετά από μια τεράστια ηφαιστειακή έκρηξη που κατέστρεψε τους πρώτους οικισμούς σε ένα πρώην ενιαίο νησί και δημιούργησε την σημερινή γεωλογική καλντέρα. Μια γιγαντιαία λιμνοθάλασσα με απόκρημνους βράχους σε τρεις πλευρές. Το κύριως νησί κυλάει προς το Αιγαίο. Η πρωτεύουσα Φηρά, η Οία και το Ημεροβίγλι, βρίσκονται στην κορυφή του βράχου που κοιτάζει τη λιμνοθάλασσα, τα ηφαιστειακά πετρώματα και το παγκοσμίως γνωστό ηλιοβασίλεμα της Σαντορίνης.</p>
      <h3>Ποιά μέρη να επισκεφθείτε</h3>
        <h4>Εξερευνήστε τα Φηρά, την πρωτεύουσα της Σαντορίνης</h4>
        <p>Τα Φηρά είναι η πρωτεύουσα της Σαντορίνης και είναι το πιο δημοφιλές σημείο του νησιού. Είναι μια πρωτόγονη κυκλαδίτικη πόλη με εξαιρετική αρχιτεκτονική, λευκά σπίτια και στενά δρομάκια με πανοραμική θέα στην καλντέρα. Από τα Φηρά για να φτάσετε στο λιμάνι της Σκάλας θα πρέπει να κατεβείτε 587 σκαλοπάτια.</p>
        <p>Υπάρχουν μερικά μουσεία στην περιοχή, όπως το Μουσείο Προϊστορικής Θήρας που είναι αφιερωμένο στην ανακάλυψη των αρχαίων υπολειμμάτων του Ακρωτηρίου και το Αρχαιολογικό Μουσείο Σαντορίνης, που φιλοξενεί μια από τις μεγαλύτερες συλλογές αντικειμένων που έχουν ανακαλυφθεί στο νησί. Τα Φηρά σφύζουν από ζωή από το πρωί μέχρι το βράδυ και μερικά από τα πιο περιζήτητα κλαμπ, μπαρ και εστιατόρια βρίσκονται εκεί.</p>
        <figure><img src="./assets/images/santorini2.jpg" class="img-fluid" alt="santorini2"><figcaption>Τα Φηρά βράδυ</figcaption></figure>
        <h4>Οία, το πιο όμορφο χωριό της Σαντορίνης με καταπληκτικά ηλιοβασιλέματα</h4>
        <p>Μετά τα Φηρά, η Οία προσφέρει εξίσου μερικά από τα καλύτερα πράγματα που μπορείτε να κάνετε στη Σαντορίνη. Είναι φημισμένη για τα μοναδικά ηλιοβασιλέματα που προσφέρει, τα γραφικά δρομάκια της με τα ασβεστωμένα σπίτια και την θέα στην καλντέρα.</p>
        <p>Στην Οία μπορείτε να κάνετε βόλτες μέσα από τις κρυφές σκάλες και τα περάσματα του χωριού, να ψωνίσετε από τα τοπικά καταστήματα σουβενίρ, να επισκεφθείτε τις εκκλησίες της με τον μπλε τρούλο και να περάσετε χαλαρωτικές στιγμές σε μια ταβέρνα απολαμβάνοντας το τοπικό φαγητό. Για τους πιο τολμηρούς, θα πρότεινα να επισκεφθείτε τον όρμο Αμμούδι, με τους πανύψηλους βράχους, ιδανικό σημείο για βουτιές και καταδύσεις. Επίσης, μπορείτε να κάνετε πεζοπορία από τα Φήρα προς την Οία, ακολουθώντας το μονοπάτι ή να βρείτε ένα ωραίο μέρος να δείτε το ηλιοβασίλεμα.</p>
        <figure><img src="./assets/images/santorini3.jpg" class="img-fluid" alt="santorini3"><figcaption>Η Οία την ώρα του ηλιοβασιλέματος</figcaption></figure>
      <h3>Παραλίες στη Σαντορίνη</h3>
        <p>Οι παραλίες της Σαντορίνης είναι εξίσου μοναδικές, με τα ηφαιστειακά πετρώματα να δημιουργούν μοναδικές συνθέσεις χρωμάτων. Εσύ απλά διάλεξε… Κόκκινες, λευκές και μαύρες ακτές, βοτσαλωτές ή αμμώδεις παραλίες, εδώ θα βρεις τα πάντα. Α, υπάρχει ακόμη και η επιλογή να κολυμπήσεις στη διάσημη καλντέρα της Σαντορίνης. Ας ξεκινήσουμε λοιπόν να εξερευνάμε τις καλύτερες παραλίες της Σαντορίνης.</p>        
        <h4>Κόκκινη παραλία</h4>
          <p>Μία από τις πιο χαρακτηριστικές παραλίες της Σαντορίνης είναι η Κόκκινη παραλία που είναι όντως κόκκινη και θα σου θυμίσει τοπίο του Άρη-μόνο που εδώ υπάρχει όντως νερό… Η Κόκκινη παραλία είναι πολύ δημοφιλής και -καθώς είναι αρκετά μικρή- μπορεί να πετύχεις εδώ πολύ κόσμο. Πάντως ο συνδυασμός των κόκκινων βράχων που την περιβάλλουν και του νερού με τις κοκκινωπές αποχρώσεις την κάνουν μια πραγματικά ελκυστική επιλογή και ένα must για τις διακοπές σου στην Σαντορίνη. Εδώ μπορείς να κάνεις SUP, ενώ εμείς σου προτείνουμε αν επιλέξεις την Κόκκινη παραλία για το μπάνιο σου να επισκεφθείς και το κοντινό Ακρωτήρι-έναν από τους σημαντικότερους αρχαιολογικούς χώρους στην ανατολική Μεσόγειο. Μία ακόμα χρήσιμη συμβουλή: Πάρε μαζί σου αντηλιακό!</p>
          <figure><img src="./assets/images/santorini4.jpg" class="img-fluid" alt="santorini4"><figcaption>Κόκκινη παραλία</figcaption></figure>
        <h4>Βλυχάδα</h4>
        <p>Όπως οι περισσότερες παραλίες της Σαντορίνης, η Βλυχάδα είναι ένα μείγμα από ψιλή μαύρη άμμο και βότσαλα. Αυτό που την κατατάσσει όμως σε μια από τις καλύτερες παραλίες της Σαντορίνης είναι  τα εντυπωσιακά λευκά, λαξευμένα από τον άνεμο βράχια που την πλαισιώνουν.  Μοιάζοντας με περίτεχνο γλυπτό, αυτό το παράξενο σεληνιακό τοπίο είναι μια από τις ομορφότερες και πιο απομονωμένες τοποθεσίες του νησιού. Η παρακείμενη παραλία Έρως αξίζει επίσης τον χρόνο σας, όπως και το Μουσείο Ντομάτας στην άκρη της ακτής, αν θέλεις να συνδυάσεις τις διακοπές σου στη Σαντορίνη με λίγη γνώση για την ιστορία των προϊόντων του νησιού.</p>
          <figure><img src="./assets/images/santorini5.jpg" class="img-fluid" alt="santorini5"><figcaption>Παραλία Βλυχάδα</figcaption></figure>
        <h4>Περίβολος & Περίσσα</h4>
          <p>Δύο πανέμορφες παραλίες της Σαντορίνης με μαύρη άμμο κοντά στον αρχαιολογικό χώρο της Αρχαίας Θήρας. Και οι δύο αποτελούν τμήματα μιας μεγαλύτερης αμμουδιάς, ενώ προσφέρουν άνετες υποδομές και δραστηριότητες για όλους. Αν θέλεις να συνδυάσεις τις διακοπές σου στη Σαντορίνη με τα θαλάσσια σπορ, θα πρέπει να ξέρεις ότι εδώ μπορείς να κάνεις σχεδόν τα πάντα, ενώ αν έχεις περισσότερο διάθεση για διασκέδαση, σου λέμε ότι τα μπαρ του Περίβολου και της Περίσσας είναι το τέλειο σκηνικό για ολοήμερα πάρτι. Και επειδή τα σπορ και τα πάρτι ανοίγουν την όρεξη, να ξέρεις πως στην ευρύτερη περιοχή θα βρεις και αρκετές ταβέρνες.</p>
          <figure><img src="./assets/images/santorini6.jpg" class="img-fluid" alt="santorini6"><figcaption>Παραλία Περίσσα</figcaption></figure>
        <h4>Καμάρι</h4>
          <p>Το Καμάρι είναι μια ακόμα δημοφιλής παραλία της Σαντορίνης με μαύρες αμμώδεις ακτές, ακριβώς δίπλα στον Περίβολο και την Περίσσα. Είναι μια παραλία για όλες τις ηλικίες, με υποδομές προσβάσιμες από κάθε σημείο της ακτής. Εδώ υπάρχουν πολλά μπαρ, ταβέρνες και εστιατόρια. Ναι, θα το καταλάβεις πολύ γρήγορα αν περπατήσεις κατά μήκος της ακτής, ότι το Καμάρι είναι μία από τις μεγαλύτερες παραλίες της Σαντορίνης και επίσης μία από τις πιο οργανωμένες.</p>
          <figure><img src="./assets/images/santorini7.jpg" class="img-fluid" alt="santorini7"><figcaption>Παραλία Καμάρι</figcaption></figure>
      <h3>Προτάσεις για φαγητό</h3>
        <h4>Εστιατόριο 'Τα Δίχτυα'</h4>
          <p>Η Ελληνική ταβέρνα 'Τα Δίχτυα' και ο Σέφ Μιχάλης Τρουλλάκης, σας περιμένει στην παραλία Περιβόλου στον Άγιο Γεώργιο στο νότιο τμήμα του νησιού . Μια ταβέρνα που λειτουργεί για τρίτη δεκαετία και δίνει υπόσταση σε αυτό που ονομάζουμε ελληνική ταβέρνα. Λογικά έχει πάρει τη θέση της στις 20 καλύτερες ψαροταβέρνες στην Ελλάδα.</p>
          <figure><img src="./assets/images/santorini8.jpg" class="img-fluid" alt="santorini8"><figcaption>Η ταβέρνα Τα Δίχτυα</figcaption></figure>
        <h4>Ταβέρνα 'Η Σπηλιά του Νικόλα'</h4>
          <p>Στην Σαντορίνη, στη νότια μεριά του όμορφου Ακρωτηρίου, δίπλα στην θάλασσα εδώ και πολλά χρόνια βρίσκεται μια μικρή παραδοσιακή σπηλιά, λαξευμένη από τα χέρια του μπάρμπα Νικόλα στα νεανικά του χρόνια. Φτιαγμένη με αγάπη και μεράκι πρόσφερε καταφύγιο στον ίδιο και στην μικρή βαρκούλα του.</p>
          <figure><img src="./assets/images/santorini9.jpg" class="img-fluid" alt="santorini9"><figcaption>Στο εσωτερικό της ταβέρνας <a class="aplolink" href="https://www.nikolascave.gr/" target="_blank">Επισκεφθείτε την σελίδα του εστιατορίου εδώ</a></figcaption></figure>          
          <p>Ο αείμνηστος Σπύρος Μαρινάτος, επικεφαλής του έργου της ανασκαφής του αρχαιολογικού χώρου του Ακρωτηρίου, πρότεινε στον μπάρμπα Νικόλα να μετατρέψει το μικρό αυτό καταφύγιο σε ταβερνάκι, για τους πεινασμένους εργάτες της ανασκαφής προσφέροντας πάντα νόστιμες παραδοσιακές λιχουδιές όπως ντοματοκεφτέδες, φάβα, χλωρό τυρί, σκορδομακάρονα και άφθονα φρέσκα ψάρια.</p>
          <figure><img src="./assets/images/santorini10.jpg" class="img-fluid" alt="santorini10"><figcaption>Στο εξωτερικό της ταβέρνας </figcaption></figure>
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