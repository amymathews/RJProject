<html>
    <head>
        <meta charset="UTF-8">
        <title>Sense_making</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/d3.v6.min.js"></script>
        <script src="js/FileSaver.js"></script>
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="stepper-wrapper">
            <div class="stepper-item active">
                <div class="step-counter">1</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">2</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">3</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">4</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">5</div>
            </div>
        </div>
        <div class="container">
            
            <p>Welcome! We are a group of Berkeley researchers who are trying to understand how to help people who have experienced online harm (e.g., harassment, bullying, etc) to make sense of the situation.</p>
            <p>In the following process, we will provide you with a scenario of harm and ask you to complete some tasks according to the scenario. The whole process should take place within 45 minutes. We will ask some follow-up questions afterwards.</p>
            <!-- <ul>
                <li>Share a harm case you've experienced</li>
                <li>Draw out an action plan to address the harm </li>
            </ul> -->
            <img style="float:left" src="images/support.png">
            <br/>
            <br/>
            <form method = "POST">
                <button style="float:right; background-color:lightblue;">Let's start! </button>
            </form>
        </div>            
    </body>
</html>
<?php

   echo "Hi";
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
    if( $_POST ) {
    echo"here";
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
    $st = time();
    // header("Location: /stickynote.php?WACC=".$highest_id."&st=".$st);
    exit;
}
?>