
<!DOCTYPE html>
<head>
</head>
	<body>
			<form  method="POST" >
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
?>