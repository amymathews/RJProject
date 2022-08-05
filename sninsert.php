<?php
//echo "Hi";

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
 
      //   print_r($_POST);
       
      //   $Obj = json_decode($_POST[0]);
      //   print_r($Obj);
      $userId = $_POST['userid'];
      $stakekeholder = $_POST['stakeholder'];
      $feeling = $_POST['feeling'];
      $action = $_POST['action'];
        
   
   //  $sql = "INSERT INTO heroku_3fa92357decd51e.logdet ( userid,individual,need,actions,) VALUES (, '$story','$feeling')";
   //  $sql = "INSERT INTO logdeets (userId, stakeholder, feeling, action,)VALUES ('John', 'Doe', 'john@example.com')";
   
    $sql = "INSERT INTO heroku_3fa92357decd51e.logdet ( userid,individual,need,actions) VALUES ('$userId', '$stakekeholder','$feeling','$action' )";
    //echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
    

     
    // $highest_id = mysqli_fetch_row(mysqli_query($conn,'SELECT MAX(userId) FROM  heroku_3fa92357decd51e.userdet LIMIT 1'), 0);

       mysqli_close($conn);

    exit;
}

?>