
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
		<div class="content">
			<div class="container">
				<div id="category_title" style="position:absolute;margin-left:27%;width:60%;display:flex;font-size:18px">
					<p style="margin-left:5%">stakeholders</p>
					<p style="margin-left:17%">feelings</p>
					<p style="margin-left:18%">actions</p>
				</div>
				<div id='stickynotes'></div>
				<div id='selector' style="position: absolute;font-size:15px;width:20%">
					<form  method="POST" >
						<p> <em> Reflect on your feeling and experiences, we want you to think about the people who may positively or negatively affect you when gauging the harm caused. These can be the offender, online community members, moderators, etc. </em></p>
						<p id="note_type"> <strong> Please answer each of the questions below by toggling the drop down box: </strong></p>
						<label for="notetype">Choose a question</label>
						<select name="notes" id="notetype">
							<option value="stakeholder">q3</option>
							<option value="feeling">q4</option>
							<option value="action">q5</option>
						</select>
						<br><br>
						<p id="question">  q3) Who do you think can help you address the harm? Who do you think has responsibility for helping you address the harm?  </p>
						<p id="content"> Please input the content you want to display on the note</p>
						<input id="text_on_note">
						<br><br>
						<button id="create" type="button">create new note</button>
						<p id="remove_note"><strong> Remove: double click on the sticky note to remove it </strong> </p>
						<button style="float:right; margin-top:15%" onclick="window.location.href = './stickynote.php'">next</button>
					</form>
				</div>
				
		

			<div class="container" id='pair'>
				<form method = "POST">
					<p>Pair your emotional needs and desired outcomes to the stakeholders:</p>
					<br/>
					<label for="stakeholdertype">I hope</label>
					<input id="stakeholdertype" name="stakeholdertype" type="text" list="stakeholder" onclick="this.select()" style="width:21%"/>
					<datalist id="stakeholder">
					</datalist>
					<label for="outcometype">can achieve</label>
					<input id="outcometype" name="outcometype" type="text" list="outcome" onclick="this.select()" style="width:32%"/>
					<datalist id="outcome">
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
					<button style="float:right; margin-top:10%" >Complete</button>
				</form>
			</div>
		</div>
	</body>
</html>
<?php
	if( $_POST )  {
		echo($_POST);
		echo "here";
		
		exit;
		}
?>