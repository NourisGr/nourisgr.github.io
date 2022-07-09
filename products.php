<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <script src="https://kit.fontawesome.com/a2f6705154.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
    </Style>
</head>

<body>

    <?php
    include_once("commoncode.php");
    if ($_SESSION["Language"] == "EN") {
        navbar("products", "products.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    } else {
        navbar("products", "products.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
    }
    ?>

    <section class="section10">

        <?php

        if (isset($_POST["BuyProduct"])) {

            if (isset($_SESSION["ShoppingCart"][$_POST["BuyProduct"]])) {
                $_SESSION["ShoppingCart"][$_POST["BuyProduct"]]++;
            } else {
                $_SESSION["ShoppingCart"][$_POST["BuyProduct"]] = 1;
            }
        }

        if ($_SESSION["UserLoggedIn"]) {
        }
        ?>

        <h1>Products for sale</h1>
        <div class="allpro">



            <?php
            $glossa = "";
            if ($_SESSION["Language"] == "EN") {
                $glossa = 1;
            } else {
                $glossa = 2;
            }

            $sqlProducts = $connection->prepare("SELECT * From Products join Descriptions using (PID)  where LID=?");
            $sqlProducts->bind_param("i", $glossa);
            $sqlProducts->execute();
            $result = $sqlProducts->get_result();
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="column">
                    <h2><?= $row["ProductsName"] ?></h2>
                    <p<a href="Showdetail.php?PID=<?= $row["PID"] ?>">
                        <img src="include/images/<?= $row["img"] ?>">
                        </a></p>
                        <h5><?= $row["DescText"] ?> </h5>
                        <h4> <?= $row["ProductsPrice"] ?>€</h4>

                        <?php

                        ?>

                        <form method="POST">
                            <input type="hidden" name="BuyProduct" value="<?= $row["PID"] ?>">
                            <input type="submit" value="BUY" class="buybutton">
                        </form>

                </div>

            <?php
            }
            ?>
        </div>
    </section>
</body>

</html>


<!--

<section>
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x4</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1099</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">HP Notebook</h5>
              <h5 class="text-dark mb-0">$999</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
              <div class="ms-auto text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x2</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/7.webp"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1199</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">HP Envy</h5>
              <h5 class="text-dark mb-0">$1099</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
              <div class="ms-auto text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x3</p>
            </div>
          </div>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/5.webp"
            class="card-img-top" alt="Gaming Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1399</s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">Toshiba B77</h5>
              <h5 class="text-dark mb-0">$1299</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
              <div class="ms-auto text-warning">
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        -->