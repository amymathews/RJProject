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
    <div class="container">
        <p>Sharing what has happened and your feelings is an important part of making sense of the harm and healing.</p>
        <p>Please share what has happened in either way:</p>
        <div style="display: flex">
            <div style="margin-left: 5%; margin-right: 5%">
                <p>Recording (talk about what has happened)</p>
                <div id="record">
                    <div id="controls">
                        <button id="recordButton">Record</button>
                        <button id="pauseButton" disabled>Pause</button>
                        <button id="stopButton" disabled>Stop</button>
                    </div>
                    <p><strong>Recordings:</strong></p>
                    <ol id="recordingsList"></ol>
                    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
                    <script src="js/recorder.js"></script>
                    <script src="js/app.js"></script>
                </div>
            </div>
            <div style="position: absolute;margin-left:55%">
                <p>Typing (write down what has happened)</p>
                <textarea id="story" rows="8" cols="31"></textarea>
            </div>
        </div>
        <div style="margin-top:8%">
            <p>How do you feel? (e.g. sad😭 angry😠 awkward😓)</p>
            <textarea id="feeling" rows="5" cols="60"></textarea>
        </div>
       <!-- <button style="float:right; margin-top:15%" onclick="download()" type="button">next</button> -->
        <button style="float:right; margin-top:15%" onclick="" type="button">next</button>
    </div>
</body>
<script>
  var fs = require('fs')
  
  // Data which will write in a file.
  var dataadded = "Learning how to write in a file."
    
  // Write data in 'Output.txt' .
  fs.writeFile('Output.txt', dataadded)
    
    function download(){
        var content = "What happened:\n";
        content += document.getElementById("story").value;
        content += "\nFeelings:\n";
        content += document.getElementById("feeling").value;
        var blob = new Blob([content], { type: "text/plain;charset=utf-8" });
        saveAs(blob, "user.txt");
        window.location.href = './stickynote.html'
    }
</script>
<?php

   // echo "Hi";
    //Get Heroku ClearDB connection information
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
    
    echo "Connected successfully";

    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $sql = "INSERT INTO heroku_3fa92357decd51e.userdet ( username, what_happened,feelings) VALUES ('Test23', 'bullied', 'happy')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


?>
</html>
