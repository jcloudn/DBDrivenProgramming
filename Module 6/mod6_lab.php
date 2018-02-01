<!DOCTYPE html>
<head>
<title>BINGO</title>
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
<h1>A Farmer And His Dog!</h1>
</div>

<?php

echo "There was a farmer who had a dog and Bingo was his name - oh!"."<br>";
echo "B-I-NGO, B-I-NGO, B-I-NGO and BINGO was his name - oh!"."<br>";
echo "There was a farmer who had a dog and Bingo was his name - oh!"."<br>";
echo substr("B-I-NGO",1)."<br>";
echo substr("B-I-NGO",1)."<br>";
echo substr("B-I-NGO",1)."<br>";
echo "and BINGO was his name - oh!"."<br>";
echo strrev("And BINGO was his name - oh!");

?>
<div data-role="footer" data-theme="b">
	 <h4>MARVEL ADVENTURES &copy; 2018</h4>
</div>
</body>
</html>
