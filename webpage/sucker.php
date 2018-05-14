<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php

		?>
		<div >
		<h1 align="center">Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $_POST["firstname"];?></dd>

			<dt>Section</dt>
			<dd><?php echo $_POST["section"];?></dd>

			<dt>Credit Card</dt>
			<dd><?php echo $_POST["creditcard"]."(".$_POST["cardinfo"].")";?></dd>
		</dl>
		<p>Here all the suckers who have submitted here:!</p>
		<?php
$newfile=fopen("suckers.txt","a") or die("Unable man!");
$newline="\n";
fwrite($newfile, $_POST["firstname"].";");
fwrite($newfile, $_POST["section"].";");
fwrite($newfile, $_POST["creditcard"].";");
fwrite($newfile, $_POST["cardinfo"]);
fwrite($newfile,$newline);
fclose($newfile);
$newfile=fopen("suckers.txt", "r")or die("Unable to read man!");
while(!feof($newfile)){
	echo fgets($newfile)."<br>";
}
fclose($newfile);
		?>
	</div>
	</body>
</html>  