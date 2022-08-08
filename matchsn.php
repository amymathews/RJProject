<?php
echo "Hi";
   //  Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
   // $conn = $_POST['connvar'];

   $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

        if (!$conn) {
         echo "connection failed";
        die("Connection failed: " . mysqli_connect_error());
       
    }
   


  if( $_POST ) {
 
//       //   print_r($_POST);
      // $userid = $_POST['userid'];
      // $notes = implode($_POST['note']);
      $notes = $_POST['note'];
     
    $sql = "INSERT INTO heroku_3fa92357decd51e.match ( notes_created) VALUES ( '$notes')";
    


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
       // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       echo "here--eror";
    }
    
      mysqli_close($conn);
  }
?>