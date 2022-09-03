<?php
  if($_POST){
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$cleardb_server = $cleardb_url["host"];
	$cleardb_username = $cleardb_url["user"];
	$cleardb_password = $cleardb_url["pass"];
	$cleardb_db = substr($cleardb_url["path"],1);
	$active_group = 'default';
	$query_builder = TRUE;
	// Connect to DB
	$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$pastime = intval($_GET['st']);
	$wacc = intval($_GET['WACC']);
	$Elptime = time() - $pastime;
	$stickyval = $_POST["stickypos"];
	$sql = "UPDATE heroku_3fa92357decd51e.userdet  SET timeElapsed=$Elptime,orderEntered = '$stickyval' WHERE userid= $wacc";
	if (mysqli_query($conn, $sql)) {
		// echo "New record created successfully";
	 } else {
		 //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }

	 header("Location: ./complete.php?WACC=".$wacc);
	 exit();
  }
?> 
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> Sense_making </title>
	<script src="js/jquery.min.js"></script>
	<script src="js/d3.v6.min.js"></script>
	<script src="js/FileSaver.js"></script>
	<script src = "time.js"></script>
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="stepper-wrapper">
		<div id="one" class="stepper-item completed">
			<div class="step-counter">1</div>
		</div>
		<div id="two" class="stepper-item completed">
			<div class="step-counter">2</div>
		</div>
		<div id="three" class="stepper-item active">
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
	<div class="container">
        <p>Imagine that you have been through the following situation and answer the following questions accordingly.</p> 
        <p> <em> You and your friend are messaging privately about an issue that is sensitive to you. Your friend shares the conversation publicly on a social media account.</em></p>

        <div style="margin-top:2%">
            <p>Please describe some impact that this event may cause to you. For example,</p>
            <p>(1) Feelings (fear, anger, shame, embarrassment, etc)</p>
            <p>(2) Social impact (people’s reaction, etc)</p>
            <textarea id="feeling"name="feeling"rows="8"cols="31"></textarea>
            <!-- <p>q1) Using several sentences, can you tell us what has happened in the harm? </p> -->
            <textarea id="story" name="story" rows="5" cols="60"></textarea> 
        </div>
       <button style="float:right; margin-top:15%; background-color:lightblue; " onclick="initial()">Next question</button>
    </div>
		<div class="container">
			<div style="position:absolute;margin-left:27%;width:60%">
				<p><span class="dot"> &nbsp &#63;</span> <span style="color: blue">Double click to delete the note. </span></p>
			</div>
			<div id="category_title" style="position:absolute;margin-top:2%;margin-left:27%;width:60%;display:flex;font-size:18px">
				<p style="margin-left:4%">1) stakeholders</p>
				<p style="margin-left:12%">2)needs</p>
				<p style="margin-left:10%">3) desired outcomes</p>
			</div>
			<div id='stickynotes'></div>
			<div id='selector' style="position: absolute;font-size:15px;width:20%">
				<form>
					<p id="note_type"> In this step, we will brainstorm the people, needs and actions that are related to the harm you have experienced.</p>
					<p> We will guide you through the process step by step by creating sticky notes. In the next step, you will link the stakeholders, needs and actions together.</p>
					<!-- <p> <strong>Please answer the questions and we will create the sticky notes for you.</strong></p> -->
					<strong> <p id="question"> 1) Stakeholder: Who do you think can help you mitigate the impact? 
					Who do you think has responsibility responsbility to mitigate the impact?
					<br>
					Write down one name at a time (e.g. offender) and click “create a sticky note.” 
					</p>
					</strong>
					<br>
					<!-- <p id="content"> <strong>Add one note at a time and then click "create a sticky note" </strong> </p> -->
					<textarea id="text_on_note" name = "stakeholder" style="height: 70px; width: auto;"></textarea>
					<br><br>
					<br><br>
					<button id="create" type="button" onclick="createwacc()" >create a sticky note</button>
					<br><br>
					<button id = "nextbtn" style="float:right" type = "button" onclick="clickFunc()">Next</button>
					<button id = "backbtn" style="float:left; visibility: hidden;" type = "button" onclick="backClick()">Back</button>
					<br><br>
					<button id = "donebtn" style="float:right; visibility: hidden; background-color:lightblue;" type = "button" onclick="doneFunc()">Next question</button>
					<br>
				</form>
			</div>
		</div>
		<div class="container" id='pair' style="visibility: hidden">
			<p>Now, we’d like you to create an action plan on how to address the harm.</p>
			<p>Step 1.<strong>Create sticky notes to assign to-dos for each stakeholder to help you address the harm.</strong> The stakeholders and to-dos are a combination of your input and our suggestions. </p>
			<p> Step 2.<strong> Put the to-dos in time order.</strong> Scroll down and there is a the long arrow, which represents a timeline starting from the time that harm has happened. Please drag sticky notes onto the timeline one by one to illsturate the time order you’d like to achieve those to-dos.</p>
            <br/>
			<label for="stakeholdertype"> <strong> Stakeholder: </strong> </label>
			<input id="stakeholdertype" name="stakeholdertype" type="text" list="stakeholder" onclick="this.select()" style="width:21%"/>
			<datalist id="stakeholder">
			</datalist>
			<label for="outcometype"> <strong> To do: </strong></label>
			<input id="outcometype" name="outcometype" type="text" list="outcome" onclick="this.select()" style="width:32%"/>
			<datalist id="outcome">
			</datalist>
			<br/>
			<p>
				<span class="dot"> &nbsp &#63;</span>
				<span style="color:blue"> To re-select stakeholders, delete remaining text first.  </span>
			</p>
			<!-- <button id="next" style="margin-top:1%; margin-left:2%;float:right; background-color:lightblue;" type="button">go to the next question</button> -->
			<button id="combine" style="margin-top:1%;float:right" type="button">create</button>
			<br/>
			<div id="events"></div>
			<!-- <div id="timelineSection"> -->
			<br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <p>Below, the long arrow represents a timeline from right to left starting from the time that harm has happened.</p>
                <p>Put the sticky notes onto the timeline one by one to illustrate the time order you hope to achieve the needs.</p>
                <p>
                    <span class="dot"> &nbsp &#63;</span>
                    Tips: Tips: drag to put them onto the timeline one by one.
                </p>
                <div id="timelines"></div>
                <div style="margin-top:103px;display:flex">
                    <HR width="80%" style="margin-top:27px;border:3px solid grey">
                    <div class="to_right"></div>
                    <button id="extend" type="button" style="margin-left:50px">extend timeline</button>
                </div>
				<form method = "POST">
				    <input type="hidden" name="stickypos" id ="stickypos" value="" />
					<button id = "complete" name="complete" type = "submit" style="margin-right:1px; margin-bottom: 25px; float: right; margin-top: 20px; background-color:lightblue;" >Go to follow-up Survey</button>
				</form> 
			<!-- </div> -->
			<br><br><br> 
			<div id="footer"></div>
		</div>
	</div>
	<script src="js/StickyNote.js"></script>
	</body>
	</html>