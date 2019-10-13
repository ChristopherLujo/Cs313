<!DOCTYPE html>

  <head>
    <title>Chris's Homepage</title>
      <link type="text/css" rel="stylesheet" href="/src/Main.css" />
  </head>
  <body>
  <ul>
  <li><a href="Week2/aboutme.html">About Me</a></li>
  <li><a href="Week2/assignments.html">Assignments</a></li>
  <li><a href="https://github.com/ChristopherLujo">Github</a></li>
  <li style="float:right"><a class="active" href="index.php">Home</a></li>
</ul>
<br>
<h1 class="title1">Christopher Lujo</h1>
<br>
<br>

<img onclick="married()" class="wedding" src="src/images/Wedding.jpg"  width="700" height="500">


<div class=phppp>
<?php
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
  <br>
<?php
echo "<h2>Your input!</h2>";
echo "Your Name: " . $name . "<br>";
echo "Your Email: " . $email . "<br>";
echo "<br>";
echo $comment;
?>
</div>

<script src="src/Main.js"></script>
  </body>


