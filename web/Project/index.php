<?php
/**********************************************************
* File: showTopics.php
* Author: Br. Burton
* 
* Description: This file retrieves the scriptures and topics
* from the DB.
***********************************************************/
require("connectDB.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Extra Courses</title>
</head>

<body>
<div>

<h1>Courses List</h1>

<?php
try
{
	// For this example, we are going to make a call to the DB to get the scriptures
	// and then for each one, make a separate call to get its topics.
	// This could be done with a single query (and then more processing of the resultset
	// afterward) as follows:
	//	$statement = $db->prepare('SELECT book, chapter, verse, content, t.name FROM scripture s'
	//	. ' INNER JOIN scripture_topic st ON s.id = st.scriptureId'
	//	. ' INNER JOIN topic t ON st.topicId = t.id');
	// prepare the statement
	$statement = $db->prepare('SELECT project_name FROM projects');
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['project_name'];
		echo '<br />';
		echo 'Projects: ';
		// get the topics now for this scripture
		$stmtProjects = $db->prepare('SELECT name FROM projects t'

		$stmtProjects->bindValue(':ProjectId', $row['id']);
		$stmtTopics->execute();
		// Go through each topic in the result
		while ($ProjectsRow = $stmtProjects->fetch(PDO::FETCH_ASSOC))
		{
			echo $ProjectsRow['name'] . ' ';
		}
		echo '</p>';
	}
}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
?>

</div>

</body>
</html>