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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Μόναχο: H αρχοντική πρωτεύουσα της Βαυαρίας</h2>
      <p class="blog-post-meta">17 Οκτωβρίου 2019, Φαίη</p>
      <img src="./assets/images/munich.jpg" class="img-fluid" alt="munich">
      <article class="blog-post">
        <p><em>Η κεντρική πλατεία του Μονάχου Marienplatz με θέα το Δημαρχείο</em></p><hr>
        <p>Το Μόναχο είναι κάθε χρόνο πολύ ψηλά στη λίστα με τις καλύτερες πόλεις σε ολόκληρο τον κόσμο για να ζει κανείς, ένα από τα ωραιότερα και πιο καλά δομημένα μέρη της κεντρικής Ευρώπης. Ένα διαμάντι στο στέμμα της ευρωπαϊκής επιχειρηματικότητας και ένας γοητευτικός προορισμός γεμάτος παραμυθένια κάστρα και παλάτια, σημαντικά έργα τέχνης και ένα μουσείο που θα ξετρελάνει τα μικρά, αλλά και τα μεγάλα, παιδιά.</p>
        <p>Ταξιδεύοντας στο Μόναχο θα δείτε να αντικατοπτρίζεται σχεδόν σε κάθε πλευρά της βαυαρικής πρωτεύουσας αυτή η απαράμιλλη ποιότητα ζωής για την οποία όλοι μιλάνε, λες και ολόκληρη η πόλη έχει φτιαχτεί για να κάνει τη ζωή των κατοίκων της πιο όμορφη, πιο εύκολη, πιο πρακτική, πιο ασφαλή. Από την κουκλίστικη παλιά πόλη, με τη παμπάλαια και εντυπωσιακή πλατεία Marienplatz, εκεί όπου θα δείτε να περιστρέφεται γύρω από το κεφάλι σας το πιο γνωστό αξιοθέατο της περιοχής, το ρολόι Glockenspiel, μέχρι τις εξοχές γύρω από την πόλη με το μεγαλειώδες κάστρο Νeuschwanstein, το Μόναχο μάλλον έχει βγει όντως από παραμύθι. Και του χθες, αλλά και του σήμερα.</p>
      <h3>Τι θα δείτε</h3>
        <h4>Η μεσαιωνική πλατεία Marienplatz</h4>
          <p>Μία παλιά, πέρα ως πέρα ιστορική, πλατεία που αποτελεί το κέντρο και την «καρδιά» αυτής της υπερσύγχρονης, πανέμορφης γερμανικής πόλης. Η Marienplatz είναι το σημείο του Μονάχου όπου θα τριγυρίσετε πολλές φορές κατά την παραμονή σας στην πρωτεύουσα της Βαυαρίας χαζεύοντας κάθε φορά, λες και είναι η πρώτη, το επιβλητικό, μεγαλειώδες κτήριο του Δημαρχείου που οι ντόπιοι αποκαλούν «Neues Rathaus». Περίπου στο μέσον του κτηρίου θα δείτε και ένα από τα πιο γνωστά αξιοθέατα του Μονάχου, το μελωδικό, πανέμορφο ρολόι γνωστό με την ονομασία Glockenspiel. Ένα κουκλίστικο γλυπτό με παραδοσιακό χαρακτήρα το οποίο απεικονίζει τις φιγούρες Γερμανών βαρελάδων οι οποίες ζωντανεύουν και αρχίζουν να περιστρέφονται τρείς φορές κάθε μέρα. Στα μεγάλα musth σε μία επίσκεψη εδώ είναι και το ανεβείτε με το ασανσέρ στον ψηλότερο όροφο του κτηρίου για να απολαύσετε την ωραιότερη θέα σε ολόκληρο το Μόναχο.</p>
          <figure><img src="./assets/images/munich1_.jpg" class="img-fluid" alt="munich1_"><figcaption>Η πλατεία Marienplatz απο ψηλά</figcaption></figure>
        <h4>Η εκκλησία του Αγίου Πέτρου</h4>
          <p>Μιλώντας για μέρη απ’ όπου μπορείτε να απολαύσετε την πιο εντυπωσιακή εκδοχή του Μονάχου, ο πύργος της εκκλησίας του Αγίου Πέτρου, ο οποίος φτάνει τα 91 μέτρα ύψος, είναι από μόνος του ένα σημαντικό αξιοθέατο της πόλης, με την ανάβαση στα 300 σκαλοπάτια που οδηγούν στην κορυφή να αποτελεί καταπληκτική εμπειρία.</p>
          <p>Ο ναός του Αγίου Πέτρου είναι, σύμφωνα με επίσημα τοπικά έγγραφα, η παλαιότερη εκκλησία της πόλης και γι’ αυτόν τον λόγο υπήρξε ο πυρήνας γύρω από τον οποίο αναπτύχθηκε σταδιακά ο κοινωνικός ιστός του Μονάχου. Η θέα από τον τελευταίο όροφο του πύργου θα σας μείνει αξέχαστη, ενώ το εισιτήριο εισόδου κοστίζει μόλις 3 ευρώ.</p>
          <figure><img src="./assets/images/munich2.jpg" class="img-fluid" alt="munich2"><figcaption>Η εκκλησία του Αγίου Πέτρου απο ψηλά</figcaption></figure>
        <h4>Το ανάκτορο Nymphenburg</h4>
          <p>Καλοκαιρινή κατοικία του οίκου των Βίττελσμπαχ, της πρώην βασιλικής οικογένειας της Βαυαρίας, το ανάκτορο Nymphenburg είναι γνωστό και ως «Κάστρο της Νύμφης», ένα αρχιτεκτονικό κομψοτέχνημα χτισμένο με μπαρόκ τεχνοτροπία περίπου μισή ώρα έξω από το κέντρο της πόλης.</p>
          <p>Δεν είναι λίγοι εκείνοι που βλέπουν στο ανάκτορο Nymphenburg έναν άξιο αντίπαλο δέος των γαλλικών Βερσαλλιών, με τους μεγάλους κήπους του παλατιού, κατασκευασμένους σε γαλλικό στυλ, να μην έχουν πολλά να ζηλέψουν από το διάσημο, σε όλο τον κόσμο, σπίτι της Μαρίας Αντουανέτας.</p>
          <p>Στις αίθουσες του ανακτόρου φιλοξενούνται αρκετά σημαντικά δείγματα των γερμανικών εικαστικών τεχνών που αξίζει να δείτε από κοντά, ενώ πανέμορφες είναι και οι λίμνες που βρίσκονται μέσα στις εκτάσεις του Nymphenburg, με τη μεγαλύτερη να βρίσκεται ακριβώς μπροστά από το παλάτι σαν μία ιδιωτική, μικρή θάλασσα στην καρδιά του Μονάχου.</p>
          <figure><img src="./assets/images/munich3.jpg" class="img-fluid" alt="munich3"><figcaption>Το ανάκτορο Nymphenburg</figcaption></figure>
        <h4>Englischer Garten</h4>
          <p>Englische Garten σημαίνει «Αγγλικός Κήπος». Ένα τεράστιο πάρκο όπου θα απολαύσετε χαλαρωτικές ή πολύ διασκεδαστικές δραστηριότητες, όπως ηλιοθεραπεία σε καταπράσινες εκτάσεις γκαζόν και «θαλάσσιο» ποδήλατο στη λίμνη Kleinhesseloher See. Και σίγουρα θα ενθουσιαστείτε με το θέαμα στον παραπόταμο Eisbach, στο νότιο άκρο του πάρκου, εκεί όπου όλον τον χρόνο, ακόμα και στα μεγάλα κρύα, θα δείτε σέρφερ να μετρούν τις δυνάμεις τους με ένα τεχνητό κύμα ύψους ενός μέτρου. Αν είστε έμπειροι και γνωρίζετε καλά τις τεχνικές του αθλήματος μπορείτε να το τολμήσετε και εσείς. Αν πάλι προτιμάτε να αράξετε τότε πάρτε ένα μεγάλο ποτήρι παγωμένη μπύρα και καθίστε κάτω από τη φαρδιά ξύλινα παγόδα Chinesischer Turm, χαζεύοντας τη φύση.</p>
          <figure><img src="./assets/images/munich4.jpg" class="img-fluid" alt="munich4"><figcaption>Ο Αγγλικός Κήπος</figcaption></figure>
        <h4>Μία βραδιά στην Όπερα</h4>
          <p>Ένα μπαρόκ κτήριο του 17ου αιώνα είναι ένα από τα πιο γνωστά αξιοθέατα του Μονάχου και ένα από τα πιο εντυπωσιακά κτήρια της πόλης.</p>
          <p>Μία βραδιά στην όπερα είναι πραγματικό must αν ταξιδεύετε στην πρωτεύουσα της Βαυαρίας για να απολαύσετε μία θεατρική παράσταση, ακόμα κι αν δεν γνωρίζετε γερμανικά. Στην τεράστια κεντρική αίθουσα αυτού του συναρπαστικού θεάτρου θα μείνετε άφωνοι με την εκθαμβωτική διακόσμηση, τα τεράστια ημικυκλικά θεωρεία και, βέβαια, τον κρυστάλλινο πολυέλαιο που κρέμεται από το περίτεχνο ταβάνι.</p>
          <p>Η ομάδα του Nationaltheater του Μονάχου ιδρύθηκε το 1653 και φημίζεται για τις εξαιρετικές παραγωγές που ανεβάζει, ένας λόγος που πολύ θεατρόφιλοι και μουσικόφιλοι επιλέγουν το Μόναχο ως αγαπημένο τουριστικό προορισμό. Απλώς να έχετε κατά νου το έξης: τα εισιτήρια εξαντλούνται γρήγορα και είναι δυσεύρετα. Γι’ αυτό φροντίστε να κλείσετε τη θέση σας από νωρίς διαδικτυακά.</p>
          <figure><img src="./assets/images/munich5.jpg" class="img-fluid" alt="munich5"><figcaption>Η Όπερα του Μονάχου</figcaption></figure>
        <h4>Neuschwanstein</h4>
          <p>Aν κοιτώντας το συγκλονιστικά όμορφο κάστρο Νeuschwanstein, χτισμένο σε μία ειδυλλιακή τοποθεσία των γερμανικών Άλπεων, και αισθάνεστε ότι κάτι σας θυμίζει τότε σίγουρα το μυαλό σας τρέχει στην ταινία «Ωραία Κοιμωμένη» της Disney.</p>
          <p>Το διάσημο αξιοθέατο έξω από το Μόναχο είναι πράγματι το παλάτι που ενέπνευσε τους δημιουργούς της ταινίας κινουμένων σχεδίων του 1959 στο να σχεδιάσουν ένα κάστρο πανομοιότυπο με το Νeuschwanstein του 19ου αιώνα. Ένα ανάκτορο ωραίο σαν παραμύθι με ψηλοτάβανες αίθουσες περιτριγυρισμένες από ψηλά παράθυρα που αντικρύζουν την καταπράσινη κοιλάδα Hohenschwangau.</p>
          <p>Kλείστε τα εισιτήρια σας από πριν ιντερνετικά γιατί οι ουρές είναι πραγματικά τεράστιες και σε διαφορετική περίπτωση θα χρειαστεί να οπλιστείτε με μεγάλη υπομονή για να μπείτε. Μπορείτε να φτάστε στο Νeuschwanstein με λεωφορείο ή τρένο, αλλά σίγουρα ο καλύτερος τρόπος είναι να νοικιάσετε αυτοκίνητο προκειμένου να διασχίσετε οδικώς μία από τις πιο συναρπαστικές και πράσινες διαδρομές σε όλη την Ευρώπη.</p>
          <figure><img src="./assets/images/munich6.jpg" class="img-fluid" alt="munich6"><figcaption>Το κάστρο Νeuschwanstein</figcaption></figure>
      <h3>Τοπική κουζίνα</h3>
        <p>H κουζίνα του Μονάχου και γενικά της Βαυαρίας χαρακτηρίζεται «βαριά», καθώς υπάρχουν πολλά πιάτα με κρέας (π.χ. Schweinshaxe- ψητό κότσι γουρουνόπουλο) και κυνήγι, τα οποία συνήθως συνοδεύονται από Knöde (μπάλα από βραστή πατάτα). Το knöde συναντάται σε διαφορετικές εκδοχές στην αυστριακή, την τσέχικη και την ουγγρική κουζίνα.</p>
        <h4>Zum Dürnbräu</h4>
          <p>Βαυαρικό εστιατόριο και μπιραρία του μεσαιωνικού ζυθοποιείου, με ξύλινη επένδυση στους τοίχους και κλασικά πιάτα. Εδώ μπορείτε να δοκιμάσετε ένα πιάτο που είναι δημοφιλές στο Μόναχο, το Schweinshaxe, ένα ψητό χοιρινό κότσι που σερβίρεται με σαλάτα από ξινολάχανο και ντάμπλινγκς πατάτας. </p>
          <figure><img src="./assets/images/munich7.jpg" class="img-fluid" alt="munich7"><figcaption>Schweinshaxe- ψητό κότσι γουρουνόπουλο</figcaption></figure>
        <h4>Andy's Krablergarten</h4>
          <p>Χαλαρό εστιατόριο και μπυραρία που σερβίρει χορταστικά βαυαρικά συνοδευτικά, ψητά και σνίτσελ. Εδώ θα φάτε ένα ακόμη δημοφιλές πιάτο του Μονάχου που δεν είναι άλλο απο το τραγανό και πεντανόστιμο σνίτσελ.</p>
          <figure><img src="./assets/images/munich8.jpg" class="img-fluid" alt="munich8"><figcaption>Το σνίτσελ</figcaption></figure>
        <h4>Biergarten στον Αγγλικό κήπο</h4>
          <p>Ένα Biergarden ακριβώς στην άκρη της λίμνης στον Αγγλικό Κήπο! Αυτό είναι το καλύτερο που μπορείτε να έχετε σε μια ηλιόλουστη μέρα στο Μόναχο. Εδώ θα πιείτε μπύρα και θα απολαύσετε τοπικές λιχουδιές όπως φρέσκα ψάρια του γλυκού νερού με θέα την λίμνη.</p>
          <figure><img src="./assets/images/munich9.jpg" class="img-fluid" alt="munich9"><figcaption>Στο Biergarten</figcaption></figure>
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