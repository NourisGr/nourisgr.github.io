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
    <title>Admin Page</title>
</head>

<body>
    <?php
    include_once("commoncode.php");

    if (!$_SESSION["Admin"]) {
        header("location: index.php");
        die;
    } else {

        navbar("admin", "admin.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>
        <div class="hometext">
            <h1>Welcome To the Admin Page!</h1>
        </div>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <h2 class="mb-5">Create Procuct</h2>
                                <form method="POST" action="">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX-2">Product Name</label>
                                        <input type="text" name="productname" id="typeEmailX-2" class="form-control form-control-lg" />
                                    </div>
                                    <hr class="my-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX-2">Product Descripion in English</label>
                                        <input type="text" name="descEN" id="typeEmailX-2" class="form-control form-control-lg" />
                                    </div>
                                    <hr class="my-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX-2">Product Descripion in Greek</label>
                                        <input type="text" name="descGR" id="typeEmailX-2" class="form-control form-control-lg" />
                                    </div>
                                    <hr class="my-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX-2">Price</label>
                                        <input type="number" name="price" id="typeEmailX-2" class="form-control form-control-lg" />
                                    </div>
                                    <hr class="my-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX-2">Image</label>
                                        <input type="text" name="img" id="typeEmailX-2" class="form-control form-control-lg" />
                                    </div>
                                    <hr class="my-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="sub" id="sub">Create Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php

    }
    ?>
</body>

</html>