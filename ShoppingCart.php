<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src='include/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src="https://kit.fontawesome.com/a2f6705154.js" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
    <style>
    </Style>
</head>

<body>

    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("ShoppingCart", "ShoppingCart.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    } else {
        navbar("ShoppingCart", "ShoppingCart.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
    }
    ?>
    <?php
    if ($_SESSION["UserLoggedIn"] == false) {
        header("location: products.php");
        die();
    }

    if (isset($_POST["ProductToDelete"])) {
        if (isset($_SESSION["ShoppingCart"][$_POST["ProductToDelete"]])) {
            unset($_SESSION["ShoppingCart"][$_POST["ProductToDelete"]]);
        } else {
            print "<script>alert('the product does not exist in the shopping cart')</script>";
        }
    }
    ?>
    <div class="hometext">
        <section class="h-100 h-custom ">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                            </div>

                                            <hr class="my-4">
                                            <?php

                                            $TotalPrice = 0;
                                            foreach ($_SESSION["ShoppingCart"] as $key => $value) {
                                                $sql = $connection->prepare("Select * from Products where PID=?");
                                                $sql->bind_param("s", $key);
                                                $sql->execute();
                                                $result = $sql->get_result();
                                                $row = $result->fetch_assoc();
                                            ?>
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">

                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="include/images/<?= $row["img"] ?>" class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-black mb-0"><?= $row["ProductsName"] ?></h6>
                                                    </div>
                                                    <div class="col-md-2 d-flex justify-content-center">
                                                        <div>
                                                            <p class="small text-muted mb-4 pb-2">Quantity</p>
                                                            <p class="lead fw-normal mb-0"><?= $value ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0"><?= $row["ProductsPrice"] ?>€ </h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <form method="POST">
                                                            <input type="hidden" name="ProductToDelete" value="<?= $row["PID"] ?>">
                                                            <button type="submit" name="removeItem" class="text-muted"><i class="fas fa-times"></i></button>
                                                        </form>

                                                    </div>
                                                    <hr class="my-4">
                                                </div>
                                            <?php
                                                $TotalPrice += $row["ProductsPrice"] * $value;
                                            }

                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 bg-grey">
                                        <div class="p-5">
                                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                            <hr class="my-4">
                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Total price</h5>
                                                <h5><?= $TotalPrice ?> €</h5>
                                            </div>
                                            <form method="POST">
                                                <button type="submit" name="BuyAll" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Order</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>