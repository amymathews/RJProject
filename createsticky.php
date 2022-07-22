<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<meta http-eqiv = "X-UA-Compatible" content= "IE=edge">
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<title>Sense_makings</title>
<link rel = "stylesheet" href = "./main1.css">

<script src = "./main1.js" defer></script>
<!-- <script src = "./main2.js" defer></script>
<script src = "./main3.js" defer></script> -->
</head>
	<body>
	<div class="container">
		<p>Reflect on your feeling and experiences, we want you to think about the people who may positively or negatively affected you when gauging the harm caused.</p>
		<p> These can be the offender, online community members, moderators, etc. </p>
		<br/>
		<p>q3) Who do you think can help you address the harm? </p>
		<p>q4) Who do you think has responsibility for helping you address the harm?</p>
		<br/>
		<p> For q3 and q4, write down the name of the stakeholders on the sticky notes below. </p>
		<p> if you wish to delete the sticky note, just double click </p>

	</div>
		<div id = "app">
		
			<textarea class = "note">Some sample text</textarea>

			<button class = "add-note"  id="1" onClick="button_click(this.id)" type = "button">+</button>
		
		
			<p> q5) As the victim, how would you want to feel? Please write on the stickynotes. </p>


			<textarea class = "note2">Some sample text</textarea>
			<button class = "add-note2"  id="2" onClick="button_click(this.id)" type = "button">+</button>
			

			<p> q6) As the victim, what are some desired outcomes for adressing the harm? </p>


			<textarea class = "note3">Some sample text</textarea>

			<button class = "add-note3" id="3" onClick="button_click(this.id)" type = "button">+</button>

		</div>

	<button style="float:right; margin-top:15%" onclick="window.location.href = './dragndrop.php'">next</button>

	</body>

</html>