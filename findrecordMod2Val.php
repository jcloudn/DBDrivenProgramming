<html>
		<head>
	<title>Find a record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themesMod2/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themesMod2/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>
	Search Results
		</h1>	</div>
				<div data-role="content">
	<?php
	include 'configMod2.php';
	include 'opendbMod2.php';

               $lastname = (isset($_POST['lastName'])    ? $_POST['lastName']   : '');


$sql= "SELECT id, firstName, lastName, email, phone FROM mytable where LastName = '$lastname' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
				echo "<b>ID: " . $row["id"]. "</b><br>";
			  echo "<b>Name: " . $row["firstName"]. " " . $row["lastName"]. "</b><br>";
        echo "<b>Email: " . $row["email"]. "</b><br>";
				echo "<b>Phone: " . $row["phone"]. "</b><br><hr>";
    }
} else {
    echo "Sorry there are no matches! Please check your entry and try again.";
}

mysqli_close($conn);

	if (isset($_POST['submit'])){
		if (empty($_POST['lastName'])){
		echo "Last name is required";
	}
}

?>

				<div data-role="footer" data-theme="b">
	  <h4>MARVEL ADVENTURES &copy; 2018</h4>
	</div>

	</body>
</html>
