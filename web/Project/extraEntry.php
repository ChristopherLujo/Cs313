<?php

require "connectDB.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>A Proactive Learner</title>
</head>

<body>
<div>

<h1>Enter New Projects, Udemy Courses, or Certificates Please!: </h1>

<form id= "mainForm" action="insertExtra.php" method="POST">

	<input type="project" id="project" name="project"></input>
	<label for="project">Project:</label>

	<input type="udemy" id="udemy" name="udemy"></input>
	<label for="udemy">Udemy Courses:</label>

	<input type="certificate" id="certificate" name="certificate"></input>
	<label for="certificate">Certificates:</label>

	<label>Courses:</label><br />


<?php

try
{
	// Notice that we do not use "SELECT *" here. It is best practice
	// to only bring back the fields that you need.
	// prepare the statement
	$statement = $db->prepare('SELECT id, project_name FROM projects');
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$id = $row['id'];
		$name = $row['project_name'];
		// Notice that we want the value of the checkbox to be the id of the label
		echo "<input type='checkbox' name='chkTopics[]' id='chkTopics$id' value='$id'>";
		// Also, so they can click on the label, and have it select the checkbox,
		// we need to use a label tag, and have it point to the id of the input element.
		// The trick here is that we need a unique id for each one. In this case,
		// we use "chkTopics" followed by the id, so that it becomes something like
		// "chkTopics1" and "chkTopics2", etc.
		echo "<label for='chkTopics$id'>$name</label><br />";
		// put a newline out there just to make our "view source" experience better
		echo "\n";
	}
}

catch (PDOException $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>

	<br />

	<input type="submit" value="Add to Database" />


</form>
</div>

</body> 
</html>