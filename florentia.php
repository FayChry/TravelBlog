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
      <h2 class="display-6 mb-1" style="color:#9A482E;">Φλωρεντία: Στη γοητευτική πρωτεύουσα της Τοσκάνης</h2>
      <p class="blog-post-meta">10 Απριλίου 2022, Φαίη</p>
      <img src="./assets/images/florentia169.jpg" class="img-fluid" alt="florentia169">
      <article class="blog-post">
        <p><em>Η γέφυρα Ponte Vecchio</em></p><hr>
        <p>Η Φλωρεντία είναι ένας τόπος ευλογημένος από κάθε άποψη: φυσικού τοπίου, αρχιτεκτονικής, γαστρονομίας, τέχνης – ιδίως, αυτής. Για να ακριβολογούμε είναι το λίκνο της ιταλικής Αναγέννησης. Μία παραμυθένια πόλη, η πιο παραμυθένια της Ιταλίας με την ανείπωτη ομορφιά και την υψηλή τέχνη που τη χαρακτηρίζουν να προκαλεί κάθε φορά εκστατικό δέος στον επισκέπτη.</p>
        <p>Κι αν κάποιος χρειαζόταν να χρησιμοποιήσει μόνο μία φράση για να περιγράψει τη Φλωρεντία, τότε θα έπρεπε να πει πως αυτή είναι η ευρωπαϊκή πόλη στην οποία ο χρόνος έχει για πάντα σταματήσει. Στην περίοδο της Αναγέννησης, σε έναν κόσμο ιδανικά ζωγραφισμένο από τα χέρια του Botticelli, σε μία εποχή καλυμμένη με περίτεχνες νωπογραφίες και μπαρόκ, αρχιτεκτονικά θαύματα. Εάν ταξιδέψετε στη Φλωρεντία, πάντως, το πιο πιθανό είναι να αναρωτηθείτε κι εσείς εάν αυτό που νιώθετε σχετίζεται με το περίφημο σύνδρομο Stedhal. Aκόμα πιο πιθανό είναι να σας ρωτήσουν οι φίλοι σας όταν θα επιστρέψετε. Φροντίστε να την απολαύσετε στο έπακρο ώστε να έχετε έτοιμη την απάντηση.</p>
      <h3>Τι να δείτε στη Φλωρεντία</h3>
        <h4>Γκαλερί Uffizi</h4>
          <p>Ένα από τα σημαντικότερα μουσεία σε ολόκληρο τον κόσμο, η διάσημη γκαλερί Uffizi, είναι το πιο γνωστό αξιοθέατο στη Φλωρεντία και ένα σπουδαίο σημείο αναφοράς για την αναγεννησιακή τέχνη του 16ου και του 17ου αιώνα.</p>
          <p>Εκεί, το 2018, ο 64χρονος – τότε – Carlo Olmastroni έπαθε έμφραγμα μπροστά στη «Γέννηση της Αφροδίτης» του Botticelli, ένα περιστατικό που αποτελεί το πιο αμφιλεγόμενο και συνάμα χαρακτηριστικό περιστατικό συνδρόμου Stedhal που σημειώθηκε ποτέ στην πόλη, η οποία προκαλεί στους επισκέπτες παράξενα, απερίγραπτα έντονα συναισθήματα με την απαράμιλλη ομορφιά της. Το θαυμάσιο κτήριο που στεγάζει πολλά από τα σπουδαιότερα έργα αναγεννησιακής τέχνης που αντίκρυσε ποτέ η ανθρωπότητα ξεκίνησε να κατασκευάζεται το 1560 και ολοκληρώθηκε το 1580 από τον Giorgio Vasari, φιλοξενώντας πίνακες των εικαστικών που όρισαν με τη δημιουργία τους την καλλιτεχνική μετάβαση από την περίοδο του Μεσαίωνα στη νέα εποχή.</p>
          <figure><img src="./assets/images/florentia2.jpg" class="img-fluid" alt="florentia2"><figcaption>Βotticelli, The birth of Venus</figcaption></figure>
          <p>Giotto, Piero della Francesca, Filippo Lippi, Βotticelli, Leonardo, Raffello, Michelangelo και Caravaggio συγκλονίζουν τους επισκέπτες και, αν βρίσκεστε στη Φλωρεντία για πρώτη φορά, πραγματικά αξίζει τον κόπο να προσπεράσετε τις προσωρινές εκθέσεις του μουσείου προκειμένου να αφιερώσετε όλο τον χρόνο σας στη μόνιμη συλλογή, η οποία είναι αληθινά κάτι το μαγευτικό.</p>
        <h4>Palazzo Vecchio</h4>
          <p>To κτήριο που κάποτε στέγαζε την κυβέρνηση της Φλωρεντίας έχει μετατραπεί πλέον σε μουσείο τέχνης, όντας ένα από τα πιο δημοφιλή σημεία σε ολόκληρη την πόλη. To Palazzo Vecchio προσελκύει χιλιάδες τουρίστες ετησίως, οι οποίοι «διψούν» για τα ανεκτίμητης αξίας εκθέματα του, ωστόσο, αυτή που κερδίζει πάντα στο τέλος τις εντυπώσεις είναι η πανέμορφη εσωτερική αυλή γεμάτη εκπληκτικές νωπογραφίες, σιντριβάνια και μαρμάρινα γλυπτά του 16ου αιώνα. Απολαύστε τη βόλτα σας χαζεύοντας το αντίγραφο του διάσημου Δαβίδ του Michelangelo, ένα από τα σπουδαιότερα έργα τέχνης που βρίσκονται στην ιταλική πόλη. Το αυθεντικό άγαλμα στεγάζεται πλέον στην κοντινή Galleria dell’Accademia, αλλά καθώς το γλυπτό κοσμούσε κάποτε τον εξωτερικό χώρο του Palazzo Vecchio θεωρήθηκε τουλάχιστον δίκαιο μία replica να τοποθετηθεί ακριβώς στο ίδιο σημείο.</p>
          <figure><img src="./assets/images/florentia3.jpg" class="img-fluid" alt="florentia3"><figcaption>Το Palazzo Vecchio</figcaption></figure>
        <h4>Καθεδρικός ναός της Φλωρεντίας και Θόλος του Μπρουνελέσκι</h4>
          <p>Εύκολα το πιο διάσημο και εμβληματικό ορόσημο στην Πόλη των Κρίνων, ο καθεδρικός ναός της Φλωρεντίας υπήρξε το κομψό επίκεντρο του ορίζοντα της Φλωρεντίας από τότε που ολοκληρώθηκε το 1436. Ένα από τα μεγαλύτερα μνημειώδη κτίρια εκκλησιών στην Ιταλία, αν όχι στον κόσμο, Ο εμβληματικός του θόλος –σχεδιασμένος από τον άνθρωπο της Αναγέννησης Filippo Brunelleschi– είναι ο μεγαλύτερος τοιχοποιός θόλος στον κόσμο με αρκετά μεγάλη διαφορά.</p>
          <p>Μέσα στον καθεδρικό ναό της Φλωρεντίας, θα δείτε από κοντά την υπέροχη μαρμάρινη χορωδία του Μπαντινέλι, τα πολύτιμα βιτρό παράθυρα του Ντονατέλο και το μυστηριώδες ρολόι του Πάολο Ουτσέλο. Το πάτωμα είναι ένα καλειδοσκόπιο από υπέροχα γεωμετρικά σχέδια σε μάρμαρο, και η οροφή; Λοιπόν, ας πούμε απλώς ότι η Καπέλα Σιξτίνα έγινε αντιληπτή όταν το εσωτερικό του θόλου του Brunelleschi τοιχογραφήθηκε από τον Giorgio Vasari το 1572. Απεικονίζοντας ζωντανές σκηνές από τη Θεία Κωμωδία του Δάντη, το εσωτερικό του θόλου είναι τόσο εντυπωσιακό όσο και το εξωτερικό, που είναι πραγματικά λέγοντας κάτι. </p>
          <figure><img src="./assets/images/florentia4.jpg" class="img-fluid" alt="florentia4"><figcaption>Καθεδρικός ναός της Φλωρεντίας και Θόλος του Μπρουνελέσκι</figcaption></figure>
        <h4>Piazzale Michelangiolo</h4>
          <p>Τόσο συχνά λάθος ως Piazzale Michelangelo ότι ακόμη και το υλικό τουριστικού υλικού περιστασιακά γλιστρά επάνω, αυτή η ταράτσα πάνω από την πόλη είναι μια υποχρεωτική στάση. Κατά τις πολυάσχολες τουριστικές περιόδους, ο καλύτερος χρόνος για να το απολαύσετε σε σχετική ειρήνη είναι αργά το απόγευμα ή νωρίς το βράδυ. Είναι ιδιαίτερα όμορφο κατά το ηλιοβασίλεμα. Παρόλο που μπορείτε να πάρετε ένα πανόραμα 360 μοιρών της Φλωρεντίας από τον θόλο του καθεδρικού ναού, μόνο από αυτή τη βεράντα μπορείτε να εκτιμήσετε πλήρως πώς ο θόλος του Brunelleschi κυριαρχεί στο κέντρο της πόλης. Ούτε άλλο ύψος δεν μπορεί να σας δώσει αυτή τη σαρωτική θέα στην πόλη που περικλείει το Ponte Vecchio, Palazzo Vecchio, Santa Croce, και άλλα ορόσημα.</p>
          <figure><img src="./assets/images/florentia5.jpg" class="img-fluid" alt="florentia5"><figcaption>Η θέα από την Piazzale Michelangiolo</figcaption></figure>
        <h4>Santa Croce</h4>
          <p>Πίσω από την γεωμετρική μαρμάρινη επένδυση της τυπικής πρόσοψης της Τοσκάνης, το Santa Croce είναι γεμάτο τέχνη εκκλησία και μαυσωλείο για μερικά από τα μεγαλύτερα ονόματα της Φλωρεντίας. Μεταξύ των θησαυρών της υπάρχουν πολλά ορόσημα της τέχνης της Αναγέννησης. Θα θελήσετε να ψάξετε ιδιαίτερα Cappella Bardi με μερικές από τις μεγάλες τοιχογραφίες του Giotto, και στις παρακείμενες Cappella Peruzzi, για περισσότερα από αυτά, τα οποία ενέπνευσαν τον Masaccio και τον Michelangelo. Το Donatello Ο Χριστός Σταυρώθηκε θεωρείται ένα από τα ωραιότερα παραδείγματα του φλωρεντινού αναγεννησιακού ανθρωπισμού. Οι τοιχογραφίες στο Cappella Baroncelli είναι το μεγαλύτερο έργο του Taddeo Gaddi. Όμως, ο πιο διάσημος είναι ο υπέροχος Σταυρός του Cimabue, ένας από τους πρώτους που μετακινούνται από δύσκαμπτες βυζαντινές σε φυσιοκρατικές μορφές Αναγέννησης, επηρεάζοντας τους μεγαλύτερους καλλιτέχνες που ακολούθησαν. Στο ναό, θα βρείτε τους τάφους του Μιχαήλ Άγγελο, του Γαλιλαίου, του Γκιμπέρτι, του συνθέτη Γκιόατσινο Ροσίνι, ακόμη και του Μακιαβέλι.</p>
          <figure><img src="./assets/images/florentia6.jpg" class="img-fluid" alt="florentia6"><figcaption>Santa Croce</figcaption></figure>
      <h3>Που να φάς στη Ρώμη</h3>
        <p>Η Φλωρεντία είναι μία πόλη που δεν θα σας δυσκολέψει καθόλου από άποψη φαγητού, αφού διαθέτει πλήθος επιλογών. Η κουζίνα της Τοσκάνης δεν είναι ελαφριά και στηρίζεται στο αλατισμένο ψωμί, τα τυριά, το κοτόπουλο, το κυνήγι (αγριογούρουνο, ελάφι και κουνέλι) σε πολλές εκδοχές, τις παχύρρευστες σούπες και τα φασόλια. Τα πάντα βέβαια συνοδεύονται από ένα καλό τοπικό κρασί. Στην πόλη αγαπάνε το καλό φαγητό είτε αυτό είναι σε μία ταβερνούλα είτε στο χέρι με ένα χορταστικό panini. Για ένα πλήρες γεύμα σε κάποια trattoria θα πληρώσετε 25-30€ / άτομο με κρασί, ενώ για ένα panini θα πληρώσετε 5€. Μην παραλείψετε να δοκιμάσετε την περίφημη bistecca alla fiorentina (μπριζόλα), τα πιάτα πάστας, την trippa alla fiorentina (πατσάς), το δημοφιλές antipasto crostini di fegato (πατέ συκωτιού με ψωμί), το τοπικό κρασί Chianti, και για κλείσιμο σας προτείνουμε το Schiacciata Fiorentina και τις δεκάδες γεύσεις gelato!</p>
        <h4>All'Antico Vinaio – το καλύτερο σάντουιτς στη Φλωρεντία</h4>
          <p>Σύμφωνα με τους ντόπιους, αν δεν έχετε πάει στο All'Antico Vinaio, δεν έχετε πάει πραγματικά στη Φλωρεντία. Αυτό το γαστρονομικό ίδρυμα της Φλωρεντίας άνοιξε για πρώτη φορά τη δεκαετία του 1960, αλλά έγινε πραγματικά από μόνο του αφού άλλαξε χέρια το 1989.</p>
          <p>Σήμερα, μπορεί να υπερηφανεύεται για τη μοναδική διάκριση ότι προσφέρει το πιο νόστιμο σάντουιτς λίβρα προς λίβρα στη Φλωρεντία. Τώρα με τρεις τοποθεσίες στον ίδιο δρόμο, το All'Antico Vinaio εξυπηρετεί καθημερινά εκατοντάδες πεινασμένους ντόπιους και τουρίστες, με γερασμένους πύργους αλλαντικών και χειροποίητες γεμίσεις ανάμεσα σε φλωρεντίνικο ψωμί σχιατσιάτα. Είναι εξίσου απαραίτητη μια εμπειρία της Φλωρεντίας με το Uffizi ή το Il Duomo.</p>
          <figure><img src="./assets/images/florentia7.jpg" class="img-fluid" alt="florentia7"><figcaption>Σάντουιτς απο το All'Antico Vinaio</figcaption></figure>
        <h4>Trattoria Dall'Oste</h4>
          <p>Ένα σπάνιο μαργαριτάρι  στο γευστικό χάρτη της Φλωρεντίας και  μια από τις καλύτερες  διευθύνσεις για να απολαύσετε την επίτομη της γεύσης την επική μπριζόλα Bistecca alla Fiorentina ,  είναι η Trattoria “Dall'Oste”. Όλα εδώ περιστρέφονται γύρω από το κρέας. </p>
          <p>Η Bistecca alla Fiorentina  είναι η Βασίλισσα της Φλωρεντιανής κουζίνας ,  πρόκειται για την πληθωρικότερη και νοστιμότερη μοσχαρίσια  μπριζόλα στο κόσμο με βασικό χαρακτηριστικό το κόκαλο της, που έχει σχήμα «Τ» . Υπάρχουν πολλοί «κανόνες» που πρέπει να τηρούνται κατά την προετοιμασία αυτής της επικής μπριζόλας, πρώτον το κρέας πρέπει να προέρχεται από τις ράτσες βοοειδών Chianina ή Maremma που εκτρέφονται στη περιοχή της Τοσκάνης . Το μοσχάρι να είναι ηλικίας 12 ή 18 μηνών και βέβαια να κόβεται το κρέας από τον βραχίονα για να μας δώσει την διάσημη μπριζόλα με το σχήμα Τ στο οστό . Η  διαδικασία που ακολουθείται στο  ψήσιμο της  bistecca alla fiorentina  είναι συγκεκριμένη , από έξω πρέπει να είναι καβουρδισμένη με τα σημάδια της σχάρας στο φλοιό της και μέσα τρυφερή και ζουμερή. Αν δεν είστε οπαδός αυτής της  σπάνιας και διάσημης  μπριζόλας, τότε αυτό το πιάτο δεν είναι σίγουρα  για σας.</p>
          <figure><img src="./assets/images/florentia8.jpg" class="img-fluid" alt="florentia8"><figcaption>Η μοσχαρίσια  μπριζόλα Bistecca alla Fiorentina</figcaption></figure>
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