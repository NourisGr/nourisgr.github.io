<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <script src="https://kit.fontawesome.com/a2f6705154.js" crossorigin="anonymous"></script>
    <title>Phone</title>
</head>

<body>
    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("phone", "phone.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>

        <img src="include/images/contactus.png" class="contactimg" alt="contact us">
        <div class="contactpage">
            <h2>Our telephone number is:</h2>
            <h4><a href="https://www.yellow.lu/en/reverse-search" target="blank">
                    <li class="fa fa-fw fw fa-phone"></li>+352691258241
                </a></h4>
        <?php
    } else {
        navbar("phone", "phone.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
        ?>
            <img src="include/images/contactus.png" class="contactimg" alt="contact us">
            <div class="contactpage">
                <h2>Ο αριθμός τηλεφώνου μας είναι:</h2>
                <h4><a href="https://www.yellow.lu/en/reverse-search" target="blank">
                        <li class="fa fa-fw fw fa-phone"></li>+352691258241
                    </a></h4>
                <iframe src="https://discord.com/widget?id=697162177873707018&theme=dark" width="800" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
        <?php
    }
        ?>




</body>

</html>