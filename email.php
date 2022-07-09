<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <script src="https://kit.fontawesome.com/a2f6705154.js" crossorigin="anonymous"></script>
    <title>Email</title>
</head>

<body>
    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("email", "email.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>
        <img src="include/images/contactus.png" class="contactimg" alt="contact us">
        <div class="contactpage">
            <h2>Our Email is</h2>
            <h4><a href="https://mail.yahoo.com/d/compose/5479476841" target="blank">
                    <li class="fa fa-fw fw fa-at"></li>emilemetz@yahoo.com
                </a></h4>
        <?php
    } else {
        navbar("email", "email.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
        ?>
            <img src="include/images/contactus.png" class="contactimg" alt="contact us">
            <div class="contactpage">
                <h2>Το email μας είναι:</h2>
                <h4><a href="https://mail.yahoo.com/d/compose/5479476841" target="blank">
                        <li class="fa fa-fw fw fa-at"></li>emilemetz@yahoo.com
                    </a></h4>
            <?php
        }
            ?>

            </div>
</body>

</html>