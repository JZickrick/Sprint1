$servername = "localhost";
$username = "user1";
$password = "pwd16";
$dbname = "AgileExpG1";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Email FROM Owner WHERE OwnerID = 1");

    $stmt->execute();

	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo $stmt->fetchAll();
#  }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
header('Location: diverAdd.html');


?>
