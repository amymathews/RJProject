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
	<form>
	<div class="content">
		<div class="container">
			<div id="category_title" style="position:absolute;margin-left:27%;width:60%;display:flex;font-size:18px">
				<p>stakeholder (category)</p>
				<p style="margin-left:4%">stakeholder (individual)</p>
				<p style="margin-left:10%">need</p>
			</div>
			<div id='stickynotes'></div>
			<div id='selector' style="position: absolute;font-size:15px;width:20%">
				<form>
					<p id="note_type">Please choose the note type (stakeholder or need)</p>
					<label for="notetype">Choose a type:</label>
					<select name="notes" id="notetype">
						<option value="stakeholder_category">stakeholder (category)</option>
						<option value="stakeholder_individual">stakeholder (individual)</option>
						<option value="need">need</option>
					</select>
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
		

		<div class="container" id='pair'>
			<p>Write down the actions you want them to perform:</p>
			<br/>
			<label for="needtype">For need</label>
			<input id="needtype" name="needtype" type="text" list="need" onclick="this.select()" style="width:32%"/>
			<datalist id="need">
			</datalist>
			<label for="stakeholdertype">I hope</label>
			<input id="stakeholdertype" name="stakeholdertype" type="text" list="stakeholder" onclick="this.select()" style="width:21%"/>
			<datalist id="stakeholder">
			</datalist>
			<label for="actiontype">can</label>
			<input id="actiontype" name="actiontype" type="text" list="action" onclick="this.select()" style="width:32%"/>
			<datalist id="action">
			</datalist>
			<button id="combine" style="margin-top:1%;float:right" type="button">create</button>
			<br/>
			<div id="events"></div>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/>
			<p>Put the sticky notes onto the timeline:</p>
			<p>Note: drag to put them onto the timeline one by one</p>
			<div id="timelines">
			</div>
			<div style="margin-top:103px;display:flex">
				<HR width="80%" style="margin-top:27px;border:3px solid grey">
				<div class="to_right"></div>
				<button id="extend" type="button" style="margin-left:50px">extend timeline</button>
			</div>
			<button style="float:right; margin-top:10%" id="done">Complete</button>
		</div>

	</div>
	</form>
<script src="js/StickyNote.js"></script>

</body>
<?php

//echo($_POST);
//exit;

?>



