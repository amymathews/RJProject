<?php
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
     $story = $_POST['feelingval'];
     $feeling = $_POST['feelingval'];
    $sql = "INSERT INTO heroku_3fa92357decd51e.userdet ( username,what_happened,feelings) VALUES ('Test23', '$story','$feeling')";
    if (mysqli_query($conn, $sql)) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    //"&connVar=".$conn
    mysqli_close($conn);
}
?>