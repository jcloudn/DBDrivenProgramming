<!DOCTYPE html>
<head>
<title>Greetings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>You Are Awesome!</h1>
</div>
				<div data-role="content">
<p>No act of kindness, no matter how small, is ever wasted. - Aesop</p>

	<?php
	//if statement example
$t = date("H");

	if ($t < 20) {
	    echo nl2br("I appreciate you!\n");
	}

	//else statement example
	$t = date("D");

	if ($t == "Fri") {
	    echo nl2br("Have a nice weekend!\n");
	} else {
	    echo nl2br("Have a nice day!\n");
	}


	//elseif statement example
	$t = date("H");

	if ($t < 10) {
	    echo "Have a good morning!";
	} elseif ($t < 18) {
	    echo "Have a great day!";
	} else {
	    echo "Have a good night!";
	}


?>

<div data-role="footer" data-theme="b">
	 <h4>MARVEL ADVENTURES &copy; 2018</h4>
</div>
</body>
</html>
