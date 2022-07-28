
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> Sense_making </title>
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
			<form  method="POST" action = "<?php $_PHP_SELF ?>" >
						<input type="text" name="ll" value="KKKK" >
						<button style="float:right; margin-top:15%" onclick="window.location.href = './stickynote.php'">next</button>
			</form>
	</body>
</html>
<?php
	if( $_POST )  {
		echo($_POST);
		echo "here";
		
		exit;
		}
	else
	{
	//	echo ($_GET);
	//	echo "---";
	}

?>
