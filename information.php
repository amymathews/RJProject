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
<form action = "<?php $_PHP_SELF ?>" method = "POST">
    <div class="container">
        <p>Sharing what has happened and your feelings is an important part of making sense of the harm and healing.</p>
        
        <div style="display: flex">
            <!-- <div style="margin-left: 5%; margin-right: 5%">
                <p>Recording (talk about what has happened)</p>
                <div id="record">
                    <div id="controls">
                        <button id="recordButton">Record</button>
                        <button id="pauseButton" disabled>Pause</button>
                        <button id="stopButton" disabled>Stop</button>
                    </div>
                    <p><strong>Recordings:</strong></p>
                    <ol id="recordingsList"></ol>
                    <script src="js/recorder.js"></script>
                    <script src="js/app.js"></script>
                </div>
            </div> -->
            <div style="position: absolute;margin-left:55%;">
             
                <p>q1) Can you tell us what happened in the harm?</p>
                <textarea id="story" name="story" rows="8" cols="31"></textarea>
            </div>
        </div>
        <div style="margin-top:8%">
            <p>q2) How do you feel after the harm? (e.g. sad😭 angry😠 awkward😓)</p>
            <textarea id="feeling" name="feeling" rows="5" cols="60"></textarea>
        </div>
       <button style="float:right; margin-top:15%" onclick="window.location.href = './stickynote.php'">next</button>
    </div>

<!-- <script>
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
</script> -->

</form>
</body>
</html>
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
    
    //echo "Connected successfully";

    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if( $_POST["story"] || $_POST["feeling"] ) {
     if( $_POST ) {
       
    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";
     $story = $_POST['story'];
     $feeling = $_POST['feeling'];
    $sql = "INSERT INTO heroku_3fa92357decd51e.userdet ( username,what_happened,feelings) VALUES ('Test23', '$story','$feeling')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
    $sql = "SELECT MAX(userId) as maxId FROM  heroku_3fa92357decd51e.userdet LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       $highest_id = $row["maxId"];
    }
    } else {
    echo "0 results";
    }

     
    // $highest_id = mysqli_fetch_row(mysqli_query($conn,'SELECT MAX(userId) FROM  heroku_3fa92357decd51e.userdet LIMIT 1'), 0);

       mysqli_close($conn);
      
    // header("Location: /stickynote.php?WACC=".$highest_id);
    header("Location: /stickynote.php?WACC=".$highest_id);

    exit;
}

?>
