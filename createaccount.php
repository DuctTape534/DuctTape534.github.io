<html>
 <head>
  <title>Login</title>
 </head>
 <body>

<?php

//If Submit Button Is Clicked Do the Following
if ($_POST['login']){

$myFile = "accounts.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['uname'] . ":";
fwrite($fh, $stringData);
$stringData = $_POST['pswd'] . "\n";
fwrite($fh, $stringData);
fclose($fh);

} ?>


//goes here after
<script>location.href='file:///C:/Users/Devin%20Paul/Desktop/AVC%20Module%201%20website/fizzbuzz.html';</script>
	 
 </body>
</html>
