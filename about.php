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
    <title>About</title>
</head>

<body>
    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("about", "about.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>
    <div class="hometext">
        <h1>HTSTA & WSERS</h1>
        <ul class="aboutetext">
            <li>In HTSTA class we are learning how to build a WebSite usning HTML and CSS.</li>
            <li>This WebSite is our project for HTSTA and has to be done until 21 of April 2020.</li>
            <li>Project continues in course WSERS 2021. The goal this year is to rebuild the website using php & to create a full functional product page using only php code.</li>
        </ul>
        <img src="include/images/html.gif" class="aboutimg" alt="html">
        <img src="include/images/php.gif" class="aboutimg" alt="html">
    <?php
    } else {
        navbar("about", "about.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
    ?>
        <h1>HTSTA & WSERS</h1>

        <ul class="aboutetext">
            <li>Στην τάξη HTSTA μαθαίνουμε πώς να χτίζουμε έναν Ιστότοπο χρησιμοποιώντας HTML και CSS.</li>
            <li>Αυτός ο ιστότοπος είναι το έργο μας για το HTSTA και πρέπει να εκτελεστεί έως τις 21 Απριλίου 2020.</li>
            <li>Το έργο συνεχίζεται στην πορεία του WSERS 2021. Ο στόχος φέτος είναι να ξαναχτίσουμε τον ιστότοπο χρησιμοποιώντας php και να δημιουργήσουμε μια πλήρη λειτουργική σελίδα προϊόντος χρησιμοποιώντας μόνο κώδικα php.</li>
        </ul>
        <img src="include/images/html.gif" class="aboutimg" alt="html">
        <img src="include/images/php.gif" class="aboutimg" alt="html">
    <?php
    }
    ?>
    </div>

</body>

</html>