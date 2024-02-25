<?php

include("connection.php");
session_start();


if (isset($_POST['adding'])) {
    foreach ($_SESSION["shopping_cart"] as &$product) {

        if ($product['a_p_id'] === $_POST["s_id"]) {
            $product["quantity"] += 1;
            break;
        }
    }
}


if (isset($_POST["sub"])) {
    foreach ($_SESSION["shopping_cart"] as &$product) {

        if ($product["quantity"] > 1) {
            if ($product["a_p_id"] === $_POST["s_id"]) {
                $product["quantity"] -= 1;
                break;
            }
        }
        if ($product["quantity"] == 1) {
            if ($product["a_p_id"] === $_POST["s_id"]) {
                $key = $product["name"];
                unset($_SESSION["shopping_cart"][$key]);
                if (empty($_SESSION["shopping_cart"])) {
                    unset($_SESSION["shopping_cart"]);
                }
            }
        }
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>



    <table class="table align-middle mb-0 mt-5 bg-white">
        <thead class="bg-dark">
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Addition</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Remove</th>

            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_SESSION["shopping_cart"])) {
                $total_price = 0;
            }
            ?>
            <?php

            if (!empty($_SESSION["shopping_cart"])) {
                foreach ($_SESSION["shopping_cart"] as $value) { ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="img/<?php echo $value["img"] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $value["name"] ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo $value["quantity"] ?></p>
                        </td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="s_id" value="<?php echo $value["a_p_id"] ?>">
                                <button type="submit" name="adding" class="btn btn-primary btn-sm btn-rounded">
                                    +
                                </button>
                                <button type="submit" name="sub" class="btn btn-success btn-sm btn-rounded">
                                    -
                                </button>
                            </form>

                        </td>
                        <td><?php echo '$' . $value["price"] ?></td>
                        <td><?php echo $value["price"] * $value["quantity"] ?></td>
                        <td>
                            <form action="view_cart_remove.php" method="post">
                                <input type="hidden" name="r_id" value="<?php echo $value["a_p_id"] ?>">
                                <button type="submit" name="remove" class="btn btn-danger btn-sm btn-rounded">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" align="right">
                        <?php
                        $total_price = $total_price + ($value["price"] * $value["quantity"]);
                        //Loop Ended





                    }
                        ?>
                        <strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
                        <a href="checkout.php?order=<?php echo $total_price ?>">checkout</a>

                        </td>
                    </tr>
                <?php

            } else if (empty($_SESSION["shopping_cart"])) {
                header("location:product.php");
            }

                ?>


        </tbody>
    </table>


</body>

</html>