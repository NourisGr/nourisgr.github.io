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
    <title>Login</title>
</head>

<body>
    <?php
    include_once("commoncode.php");


    if ($_SESSION["UserLoggedIn"]) {
        header("location: index.php");
        die;
    } else {


        if ($_SESSION["Language"] == "EN") {
            navbar("login", "login.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");
    ?>

            <div class="loginpage">

                <div>
                    <form METHOD="POST">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">

                                        <div class="mb-md-5 mt-md-4 pb-5">

                                            <h1 class="fw-bold mb-2 text-uppercase">Login to make an oreder</h1>
                                            <p class="text-white-50 mb-5">Please enter your User Name and Password!</p>

                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="typeEmailX">User Name</label>
                                                <input type="text" name="User" placeholder="User Name" class="form-control form-control-lg" />
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="typePasswordX">Password</label>
                                                <input type="password" name="psw" placeholder="Password" class="form-control form-control-lg" />
                                            </div>

                                            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="Login" value="Login">Login</button>

                                        </div>

                                        <div>
                                            <p class="mb-0">You do not have an account? <a href="register_login.php" class="text-white-50 fw-bold">Sign Up</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        <?php
        } else {
            navbar("login", "login.php", ["Αποσύνδεση", "Αρχική", "Σχετικά", "Τρόποι Επικοινωνιάς", "Email", "Κινήτο", "Διεύθυνση", "Προϊόντα", "Καρτέλα", "Διαχείριση", "Παραγγελίες ", "Εγγραφή", "Σύνδεση"], "GR");
        ?>
            <div class="loginpage">

                <div>
                    <form METHOD="POST">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">

                                        <div class="mb-md-5 mt-md-4 pb-5">

                                            <h1 class="fw-bold mb-2 text-uppercase">Συνδεθείτε για να παραγγείλετε</h1>
                                            <p class="text-white-50 mb-5">Παρακαλώ εισάγετε το όνομα χρήστη και τον κωδικό πρόσβασής σας!</p>

                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="typeEmailX">Όνομα Χρήστη</label>
                                                <input type="text" name="User" placeholder="User Name" class="form-control form-control-lg" />
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label" for="typePasswordX">Κωδικός</label>
                                                <input type="password" name="psw" placeholder="Password" class="form-control form-control-lg" />
                                            </div>

                                            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="Login" value="Login">Συνδεθείτε</button>

                                        </div>

                                        <div>
                                            <p class="mb-0">Δεν έχετε λογαριασμό ακόμα; <a href="register_login.php" class="text-white-50 fw-bold">Εγγραφείτε</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
    <?php
        }
    }
    ?>
</body>

</html>