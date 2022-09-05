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
	<div class="stepper-wrapper">
		<div id="one" class="stepper-item completed">
			<div class="step-counter">1</div>
		</div>
		<div id="two" class="stepper-item active">
			<div class="step-counter">2</div>
		</div>
		<div id="three" class="stepper-item">
			<div class="step-counter">3</div>
		</div>
		<div id="four" class="stepper-item">
			<div class="step-counter">4</div>
		</div>
		<div id="five" class="stepper-item">
			<div class="step-counter">5</div>
		</div>
	</div>
	<div class="content">

		<div class="container" style = "margin-top:-100px">
			<p>Imagine that you have been through the following situation and answer the following questions accordingly.</p>
			<p> <em> You and your friend are messaging privately about a sensitive political issue. Your friend posts your conversation publicly on a social media platform without your consent. You received messages from strangers that are vulgar. Eventually, someone posts your phone number and home address online, and you start to receive threatening messages</em></p>

			<div style="margin-top:2%">
				<p>Please describe your feelings after the event (fear, anger, shame, embarrassment, etc).</p>
				<textarea id="feeling"name="feeling"rows="10"cols="50"></textarea>
			</div>
			<button style="float:right; margin-top:15%; background-color:lightblue; " id="go_to_createnote">Next question</button>
		</div>
		<div class="container" id="createnotes" style="visibility:hidden">
			<div style="position:absolute;margin-left:27%;width:60%">
				<p><span class="dot"> &nbsp &#63;</span> <span style="color: blue">Double click to delete the note. </span></p>
			</div>
			<div id="category_title" style="position:absolute;margin-top:2%;margin-left:27%;width:60%;display:flex;font-size:18px">
				<p style="margin-left:4%">1) impacts</p>
				<p style="margin-left:13%">2) needs</p>
				<p style="margin-left:16%">3) stakeholder</p>
			</div>
			<div id='stickynotes'></div>
			<div id='selector' style="position:absolute;font-size:15px;width:20%;">
				<p id="note_type"> In this step, we will reflect on the impact, needs and people relevant to the harm you've experienced.</p>
				<p>You will first create sticky notes, and then move them around to explore their relationships.</p>
				<strong> <p id="question"> (1) What are some potential impact of the harm? Enter one type of impact at a time. Some potential impact areas include: emotional, psychological, physical, financial, etc.
				<br>
				</p>
				</strong>
				<br>
				<textarea id="text_on_note" name = "action" style="height: 70px; width: auto;"></textarea>
				<br><br>
				<br><br>
				<button id="create" type="button">create a sticky note</button>
				<br><br>
				<button id = "nextbtn" style="float:right" type = "button" onclick="clickFunc()">Next</button>
				<button id = "backbtn" style="float:left; visibility: hidden;" type = "button" onclick="backClick()">Back</button>
				<br><br>
				<button id = "donebtn" style="float:right; visibility: hidden; background-color:lightblue;" type = "button" onclick="doneFunc()">Next question</button>
				<br>
			</div>
		</div>
		<div class="container" id='pair' style="visibility: hidden">
			<p>Now, we would like you to create an action plan.</p>
			<p>Please create sticky notes that represent what you want each stakeholder to do, and move them onto the timeline to express the time order you'd like to achieve those moves. </p>
			<br/>
			<p>
				<span class="dot"> &nbsp &#63;</span>
				<span style="color:blue"> To re-select stakeholders, delete remaining text first.  </span>
			</p>

			<br/>
			<p> (1) Please enter to-dos for each stakeholder. You can enter new stakeholders here too. </p>
			<label for="stakeholdertype"> <strong> Stakeholder: </strong> </label>
			<input id="stakeholdertype" name="stakeholdertype" type="text" list="stakeholder" onclick="this.select()" style="width:21%"/>
			<datalist id="stakeholder">
			</datalist>
			<label for="outcometype"> <strong> To do: </strong></label>
			<input id="outcometype" name="outcometype" type="text" list="outcome" onclick="this.select()" style="width:32%"/>
			<datalist id="outcome">
			</datalist>
			<button id="combine" style="margin-top:1%;float:right" type="button">create</button>
			<br/>
			<p> (2) We have provided some suggestions for you from other people who have received similar types of harm.</p>
			<label for="prestakeholdertype"> <strong> Stakeholder: </strong> </label>
			<input id="prestakeholdertype" name="prestakeholdertype" type="text" list="prestakeholder" onclick="this.select()" style="width:21%"/>
			<datalist id="prestakeholder">
			</datalist>
			<label for="preoutcometype"> <strong> To do: </strong></label>
			<input id="preoutcometype" name="preoutcometype" type="text" list="preoutcome" onclick="this.select()" style="width:32%"/>
			<datalist id="preoutcome">
			</datalist>
			<button id="combine2" style="margin-top:1%;float:right" type="button">create</button>
			<br/>
			<br/>
			<!-- <button id="next" style="margin-top:2%;float:right" type="button">Next question</button> -->
			<br/>
			<div id="events"></div>
			<!-- <br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<p>Below, the long arrow represents a timeline from right to left starting from the time that harm has happened.</p>
			<p>Put the sticky notes onto the timeline one by one to illustrate the time order you hope to achieve the needs.</p>
			<p>
				<span class="dot"> &nbsp &#63;</span>
				Tips: Tips: drag to put them onto the timeline one by one.
			</p> -->
			<div id="timelines"></div>
			<div style="margin-top:103px;display:flex">
				<HR width="80%" style="margin-top:27px;border:3px solid grey">
				<div class="to_right"></div>
				<button id="extend" type="button" style="margin-left:50px">extend timeline</button>
			</div>
			<input type="hidden" name="stickypos" id ="stickypos" value="" />
			<button id = "done" name="complete" type = "submit" style="margin-right:1px; margin-bottom: 25px; float: right; margin-top: 20px; background-color:lightblue;" >Download Test data</button>
			<br><br><br>
		</div>
	</div>

<script src="js/StickyNote.js"></script>
</body>