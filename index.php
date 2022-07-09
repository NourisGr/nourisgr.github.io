<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src='include/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src="https://kit.fontawesome.com/a2f6705154.js" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>

<body>
    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("index", "index.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>
        <div class="hometext">
            <h1>Welcome!</h1>
            <img src="include/images/800px-Coat_of_arms_of_Greece_military_variant.svg.png" class="homeimg" alt="img">

            <h2>What is Lorem Ipsum?</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.
            </p>
            <h2>Where does it comes from?</h2>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin
                literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                Hampden-Sydney College
                in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the
                cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                sections 1.10.32 and 1.10.33
                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is
                a treatise on the theory
                of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit
                amet..", comes from a line in section
                1.10.32.
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                1.10.32 and 1.10.33 from "de Finibus
                Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English
                versions from the 1914 translation by H. Rackham.
            </p>
        </div>
    <?php
    } else {
        navbar("index", "index.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");

    ?>
        <div class="hometext">
            <h1>Καλώς ορίσατε!</h1>
            <img src="include/images/800px-Coat_of_arms_of_Greece_military_variant.svg.png" class="homeimg" alt="img">

            <h2>Τι είναι το Lorem Ipsum;</h2>
            <p>
                Το Lorem Ipsum είναι απλά ψεύτικο κείμενο της βιομηχανίας τυπογραφίας και τυπογραφίας.
                Το Lorem Ipsum αποτελεί το τυπικό ανόητο κείμενο της βιομηχανίας από τη δεκαετία του 1500, όταν ένα
                ο άγνωστος εκτυπωτής πήρε ένα κουζινάκι τύπου και το κωδικοποίησε για να φτιάξει ένα βιβλίο δείγματος τύπου.
                Έχει επιβιώσει όχι μόνο πέντε αιώνες, αλλά και το άλμα στην ηλεκτρονική στοιχειοθέτηση, που παραμένει
                ουσιαστικά αμετάβλητο. Δημοσιεύθηκε στη δεκαετία του 1960 με την κυκλοφορία των φύλλων Letraset που περιέχουν
                Lorem Ipsum, και πιο πρόσφατα με το λογισμικό desktop publishing όπως το Aldus PageMaker συμπεριλαμβανομένων
                εκδόσεις του Lorem Ipsum.
            </p>
            <h2>Από πού προέρχεται;</h2>
            <p>
                Σε αντίθεση με τη δημοφιλή πεποίθηση, το Lorem Ipsum δεν είναι απλά τυχαίο κείμενο. Έχει ρίζες σε ένα κλασικό κομμάτι
                λατινικά
                λογοτεχνία από το 45 π.Χ., κάνοντάς το πάνω από 2000 χρόνια. Richard McClintock, λατινικός καθηγητής στο
                Το κολλέγιο Hampden-Sydney
                στη Βιρτζίνια, κοίταξε μια από τις πιο ασαφείς λατινικές λέξεις, συνέπεια, από ένα πέρασμα Lorem Ipsum και
                περνώντας από το
                οι λέξεις της λέξης στην κλασική λογοτεχνία, ανακάλυψαν την αδιαμφισβήτητη πηγή. Το Lorem Ipsum προέρχεται από
                τμήματα 1.10.32 και 1.10.33
                του "de Finibus Bonorum et Malorum" (Το άκρο του καλού και του κακού) του Cicero, που γράφτηκε το 45 π.Χ. Αυτό το βιβλίο είναι
                μια πραγματεία για τη θεωρία
                της ηθικής, πολύ δημοφιλής κατά την Αναγέννηση. Η πρώτη γραμμή του Lorem Ipsum, "Lorem ipsum dolor sit
                amet .. ", προέρχεται από μια γραμμή στο τμήμα
                1.10.32.
                Το πρότυπο κομμάτι του Lorem Ipsum που χρησιμοποιείται από τα 1500s αναπαράγεται παρακάτω για όσους ενδιαφέρονται. Ενότητες
                1.10.32 και 1.10.33 από την "Finibus
                Bonorum et Malorum "του Cicero αναπαράγονται επίσης στην ακριβή πρωτότυπη μορφή τους, συνοδευόμενη από τα αγγλικά
                εκδόσεις από τη μετάφραση του 1914 από τον H. Rackham.
            </p>
        </div>
    <?php
    }
    ?>
</body>

</html>