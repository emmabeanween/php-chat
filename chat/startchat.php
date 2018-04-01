<?php

session_start(); 
if (isset($_POST["submit"])){


if ($_POST["username"] = "" | strlen($_POST["username"]) < 6 ){

   echo "<div style='margin-left: 480px; margin-top: 40px; width: 400px; height: 40px; background-color: lightgreen; border: 1px solid green;'>
   Username cannot be empty or less than 6 characters.</div>";
}


else {

   $_SESSION["username"] = $_POST["username"];
   header("Location: chatroom.php");
  

}




}





?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	body {
		background-color: #b5ccf2;
	}

   @font-face {
    font-family: comic;
    src: url("comic.ttf");
}
	
	.username {

	background-color: #bcdbc1;
     width: 300px;
     height: 30px;
     font-size: 18px;
     margin-left: 480px;
     margin-top: 20px;
 


	}

    .picker {


    	font-size: 30px;
    	margin-top: 250px;
    	margin-left: 480px;
    	color: navy;
    	font-family: comic;

    }

   .enter {

   	 width: 120px;
   	 height: 30px;
   	 margin-left: 560px;
   	 font-size: 20px;
   	 border: 0.5px solid black;
   	 background-color: limegreen;


   }

   .enter:hover {

   	background-color: lightblue;
   	cursor: pointer;


   }


</style>
</head>

<body></br></br></br></br></br></br></br></br></br></br></br></br>
<label class="picker">pick a username</label></br>
<form method="POST" action="">
<input type="text" name="username" class="username"></br></br>
<input type="submit" name="submit" class="enter" value="enter chat">
</form>



</body>
</html>