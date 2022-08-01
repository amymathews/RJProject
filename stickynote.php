<!DOCTYPE html>
	<head>
	<!--	<meta charset="utf-8">
		<title> Sense_making </title>
		<script src="js/jquery.min.js"></script>
		<script src="js/d3.v6.min.js"></script>
		<script src="js/FileSaver.js"></script>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/style.css"> -->
	</head>
		<body>
					<form method="POST">
						<br><br>
						<p id="content"> Please input the content you want to display on the note</p>
						<input id="text_on_note" style="height: 50px ;">
						<br><br>
						<button id="create" type="button">create a sticky note</button>
						<p id="remove_note"><strong> Remove: double click on the sticky note to remove it </strong> </p>
						<button id="next" type="submit">Next</button>
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