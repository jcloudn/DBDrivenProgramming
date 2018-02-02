<?php
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
 ?>
<!DOCTYPE html>
<head>
<title>Calculate Sum</title>
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
<h1>Adding Numbers</h1>
</div>

    <form action="mod6_courseproject.php" method="post">
        <input type="text" name="number1" value="0" />
        <input type="text" name="number2" value="0" />
        <input type="submit" value="Calculate values" />
    </form>
    Answer: <?php echo ($number1 + $number2); ?>

<div data-role="footer" data-theme="b">
	 <h4>MARVEL ADVENTURES &copy; 2018</h4>
</div>
</body>
</html>
