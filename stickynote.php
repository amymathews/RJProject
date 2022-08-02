<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> Sense_making </title>
    <script src="js/jquery.min.js"></script>
    <script src="js/d3.v6.min.js"></script>
    <script src="js/FileSaver.js"></script>

    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form method = "post">
    <div class="content">
			<div class="container">
				<div id="category_title" style="position:absolute;margin-left:27%;width:60%;display:flex;font-size:18px">
					<p style="margin-left:5%">stakeholders</p>
					<p style="margin-left:17%">feelings</p>
					<p style="margin-left:18%">desired outcomes</p>
				</div>
					<div id='stickynotes'></div>
					<div id='selector' style="position: absolute;font-size:15px;width:20%">
							<p id="note_type"> <strong> On this page, we will work on creating sticky notes to identify the people, feelings and actions related to the harm that you have experienced. </strong></p>
							<p> <strong>Please answer the questions and we will create the sticky notes for you.</strong></p>
							<p id="question"> q3) Who do you think can help you address the harm? Who do you think has responsibility for helping you address the harm? <br><br>  Please put their names (e.g., offender) into the textbox below, and click "create new note"</p>
							<img style="float:right" src=images/next.png onclick="clickFunc()">
							<img style="float:left" src=images/back.png onclick="backClick()">
							<br><br>
							<p id="content"> Please input the content you want to display on the note</p>
							<input id="text_on_note" name="text_on_note" style="height: 50px ;" />
							<br><br>
							<button id="create" type="button">create a sticky note</button>
							<p id="remove_note"><strong> Remove: double click on the sticky note to remove it </strong> </p>
							<button id="next" name="bu1" type="submit">Next</button>
					</div> 
			</div>
	</div>
</form>
<script src="js/StickyNote.js"></script>
</body>
<?php

    if( $_POST ){
        echo($_POST);
        echo "here";
		foreach ($_POST as $key => $value) {
			echo "<tr>";
			echo "<td>";
			echo $key;
			echo "</td>";
			echo "<td>";
			echo $value;
			echo "</td>";
			echo "</tr>";
        exit;
        }
	}
?>
</html>


<!-- <!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title> Sense_making </title>
		<script src="js/jquery.min.js"></script>
		<script src="js/d3.v6.min.js"></script>
		<script src="js/FileSaver.js"></script>

		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
		<body>
			<form method="POST">
				<div class="content">
					<div class = "container">
						<div id="category_title" style="position:absolute;margin-left:27%;width:60%;display:flex;font-size:18px">
							<p style="margin-left:5%">stakeholders</p>
							<p style="margin-left:17%">feelings</p>
							<p style="margin-left:18%">desired outcomes</p>
						</div>
						<div id='stickynotes'></div>
            			<div id='selector' style="position: absolute;font-size:15px;width:20%">
							<p id="note_type"> <strong> On this page, we will work on creating sticky notes to identify the people, feelings and actions related to the harm that you have experienced. </strong></p>
							<p> <strong>Please answer the questions and we will create the sticky notes for you.</strong></p>
							<p id="question"> q3) Who do you think can help you address the harm? Who do you think has responsibility for helping you address the harm? <br><br>  Please put their names (e.g., offender) into the textbox below, and click "create new note"</p>
							<img style="float:right" src=images/next.png onclick="clickFunc()">
							<img style="float:left" src=images/back.png onclick="backClick()">
							<br><br>
							<p id="content"> Please input the content you want to display on the note</p>
							<input id="text_on_note" name="text_on_note" style="height: 50px ;" />
							<br><br>
							<button id="create" type="button">create a sticky note</button>
							<p id="remove_note"><strong> Remove: double click on the sticky note to remove it </strong> </p>
							<button id="next" name="bu1" type="submit">Next</button>
						</div>
					</div>
				</div>
			</form>
		</body>
</html> -->