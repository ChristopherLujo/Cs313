<?php
function get_db() {

	try {

		$dbUrl = getenv('DATABASE_URL');

		if (!isset($dbUrl) || empty($dbUrl)) {
			// example localhost configuration URL with user: "ta_user", password: "ta_pass"
			// and a database called "scripture_ta"
			$dbUrl = "postgres://viewer_user:view@localhost:5432/tasks";

        $dbopts = parse_url($dbUrl);
        
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
	
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $db;
    }
    
	catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}
}
?>