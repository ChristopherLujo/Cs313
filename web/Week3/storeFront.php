<!DOCTYPE html>

    <head>
            <link type="text/css" rel="stylesheet" href="week03.css" />
        <title></title>
    </head>
    <body>
    
    <div class="main">
		<header>
			<span onclick="location.href = 'storeFront.php';">LOST.</span>
            <img class ="carttt" onclick="location.href = 'Cartpage.php';" src="https://pngriver.com/wp-content/uploads/2018/04/Download-Shopping-Cart-Logo-Png-Image-77784-For-Designing-Projects.png">
		</header>


		<div class="slider" >

        <div class="face face--front">
				<img class="img" src="https://images.unsplash.com/photo-1520179307921-eb8ee73f131c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80">
				<div class="description">
                    <h2 class="title">Just Live It.</h2>
                    <p class="para">It is made for you, for you.</p>
				</div>
                        </div>
					
						<div class="face face--right">
                <img class="img" src="https://images.unsplash.com/photo-1556130293-32c94f521550?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3135&q=80">
				<div class="description">
                    <h2 class="title">Be A Child At Heart.</h2>
                    <p class="para">Where fashion and age met.  </p>
	
				</div>
						</div>

                        <div class="face face--back">
				<img class="img" src="https://images.unsplash.com/photo-1512445239398-6d0c4c575b89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80">
				<div class="description">
                    <h2 class="title">Simplity Is Key.</h2>
                    <p class="para">Simple is the core of the heart.</p>
				</div>
						</div>

			<div class="face face--left">
				<img class="img" src="https://images.unsplash.com/photo-1452979081267-f541411cb48e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3035&q=80">
				<div class="description">
                    <h2 class="title">Love | Life | Enjoy.</h2>
                    <p class="para">Life is too wild to tame. </p>
				</div>
			</div>
		</div>

		<section class="content">
            <div class="title2">
            <h1 > DON'T WASTE YOUR TIME ON THE SMALL THINGS.</h1>
            </div>
            
    
        <table> 
            <thead>
                <tr> 
                    <th class = "headerll" >Name</th>
                    <th class = "headerll">Image</th>
                    <th class = "headerll">Price</th>
                    <th class = "headerll">Quantity</th>
                </tr>
            </thead>
            <form action="insertCart.php" mehtod="post">
            <tbody>
                <tr>
                <td class= "product_name">Work Jacket</td>
                        <td><img class = "imageee" width="40%" src="https://cdn.dribbble.com/users/989234/screenshots/6368271/dribbble_shot_4x.png" alt="Assignment 3"></td>
                        <th>$55</th>
                        <td><input type="text" name="qty" class="input-field"></td>
                        <input type="hidden" name="name" value="Jacket">
                        <input type="hidden" name="price" value="55">
                    </tr>

                    <tr>
                        <td class= "product_name">Utility Pants</td>
                        <td><img class = "imageee" width="40%" src="https://cdn.dribbble.com/users/986480/screenshots/5472115/mockup-ff62f2fa_1024x1024_2x.jpg" alt="Assignment 4"></td>
                        <th>$50</th>
                        <td><input type="text" name="qty" class="input-field"></td>
                        <input type="hidden" name="name" value="Utility Pants">
                        <input type="hidden" name="price" value="50">
                    </tr>

                    <tr>
                        <td class= "product_name">Coding Shirts</td>
                        <td><img class = "imageee" width="40%" src="https://images.pexels.com/photos/267294/pexels-photo-267294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Assignment 4"></td>
                        <th>$60</th>
                        <td><input type="text" name="qty" class="input-field"></td>
                        <input type="hidden" name="name" value="Coding Shirts">
                        <input type="hidden" name="price" value="60">
                    </tr>
                    <tr>
                        <td><input class="Button" type="submit" value="Add to Cart" name="addCart"></td>
                    </tr>
            </tbody>
            </form>
        </table>
        
       

		</section>
</div>

    </body>
</html>