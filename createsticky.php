<!DOCTYPE html>
<html>
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
		<div class="content">
				<div class="container">
				<div id='stickynotes'></div>
				<p>Reflect on your feeling and experiences, we want you to think about the people who may positively or negatively affect you when gauging the harm caused.</p>
				<p>   These can be the offender, online community members, moderators, etc. </p>
				<br/>
				<p>q3) Who do you think can help you address the harm?   </p>
				<p>q4) Who do you think has responsibility for helping you address the harm?</p>
				<br/>
				<p> For q3 and q4, write down the name of the stakeholders on the sticky notes below. </p>
				<div id='stickynotes'></div>
					<div id='selector' style="position: absolute;font-size:15px;width:20%">
						<form>
							<p id="note_type">Please choose the note type (stakeholder or need)</p>
							<br><br>
							<p id="content">Please input the content you want to display on the note</p>
							<input id="text_on_note">
							<br><br>
							<button id="create" type="button">create new note</button>
							<p id="remove_note">Remove: double click on the sticky note to remove it</p>
						</form>
				</div>
				<button style="float:right; margin-top:50%" id="next" type="button">Next</button>
			</div>
		</div>
	<button style="float:right; margin-top:15%"  onclick="window.location.href = './stickynote.php'">next</button>

    </body>

</html>