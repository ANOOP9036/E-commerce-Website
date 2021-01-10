<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/checkoutStyle.css">
    <title>Checkout</title>
</head>

<body>
    <header>
        <nav>
            <div id="logo">
                <h1>Electronic store</h1>
            </div>
            <ul class="links">
                <li><a href="home.php">Home</a></li>
                <li><a href="login.html">Sign Out</a></li>
            </ul>
        </nav>
    </header>
    <section class="checkout">
        <div class="container">
            <div class="orders">
                <h1>Checkout</h1>

                <?php

                $my = file_get_contents("./json/cart.json");
                $f = json_decode($my, true);
                ?>

                <table>

                    <tr>

                        <th>Id</th>

                        <th>Name</th>

                        <th>Price</th>

                        <th>category</th>

                        <th>Action</th>

                    </tr>
                    <?php
                    foreach ($f as $row) {

                        echo "<tr>";

                        echo "<td>" . $row['id'] . "</td>";

                        echo "<td>" . $row['name'] . "</td>";

                        echo "<td>" . $row['price'] . "</td>";

                        echo "<td>" . $row['category'] . "</td>";

                        echo '<td><a href=deletecart.php?id="' . $row["id"] . '"><button type="submit" class="btn">Delete</button></a></td>';

                        //echo '<td><button type="submit" class="btn">Delete</button></td>';

                        echo "</tr>";


                    }

                    echo "</table>";

                    $total = 0;

                    foreach($f as $row){
                        $total = $total + $row["price"];
                    }

                    ?>
                    <div class="total">
                        <h2>Total:<?php echo $total;  ?></h2>
                        <a href="pay.php" class="primary-btn">Pay</a>
                    </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Copyright &copy; 2020</p>
    </footer>
</body>

</html>