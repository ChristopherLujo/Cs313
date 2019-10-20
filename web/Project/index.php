<?php

require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>A Proactive Learner</title>
</head>

<body>
<div>

<h1>Extas Done</h1>

<?php

$statement = $db->prepare("SELECT course_name, course_instructor  FROM Udemy");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	
	$name = $row['course_name'];
	$instructor  = $row['course_instructor'];
	echo "<p><strong>$name:$instructor</strong><p>";
}
?>
</div>

</body>
</html>