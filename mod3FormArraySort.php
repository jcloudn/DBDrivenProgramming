<!DOCTYPE HTML>
<head>
<title>Sorted Items</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
	<body>


		<?php
// define variables and set to empty values
$sortERR = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["item"])) {
		$sortERR = "Name is required";
	} else {
		$sort_item = test_input($_POST["item"]);
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}?>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>Your Results</h1>
</div>
<div data-role="content">
	<?php
	//array example
//THis declares the variable sort_item and sets it to an array called 'item'. 'Item' comes from the HTML form when you set the input name="item[]" for each field variable that you want to sort
	$sort_item = array(['item']);
//This is using the asort function to sort the 'stuff' array.
  asort($_POST['item']);
	// Loop through the  array. This loops through the array to print the values the user entered.
echo '<ul>';
	foreach($_POST['item'] as $value){
		if ($value){
		echo '<li>'.$value.'</li>';
		}

	}
	echo '</ul>';

?>




<div data-role="footer" data-theme="b">
	  <h4>MARVEL ADVENTURES &copy; 2018</h4>
</div>
</body>
</html>
