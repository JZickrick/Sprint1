<!doctype html>
<html lang="en">
	<head>
	 <meta charset="utf-8">
        <title>Account Details</title>
		
		<style>
		table, th, td {
		border:1px solid black;
		margin-left: auto;
		margin-right: auto;
		table-layout: fixed;
		text-align: center;
		width: 50%;
}
	#pageHead{
		text-align: center;
	}
	h2{
	text-align: center;
	}
	#currInfo{
		text-align: left;
	}

		</style>
	</head>
	
	<body>
		<?PHP

		$servername = "localhost";
		$username = "user1";
		$password = "pwd16";
		$dbname = "AgileExpG1";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("SELECT * FROM Resort;");
			$stmt->execute();

			// set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				echo $v;
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		
		?>
	
	<h1 id = "pageHead">
	Timeshare Website
	</h1>
	
	<table >
		<tr>
			<th>Account</th>
			<th>Email</th>
			<th>Reservations</th>
		</tr>
	</table>
	
	<h2>
	Update Account Details
	</h2>
	
	<h3>
		
			<form>
	<table>
		<tr>
			<th>Update Information</th>
			<th>Current Information</th>
			</tr>
			<tr>
			<td>
			<br>
			<label for="newEmail">New Email:</label>
			<input type="text" id="newEmail" name="newEmail"><br><br>
			
			<label for="curPass">Current Password:</label>
			<input type="text" id="curPass" name="curPass"><br><br>
			
			<label for="newPass">New Password:</label>
			<input type="text" id="newPass" name="newPass"><br><br>
			
			
			
			</td>
			<td id="currInfo">
			Current email: <?php echo "$result" ?>
				<br><br><br>
			</td>
		</tr>
		</table>
		
		<center>
		<br>
		<input type="submit" value="Submit">
		</center>
		</form>
		</h3>
	</body>
</html>