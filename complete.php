<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        </style>

    <title>You're Done! Thank you!!</title>
</head>
<body style="background-color:lavenderblush;">
    
        <img src="images/cats-cool-cat.gif" alt="Funny image" style="width:50%;"> 
        <p><center><em>You are officialy a cool cat.</em></center></p>
        <p> <center> You will now compelete a survey. Please note down this id and enter when prompted: <span id="wacc"> </center></p>
        <script>
          var url_string = window.location.href
          var url = new URL(url_string);
          let userid = url.searchParams.get("WACC");
          document.getElementById("wacc").innerHTML = userid;
        </script>

  <button style = "float:right "onclick="window.location.href='https://berkeley.qualtrics.com/jfe/form/SV_9AHgW4zjmeAV4ea';"> Go to survey! </button>



    
    

</body>
</html>