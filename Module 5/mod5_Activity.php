<!DOCTYPE html>
<head>
<title>Countdown</title>
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
<h1>Let's Countdown!</h1>
</div>
  <?php
  for ($i = 100 ; $i >= 01; $i-=5) {
    echo "The number is: $i <br>";
  }

?>

<div data-role="footer" data-theme="b">
	 <h4>MARVEL ADVENTURES &copy; 2018</h4>
</div>
</body>
</html>
