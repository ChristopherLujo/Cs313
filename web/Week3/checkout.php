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

            <form action="confirmation.php" method="get">
        <div class="row">
            <div class="column">
                <h2>Checkout Form</h2>
    <table>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" id="first_name" class="form-control" required>
                                <label class="form-control-placeholder" for="name">First Name</label>
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" id="last_name" class="form-control" required>
                                <label class="form-control-placeholder" for="last_name">Last Name</label>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" id="address" size="30" class="form-control" required>
                                <label class="form-control-placeholder" for="address">Address</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <input type="text" id="phone" class="form-control" maxlength="10"required>
                                <label class="form-control-placeholder" for="phone">Phone Number</label>
                           </div>	
                        </td>
                    </tr>
                </table>

                <!-- USER'S PAYMENT METHOD -->

                <table>
                    <tr>
                        <td>
                            <label for="card_0">
                                <input type="radio" id="card_0" name="cards">
                                <span>Visa</span>
                            </label>
                        </td>

                        <td>
                            <label for="card_1">
                                <input type="radio" id="card_1" name="cards">
                                <span>MasterCard</span>
                            </label>
                        </td>

                        <td>
                            <label for="">
                                <input type="radio" id="card_2" name="cards">
                                <span>Amercan Express</span>
                            </label>
                        </td>

                        <td>
                            <label for="">
                                <input type="radio" id="card_3" name="cards">
                                <span>Paypal</span>
                            </label>
                        </td>

                    </tr>

                </table>

                <table>
                    <br>

                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" id="credit_card" class="form-control" maxlength="16" size="30" required>
                                <label class="form-control-placeholder" for="credit_card">Card Number</label>
                            </div>
                            
                        </td>	

                        <td>
                            <div class="form-group">
                                <input type="text" id="exp_date" class="form-control" maxlength="5" size="15" required>
                                <label class="form-control-placeholder" for="exp_date">Expiration Date</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="reset" name="reset" id="reset" value="Reset">
                        </td>
                    </tr>

                </table>

                <div align="center">
                    <a href="checkout.php" class="button">Submit Payment</a>
                </div>

            </div>
        </div>
    </form>

    </body>