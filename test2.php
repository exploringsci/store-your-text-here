<!DOCTYPE html>
<html>
<head>
<title>test2wo</title>
</head>
<body>
<h1>Welcome</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

	<input type="text" name="entered" />
	<input type="submit" />
	<input type="submit" name="clearfile" value="clear file?" />
</form>

<?php
	$myfile = fopen("words.txt", "a");
	fwrite($myfile, $_POST["entered"]);
	fclose($myfile);
	$my2file = fopen("words.txt", "r");
	echo fread($my2file, filesize("words.txt"));
	fclose($my2file);
?>

<?php
	if (isset($_POST['clearfile'])) {
        $thisfile = fopen("words.txt", "w");
	fwrite($thisfile, "Here are your messages: ");
	fclose($thisfile);
	
    }
?>

</body>
</html>