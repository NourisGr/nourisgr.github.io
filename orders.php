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

        navbar("orders", "orders.php", ["Logout", "Home ", "About ", "Contact ", "Email ", "Phone ", "Address ", "Products ", "ShopingCart", "Admin", "Orders", "Register ", "Login"], "EN");

        $sqlStatement = $connection->prepare("SELECT * FROM SeeAllOrders");
        $sqlStatement->execute();
        $result = $sqlStatement->get_result();
    ?>
        <div class="hometext">
            <h1>Welcome To the Orders Page!</h1>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">OrderID</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Products</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $row["OrderId"] ?></td>
                            <td><?= $row["UserName"] ?></td>
                            <td></td>
                            <td></td>
                            <td><?= $row["OrderAmount"] ?>€</td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>

    <?php

    }
    ?>
</body>

</html>