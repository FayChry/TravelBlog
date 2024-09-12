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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Παρίσι: Η πόλη του Φωτός</h2>
      <p class="blog-post-meta">20 Φεβρουαρίου 2020, Φαίη</p>
      <img src="./assets/images/paris.jpg" class="img-fluid" alt="paris">
      <article class="blog-post">
        <p><em>Το φωταγωγημένο Παρίσι, βράδυ απο ψηλά</em></p><hr>
        <p>Το Παρίσι, γνωστό και ως η πόλη του Φωτός, είναι ένας από τους πιο δημοφιλής προορισμούς του κόσμου και ενδεχομένως, η πόλη με τα περισσότερα αξιοθέατα. Το Παρίσι διασχίζει ο περίφημος ποταμός Σηκουάνας που έχει συμβάλλει σημαντικά στην οικονομική ανάπτυξη της πόλης. Ο καλύτερος τρόπος για να γνωρίσετε μια ζωντανή κοσμοπολίτικη μητρόπολη σαν Παρίσι είναι να το περπατήσετε φυσικά.</p>
        <p>Βυθίσου στο ρομαντισμό και την κομψότητα του Παρισιού περπατώντας χέρι-χέρι κατά μήκος του ποταμού Σηκουάνα, απολαμβάνοντας απολαυστικά γλυκά σε γοητευτικά ζαχαροπλαστεία και θαυμάζοντας τον Πύργο του Άιφελ. Μην χάσετε την ευκαιρία να εξερευνήσετε παγκοσμίου φήμης μουσεία όπως το Λούβρο, όπου στεγάζεται η αινιγματική Μόνα Λίζα, και να κάνετε μια χαλαρή κρουαζιέρα στον Σηκουάνα για να δείτε την εκπληκτική ομορφιά της Πόλης του Φωτός.</p>
      <h3>Περιηγηθείτε στην πόλη του Παρισιού</h3>
        <h4>Παρακολουθήστε τον Πύργου του Άιφελ από το Palais de Chaillot</h4>
          <p>Ο Πύργος του Άιφελ, ένα από τα πιο αναγνωρίσιμα αξιοθέατα παγκοσμίως, αποτελεί έναν προορισμό που πρέπει να επισκεφθεί κανείς τουλάχιστον μία φορά στη ζωή του. Στην καρδιά του Παρισιού, αυτό το εμβληματικό αρχιτεκτονικό έργο είναι πολύ περισσότερο από μια απλή τουριστική ατραξιόν. Είναι ένα σύμβολο της Γαλλίας και ένα εκπληκτικό παράδειγμα της ανθρώπινης δημιουργικότητας και μηχανικής.</p>  
          <p>Ο Πύργος του Άιφελ κατασκευάστηκε από τον Γουστάβ Άιφελ για την Παγκόσμια Έκθεση του 1889, γιορτάζοντας την εκατονταετηρίδα της Γαλλικής Επανάστασης. Με ύψος 324 μέτρα, ήταν το ψηλότερο κτίριο στον κόσμο μέχρι την κατασκευή του Κτιρίου Κράισλερ στη Νέα Υόρκη το 1930. Το εντυπωσιακό του σχεδιασμό, συνδυασμός μετάλλου και αέρα, αποτέλεσε ένα τεχνολογικό άλμα για την εποχή του.</p>
          <p>Το να ανεβείτε με το ασανσέρ στον Πύργο του Άιφελ θα σας κοστίσει λίγο παραπάνω. Για αυτό μπορείτε να παρακολουθήσετε το σόου από τα φώτα του Πύργου που αναβοσβήνουν το βράδυ από το πάρκο από το Palais de Chaillot.</p>
          <figure><img src="./assets/images/paris2.jpg" class="img-fluid" alt="paris2"><figcaption>Η θέα από το από το Palais de Chaillot</figcaption></figure>
        <h4>Notre Dame (Παναγία των Παρισίων)</h4>
          <p>Ο Νοτρ Νταμ του Παρισιού, ένας από τους πιο διάσημους καθεδρικούς ναούς στον κόσμο, είναι ένα αριστούργημα γοτθικής αρχιτεκτονικής. Χτισμένος στις ακτές του Σηκουάνα, ο καθεδρικός ναός της Παρθένου Μαρίας, όπως είναι η πλήρης ονομασία του, είναι ένα σύμβολο της Παρισινής ιστορίας και πολιτισμού.</p>
          <p>Η κατασκευή του Νοτρ Νταμ ξεκίνησε το 1163 και ολοκληρώθηκε σχεδόν 200 χρόνια αργότερα, το 1345. Ο ναός ενσωματώνει στοιχεία της πρώιμης και κλασικής γοτθικής αρχιτεκτονικής, με εντυπωσιακούς γοτθικούς τόξους, ριζάλτα και πολύπλοκα γλυπτά. Οι δύο πύργοι του μπροστινού μέρους του ναού, ύψους 69 μέτρων, είναι ιδιαίτερα εντυπωσιακοί και αποτελούν ένα από τα πιο αναγνωρίσιμα σημεία του Παρισινού ορίζοντα.</p>
          <p>Εσωτερικά, ο Νοτρ Νταμ είναι εξίσου εντυπωσιακός. Οι τεράστιοι κιονοστοιχίες, τα υψηλά τόξα και τα πολύχρωμα βιτρό παράθυρα δημιουργούν ένα μαγευτικό και ιερό περιβάλλον. Τα βιτρό παράθυρα, ιδιαίτερα το διάσημο “Ρόδον του Βορρά”, είναι αριστουργήματα της γοτθικής τέχνης και φωτίζουν το εσωτερικό του ναού με μια ηρεμία που προσκαλεί στη σκέψη και στην προσευχή.</p>
          <figure><img src="./assets/images/paris3.jpg" class="img-fluid" alt="paris3"><figcaption>Η Παναγία των Παρισίων</figcaption></figure>
        <h4>Μουσείο του Λούβρου</h4>
          <p>Το Μουσείο του Λούβρου, με την επιβλητική του παρουσία στο κέντρο του Παρισιού, αποτελεί ένα από τα μεγαλύτερα και πιο διάσημα μουσεία στον κόσμο. Αρχικά κτισμένο ως φρούριο τον 12ο αιώνα, το κτίριο μετατράπηκε σε βασιλικό παλάτι στον 16ο αιώνα και στη συνέχεια σε μουσείο το 1793, μετά τη Γαλλική Επανάσταση.</p>
          <p>Η ποικιλία και η πλούσια συλλογή του Λούβρου είναι απλώς εκπληκτική. Περιλαμβάνει έργα από την αρχαιότητα μέχρι τον 19ο αιώνα, με έμφαση στην τέχνη της Δυτικής Ευρώπης. Το μουσείο φιλοξενεί πάνω από 35.000 έργα τέχνης σε μια εκτεταμένη εκθεσιακή επιφάνεια 60.600 τετραγωνικών μέτρων, καθιστώντας το μία από τις μεγαλύτερες τέχνης συλλογές στον κόσμο.</p>
          <figure><img src="./assets/images/paris4.jpg" class="img-fluid" alt="paris4"><figcaption>Η Μόνα Λίζα</figcaption></figure>
          <p>Μεταξύ των πιο διάσημων έργων που φιλοξενούνται στο Λούβρο είναι η “Μόνα Λίζα” του Λεονάρντο ντα Βίντσι και η “Αφροδίτη της Μήλου”, γνωστή και ως η Βενέρα της Μήλου. Η “Μόνα Λίζα”, ένα από τα πιο διάσημα και συζητημένα έργα τέχνης στον κόσμο, προσελκύει εκατομμύρια επισκέπτες ετησίως που θέλουν να αντικρίσουν το μυστηριώδες χαμόγελο της Μόνας Λίζας από κοντά. Από την άλλη πλευρά, η Αφροδίτη της Μήλου, ένα εντυπωσιακό αρχαίο ελληνικό γλυπτό, αποτελεί επίσης ένα από τα πιο σημαντικά έργα του μουσείου.</p>
          <p>Το Λούβρο δεν περιορίζεται μόνο στην τέχνη. Το κτίριό του, με την διάσημη γυάλινη πυραμίδα στην είσοδο, είναι ένα αρχιτεκτονικό έργο τέχνης από μόνο του. Ο σχεδιασμός του έχει γίνει σύμβολο σύγχρονης τέχνης και αρχιτεκτονικής, αντιπροσωπεύοντας την τέλεια αρμονία μεταξύ κλασικής και σύγχρονης αισθητικής.</p>
          <figure><img src="./assets/images/paris5.jpg" class="img-fluid" alt="paris5"><figcaption>Το μουσείο του Λούβρου εξωτερικά</figcaption></figure>
        <h4>Σανζ Ελιζέ και η Αψίδα του Θριάμβου</h4>
          <p>Η Σανζ Ελιζέ, γνωστή επίσης ως Λεωφόρος των Ηλυσίων Πεδίων, είναι ένας από τους πιο διάσημους και ιστορικούς δρόμους στον κόσμο. Βρίσκεται στο Παρίσι, την πρωτεύουσα της Γαλλίας, και εκτείνεται για περίπου δύο χιλιόμετρα από την Πλατεία της Συμφωνίας, όπου βρίσκεται το μνημείο του Αψίδα του Θριάμβου, μέχρι την Πλατεία της Συνταγματικής Συνέλευσης.</p>
          <p>Η Σανζ Ελιζέ είναι γνωστή για την πολυτέλεια και την κομψότητα που προσφέρει. Ο δρόμος αυτός είναι γεμάτος με καταστήματα υψηλής μόδας, πολυτελή κοσμηματοπωλεία, εστιατόρια και καφέ, καθιστώντας τον ιδανικό προορισμό για αγορές, γαστρονομικές απολαύσεις και απλή περιπλάνηση. Επώνυμα μαγαζιά όπως η Louis Vuitton, Cartier, Ladurée και πολλά άλλα βρίσκονται εδώ, προσελκύοντας τόσο τους λάτρεις της μόδας όσο και τους τουρίστες από όλο τον κόσμο.</p>
          <p>Πέρα από την κοσμοπολίτικη ατμόσφαιρα και τις υπέροχες βιτρίνες των καταστημάτων, η Σανζ Ελιζέ προσφέρει επίσης υπέροχες θέες του Παρισιού. Από τον έναν άκρο της λεωφόρου, μπορεί κανείς να θαυμάσει τον Αψίδα του Θριάμβου, ενώ από τον άλλο, την Πλατεία της Συνταγματικής Συνέλευσης και τον Πύργο του Άιφελ. Η περιπλάνηση στη Σανζ Ελιζέ είναι μια εμπειρία που συνδυάζει την ιστορία, την πολυτέλεια και την ομορφιά του Παρισιού, καθιστώντας την μια αξέχαστη δραστηριότητα για κάθε επισκέπτη της πόλης.</p>
          <figure><img src="./assets/images/paris6.jpg" class="img-fluid" alt="paris6"><figcaption>Η Αψίδα του Θριάμβου στην Σανζ Ελιζέ</figcaption></figure>
        <h4>Κήποι του Λουξεμβούργου</h4>
          <p>Οι Κήποι του Λουξεμβούργου, βρίσκονται στο Παρίσι και αποτελούν έναν από τους πιο ονομαστούς και όμορφους δημόσιους κήπους στην πόλη. Εκτείνονται σε έκταση περίπου 25 εκταρίων και είναι γνωστοί για την ηρεμία και την κομψότητά τους. Αυτός ο κήπος αποτελεί έναν ιδανικό χώρο για χαλάρωση, περίπατο, ανάγνωση, ή απλά για να απολαύσει κανείς την ομορφιά της φύσης μέσα στην πόλη.</p>
          <p>Στο κέντρο των κήπων βρίσκεται η μεγαλοπρεπής κεντρική λίμνη, όπου τα παιδιά συχνά παίζουν με μικρά ιστιοφόρα. Ο κήπος φιλοξενεί επίσης πολλά γλυπτά, μεταξύ των οποίων έργα γνωστών γλυπτών, καθώς και ανδριάντες Γάλλων ιστορικών προσωπικοτήτων.</p>
          <p>Οι Κήποι του Λουξεμβούργου δημιουργήθηκαν τον 17ο αιώνα από την Μαρία Μεδική, χήρα του Βασιλιά Ερρίκου Δ΄ της Γαλλίας. Ο σχεδιασμός τους εμπνεύστηκε από τους Ιταλικούς Βαρόκ κήπους, προσδίδοντας μια αίσθηση αριστοκρατικής κομψότητας. Σήμερα, οι κήποι περιλαμβάνουν εκτεταμένους γκαζόν, όμορφα διαμορφωμένα παρτέρια, εντυπωσιακές συλλογές τριανταφυλλιών και εκατοντάδες είδη δέντρων.</p>
          <figure><img src="./assets/images/paris7.jpg" class="img-fluid" alt="paris7"><figcaption>Κήποι του Λουξεμβούργου</figcaption></figure>
        <h4>Βασιλική της Σακρέ-Κερ της Μονμάρτρης</h4>
          <p>Ο Καθεδρικός Ναός της Σακρ Κερ βρίσκεται στην καρδιά του Παρισιού και αποτελεί ένα από τα πιο διάσημα αξιοθέατα της πόλης. Πρόκειται για έναν ρωμαιοκαθολικό ναό νεογοτθικής αρχιτεκτονικής, ο οποίος χτίστηκε μεταξύ του 12ου και 14ου αιώνα. Το μεγαλοπρεπές κτίριο με τους δύο επιβλητικούς πύργους και τις πολυάριθμες γλυπτικές προεξοχές αποτελεί σήμα κατατεθέν του Παρισιού.</p>
          <p>Ο ναός έχει μεγάλη θρησκευτική σημασία καθώς φιλοξενεί τις ιερές λείψανες του Αγίου Διονυσίου, του πολιούχου αγίου του Παρισιού. Επίσης, χρησιμοποιήθηκε για αιώνες ως ο τόπος στέψης και ταφής των βασιλέων της Γαλλίας. Ο Καθεδρικός έχει πληγεί αρκετές φορές από βανδαλισμούς και φωτιές μέσα στους αιώνες, ωστόσο κάθε φορά επισκευαζόταν με μεγάλη επιμέλεια. Σήμερα αποτελεί ένα δημοφιλές τουριστικό αξιοθέατο και εξακολουθεί να λειτουργεί ως ενεργός ναός.</p>
          <figure><img src="./assets/images/paris8.jpg" class="img-fluid" alt="paris8"><figcaption>Βασιλική της Σακρέ-Κερ της Μονμάρτρης</figcaption></figure>  
      <h3>Που να φάς στο Παρίσι</h3>
      <p>Η παραδοσιακή γαλλική κουζίνα αποτελεί πρότυπο για όλο τον κόσμο, είτε τη ζηλεύουμε είτε τη βρίσκουμε αποκρουστική - ναι, οι Γάλλοι τρώνε βατραχοπόδαρα και σαλιγκάρια με μαϊντανό, και τι έγινε! Όταν έρχονται στο Παρίσι, οι περισσότεροι τουρίστες έχουν μόνο ένα πράγμα στο μυαλό τους: να δοκιμάσουν τα μεγαλύτερα κλασικά πιάτα της γαλλικής κουζίνας και να αποφασίσουν μόνοι τους - spoiler: είναι όλα πεντανόστιμα! Οι Παριζιάνοι, εν τω μεταξύ, δεν είναι οι τελευταίοι που απολαμβάνουν να τρώνε αυθεντικά πιάτα, να τιμούν τις παραδόσεις ή να ανακαλούν παιδικές αναμνήσεις που είναι θαμμένες στις γκουρμέ αναμνήσεις τους.</p>  
        <h4>L'Aubergeade</h4>
          <p>Στο 12ο διαμέρισμα, το Aubergeade είναι ένα μικρό, ανεπιτήδευτο μπιστρό όπου μπορείτε να απολαύσετε παραδοσιακά γαλλικά πιάτα. A la carte: βελουτέ αντίδι με μπέικον και ψίχουλα μελόψωμο, φιλέτο John Dory, μπριζόλα ταρτάρ, ριζότο και κοκκινιστό πράσο αλλά και μια νόστιμη σπιτική νορβηγική ομελέτα. Τα πιάτα αλλάζουν τακτικά, αλλά η φιλική ατμόσφαιρα μπρασερί-καντίνας παραμένει η ίδια. Το αφεντικό υποδέχεται τους πελάτες του με ανοιχτές αγκάλες σε ένα φιλικό και φιλικό περιβάλλον.</p>
          <figure><img src="./assets/images/paris9.jpg" class="img-fluid" alt="paris9"><figcaption>Καλαμάρι με φάβα Σαντορίνης</figcaption></figure>
        <h4>Bistrot Victoires</h4>
          <p>Ρετρό εστιατόριο με διακόσμηση που πλαισιώνεται από καθρέφτες και βεράντα για κονφί πάπιας, σαλιγκάρια και κλασικά μπιστρό πιάτα.</p>
          <p>Το Bistrot des Victoire έχει προφανή πλεονεκτήματα: ντεμοντέ διακόσμηση με γυψομάρμαρο και καθρέφτες, ζωντανή ατμόσφαιρα και κλειστά τραπέζια. Και μετά υπάρχει ζωή. Ώμοι με ώμους ανάμεσα στους τακτικούς, τους επαρχιώτες και τους τουρίστες που συρρέουν για μεσημεριανό γεύμα και δείπνο όχι μόνο για τη διακόσμησή του από άλλη εποχή αλλά και για την σχέση ποιότητας/τιμής. Στα 10/11 ευρώ το κυρίως πιάτο, 5 ευρώ το επιδόρπιο και 8 ευρώ οι γιγάντιες σαλάτες... δύσκολα θα τα καταφέρεις καλύτερα σε αυτή τη chic γειτονιά (Galerie Vivienne, Place des Victoires, Palais-Royal).</p>
          <figure><img src="./assets/images/paris10.jpg" class="img-fluid" alt="paris10"><figcaption>Σαλιγκάρια</figcaption></figure>
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