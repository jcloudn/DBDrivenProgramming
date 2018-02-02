<!DOCTYPE html>
<head>
<title>Palindromes</title>
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
<h1>Taco Cat</h1>
</div>

<?php

$palindrome='tacocat';
echo "Is this word a palindrome?: " . $palindrome . "<br>";
$reverse = strrev($palindrome);
if ($palindrome == $reverse)
    echo 'Output: Yes. This is a palindrome' . "<br>";
else
    echo 'Output: No. This is not a palindrome' . "<br>";
echo"<br \>";
$palindrome1 = 'fatcat';
echo "Is this word a palindrome?: " . $palindrome1 . "<br>";
$reverse = strrev($palindrome1);
if ($palindrome1 == $reverse)
      echo 'Output: Yes. This is a palindrome' . "<br>";
else
      echo 'Output: No. This is not a palindrome' . "<br>";
echo"<br \>";
$palindrome2 = 'civic';
echo "Is this word a palindrome?: " . $palindrome2 . "<br>";
$reverse = strrev($palindrome2);
if ($palindrome2 == $reverse)
        echo 'Output: Yes. This is a palindrome' . "<br>";
else
        echo 'Output: No. This is not a palindrome' . "<br>";

?>
<div data-role="footer" data-theme="b">
	 <h4>MARVEL ADVENTURES &copy; 2018</h4>
</div>
</body>
</html>
