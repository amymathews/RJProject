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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sense_making</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/d3.v6.min.js"></script>
        <script src="js/FileSaver.js"></script>

        <link rel=stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Welcome to the online harm restorative platform!</h1>
            <p>This system is designed to help people make sense of what has happened in online harm and find ways to address the harm.</p>
            <p>In the system, you will go through the following processes:</p>
            <ul>
                <li>Share a harm case you've experienced</li>
                <li>Draw out an action plan to address the harm case</li>
            </ul>
            <img src="images/support.png">
            <br/>
            <br/>
            <button style="float:right" onclick="window.location.href = './information.html'">next</button>
        </div>
    </body>
</html>

