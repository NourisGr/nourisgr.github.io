<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <script src="https://kit.fontawesome.com/a2f6705154.js" crossorigin="anonymous"></script>
    <title>Address</title>
</head>

<body>
    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("address", "address.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>

        <img src="include/images/contactus.png" class="contactimg" alt="contact us">
        <div class="contactpage">
            <h2>Our Address is:</h2>
            <h4><a href="https://www.google.com/maps/place/Technical+College+Private+Emile+Metz/@49.6348855,6.132719,17z/data=!3m1!4b1!4m5!3m4!1s0x47954f18c1f8a721:0xdf0b2f1f4e71633b!8m2!3d49.6348855!4d6.1349077" target="blank">
                    <li class=" fa fa-fw fw fa-map-marker"></li> Address: 19 rue du Beggen, Luxembourg
                </a></h4>
        </div>
    <?php
    } else {
        navbar("address", "address.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
    ?>
        <img src="include/images/contactus.png" class="contactimg" alt="contact us">
        <div class="contactpage">
            <h2>Η διεύθυνση μας είναι:</h2>
            <h4><a href="https://www.google.com/maps/place/Technical+College+Private+Emile+Metz/@49.6348855,6.132719,17z/data=!3m1!4b1!4m5!3m4!1s0x47954f18c1f8a721:0xdf0b2f1f4e71633b!8m2!3d49.6348855!4d6.1349077" target="blank">
                    <li class=" fa fa-fw fw fa-map-marker"></li> Διεύθυνση: 19 rue du Beggen, Luxembourg
                </a></h4>
        </div>
    <?php
    }
    ?>
</body>

</html>