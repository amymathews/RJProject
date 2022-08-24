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
			<div style="position:absolute;margin-left:27%;width:60%">
				<p><span class="dot"> &nbsp &#63;</span>Tips: You can directly edit text on sticky notes; Double click to delete the note.</p>
			</div>
			<div id="category_title" style="position:absolute;margin-top:2%;margin-left:27%;width:60%;display:flex;font-size:18px">
				<p style="margin-left:4%">1) stakeholders</p>
				<p style="margin-left:12%">2) feelings</p>
				<p style="margin-left:10%">3) desired outcomes</p>
			</div>
			<div id='stickynotes'></div>
			<div id='selector' style="position: absolute;font-size:15px;width:20%">
	
				<form>
					<p id="note_type"> <strong> On this page, we will work on creating sticky notes to identify the people, feelings and actions related to the harm that you have experienced. </strong></p>
					<p> <strong>Please answer the questions and we will create the sticky notes for you.</strong></p>
					<p id="question"> 1) Stakeholders: Who do you think can help you address the harm? Who do you think has responsibility for helping you address the harm? <br><br>  Please put their names (e.g., offender) into the textbox below, and click "create new note"</p>
				
					<br>
					<p id="content"> <strong>Add one note at a time and then click "create a sticky note" </strong> </p>
					<textarea id="text_on_note" name = "stakeholder" style="height: 70px; width: auto;"></textarea>
					<br><br>
					<br><br>
					<button id="create" type="button" onclick="createwacc()" >create a sticky note</button>
					<br><br>
					<button style="float:right" type = "button" onclick="clickFunc()">Next</button>
					<button style="float:left" type = "button" onclick="backClick()">Back</button>
					<br><br>
					<button style="float:right" type = "button" onclick="doneFunc()">Done</button>


				</form>
			</div>
		</div>

		<div class="container" id='pair' style="visibility: hidden">
			<p>Now, let’s assign tasks for each stakeholder. The options are a combination of your input in the previous task and our suggestions. Create one at a time until you get all the to-dos you want.</p>
            <br/>
			<label for="stakeholdertype">Stakeholder: </label>
			<input id="stakeholdertype" name="stakeholdertype" type="text" list="stakeholder" onclick="this.select()" style="width:21%"/>
			<datalist id="stakeholder">
			</datalist>
			<label for="outcometype">To do:</label>
			<input id="outcometype" name="outcometype" type="text" list="outcome" onclick="this.select()" style="width:32%"/>
			<datalist id="outcome">
			</datalist>
			<br/>
			<p>
				<span class="dot"> &nbsp &#63;</span>
				Tips: To re-select stakeholders, delete remaining text first. You can directly modify text in all text boxes / sticky notes too.
			</p>

			<button id="next" style="margin-top:1%;margin-left:2%;float:right" type="button">next</button>
			<button id="combine" style="margin-top:1%;float:right" type="button">create</button>
			<br/>
			<div id="events"></div>
			<div id="timelineSection">
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
				<form action = "<?php $_PHP_SELF ?>" method = "POST">
                		<button name="complete" style="float:right; margin-top:10%" type="submit" >Complete</button>
				</form>
			</div>
		</div>
	</div>

	<script src="js/StickyNote.js"></script>
	</body>
	</html>
<?php
  if( $_POST ) {
	//echo "I am here";

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
	$sql = "UPDATE heroku_3fa92357decd51e.userdet  SET timeElapsed=$Elptime WHERE userid= $wacc";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	 } else {
		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 echo $sql;
	 exit;

  }
?>