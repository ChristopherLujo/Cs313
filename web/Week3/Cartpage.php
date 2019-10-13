<?php
session_start();
?>


<!DOCTYPE html>


    <head>
            <link type="text/css" rel="stylesheet" href="week03.css" />
        <title></title>
    </head>
    <body>
    
    <div class="main">
		<header>
			<span onclick="location.href = 'storeFront.php';">LOST.</span>
		</header>
	</div>
		<section class="content">
            <div class="title2">
            <h1 class = "Cart_header">A CART IS SUCH A BEAUTIFUL THING.</h1>
            </div>

            <table>
        <thead>
           <tr>
               <th>Number</th>
               <th>Name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Update</th>
               <th>Delete</th>
           </tr>
        </thead>

        <tbody>
            <?php
                $sno = 1;
                $carts = $_SESSION['Carts'];
                foreach($carts as $products) {
                    $p = 0;
                    $q = 0;
                    echo "<tr>";
                        echo "<td>" . ($sno++) . "</td>";
                        echo "<form action='editCart.php' method='post'>";
                        foreach($products as $key => $value) {
    
                            if ($key >= 2) {
                                echo "<td><input type='text' name='name$key' class='input-field' value='".$value."'></td>";
                                $q = intval($value);
                            } else if ($key == 1) {
                                echo "<input type='hidden' name='name$key' value='".$value."'>";
                                echo "<td>" . $value . "</td>";
                                $p = intval($value);
                            } else if ($key == 0) {
                                echo "<input type='hidden' name='name$key' value='".$value."'>";
                                echo "<td>" . $value . "</td>";
                            }
                        }
                        $bill = ($q * $p);
                        echo "<td>" . ($bill) . "</td>";
                        echo "<td><input type='submit' name='event' value='Update'></td>";
                        echo "<td><input type='submit' name='event' value='Delete'</td>";
                        echo "</form>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

  
        <a href="checkout.php" class="button">Checkout</a>


    </body>