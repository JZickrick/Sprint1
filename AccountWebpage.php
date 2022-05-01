
<?php

$servername = "localhost";
$username = "user1";
$password = "pwd16";
$dbname = "AgileExpG1";

try {
	echo "doing stuff yo\n";

	$conn = new PDO("mysql:host=$servername;dbname=$dbnam", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT Email FROM AgileExpG1.Owner WHERE OwnerID = 1");
	$stmt->execute();
	
	echo $stmt->fetch()[0];
	echo "\nSuccess";
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

?>