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
		$con = mysql_connect("mscsdb.uwstout.edu:3306", "webbrowse", "MoviesWeb73!");
		if(!$con){
			die('Could not conect: ' . mysql_error());
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
			Current email:<br><br><br>
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